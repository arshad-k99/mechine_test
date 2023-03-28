@extends('layouts.layout')

@section('title', 'Home')

@section('content')
 <div class="row row-cards">
      <div class="col-md-6 mx-auto mt-4">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Welcome card</h3>
          </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Text</label>
                    <input type="text" class="form-control" name="example-text-input" placeholder="Input placeholder">
                </div>

                        <a href="#" class="btn btn-primary btn-square w-100">
                          Primary
                        </a>
                     
            </div>
             
          </div>
        </div>
      </div>
      
      
     
          <div class="card-body p-0">
            
          </div>
        </div>
      </div>
    </div>
@endsection