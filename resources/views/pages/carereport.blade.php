@extends('layouts.contentLayoutMaster')

@section('content')

<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                
                <div class="card-header">
                    <h4 class="card-title">Global Care Reports</h4>
                </div>
                <div class="d-flex justify-content-end ">
                    <a href="/createcarereport" class="mr-2 btn btn-outline-secondary">Add HOM Report</a>
                    <a href="/createahomcarereport" class="mr-2 btn btn-outline-primary">Add AHOM Report</a>
                </div>                
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <p class="card-text">Care report across all extensions, kindly note that changes can only be made at ministry level.</p>
                        <div class="table-responsive">
                            <table class="table zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Description</th>
                                        <th>Extension</th>
                                        <th>Action</th> 
                                        <th></th>                                       
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>Sunday, 13th March</td>                                        
                                        <td>Sunday Service</td>
                                        <td>Light House Lekki</td>
                                        <td><a href="#" class="btn btn-primary">View</a></td>
                                        <td><a href="#" class="btn btn-danger">Download</a></td>
                                    </tr>
                                    <tr>
                                        <td>Wednesday, 22nd April</td>
                                        <td>Bible Study Service</td>
                                        <td>Ikeja Church</td>
                                        <td><a href="#" class="btn btn-primary">View</a></td>
                                        <td><a href="#" class="btn btn-danger">Download</a></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Sunday, 2nd May</td>
                                        <td>Sunday Servic</td>
                                        <td>Light House</td>
                                        <td><a href="#" class="btn btn-primary">View</a></td>
                                        <td><a href="#" class="btn btn-danger">Download</a></td>
                                    </tr>                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Date</th>
                                        <th>Description</th>
                                        <th>Extension</th>
                                        <th>Action</th> 
                                        <th>Action</th>        
                                        
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection




@push('scripts')

<link rel="stylesheet" type="text/css" href="{{ asset ('vendors/css/tables/datatable/datatables.min.css') }}">

<script src="{{asset ('js/scripts/datatables/datatable.js')}}"></script>
 <!-- BEGIN: Page Vendor JS-->
 <script src="{{ asset ('vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
 <script src="{{ asset ('vendors/js/tables/datatable/vfs_fonts.js')}}"></script>
 <script src="{{ asset ('vendors/js/tables/datatable/datatables.min.js')}}"></script>
 <script src="{{ asset ('vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
 <script src="{{ asset ('vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
 <script src="{{ asset ('vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
 <script src="{{ asset ('vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
 <script src="{{ asset ('vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
 <!-- END: Page Vendor JS-->
    
@endpush