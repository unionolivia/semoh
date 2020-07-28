<!-- Description -->
@extends('layouts/contentLayoutMaster')

@section('title', 'Add Project')

@section('pageStyle')

    <link rel="stylesheet" href="{{ asset('css/pages/authentication.css') }}">

@endsection


@section('content')

<section id="icon-tabs">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add a project</h4>
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
                                                            <label for="firstName11">Name of Project</label>
                                                            <input type="text" class="form-control" id="projectname" name="projectname">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="lastName11">Location</label>
                                                            <input type="textarea" class="form-control" id="location" name="location">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="sellingprice">Selling Price</label>
                                                            <input type="number" class="form-control" id="sellingprice" name="sellingprice" placeholder="₦">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="duration">Duration</label>
                                                            <input type="text" class="form-control" name="duration" id="duration">
                                                        </div>                                                      
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="startdate">Start Date</label>
                                                            <input type="text" class="form-control pickadate-months-year" name="startdate" id="startdate">
                                                        </div>                                                       
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="enddate">End Date</label>
                                                            <input type="text" class="form-control pickadate-months-year" name="enddate" id="enddate">
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
                                                            <label class="custom-file-label"  for="customFile">Upload Front Elevation</label>
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
                                            <h6><i class="step-icon fa fa-money"></i> Pricing </h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="eventName11">Number of Investors</label>
                                                            <input type="text" class="form-control" id="eventName11">
                                                        </div>                                                        
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="roipackage">ROI Package</label>
                                                            <select class="custom-select form-control" id="roipackage" name="roipackage">
                                                                <option value="new-york">Marvel Package</option>
                                                                <option value="chicago">Marvel Club 10</option>
                                                                <option value="san-francisco">Diamond Court Club 10</option>
                                                                <option value="boston">Marvel COurt 2 clubb 10</option>
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

@endsection

@push('scripts')
<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/forms/validation/form-validation.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/forms/wizard.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset ('vendors/css/pickers/pickadate/pickadate.css') }}">


<script src="vendors/js/forms/validation/jqBootstrapValidation.js"></script>
<script src="vendors/js/extensions/jquery.steps.min.js"></script>
    <script src="vendors/js/forms/validation/jquery.validate.min.js"></script>
<script src="{{ asset('js/scripts/forms/wizard-steps.min.js') }}"></script>


<script src="{{ asset('vendors/js/pickers/pickadate/picker.js') }}"></script>
<script src="{{ asset('vendors/js/pickers/pickadate/picker.date.js') }}"></script>
<script src="{{ asset('vendors/js/pickers/pickadate/picker.time.js') }}"></script>
<script src="{{ asset('vendors/js/pickers/pickadate/legacy.js') }}"></script>


<!-- BEGIN: Page JS-->
<script src="{{ asset('/js/scripts/pickers/dateTime/pick-a-datetime.js') }}"></script>
@endpush