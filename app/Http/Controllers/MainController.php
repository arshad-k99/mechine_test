<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Transaction;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Validation\Rules;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;


class MainController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function dashboard()
    {

        $user = Auth::user()->id;

        $user_mail = Auth::user()->email;

        $user_name = Auth::user()->name;

        $account_balance = Transaction::selectRaw("SUM(CASE WHEN fk_to_user_id = '{$user}' THEN amount ELSE 0 END) - SUM(CASE WHEN fk_from_user_id = '{$user}' THEN amount ELSE 0 END) AS account_balance ")->pluck('account_balance')->first();

        if($account_balance == null){

            $account_balance = 0;

        }

        return view('dashboard',compact('user','user_mail','user_name','account_balance'));
    }

    public function deposit(){


        return view('deposit');


    }

    public function store(Request $request){

        $user = Auth::user()->id;

        $todaydateTime= Carbon::now();

        $validator = Validator::make($request->all(), [
            'amount' => ['required', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/'],
            
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        if($request->amount > 0){

            $store = Transaction::insertGetId([
                'fk_from_user_id'=> null,
                'fk_to_user_id' => $user,
                'amount' => $request->amount,
                'created_by' => $user,
                'created_at' => $todaydateTime,
                'updated_at' => $todaydateTime,

            ]);


        }

        return redirect()->route('statement');

    }
    public function withdraw(){

        return view('withdraw');

    }

    public function withdraw_store(Request $request){

        $user = Auth::user()->id;

        $todaydateTime= Carbon::now();

        $validator = Validator::make($request->all(), [
            'amount' => ['required', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/'],
            
        ]);

        $validator->after(function ($validator) use ($request,$user) {
        
            $account_balance = Transaction::selectRaw("SUM(CASE WHEN fk_to_user_id = '{$user}' THEN amount ELSE 0 END) - SUM(CASE WHEN fk_from_user_id = '{$user}' THEN amount ELSE 0 END) AS account_balance ")->pluck('account_balance')->first();


            if ($request->amount > $account_balance) {
                
                $validator->errors()->add('amount', 'Your withdraw amount is greater than your balance.');
            }
        });

   
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        if($request->amount > 0){

            $store = Transaction::insertGetId([
                'fk_from_user_id'=> $user,
                'fk_to_user_id' => null,
                'amount' => $request->amount,
                'created_by' => $user,
                'created_at' => $todaydateTime,
                'updated_at' => $todaydateTime,

            ]);


        }

        return redirect()->route('statement');


    }
    public function transfer(){


        return view('transfer');


    }

    public function transfer_store(Request $request){

        $user = Auth::user()->id;

        $todaydateTime= Carbon::now();

        $to_user_id = User::where('email',$request->email)->pluck('id')->first();

        $validator = Validator::make($request->all(), [
            'amount' => ['required', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/'],
            'email' => 'required|email|max:255',
            
        ]);

        $validator->after(function ($validator) use ($request,$to_user_id,$user) {

            $account_balance = Transaction::selectRaw("SUM(CASE WHEN fk_to_user_id = '{$user}' THEN amount ELSE 0 END) - SUM(CASE WHEN fk_from_user_id = '{$user}' THEN amount ELSE 0 END) AS account_balance ")->pluck('account_balance')->first();


            if ($request->amount > $account_balance) {
                
                $validator->errors()->add('amount', 'Your transfer amount is greater than your balance.');
            }
        
            if($to_user_id == null){

                $validator->errors()->add('email', 'This email address does not exist.');

            }
                   
            
        });
   
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        if($to_user_id){

            if($request->amount > 0){

                $store = Transaction::insertGetId([
                    'fk_from_user_id'=> $user,
                    'fk_to_user_id' => $to_user_id,
                    'amount' => $request->amount,
                    'created_by' => $user,
                    'created_at' => $todaydateTime,
                    'updated_at' => $todaydateTime,

                ]);


            }


        }

        return redirect()->route('statement');

    }

    public function statement(){

        $user = Auth::user()->id;

        $account_balance = 0;

        $transaction_detail = Transaction::select('transaction.id','from_user.email as from_email','to_user.email as to_mail','transaction.amount','fk_from_user_id','fk_to_user_id','transaction.created_at')->leftjoin('users as from_user','from_user.id','transaction.fk_from_user_id')
                                            ->leftjoin('users as to_user','to_user.id','transaction.fk_to_user_id')
                                            ->where(function ($query) use ($user) {
                                                $query->where('fk_from_user_id', '=', $user)
                                                      ->orWhere('fk_to_user_id', '=', $user);
                                            })->get();





        foreach($transaction_detail as $value){

            if($value->fk_from_user_id == null && $value->fk_to_user_id == $user){

                $value->type = 'Credit';

                $value->details = 'Deposit';


            }elseif($value->fk_to_user_id == null && $value->fk_from_user_id == $user){

                $value->type = 'Debit';

                $value->details = 'Withdraw';


            }elseif($value->fk_to_user_id == $user && $value->fk_from_user_id != null){

                $value->type = 'Transfer';

                $value->details = 'Transfer From '.$value->from_email;

            }elseif($value->fk_to_user_id != null && $value->fk_from_user_id == $user){

                $value->type = 'Transfer';

                $value->details = 'Transfer to '.$value->to_mail;

            }

            if($value->fk_from_user_id == $user && $value->fk_to_user_id != $user){
                                
              $account_balance -= $value->amount;

            }elseif($value->fk_from_user_id == $user && $value->fk_to_user_id == $user){
                
                

            }else{

                  $account_balance += $value->amount;

            }

            $value->account_balance = $account_balance;

             $created_at = Carbon::parse($value->created_at)->format('d-m-Y h:i A');

             $value->created = $created_at;
;


        }

        $collection = collect($transaction_detail);

        $perPage = 5; 

        $page = request()->get('page', 1); 

        $transaction_details = new LengthAwarePaginator(

            $collection->forPage($page, $perPage), 
            $collection->count(), 
            $perPage, 
            $page, 
            ['path' => url()->current()] 

        );
        
        return view('statement',compact('transaction_details','user'));

    }
    
}
