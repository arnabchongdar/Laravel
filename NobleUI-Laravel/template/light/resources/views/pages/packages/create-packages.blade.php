@extends('layout.master')

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Forms</a></li>
    <li class="breadcrumb-item active" aria-current="page">Basic Elements</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Create Packages</h6>
        <form class="forms-sample" action="packages" method="POST">
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" autocomplete="off" placeholder="Title">
          </div>
          <div class="form-group">
            <label for="body">Body</label>
            <input type="text" name="body" class="form-control" id="body" placeholder="Body">
          </div>
          <div class="form-group">
            <label for="cover_image">Cover Image</label>
            <input type="file"  name="cover_image" class="form-control" id="cover_image" autocomplete="off" placeholder="Cover Image">
          </div>
          <div class="form-group">
            <label for="price">Price</label>
            <input type="number"  name="price" class="form-control" id="price" autocomplete="off" placeholder="price">
          </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
  
@endsection

@push('custom-scripts')
  <script src="{{ asset('assets/js/file-upload.js') }}"></script>
@endpush