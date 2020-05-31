<!-- Description -->
@extends('layouts/contentLayoutMaster')

@section('title', 'Members')

@section('content')

<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">All Members List</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">                        
                        @if ( count($members) > 0 )
                        <div class="table-responsive">
                            <table class="table zero-configuration ">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone number</th>
                                        <th>Extension</th>
                                        <th>Role</th>
                                        <th>Ministry</th>
                                        <th colspan="3">Action</th>                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($members as $member)
                                        <tr>
                                            <td><a href="{{ route('pages.memberprofile', ['id' => $member->id] )}}">{{ $member->firstName1 }} {{ $member->lastName1 }}</a></td>
                                            <td>{{ $member->emailAddress1 }}</td>
                                            <td>{{ $member->Phonenumber1 }}</td>
                                            <td>{{ $member->extension }}</td>
                                            <td>{{ $member->assignRole }}</td>
                                            <td>{{ $member->Ministry1 }}</td>
                                            <td>
                                                <a href="{{ route('pages.memberprofile', ['id' => $member->id] )}}" class='btn btn-primary mt-2'>View</a>
                                                                                              
                                            </td>
                                            <td>
<<<<<<< Updated upstream
                                                <a href="{{route('pages.adduser')}}" class='btn btn-info mt-2'>Add as User</a>
=======
<<<<<<< Updated upstream
                                                <form method="POST" action="/members/{{ $member->id }}">
=======
                                                <a href="{{route('pages.adduser')}}" class='btn btn-outline-primary mt-2'>Add as User</a>
>>>>>>> Stashed changes
                                                                                              
                                            </td>
                                            <td>
                                                <form method="POST" action="/member/{{ $member->id }}">
<<<<<<< Updated upstream
=======
>>>>>>> Stashed changes
>>>>>>> Stashed changes
                                                    @csrf
                                                     @method('DELETE')
                                                    <button type="submit" class="btn btn-danger mt-2 float-right">DELETE</button>
                                                </form>  
                                            </td>
                                        </tr> 
                                    @endforeach                           
                                </tbody>
                                <tfoot>
                                    <tr>
                                        
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone number</th>
                                        <th>Extension</th>
                                        <th>Role</th>
                                        <th>Ministry</th>
                                        <th  colspan="3">Action</th>                                        
                                    </tr>
                                </tfoot>
                            </table>
                    @else
                        <p> No Member found</p>
                    @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Zero configuration table -->

{{-- <section id="description" class="card">
   
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
                          @if(  count($members) > 0 )
                                <table class="table data-thumb-view">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Image</th>
                                            <th>NAME</th>
                                            <th>EMAIL</th>
                                            <th>PHONE NUMBER</th>
                                            <th>EXTENSION</th>
                                            <th>ORGANS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($members as $member)
                                        <tr>
                                            <td></td>
                                            <td class="product-img"><img src="{{ asset ('images/elements/apple-watch.png')}}" alt="Img placeholder">
                                            </td>
                                            <td class="product-name">{{ $member->firstName1 }}  {{ $member->lastName1 }} </td>
                                            <td class="product-category">{{ $member->emailAddress1 }}</td>
                                            <td class="product-price">{{ $member->phonenumber1 }}</td>
                                            <td>
                                                <div class="chip chip-warning">
                                                    <div class="chip-body">
                                                        <div class="chip-text">{{ $member->extension }}</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="product-price">{{ $member->Ministry1 }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>                               
                                </table>
                            @else
                                <p> No members yet.</p>
                            @endif
                        </div>
                        <!-- dataTable ends -->
    
                        <!-- add new sidebar starts -->
                        <div class="add-new-data-sidebar">
                            <div class="overlay-bg"></div>
                           
                            <div class="add-new-data">
                                <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                                    <div>
                                        <h4>ADD NEW USER</h4>
                                    </div>
                                    <div class="hide-data-sidebar">
                                        <i class="feather icon-x"></i>
                                    </div>
                                </div>
                                <div class="data-items pb-3">
                                    <div class="data-fields px-2 mt-3">
                                        <div class="row">
                                       
                                            <div class="col-sm-12 data-field-col">
                                                <label for="inputName">Surname</label>
                                                <input type="text" id="inputsurName" name="surname" class="form-control" placeholder="Surname">                                                
                                            </div>
                                            <div class="form-label-group col-sm-12 data-field-col">
                                                <label for="inputName">Firstname</label>
                                                <input type="text" id="inputfirstName" name="firstname" class="form-control" placeholder="Firstname">                                                
                                            </div>
                                            <div class="form-label-group col-sm-12 data-field-col">
                                                <label for="inputName">Phone Number</label>
                                                <input type="text" id="inputphonenumber" name="phonenumber" class="form-control" placeholder="phonenumber">                                                
                                            </div>                                    
                                            <div class="form-label-group col-sm-12 data-field-col">
                                                <label for="inputEmail">Email</label>
                                                <input type="email" id="inputEmail" class="form-control" placeholder="Email">                                               
                                            </div>   
                                            <div class="col-12  data-field-col">
                                                <div class="form-group">
                                                    <label for="eventType1">Assign Role :</label>
                                                    <select class="custom-select form-control" id="assignRole" name="assignRole">
                                                        <option value="">Select</option>
                                                        <option value="Banquet">SMR</option>
                                                        <option value="Fund Raiser">Pastor</option>
                                                        <option value="Fund Raiser">Minister</option>
                                                        <option value="Fund Raiser">HOD</option>
                                                        <option value="Fund Raiser">AHOD</option>
                                                        <option value="Dinner Party">Member</option>
                                                    </select>                                         
                                                </div> 
                                            </div>
                                            <div class="col-sm-12 data-field-col data-list-upload">
                                                <form action="#" class="dropzone dropzone-area" id="dataListUpload">
                                                    <div class="dz-message">Upload Image</div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                                    <div class="add-data-btn">
                                         <button class="btn btn-primary">Add member</button>                                    
                                    </div>
                                
                                    <div class="cancel-data-btn">
                                        <button class="btn btn-outline-danger">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                   
                        <!-- add new sidebar ends -->
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

@endsection

@push('scripts')

<script src="vendors/js/extensions/dropzone.min.js"></script>
    <script src="{{ asset ('vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset ('vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset ('vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset ('vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
    {{-- <script src="{{ asset ('vendors/js/tables/datatable/datatables.checkboxes.min.js') }}"></script> --}}
    {{-- <script src="{{ asset ('js/scripts/ui/data-list-view.js') }}"></script> --}}
    <script src="{{ asset ('js/scripts/datatables/datatable.js') }}"></script>


    <link rel="stylesheet" type="text/css" href="{{ asset ('vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('vendors/css/file-uploaders/dropzone.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('vendors/css/tables/datatable/datatables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('vendors/css/tables/datatable/extensions/dataTables.checkboxes.css ') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset ('css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/plugins/file-uploaders/dropzone.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/pages/data-list-view.css') }}">
   
    
@endpush
