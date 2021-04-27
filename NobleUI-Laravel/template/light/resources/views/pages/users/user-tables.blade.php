@extends('layout.master')

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Tables</a></li>
    <li class="breadcrumb-item active" aria-current="page">User Tables</li>
  </ol>
</nav>


  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">User Table</h6>
        <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>NAME</th>
                  <th>EMAIL</th>
                  <th>USERTYPE</th>
                  <th>DELETE</th>
                </tr>
              </thead>
              <tbody>
                @php
                
                use App\User;
                     
                $us=User::all();
                @endphp
                 @if(count($us) >0)
      
                 @foreach($us as $crud)
                 
                    <tr border="none">
                        <td>{{$crud->id}}</td>  
                        <td>{{$crud->name}}</td>  
                        <td>{{$crud->email}}</td> 
                        @php
                          if($crud->user_type==1)
                        $pri="Admin";
                        elseif ($crud->user_type==2) {
                          $pri="Studio";
                        }
                        
                        else
                        $pri="Customer";  
                        @endphp
                        <td>{{$pri}}</td> 
                        
                
                      <!--  <td >  
                            <form action="route" method="GET">  
                                   @csrf  
                                    
                                   <button class="btn btn-danger" type="submit">Edit</button>  
                                 </form> 
                           </td>-->
                
                    
                          
                    <td> 
                       <form action="route" method="POST">  
                            @csrf  
                            @method('DELETE')  
                            <button class="btn btn-danger" type="submit">Delete</button>  
                          </form>  
                    </td>  
                     
                
                   </tr>  
                   
                   
                   
                
                @endforeach  
                @endif
              </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection