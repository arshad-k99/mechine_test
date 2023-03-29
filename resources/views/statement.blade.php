@extends('layouts.layout')

@section('title', 'Statement')

@section('content')
 <div class="row row-cards">
      <div class="col-md-8 mx-auto mt-4">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Statement of account</h3>
          </div>
                  <div class="table-responsive">
                    <table
		class="table table-vcenter card-table">
                      <thead>
                        <tr>
                          <th>Date Time</th>
                          <th>Amount</th>
                          <th>Type</th>
                          <th>Detail</th>
                          <th>Balance</th>
                        </tr>
                      </thead>
                      @php $account_balance = 0; @endphp
                      @foreach($transaction_details as $value)
                      <tbody>
                        
                        <tr>
                          <td>{{ $value['created'] }}</td>
                          <td  >
                            {{ $value['amount'] }}
                          </td>
                          <td  >{{ $value['type'] }}</td>
                          <td >
                            {{ $value['details'] }}
                          </td>
                          
                          <td >
                            {{ $value['account_balance'] }}
                          </td>
                        </tr>
                        
                        
                      </tbody>
                      @endforeach
                    </table> 
          </div>
          <br>       
          {{ $transaction_details->links('pagination::bootstrap-4')}}          
          </div>
        </div>
      </div>    
@endsection