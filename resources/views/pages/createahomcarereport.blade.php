@extends('layouts.contentLayoutMaster')

@section('title', 'Care Report')

@section('content')

<section id="number-tabs">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">GLT AHOM Care Report</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">                        
                    <form action="{{ route('ahomstore')}}" method="post" class="number-tab-steps wizard-circle" id="number-tab-steps" enctype="multipart/form-data">
                            @csrf
                            <!-- Step 1 -->
                            <h6>PLANS</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="month">Select Month</label>                                            
                                            <select class="custom-select form-control" id="month" name="month">
                                                <option value="">Select Month</option>
                                                <option value="January">January</option>
                                                <option value="February">February</option>
                                                <option value="March">March</option>
                                                <option value="April">April</option>
                                                <option value="May">May</option>
                                                <option value="June">June</option>
                                                <option value="July">July</option>
                                                <option value="August">August</option>
                                                <option value="September">September</option>
                                                <option value="October">October</option>
                                                <option value="November">November</option>
                                                <option value="December">December</option>
                                            </select>   
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ministrylist">Select Ministry</label>                                            
                                            <select class="custom-select form-control" id="ministrylist" name="ministrylist">
                                                <option value="">Select Ministry</option>
                                                <option value="Lekki">Chior</option>
                                                <option value="Ikeja">Protocol</option>
                                                <option value="IleIfe">Pastors Protocol</option>
                                                <option value="Akure">Media Ministry</option>
                                            </select>                                           
                                        </div>
                                    </div>                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Vision For the Year 2018</label>
                                            <input type="text" class="form-control" id="vision" name="vision" required maxlength="50">                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email"> Vision for the Month</label>
                                            <input type="text" class="form-control" id="vision" name="vision" required maxlength="50">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name"> Goals for the Month </label>
                                            <textarea class="form-control" type="textarea" name="goals" id="goals" placeholder="Your Goals" maxlength="6000" rows="7"></textarea>
                                        </div>
                                    </div> 
                                    <div class="col-md-6">
                                        <div class="form-group">                                            
                                            <label for="name"> Goals Achieved </label>
                                            <textarea class="form-control" type="textarea" name="goals" id="goals" placeholder="Your Goals Achieved" maxlength="6000" rows="7"></textarea>
                                        </div>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="name"> Comments on Members</label>
                                            <textarea class="form-control" type="textarea" name="goals" id="goals" placeholder="Your Comments" maxlength="6000" rows="7"></textarea>
                                         </div>
                                    </div>                
                            </fieldset>

                            <!-- Step 2 -->
                            <h6>ACTIVITIES</h6>
                            <fieldset>   
                                <div class="card">
                                    <div class="row">
                                        <table id="myTable" class="table order-list">
                                        <thead>
                                            <tr>
                                                <td>Item</td>
                                                <td>Description</td>
                                                <td>Amount</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input type="text" name="purseitem" class="form-control" />
                                                </td>
                                                <td>
                                                    <input type="text" name="pursedescription"  class="form-control"/>
                                                </td>
                                                <td>
                                                    <input type="text" name="amount"  class="form-control"/>
                                                </td>
                                                <td>
                                                    <a href="#" class="deleteRow btn btn-danger">Delete Row</a>
                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="5" style="text-align: left;">
                                                    <input type="button" class="btn btn-lg btn-block btn-outline-primary" id="addrow" value="Add Row" />
                                                </td>
                                            </tr>
                                            <tr>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    </div> 
                                </div>                           
                            </fieldset>                          
                            <!-- Step 3-->
                            <h6>Projection</h6>
                            <fieldset>
                                <div class="form-group">
                                    <h2>PROJECTION FOR THE NEXT MONTH</h2>
                                    <label for="name"> Vision for the Month</label>
                                    <textarea class="form-control" type="textarea" name="goals" id="goals" placeholder="Your Goals" maxlength="6000" rows="7"></textarea>
                                     <label for="name"> Goals for the Month</label>
                                    <textarea class="form-control" type="textarea" name="goals" id="goals" placeholder="Your Goals" maxlength="6000" rows="7"></textarea>
        
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