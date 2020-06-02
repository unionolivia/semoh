<!-- Description -->
@extends('layouts/contentLayoutMaster')

@section('title', 'Ministries')

@section('content')

<section id="column-selectors">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Global Ministry List</h4>                    
                    <div class="form-group">                        
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#inlineForm">
                            Add Ministry
                        </button>

                        <!-- Modal -->
                        <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel33">Add New Ministry</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="/ministry" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <label>Name: </label>
                                            <div class="form-group">
                                                <input type="text" placeholder="Enter Name" class="form-control" name="name">
                                            </div>

                                            <label>Description: </label>
                                            <div class="form-group">
                                                <input type="text" placeholder="Description" class="form-control" name="description">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>               
            </div>
        </div>
    </div>

</section>


<!-- Column selectors with Export Options and print table -->

<!--/ Description -->
@endsection

@push('scripts')

    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset ('vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->   
    
    
    <script src="{{ asset ('js/scripts/datatables/datatable.js') }}"></script>
    <script src="{{ asset ('vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
    <script src="{{ asset ('vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
    <script src="{{ asset ('vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset ('vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset ('vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
    <script src="{{ asset ('vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
    <script src="{{ asset ('vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset ('vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>

    {{-- <script src="{{ asset ('js/scripts/modal/components-modal.js') }}"> --}}
    

<!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset ('vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('vendors/css/file-uploaders/dropzone.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('vendors/css/tables/datatable/datatables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('vendors/css/tables/datatable/extensions/dataTables.checkboxes.css ') }}">
<!-- End Vendor CSS -->

<!-- BEGIN: Page CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/plugins/file-uploaders/dropzone.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/pages/data-list-view.css') }}">    

<!-- END: page CSS -->    

<!-- date-picker script and css -->
    
    <script src="{{ asset('vendors/js/pickers/pickadate/picker.js') }}"></script>
    <script src="{{ asset('vendors/js/pickers/pickadate/picker.date.js') }}"></script>
    <script src="{{ asset('vendors/js/pickers/pickadate/picker.time.js') }}"></script>
    <script src="{{ asset('vendors/js/pickers/pickadate/legacy.js') }}"></script>
    <script src="{{ asset('/js/scripts/pickers/dateTime/pick-a-datetime.js') }}"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset ('vendors/css/pickers/pickadate/pickadate.css') }}">

    
@endpush