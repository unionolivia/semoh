@extends('layouts.contentLayoutMaster')

@section('title', 'Ministry Report')

@section('content')
<section id="form-and-scrolling-components">
    <div class="row match-height">
        <div class="col-md-4 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Media Ministry</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="form-group">                            
                            <p> Provide all information within the form.</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#Media">
                                Launch Report
                            </button>

                            <!-- Modal -->
                            <div class="modal fade text-left" id="Media" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel33">Media Ministry </h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="#">
                                            <div class="modal-body">
                                                <label>Name of Minister: </label>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Name of Minister" id="nameofMinister"  name="nameofMinister" class="form-control">
                                                </div>
                                                <label>Title/Topic: </label>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Enter Title/Topic" id="titleTopic" name="titleTopic" class="form-control">
                                                </div>

                                                <label>Duration of Ministration: </label>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Duration of Ministration" id="durationofMinistration"  name="durationofMinistration" class="form-control">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Request Approval</button>
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
        <div class="col-md-4 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Care Ministry</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <p>Provide all information within the form.</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#care">
                            Launch Report
                        </button>
                        

                        <!-- Modal -->
                        <div class="modal fade" id="care" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Care Ministry</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <label>Name of Minister: </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Name of Minister" id=""  name="" class="form-control">
                                        </div>
                                        <label>Title/Topic: </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Enter Title/Topic" id="" name="" class="form-control">
                                        </div>

                                        <label>Duration of Ministration: </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Duration of Ministration" id=""  name="" class="form-control">
                                        </div>
                                    </div>                                    
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Request Approval</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Follow up Ministry</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <p>Provide all information within the form.</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#followup">
                            Launch Report
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="followup" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Follow Up Ministry</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <label>Name of Minister: </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Name of Minister" id=""  name="" class="form-control">
                                        </div>
                                        <label>Title/Topic: </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Enter Title/Topic" id="" name="" class="form-control">
                                        </div>

                                        <label>Duration of Ministration: </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Duration of Ministration" id=""  name="" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Accept</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="form-and-scrolling-components">
    <div class="row match-height">
        <div class="col-md-4 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Children's Church Ministry</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="form-group">                            
                            <p> Provide all information within the form.</p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#Media">
                                Launch Report
                            </button>

                            <!-- Modal -->
                            <div class="modal fade text-left" id="children" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel33">Media Ministry </h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="#">
                                            <div class="modal-body">
                                                <label>Name of Minister: </label>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Name of Minister" id=""  name="" class="form-control">
                                                </div>
                                                <label>Title/Topic: </label>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Enter Title/Topic" id="" name="" class="form-control">
                                                </div>

                                                <label>Duration of Ministration: </label>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Duration of Ministration" id=""  name="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Request Approval</button>
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
        <div class="col-md-4 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Pastors Protocol Ministry</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <p>Provide all information within the form.</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#care">
                            Launch Report
                        </button>
                        

                        <!-- Modal -->
                        <div class="modal fade" id="pstproptocol" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Care Ministry</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <label>Name of Minister: </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Name of Minister" id=""  name="" class="form-control">
                                        </div>
                                        <label>Title/Topic: </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Enter Title/Topic" id="" name="" class="form-control">
                                        </div>

                                        <label>Duration of Ministration: </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Duration of Ministration" id=""  name="" class="form-control">
                                        </div>
                                    </div>                                    
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Request Approval</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Protocol Ministry</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <p>Provide all information within the form.</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#followup">
                            Launch Report
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="protocol" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Follow Up Ministry</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <label>Name of Minister: </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Name of Minister" id=""  name="" class="form-control">
                                        </div>
                                        <label>Title/Topic: </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Enter Title/Topic" id="" name="" class="form-control">
                                        </div>

                                        <label>Duration of Ministration: </label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Duration of Ministration" id=""  name="" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Accept</button>
                                    </div>
                                </div>
                            </div>
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
 {{-- <script src="{{ asset ('vendors/js/tables/datatable/pdfmake.min.js')}}"></script> --}}
 {{-- <script src="{{ asset ('vendors/js/tables/datatable/vfs_fonts.js')}}"></script> --}}
 <script src="{{ asset ('vendors/js/tables/datatable/datatables.min.js')}}"></script>
 <script src="{{ asset ('vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
 {{-- <script src="{{ asset ('vendors/js/tables/datatable/buttons.html5.min.js')}}"></script> --}}
 {{-- <script src="{{ asset ('vendors/js/tables/datatable/buttons.print.min.js')}}"></script> --}}
  <script src="{{ asset ('vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
  <script src="{{ asset ('vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
  <!-- END: Page Vendor JS-->

 <script>
     
       
 </script> 
    
@endpush