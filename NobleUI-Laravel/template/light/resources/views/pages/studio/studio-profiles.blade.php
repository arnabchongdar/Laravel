@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/cropperjs/cropper.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="col-lg-2 col-xl-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="d-flex justify-content-between align-items-baseline mb-2">
        <h6 class="card-title mb-0">Studio Profiles</h6>
        <div class="dropdown mb-2">
          <button class="btn p-0" type="button" id="dropdownMenuButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
            <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>
            <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>
            <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>
            <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>
            <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-hover mb-0">
          <thead>
            <tr>
              <th class="pt-0">Id</th>
              <th class="pt-0">Name</th>
              <th class="pt-0">Email</th>
              <th class="pt-0">Edit</th>
              <th class="pt-0">Delete</th>
            </tr>
          </thead>  
          <tbody> 
            @php
            use App\orders;
            use App\studio_profile;
            use App\User;
                 $order_items = orders::all();
                 $studio=User::all();
            @endphp 
      @if(count($studio) >0)
      
       @foreach($studio as $crud)
       @if($crud->user_type==3)
          <tr border="none">
              <td>{{$crud->id}}</td>  
              <td>{{$crud->name}}</td>  
              <td>{{$crud->email}}</td>  
              
      
            <!--  <td >  
                  <form action="route" method="GET">  
                         @csrf  
                          
                         <button class="btn btn-danger" type="submit">Edit</button>  
                       </form> 
                 </td>
      
          if
                
          <td> 
             <form action="route" method="POST">  
                  @csrf  
                  @method('DELETE')  
                  <button class="btn btn-danger" type="submit">Delete</button>  
                </form>  
          </td>  -->
           
      
         </tr>  
         
         
         
      @endif 
      @endforeach  
      @endif
      </tbody>  
      </table>
    </div>
  </div>
</div>
</div> 
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/cropperjs/cropper.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/cropper.js') }}"></script>
@endpush