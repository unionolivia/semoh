<!-- Description -->
@extends('layouts/contentLayoutMaster')

@section('title', 'Ministries')

@section('content')

<section id="column-selectors">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Global Unit List</h4>                    
                    <div class="form-group">                        
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#inlineForm">
                            Add Unit
                        </button>

                        <!-- Modal -->
                        <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel33">Add New Unit</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="/unit" method="POST">
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
                <div class="card-content">
                    <div class="card-body card-dashboard">                        
                        <div class="table-responsive">
                            @if ( count($units) > 0)                
                            <table class="table table-striped dataex-html5-selectors">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Action</th>  
                                        <th></th>
                                        <th></th>                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($units as $Unit)                                       
                                    <tr>
                                        <td>{{$Unit->id}}</td>
                                        <td>{{$Unit->name}}</td>
                                        <td>{{$Unit->description}}</td>                          
                                        <td>
                                        <button type="button" class="btn btn-outline-primary" data-myid="{{$Unit->id}}" data-myname="{{$Unit->name}}" data-mydescription="{{$Unit->description}}" data-toggle="modal" data-target="#edit">
                                                Edit
                                            </button>
                                        </td>
                                        <td>
                                            <form action="/unit/{{$Unit->id}}" method="POST" >
                                                @csrf
                                                @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                            </form>
                                        </td>                                                                            
                                    </tr>                      
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Description</th>  
                                    </tr>
                                </tfoot>
                            </table> 
                            @else
                                <p>No Unit Found</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<div class="modal fade text-left" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Edit Unit</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form action="{{ route('update-unit')}}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="modal-body">
                    <label>Name: </label>
                    <div class="form-group">
                        <input type="text" placeholder="Enter Name" class="form-control" id="name" name="name" >
                    </div>

                    <input type="hidden" class="form-control" id="id" name="myid" value=" ">

                    <label>Description: </label>
                    <div class="form-group">
                        <input type="text" placeholder="Description" class="form-control" id="description" name="description">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>


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
        <script>
                $('#edit').on('show.bs.modal', function (event) {

                    
                    var button = $(event.relatedTarget) 
                    var name = button.data('myname')
                    var description = button.data('mydescription')
                    var id = button.data('myid') 

                    var modal = $(this)                    
                    modal.find('.modal-body #name').val(name)
                    modal.find('.modal-body #description').val(description)
                    modal.find('.modal-body #id').val(id)
                })
        </script>
    

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