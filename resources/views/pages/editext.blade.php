@extends('layouts/contentLayoutMaster') <!-- choose any one option {contentLayoutMaster/fullLayoutMaster} -->

@section('title', 'Edit Extension')  <!-- change title accordingly-->

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">            
            <div class="card-content">
                <div class="card-body">
                <form class="form-group col-6" method="POST" action="/addexts/{{ $extension->id }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputEmail1">Extension Name</label>
                        <input type="text" class="form-control" id="extname" name="extname" placeholder="Enter Name" value="{{ $extension->extname }}">
                            <small id="emailHelp" class="form-text text-muted">Example Lighthouse-Lekki. If not given, use current location.</small>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Extension Location</label>
                            <input type="text" class="form-control" id="extlocation" name="extlocation" placeholder="Enter Address" value="{{ $extension->extlocation}}">
                            <small id="emailHelp" class="form-text text-muted">Ensure the name is unique.</small>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Extension SMR</label>
                            <input type="text" class="form-control" id="extsmr" name="extsmr" placeholder="Enter representatives name" value="{{ $extension->extsmr }}">
                            <small id="emailHelp" class="form-text text-muted">Setman Representative or principal official.</small>
                          </div>
                          <div class="form-group">
                            <label for="extphonenumber">Phone number</label>
                            <input type="text" class="form-control" id="extphonenumber" name="extphonenumber" placeholder="Enter phone number" value="{{ $extension->extphonenumber }}">
                            
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Email Address</label>
                            <input type="email" class="form-control" id="extemail" name="extemail" placeholder="Enter email"  value="{{ $extension->extemail }}">
                          </div>                         
                           
                          <button type="submit" class="btn btn-primary">Update</button>
                          <a href="/viewext" class="btn btn-secondary float ml-5">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
