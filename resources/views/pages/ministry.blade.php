<!-- Description -->
@extends('layouts/contentLayoutMaster')

@section('title', 'Ministries')

@section('content')

{{-- <section id="description" class="card">
    <div class="card-header">
        <h4 class="card-title">Ministry List</h4>
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
                                        <a class="dropdown-item" href="">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- dataTable starts -->
                        @if ( count($ministries) > 0)                        
                            <div class="table-responsive">
                                <table class="table data-thumb-view">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Ministry ID</th>                                        
                                            <th>NAME</th>
                                            <th>DESCRIPTION</th>
                                            <th>MEMBERSHIP</th>                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($ministries as $ministry)
                                        <tr>
                                            <td></td>
                                            <td class="product-name"> {{ $ministry->id }}</td>                                        
                                            <td class="product-name">{{ $ministry->name }}</td> 
                                            <td class="product-name"> {{ $ministry->description }}</td>                                        
                                            <td>200</td>
                                        </tr>   
                                        @endforeach                                        
                                    </tbody>
                                </table>                               
                            </div>
                        @else
                        <p> No Ministry Found </p>
                        @endif
                        <!-- dataTable ends -->
                         <!-- add new sidebar starts -->
                         <form action="/ministry" method="post">
                            @csrf
                            <div class="add-new-data-sidebar">
                                <div class="overlay-bg"></div>
                                <div class="add-new-data">
                                    <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                                        <div>
                                            <h4>ADD NEW MINISTRY</h4>
                                        </div>
                                        <div class="hide-data-sidebar">
                                            <i class="feather icon-x"></i>
                                        </div>
                                    </div>
                                    <div class="data-items pb-3">
                                        <div class="data-fields px-2 mt-3">
                                            <div class="row">
                                                <div class="col-sm-12 data-field-col">
                                                    <label for="data-name">Ministry Name</label>
                                                    <input type="text" class="form-control" id="name" name="name">
                                                </div>
                                                <div class="col-sm-12 data-field-col">
                                                    <label for="data-category"> Description </label>                                            
                                                    <textarea class="form-control" id="description" rows="5" name="description"></textarea>
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
                        </form>                   
                    </section>
                    <!-- Data list view end -->
    
                </div>
            </div>
        </div>
        <!-- END: Content-->
            </div>
        </div>
    </div>
</section> --}}

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
                <div class="card-content">
                    <div class="card-body card-dashboard">                        
                        <div class="table-responsive">
                            @if ( count($ministries) > 0)                
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
                                    @foreach ($ministries as $ministry)                                       
                                    <tr>
                                        <td>{{$ministry->id}}</td>
                                        <td>{{$ministry->name}}</td>
                                        <td>{{$ministry->description}}</td>                          
                                        <td>
                                        <button type="button" class="btn btn-outline-primary" data-myid="{{$ministry->id}}" data-myname="{{$ministry->name}}" data-mydescription="{{$ministry->description}}" data-toggle="modal" data-target="#edit">
                                                Edit
                                            </button>
                                        </td>
                                        <td>
                                            <form action="/ministry/{{$ministry->id}}" method="POST" >
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
                                <p>No Ministry Found</p>
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
                <h4 class="modal-title" id="myModalLabel33">Edit Ministry</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form action="{{ route('update-ministry')}}" method="POST">
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