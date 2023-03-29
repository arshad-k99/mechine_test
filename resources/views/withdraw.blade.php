@extends('layouts.layout')

@section('title', 'Withdraw')

@section('content')
 <div class="row row-cards">
      <div class="col-md-6 mx-auto mt-4">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Withdraw Money</h3>
          </div>
           <form method="POST" action="{{ route('withdraw-store') }}">
            @csrf
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Amount</label>
                    <input type="text" name="amount" class="form-control" name="example-text-input" >
                    @if($errors->has('amount'))
                        <div class="text-danger" class="error">{{ $errors->first('amount') }}</div>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary btn-square w-100">
                  Withdraw
                </button>  
            </div>
             </form>
          </div>
        </div>
      </div>
          <div class="card-body p-0">
            
          </div>
        </div>
      </div>
    </div>
@endsection