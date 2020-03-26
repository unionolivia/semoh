<!-- Description -->
@extends('layouts/contentLayoutMaster')

@section('title', 'Add User')

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
                                        <p>Add <code>.icons-tab-steps</code> class to get desired icons in tab.</p>
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

@endsection

@push('scripts')
<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/forms/validation/form-validation.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/forms/wizard.min.css') }}">
<script src="vendors/js/forms/validation/jqBootstrapValidation.js"></script>
<script src="vendors/js/extensions/jquery.steps.min.js"></script>
    <script src="vendors/js/forms/validation/jquery.validate.min.js"></script>
<script src="{{ asset('js/scripts/forms/wizard-steps.min.js') }}"></script>
@endpush