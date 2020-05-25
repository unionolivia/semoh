<!-- Description -->
@extends('layouts/fullLayoutMaster')

@section('title', 'GLT-CIS')

@section('pageStyle')

    <link rel="stylesheet" href="{{ asset('css/pages/authentication.css') }}">

@endsection



@section('content')

<section class="row flexbox-container">
    <div class="col-xl-8 col-10 d-flex justify-content-center">
        <div class="card rounded-0 mb-0">
            <div class="row m-0">
                <div class="col-lg-6 d-lg-block d-none text-center align-self-center pl-0 pr-3 py-0">
                    <img src="../../../images/pages/register.jpg" alt="branding logo">
                </div>
                <div class="col-lg-6 col-12 p-0">
                    <div class="card rounded-0 mb-0 p-2">
                        <div class="card-header pt-50 pb-1">
                            <div class="card-title">
                                <h4 class="mb-0">Register a new account</h4>
                            </div>
                        </div>
                        <p class="px-2">Fill the below form to create a new account.</p>
                        <div class="card-content">
                            <div class="card-body pt-0">
                                <form action="/profile">                                    
                                    <div class="form-label-group">
                                        <input type="text" id="inputsurName" name="surname" class="form-control" placeholder="Surname">
                                        <label for="inputName">Surname</label>
                                    </div>
                                    <div class="form-label-group">
                                        <input type="text" id="inputfirstName" name="firstname" class="form-control" placeholder="Firstname">
                                        <label for="inputName">Firstname</label>
                                    </div>
                                    <div class="form-label-group">
                                        <input type="text" id="inputphonenumber" name="phonenumber" class="form-control" placeholder="phonenumber">
                                        <label for="inputName">Phone Number</label>
                                    </div>                                    
                                    <div class="form-label-group">
                                        <input type="email" id="inputEmail" class="form-control" placeholder="Email">
                                        <label for="inputEmail">Email</label>
                                    </div>                                                                                       
                                    <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                            Male
                                            </label>
                                      </div>
                                      <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                            Female
                                            </label>
                                      </div>                                      
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <fieldset class="checkbox">
                                              <div class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" checked>
                                                <span class="vs-checkbox">
                                                  <span class="vs-checkbox--check">
                                                    <i class="vs-icon feather icon-check"></i>
                                                  </span>
                                                </span>
                                                <span class=""> I confirm that this person is a member of GLT.</span>
                                              </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <a href="/" class="btn btn-outline-primary float-left btn-inline mb-50">Back</a>
                                    <button type="submit-registration" class="btn btn-primary float-right btn-inline mb-50">Register</a>
                                </form>
                            </div>
                        </div> 
                    </div>
                    <a href="http://glt.church" class="btn btn-default"> GLT CHURCH </a>
                    <a href="http://glt.church" class="btn btn-default"> SOTM </a>
                    <a href="http://gbs.glt.church" class="btn btn-default">BUSINESS SCHOOL</a>

                </div>
            </div>
        </div>
    </div>
</section>



@endsection
