@extends('layouts/contentLayoutMaster') <!-- choose any one option {contentLayoutMaster/fullLayoutMaster} -->

@section('title', 'Sales')  <!-- change title accordingly-->

@section('content')
<section id="validation">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Market Place Sales</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="#" class="steps-validation wizard-circle">
                            <!-- Step 1 -->
                            <h6><i class="step-icon feather icon-home"></i> Step 1</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstName3">
                                                Buyers First Name
                                            </label>
                                            <input type="text" class="form-control required" id="firstName3" name="firstName" >
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastName3">
                                                Buyers Last Name
                                            </label>
                                            <input type="text" class="form-control required" id="lastName3" name="lastName">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailAddress5">
                                                Buyers Email
                                            </label>
                                            <input type="email" class="form-control required" id="emailAddress5" name="emailAddress">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="location">
                                                Buyers City
                                            </label>
                                            <select class="custom-select form-control" id="location" name="location">
                                                <option value="">Lagos State</option>
                                                <option value="Amsterdam">Ondo State</option>
                                                <option value="Berlin">Delta State</option>
                                                <option value="Frankfurt">Oyo State</option>
                                            </select>                                            
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="shortDescription3">Full Address</label>
                                                <textarea name="shortDescription" id="shortDescription3" rows="4" class="form-control"></textarea>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <!-- Step 2 -->
                            <h6><i class="step-icon feather icon-briefcase"></i> Step 2</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="proposalTitle3">
                                                Proect name
                                            </label>
                                            <input type="text" class="form-control required" id="proposalTitle3" name="proposalTitle">
                                        </div>
                                        <div class="form-group">
                                            <label for="jobTitle5">
                                                Payment Term
                                            </label>
                                            <input type="text" class="form-control required" id="jobTitle5" name="jobTitle" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="shortDescription3">Other information</label>
                                            <textarea name="shortDescription" id="shortDescription3" rows="4" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <!-- Step 3 -->
                            <h6><i class="step-icon feather icon-image"></i> Step 3</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="eventName3">
                                                Event Name
                                            </label>
                                            <input type="text" class="form-control required" id="eventName3" name="eventName" >
                                        </div>
                                        <div class="form-group">
                                            <label for="eventStatus3">
                                                Event Status
                                            </label>
                                            <select class="custom-select form-control required" id="eventStatus3" name="eventStatus">
                                                <option value="Planning">Planning</option>
                                                <option value="In Progress">In Progress</option>
                                                <option value="Finished">Finished</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="eventLocation3">
                                                Event Location
                                            </label>
                                            <select class="custom-select form-control required" id="eventLocation3" name="eventStatus">
                                                <option value="Planning">New York</option>
                                                <option value="In Progress">Chicago</option>
                                                <option value="Finished">San Francisco</option>
                                                <option value="Finished">Boston</option>
                                            </select>
                                        </div>
                                        <div class="form-group d-flex align-items-center pt-md-2">
                                          <label class="mr-2">Requirements :</label>
                                          <div class="c-inputs-stacked">
                                            <div class="d-inline-block mr-2">
                                              <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" value="false">
                                                <span class="vs-checkbox">
                                                  <span class="vs-checkbox--check">
                                                    <i class="vs-icon feather icon-check"></i>
                                                  </span>
                                                </span>
                                                <span class="">Staffing</span>
                                              </div>
                                            </div>
                                            <div class="d-inline-block">
                                              <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" value="false">
                                                <span class="vs-checkbox">
                                                  <span class="vs-checkbox--check">
                                                    <i class="vs-icon feather icon-check"></i>
                                                  </span>
                                                </span>
                                                <span class="">Catering</span>
                                              </div>
                                            </div>
                                          </div>
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
@endsection

@push('scripts')
<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/forms/validation/form-validation.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/forms/wizard.min.css') }}">
<script src="vendors/js/forms/validation/jqBootstrapValidation.js"></script>
<script src="vendors/js/extensions/jquery.steps.min.js"></script>
    <script src="vendors/js/forms/validation/jquery.validate.min.js"></script>
<script src="{{ asset('js/scripts/forms/wizard-steps.min.js') }}"></script>
@endpush