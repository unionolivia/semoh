@extends('layouts/contentLayoutMaster') <!-- choose any one option {contentLayoutMaster/fullLayoutMaster} -->

@section('title', 'Add as User')  <!-- change title accordingly-->

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">            
            <div class="card-content">
                <div class="card-body">
                    <form class="form-group col-6" method="POST" action="/addext">
                        @csrf
                                                <div class="form-group">
                                                    <label for="eventType1">Assign Role :</label>
                                                    <select class="custom-select form-control" id="assignRole" name="assignRole">
                                                        <option value="">Select</option>
                                                        <option value="Banquet">SMR</option>
                                                        <option value="Fund Raiser">Pastor</option>
                                                        <option value="Fund Raiser">Minister</option>
                                                        <option value="Fund Raiser">HOD</option>
                                                        <option value="Fund Raiser">AHOD</option>
                                                        <option value="Dinner Party">Member</option>
                                                    </select>                                         
                                                </div> 
                          <div class="form-group">
                            <label for="extphonenumber">Phone number</label>
                            <input type="text" class="form-control" id="extphonenumber" name="extphonenumber" placeholder="Enter phone number" value="{{ old('extphonenumber') }}">
                            
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Email Address</label>
                            <input type="email" class="form-control" id="extemail" name="extemail" placeholder="Enter email"  value="{{ old('extemail') }}">
                          </div>
                           
                          <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

@push('styles')

<link rel="stylesheet" href="{{ asset('css/core/colors/palette-gradient.css') }}">
<link rel="stylesheet" href="{{ asset('css/plugins/forms/wizard.css') }}">

<link rel="stylesheet" href="{{ asset('vendors/css/vendors.min.css') }}">
    



@endpush
