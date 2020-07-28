<!-- Description -->
@extends('layouts/contentLayoutMaster')

@section('title', 'View users')

@section('content')
<div class="row">
  <div class="col-md-8 col-12">
      <div class="card">
          <div class="card-header">
              <h4>Users</h4>
              
          </div>
          <div class="card-body">   
            <table class="table table-hover ">
              <thead>
                <tr>
                  <th>User ID</th>
                  <th>Fullname</th>
                  <th>Email</th>
                  <th>Created</th>
                </tr>
              </thead>
              @if(count($user) > 0)
              @foreach($user as $user) 
              <tbody>
                <tr>
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->created_at }}</td>
                  
                </tr> 
                @endforeach 
                @else
              <p>No user found</p>
              @endif  
              </tbody>
            </table>
          </div>
      </div>
  </div> 
</div>
@endsection

@push('scripts')
<!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/plugins/file-uploaders/dropzone.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/pages/data-list-view.css') }}">


    <script src="{{asset ('vendors/js/extensions/dropzone.min.js') }}"></script>
    <script src="{{asset ('vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{asset ('vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{asset ('vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    <script src="{{asset ('vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
    <script src="{{asset ('vendors/js/tables/datatable/datatables.checkboxes.min.js') }}"></script>
<!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS
    <script src="{{asset ('js/core/app-menu.js') }}"></script>
    <script src="{{asset ('js/core/app.js') }}"></script>
    <script src="{{asset ('js/scripts/components.js') }}"></script>
     END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset ('js/scripts/ui/data-list-view.js') }}"></script>
@endpush