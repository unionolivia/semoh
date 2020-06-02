<!-- Description -->
@extends('layouts/contentLayoutMaster')

@section('title', 'Unit')

@section('content')

<section id="description" class="card">
    <div class="card-header">
        <h4 class="card-title">GLT Units</h4>
    </div>
    <div class="card-content">
        <div class="card-body">
            <div class="card-text">
                <div class="content-body">
                    <!-- Data list view starts -->
                    <section id="data-thumb-view" class="data-thumb-view-header">
                        <div class="action-btns d-none">
                            <div class="btn-dropdown mr-1 mb-1">
                                <div class="btn-group dropdown actions-dropodown">
                                    <button type="button" class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Actions
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Delete</a>
                                        <a class="dropdown-item" href="#">Archive</a>
                                        <a class="dropdown-item" href="#">Print</a>
                                        <a class="dropdown-item" href="#">Another Action</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- dataTable starts -->
                        <div class="table-responsive">
                            <table class="table data-thumb-view">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Unit ID</th>                                    
                                        <th>NAME</th>
                                        <th>POPULARITY</th>
                                        <th>MEMBERSHIP</th>
                                        <th>STATUS</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td class="product-name">301</td>                                       
                                        <td class="product-name">Bishop's Kitchen</td>
                                        <td><div class="progress progress-bar-success">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:90%"></div>
                                        </div></td>
                                        <td class="product-price">15</td>   
                                        <td class="badge badge-warning">Pending</td>
                                    </tr>   
                                </tbody>
                            </table>
                        </div>
                        <!-- dataTable ends -->
                         <!-- add new sidebar starts -->
                    <div class="add-new-data-sidebar">
                        <div class="overlay-bg"></div>
                        <div class="add-new-data">
                            <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                                <div>
                                    <h4>CREATE NEW COMMITTEE</h4>
                                </div>
                                <div class="hide-data-sidebar">
                                    <i class="feather icon-x"></i>
                                </div>
                            </div>
                            <div class="data-items pb-3">
                                <div class="data-fields px-2 mt-3">
                                    <div class="row">
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-name">Unit Name</label>
                                            <input type="text" class="form-control" id="data-name">
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-member">Members needed</label>
                                            <input type="number" class="form-control" id="data-member" name="data-member">
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-category"> Description </label>                                            
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                                        </div>                                        
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-price">Start Date</label>
                                            <input type="text" class="form-control pickadate-months-year" name="start-date" id="start-date">                                        
                                        </div> 
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-price">End Date</label>
                                            <input type="text" class="form-control pickadate-months-year" name="end-date" id="end-date">                                        
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                            <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                                <div class="add-data-btn">
                                    <button class="btn btn-primary">Add Data</button>
                                </div>
                                <div class="cancel-data-btn">
                                    <button class="btn btn-outline-danger">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>                    
                    </section>
                    <!-- Data list view end -->
    
                </div>
            </div>
        </div>
        <!-- END: Content-->
            </div>
        </div>
    </div>
</section>
<!--/ Description -->
@endsection

@push('scripts')

<script src="vendors/js/extensions/dropzone.min.js"></script>
    <script src="{{ asset ('vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset ('vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset ('vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset ('vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset ('vendors/js/tables/datatable/datatables.checkboxes.min.js') }}"></script>
    <script src="{{ asset ('js/scripts/ui/data-list-view.js') }}"></script>


    <link rel="stylesheet" type="text/css" href="{{ asset ('vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('vendors/css/file-uploaders/dropzone.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('vendors/css/tables/datatable/datatables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('vendors/css/tables/datatable/extensions/dataTables.checkboxes.css ') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset ('css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/plugins/file-uploaders/dropzone.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/pages/data-list-view.css') }}">
<!-- date-picker script and css -->
    
    <script src="{{ asset('vendors/js/pickers/pickadate/picker.js') }}"></script>
    <script src="{{ asset('vendors/js/pickers/pickadate/picker.date.js') }}"></script>
    <script src="{{ asset('vendors/js/pickers/pickadate/picker.time.js') }}"></script>
    <script src="{{ asset('vendors/js/pickers/pickadate/legacy.js') }}"></script>
    <script src="{{ asset('/js/scripts/pickers/dateTime/pick-a-datetime.js') }}"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset ('vendors/css/pickers/pickadate/pickadate.css') }}">

    
@endpush