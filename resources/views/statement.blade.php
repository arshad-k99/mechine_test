@extends('layouts.layout')

@section('title', 'Home')

@section('content')
 <div class="row row-cards">
      <div class="col-md-8 mx-auto mt-4">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Welcome card</h3>
          </div>
         
          	
                  <div class="table-responsive">
                    <table
		class="table table-vcenter card-table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Title</th>
                          <th>Email</th>
                          <th>Role</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        
                        <tr>
                          <td >Mallory Hulme</td>
                          <td class="text-muted" >
                            Geologist IV, Support
                          </td>
                          <td class="text-muted" ><a href="#" class="text-reset">mhulme2@domainmarket.com</a></td>
                          <td class="text-muted" >
                            User
                          </td>
                         
                        </tr>
                        <tr>
                          <td >Dunn Slane</td>
                          <td class="text-muted" >
                            Research Nurse, Sales
                          </td>
                          <td class="text-muted" ><a href="#" class="text-reset">dslane3@epa.gov</a></td>
                          <td class="text-muted" >
                            Owner
                          </td>
                          
                        </tr>
                        
                      </tbody>
                    </table>  
          </div>
          <br>
          <nav aria-label="...">
  <ul class="pagination ">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                          <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M15 6l-6 6l6 6"></path></svg>
                        </a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item active"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">4</a></li>
                      <li class="page-item"><a class="page-link" href="#">5</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">
                          <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M9 6l6 6l-6 6"></path></svg>
                        </a>
                      </li>
                    </ul>
</nav>
          </div>
        </div>

      </div>
      
      
     
          <div class="card-body p-0">
            
          </div>
        </div>
      </div>
    </div>
@endsection