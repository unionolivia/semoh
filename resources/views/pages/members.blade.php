@extends('layouts/contentLayoutMaster') <!-- choose any one option {contentLayoutMaster/fullLayoutMaster} -->

@section('title', 'Add Member')  <!-- change title accordingly-->

@section('content')


<section id="number-tabs">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">GLT Membership Form</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <p>Registration is for members that have joined foundation school.</p>
                        <form action="/members/store" method="post" class="number-tab-steps wizard-circle" id="number-tab-steps" enctype="multipart/form-data">
                            @csrf
                            <!-- Step 1 -->
                            <h6>Personal Information</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstName1">First Name </label>
                                        <input type="text" class="form-control" id="firstName1" name="firstName1" value="{{ old('firstName1')}}" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastName1">Last Name</label>
                                        <input type="text" class="form-control" id="lastName1" name="lastName1"  value="{{ old('lastName1')}}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="otherName1">Other Name</label>
                                            <input type="text" class="form-control" id="otherName1" name="otherName1" value="{{ old('otherName1')}}">
                                        </div>
                                    </div> 
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailAddress1">Email</label>
                                            <input type="email" class="form-control" id="emailAddress1" name="emailAddress1" value="{{ old('emailAddress1')}}" required>
                                        </div>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                                <label for="dateofBirth1">Date of Birth </label>
                                                <input type="text" class="form-control pickadate-months-year" name="dateofBirth1" id="dateofBirth1"  value="{{ old('dateofBirth1')}}">
                                         </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="location1">Current Extension</label><br>
                                                <select class="textWidth form-control" name="location1" id="location1" type="text">
                                                    <option disabled selected> -- select an option -- </option>
                                                   @if ( count($extensions) > 0)
                                                    @foreach($extensions as $extension)
                                                      <option value="{{ $extension->id }}">{{ $extension->extname }}</option>
                                                    @endforeach
                                                    @else 
                                                     <p>No extension data found</p>
                                                     @endif
                                                </select>
                                            </div>


                                            {{-- <label for="location1">Current Extension</label>
                                            <select class="custom-select form-control" id="location1" name="location1">
                                                <option value="Lekki">Lekki</option>
                                                <option value="Ikeja">Ikeja</option>
                                                <option value="IleIfe">IleIfe</option>
                                                <option value="Akure">Akure</option>
                                            </select> --}}
                                        </div>                                            
                                    </div>
                                </div>                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="Phonenumber1">Phonenumber</label>
                                            <input type="text" class="form-control" id="Phonenumber1" name="Phonenumber1" value="{{ old('Phonenumber1')}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="maritalStatus">Marital Status</label>
                                            <select class="custom-select form-control" id="maritalStatus" name="maritalStatus">
                                                <option value="single">Single</option>
                                                <option value="married">Married</option>
                                                <option value="seperated">Seperated</option>
                                                <option value="Divorced">Divorced</option>
                                            </select>
                                        </div>                                        
                                      </div>
                                </div>                               
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="pictureFile">Passport Picture</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="pictureFile" value="public/members_images/20190913_182106_1588972130.jpg" name="pictureFile">
                                                <label class="custom-file-label" for="pictureFile" required>Upload picture</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Occupation</label>
                                            <label for="jobtitle">Occupation</label>
                                                <select class="custom-select form-control" id="Occupation" name="Occupation">
                                                    <option value="">*Select</option>
                                                    <option value="Student">Student</option>
                                                    <option value="NYSC">NYSC Corper</option>
                                                    <option value="Professional">Professional</option>
                                                    <option value="Self-emplyed">Self Employed/Enterprenuer</option>
                                                    <option value="Business-owner">Business Owner</option>                                                
                                                </select>
                                         </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="shortDescription1">Address :</label>
                                            <textarea name="Address" id="Address" rows="5" class="form-control" value="{{ old('Address')}}">{{ old('Address')}}</textarea>
                                        </div>
                                    </div>
                                </div>                                
                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <label for="country">Country</label>
                                        <input type="text" class="form-control" id="Country" placeholder="Country" name="Country" value="{{ old('Country')}}">
                                        <div class="invalid-tooltip">
                                          Please provide a valid Country.
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                      <label for="city">City</label>
                                      <input type="text" class="form-control" id="City" placeholder="City" name="City" value="{{ old('City')}}">
                                      <div class="invalid-tooltip">
                                        Please provide a valid city.
                                      </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                      <label for="state">State</label>
                                      <input type="text" class="form-control" id="State" placeholder="State" name="State" value="{{ old('State')}}">
                                      <div class="invalid-tooltip">
                                        Please provide a valid state.
                                      </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                      <label for="validationTooltip05">Zip Code</label>
                                      <input type="text" class="form-control" id="Zipcode" placeholder="Zip Code" name="Zipcode" value="{{ old('Zipcode')}}">
                                      <div class="invalid-tooltip">
                                        Please provide a valid zip code.
                                      </div>
                                    </div>
                                  </div>
                            
                            </fieldset>

                            <!-- Step 2 -->
                            <h6>Career/Discipline</h6>
                            <fieldset>
                               
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card overflow-hidden">                                               
                                                <div class="card-content">
                                                    <div class="card-body">                                                       
                                                        <ul class="nav nav-tabs" role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" aria-controls="home" role="tab" aria-selected="true">Student</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" aria-controls="profile" role="tab" aria-selected="false">Professional</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="#" class="nav-link disabled">NYSC Corper</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" aria-controls="about" role="tab" aria-selected="false">Enterprenuer</a>
                                                            </li>
                                                        </ul>
                                                        <!-- Student zone -->
                                                        <div class="tab-content">
                                                            <div class="tab-pane" id="home" aria-labelledby="home-tab" role="tabpanel">
                                                                <div class="form-row">
                                                                    <div class="col-md-3 mb-3">
                                                                        <label for="nameofSchool">Name of School</label>
                                                                        <input type="text" class="form-control" id="School" placeholder="School Name" name="School" value="{{ old('School')}}">
                                                                        <div class="invalid-tooltip">
                                                                          Please provide a valid School Name.
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3 mb-3">
                                                                      <label for="courseofStudy">Course of Study</label>
                                                                      <input type="text" class="form-control" id="courseofStudy" placeholder="Course of Study" name="courseofStudy" value="{{ old('courseofStudy')}}">
                                                                      <div class="invalid-tooltip">
                                                                        Please provide a valid Course of Study.
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-md-3 mb-3">
                                                                      <label for="hostelAddress">Hostel Address</label>
                                                                      <input type="text" class="form-control" id="hostelAddress" placeholder="Hostel Address" name="hostelAddress" value="{{ old('hostelAddress')}}">
                                                                      <div class="invalid-tooltip">
                                                                        Please provide a valid Hostel Address.
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-md-3 mb-3">
                                                                      <label for="homeAddress">Home Address</label>
                                                                      <input type="text" class="form-control" id="homeAddress" placeholder="Residentail Address" name="homeAddress" value="{{ old('homeAddress')}}">
                                                                      <div class="invalid-tooltip">
                                                                        Please provide a valid Home Address.
                                                                      </div>
                                                                    </div>                                                                                                                                   
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="col-md-3 mb-3">
                                                                        <label for="level">Cuurrent Level</label>
                                                                        <select class="custom-select form-control" id="level" name="level">
                                                                            <option value="">Select</option>
                                                                            <option value="Level 1">Level 1</option>
                                                                            <option value="Level 2">Level 2</option>
                                                                            <option value="Level 3">Level 3</option>
                                                                            <option value="Level 4">Level 4</option>
                                                                            <option value="Level 5">Level 5</option>
                                                                        </select>                                                                        
                                                                    </div>
                                                                    <div class="col-md-3 mb-3">
                                                                        <label for="educationalCategory">Educational Category</label>
                                                                        <select class="custom-select form-control" id="Category" name="Category">
                                                                            <option value="">Select</option>
                                                                            <option value="Undergraduate">Undergraduate</option>
                                                                            <option value="Diploma">Diploma</option>
                                                                            <option value="Post graduate">Post Graduate Diploma</option>
                                                                            <option value="Masters">Masters</option>
                                                                            <option value="Doctorate">Doctorate</option>
                                                                        </select>                                                                                                               
                                                                    </div>
                                                                    <div class="col-md-3 mb-3">
                                                                        <div class="form-group">
                                                                            <label for="foundationstart">Foundation School Startdate</label>
                                                                            <input type="text" class="form-control pickadate-months-year" name="startdate">
                                                                     </div>
                                                                    </div>
                                                                    <div class="col-md-3 mb-3">
                                                                        <div class="form-group">
                                                                            <label for="firstName1">Foundation School Enddate</label>
                                                                            <input type="text" class="form-control pickadate-months-year" name="enddate">
                                                                     </div>
                                                                    </div>                                                                                                                                   
                                                                </div>                                                                                                                  
                                                            </div>
                                                            <!-- Profesionals zone -->

                                                            <div class="tab-pane active" id="profile" aria-labelledby="profile-tab" role="tabpanel">
                                                                <div class="form-row">
                                                                    <div class="col-md-3 mb-3">
                                                                        <label for="validationTooltip03">Occupation</label>
                                                                        <input type="text" class="form-control" id="Occupation2" placeholder="Occupation" name="Occupation2">
                                                                        <div class="invalid-tooltip">
                                                                          Please provide a valid Occupation.
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3 mb-3">
                                                                      <label for="validationTooltip03">Employer</label>
                                                                      <input type="text" class="form-control" id="Employer" placeholder="Employer" name="Employer">
                                                                      <div class="invalid-tooltip">
                                                                        Please provide a valid Employer.
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-md-3 mb-3">
                                                                      <label for="validationTooltip04">Office Address</label>
                                                                      <input type="text" class="form-control" id="Address" placeholder="Address" name="officeAddress">
                                                                      <div class="invalid-tooltip">
                                                                        Please provide a valid Employer Address.
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-md-3 mb-3">
                                                                      <label for="validationTooltip05">Position</label>
                                                                      <input type="text" class="form-control" id="Position" placeholder="Position" name="Position">
                                                                      <div class="invalid-tooltip">
                                                                        Please provide a valid Position.
                                                                      </div>
                                                                    </div>                                                                                                                                   
                                                                </div>            
                                                            </div>
                                                            <!-- NYSC Corpers zone 
                                                            <div class="tab-pane" id="dropdown31" role="tabpanel" aria-labelledby="dropdown31-tab" aria-expanded="false">
                                                                <div class="form-row">
                                                                    <div class="col-md-3 mb-3">
                                                                        <label for="validationTooltip03">Place of Primary Assignment</label>
                                                                        <input type="text" class="form-control" id="PPA" placeholder="PPA" name="PPA">
                                                                        <div class="invalid-tooltip">
                                                                          Please provide a valid PPA.
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3 mb-3">
                                                                      <label for="validationTooltip03">Local Inspectors</label>
                                                                      <input type="text" class="form-control" id="LI" placeholder="Local inspectors" name="LI">
                                                                      <div class="invalid-tooltip">
                                                                        Please provide a valid Local Inspectors Contact.
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-md-3 mb-3">
                                                                      <label for="validationTooltip04">Address</label>
                                                                      <input type="text" class="form-control" id="PPAAddress" placeholder="PPA Address" name="PPAAddress">
                                                                      <div class="invalid-tooltip">
                                                                        Please provide a valid PPA Address.
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-md-3 mb-3">
                                                                      <label for="validationTooltip05">Home Address</label>
                                                                      <input type="text" class="form-control" id="homeAddress" placeholder="Residentail Address" name="homeAddress">
                                                                      <div class="invalid-tooltip">
                                                                        Please provide a valid Home Address.
                                                                      </div>
                                                                    </div>
                                                                                                                                   
                                                                </div>            
                                                            </div> -->
                                                            <!-- Self Employed/Enterprenuers zone -->                                                            
                                                             <div class="tab-pane" id="about" aria-labelledby="about-tab" role="tabpanel">
                                                                <div class="form-row">
                                                                    <div class="col-md-3 mb-3">
                                                                        <label for="validationTooltip03">Name of Business/Service</label>
                                                                        <input type="text" class="form-control" id="Businessname" placeholder="Name of Business/Service" name="Businessname">
                                                                        <div class="invalid-tooltip">
                                                                          Please provide a valid Business/Service Name.
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3 mb-3">
                                                                      <label for="validationTooltip03">Nature of Business</label>
                                                                      <input type="text" class="form-control" id="natureofbusiness" placeholder="Nature of BusinessCourse of Study" name="natureofbusiness">
                                                                      <div class="invalid-tooltip">
                                                                        Please provide a valid nature of Business.
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-md-3 mb-3">
                                                                      <label for="validationTooltip04">Business Address</label>
                                                                      <input type="text" class="form-control" id="businessAddress" placeholder="Business Address" name="businessAddress">
                                                                      <div class="invalid-tooltip">
                                                                        Please provide a valid Business Address.
                                                                      </div>
                                                                    </div>
                                                                    <div class="col-md-3 mb-3">
                                                                      <label for="validationTooltip05">Position</label>
                                                                      <input type="text" class="form-control" id="Position1" placeholder="Position" name="Position1">
                                                                      <div class="invalid-tooltip">
                                                                        Please provide a valid Position.
                                                                      </div>
                                                                    </div>                                                                                                                                   
                                                                </div>            
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                
                            </fieldset>

                            <!-- Step 3 -->
                            <h6>Parent Information</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstName1">Fathers' Name </label>
                                            <input type="text" class="form-control" id="fathersName" name="fathersName">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastName1">Mothers' Name</label>
                                            <input type="text" class="form-control" id="mothersName" name="mothersName">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="otherName1">Fathers' Occupation</label>
                                            <input type="text" class="form-control" id="fatherOccupation" name="fatherOccupation">
                                        </div>
                                    </div> 
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailAddress1">Parent Email</label>
                                            <input type="email" class="form-control" id="parentemailAddress" name="parentemailAddress">
                                        </div>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                                <label for="firstName1">Parent Phone number </label>
                                                <input type="text" class="form-control" id="parentPhonenumber" name="parentPhonenumber">
                                         </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="shortDescription1">Parent Address :</label>
                                                <textarea name="parentAddress" id="parentAddress" rows="3" class="form-control"></textarea>
                                            </div>                                            
                                        </div>                                            
                                    </div>
                                </div>                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="parentMaritalStatus">Parent Marital Status</label>
                                            <select class="custom-select form-control" id="parentMaritalStatus" name="parentMaritalStatus">
                                                <option value="single">single</option>
                                                <option value="married">married</option>
                                                <option value="seperated">seperated</option>
                                                <option value="Divorced">Divorced</option>
                                            </select>
                                        </div>                                        
                                      </div>
                                 </div>
                            </fieldset>


                            <!-- step 4 -->
                            <h6>Unit/Ministry/Department</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="eventName1">Ministry :</label>
                                            <select class="custom-select form-control" id="ministry1" name="ministry1">
                                                <option disabled selected> -- select an option -- </option>
                                                   @if ( count($ministries) > 0)
                                                    @foreach($ministries as $ministry)
                                                      <option value="{{ $ministry->id }}">{{ $ministry->name }}</option>
                                                    @endforeach
                                                    @else 
                                                     <p>No ministry data found</p>
                                                     @endif
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="eventType1">Department/Unit :</label>
                                            <select class="custom-select form-control" id="eventType1" name="eventType1">
                                                   <option disabled selected> -- select an option -- </option>
                                                   @if ( count($units) > 0)
                                                        @foreach($units as $unit)
                                                        <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                                        @endforeach
                                                    @else 
                                                     <p>No unit data found</p>
                                                     @endif
                                            </select>
                                        </div>
                                        
                                    </div>                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="extension_id">Current Extension</label><br>
                                                <select class="textWidth form-control" name="extension_id" id="extension_id" type="text">
                                                    <option disabled selected> -- select an option -- </option>
                                                   @if ( count($extensions) > 0)
                                                    @foreach($extensions as $extension)
                                                      <option value="{{ $extension->id }}">{{ $extension->extname }}</option>
                                                    @endforeach
                                                    @else 
                                                     <p>No extension data found</p>
                                                     @endif
                                                </select>
                                            </div> 
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="eventType1">Assign Role :</label>
                                                <select class="custom-select form-control" id="assignRole" name="assignRole">
                                                    <option value="">Select</option>
                                                    <option value="SMR">SMR</option>
                                                    <option value="Pastor">Pastor</option>
                                                    <option value="Minister">Minister</option>
                                                    <option value="HOD">HOD</option>
                                                    <option value="AHOD">AHOD</option>
                                                    <option value="Member">Member</option>
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
                                                        <span class="">Born Again</span>
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
                                                        <span class="">Spirit Filled</span>
                                                    </div>
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
<!-- Form wizard with number tabs section end -->


@endsection

@push('scripts')
<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/forms/validation/form-validation.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins/forms/wizard.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset ('vendors/css/pickers/pickadate/pickadate.css') }}">


<script src="vendors/js/forms/validation/jqBootstrapValidation.js"></script>
<script src="vendors/js/extensions/jquery.steps.min.js"></script>
<script src="vendors/js/forms/validation/jquery.validate.min.js"></script>
{{-- <script src="{{ asset('js/scripts/forms/wizard-steps.min.js') }}"></script> --}}
<script src="{{ asset('js/scripts/forms/wizard-steps.js') }}"></script>

<script src="{{ asset('vendors/js/pickers/pickadate/picker.js') }}"></script>
<script src="{{ asset('vendors/js/pickers/pickadate/picker.date.js') }}"></script>
<script src="{{ asset('vendors/js/pickers/pickadate/picker.time.js') }}"></script>
<script src="{{ asset('vendors/js/pickers/pickadate/legacy.js') }}"></script>


<!-- BEGIN: Page JS-->
<script src="{{ asset('/js/scripts/pickers/dateTime/pick-a-datetime.js') }}"></script>








@endpush