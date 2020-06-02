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
                        <section id="nav-filled">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card overflow-hidden">                                        
                                        <div class="card-content">
                                            <div class="card-body">                                                
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="home-tab-fill" data-toggle="tab" href="#home-fill" role="tab" aria-controls="home-fill" aria-selected="true">HOM Reports</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="profile-tab-fill" data-toggle="tab" href="#profile-fill" role="tab" aria-controls="profile-fill" aria-selected="false">AHOM Reports</a>
                                                    </li>
                                                    {{-- <li class="nav-item">
                                                        <a class="nav-link" id="messages-tab-fill" data-toggle="tab" href="#messages-fill" role="tab" aria-controls="messages-fill" aria-selected="false">Messages</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="settings-tab-fill" data-toggle="tab" href="#settings-fill" role="tab" aria-controls="settings-fill" aria-selected="false">Settings</a>
                                                    </li> --}}
                                                </ul>
        
                                                <!-- Tab panes -->
                                                <div class="tab-content pt-1">
                                                    <div class="tab-pane active" id="home-fill" role="tabpanel" aria-labelledby="home-tab-fill">
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
                                                    <div class="tab-pane" id="profile-fill" role="tabpanel" aria-labelledby="profile-tab-fill">
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
                                </div>
                            </div>
                        </section>
                        <!-- Nav Filled Ends -->                        
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