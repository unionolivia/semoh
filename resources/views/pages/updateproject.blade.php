<!-- Description -->
@extends('layouts/contentLayoutMaster')

@section('title', 'Update Project')

@section('content')
 <section>
 <div class="form-group row col-6">                                            
    <select class="custom-select form-control required" id="usertype" name="usertype" placeholder="User Type" required>
        <option value="">Select Project</option>
        <option value="Agent">Diamond Terrace</option>
        <option value="Admin">Magodo Flats</option>
        <option value="Investor">Marvvel Copurt</option>
        <option value="Agent">FUTA Hostel</option>
        <option value="Admin">ILE IFE Studio Apartments</option>
        <option value="Investor">Ilupeju Flats</option>
    </select>
</div>           

 </section>

<section id="description" class="card">
   
<div class="content-wrapper">
            <div class="content-body">
                <div id="user-profile">
                    <div class="row">
                        <div class="col-12">
                            <div class="profile-header mb-2">
                                <div class="relative">
                                    <div class="cover-container">
                                        <img class="img-fluid bg-cover rounded-0 w-100" src="../images/profile/user-uploads/de1.jpg" alt="User Profile Image">
                                    </div>
                                    
                                    <div class="profile-img-container d-flex align-items-center justify-content-between">
                                         <div class="float-right">
                                            <button type="button" class="btn btn-icon btn-icon rounded-circle btn-primary mr-1">
                                                <i class="feather icon-edit-2"></i>
                                            </button>
                                            <button type="button" class="btn btn-icon btn-icon rounded-circle btn-primary">
                                                <i class="feather icon-settings"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="d-flex justify-content-end align-items-center profile-header-nav">
                                    <nav class="navbar navbar-expand-sm w-100 pr-0">
                                        <button class="navbar-toggler pr-0" type="button" data-toggle="collapse" data-target="navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"><i class="feather icon-align-justify"></i></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                            <ul class="navbar-nav justify-content-around w-75 ml-sm-auto">
                                                <li class="nav-item px-sm-0">
                                                    <a href="#" class="nav-link font-small-3">Timeline</a>
                                                </li>
                                                <li class="nav-item px-sm-0">
                                                    <a href="#" class="nav-link font-small-3">About</a>
                                                </li>
                                                <li class="nav-item px-sm-0">
                                                    <a href="#" class="nav-link font-small-3">Photos</a>
                                                </li>
                                                <li class="nav-item px-sm-0">
                                                    <a href="#" class="nav-link font-small-3">Friends</a>
                                                </li>
                                                <li class="nav-item px-sm-0">
                                                    <a href="#" class="nav-link font-small-3">Videos</a>
                                                </li>
                                                <li class="nav-item px-sm-0">
                                                    <a href="#" class="nav-link font-small-3">Events</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div> -->
                            </div>
                        </div>
                    </div>
                   <section id="profile-info">
                        <div class="row">
                            <div class="col-lg-3 col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>About</h4>
                                        <i class="feather icon-more-horizontal cursor-pointer"></i>
                                    </div>
                                    <div class="card-body">
                                        <p>Tart I love sugar plum I love oat cake. Sweet roll caramels I love jujubes. Topping cake wafer.</p>
                                        <div class="mt-1">
                                            <h6 class="mb-0">Start Date:</h6>
                                            <p>November 15, 2019</p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0">Location:</h6>
                                            <p>Lagos, NIG</p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0">Email:</h6>
                                            <p>enquires@1000homes.ng</p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0">Website:</h6>
                                            <p>www.1000homes.ng</p>
                                        </div>
                                        <div class="mt-1">
                                            <button type="button" class="btn btn-sm btn-icon btn-primary mr-25 p-25"><i class="feather icon-facebook"></i></button>
                                            <button type="button" class="btn btn-sm btn-icon btn-primary mr-25 p-25"><i class="feather icon-twitter"></i></button>
                                            <button type="button" class="btn btn-sm btn-icon btn-primary p-25"><i class="feather icon-instagram"></i></button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-lg-9 col-12">
                            <div class="card card-body pt-0">
                                <div class="card-header">
                                    <h4 class="card-title">Update details</h4>
                                </div>                        
                                 <div class="card-content">
                                    <div class="card-body">
                                        
                                        <form action="#" class="icons-tab-steps wizard-circle">

                                            <!-- Step 1 -->
                                            <h6><i class="step-icon feather icon-home"></i> Profile</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="firstName11">Project Name </label>
                                                            <input type="text" class="form-control" id="Name1">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="lastName11">Address</label>
                                                            <input type="textarea" class="form-control" id="address1">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="emailAddress11">Phone number</label>
                                                            <input type="number" class="form-control" id="phonenumber11">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="location11">Type</label>
                                                            <select class="custom-select form-control" id="location11" name="location">
                                                                    <option value="">Select Project Type</option>
                                                                    <option value="Agent">Hostel</option>
                                                                    <option value="Admin">Hotel</option>
                                                                    <option value="Investor">Commercial Housing</option>
                                                                    <option value="Agent">Duplex</option>
                                                                    <option value="Admin">Terrace</option>
                                                                    <option value="Investor">Flat</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <!-- Step 2 -->
                                            <h6><i class="step-icon feather icon-briefcase"></i> Images</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        
                                                        <div class="custom-file form-group">
                                                            <input type="file" class="custom-file-input" id="customFile">
                                                            <label class="custom-file-label" for="customFile">Upload Side Elevation</label>
                                                        </div>
                                                        <div class="custom-file form-group">
                                                            <input type="file" class="custom-file-input" id="customFile">
                                                            <label class="custom-file-label" for="customFile">Upload Plan</label>
                                                        </div>
                                                        <div class="custom-file form-group">
                                                            <input type="file" class="custom-file-input" id="customFile">
                                                            <label class="custom-file-label" for="customFile">Upload Front Elevation</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="shortDescription11">Short Description :</label>
                                                            <textarea name="shortDescription" id="shortDescription11" rows="5" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <!-- Step 3 -->
                                            <h6><i class="step-icon feather icon-dollar-sign"></i> Pricing </h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="eventName11">Selling Price</label>
                                                            <input type="text" class="form-control" id="eventName11">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventType11">Payment Terms</label>
                                                            <select class="custom-select form-control" id="eventType11" data-placeholder="Type to search cities" name="eventType11">
                                                                <option value=""><span>&#8358;</span></option>
                                                                <option value="Banquet"> One Off</option>
                                                                <option value="Fund Raiser">Fix Installment</option>
                                                                <option value="Dinner Party">Off plan installment</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="eventLocation11">Start Date</label>
                                                            <select class="custom-select form-control" id="eventLocation11" name="location">
                                                                <option value="new-york">Jan</option>
                                                                <option value="chicago">Feb</option>
                                                                <option value="san-francisco">Mar</option>
                                                                <option value="boston">Apr</option>
                                                            </select>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Form wizard with icon tabs section end -->



                        
                           
                              
                
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>
<!--/ Description -->
@endsection


@push('scripts')
<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/forms/validation/form-validation.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/forms/wizard.min.css') }}">
<script src="vendors/js/forms/validation/jqBootstrapValidation.js"></script>
<script src="vendors/js/extensions/jquery.steps.min.js"></script>
    <script src="vendors/js/forms/validation/jquery.validate.min.js"></script>
<script src="{{ asset('js/scripts/forms/wizard-steps.min.js') }}"></script>
@endpush