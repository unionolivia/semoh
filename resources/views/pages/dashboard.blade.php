@extends('layouts/contentLayoutMaster') <!-- choose any one option {contentLayoutMaster/fullLayoutMaster} -->

@section('title', 'Dashboard')  <!-- change title accordingly-->

@section('content')

<section id="dashboard-analytics">
  <div class="row">   
    <div class="col-lg-3 col-md-6 col-12">
      <div class="card">
            <div class="card-header d-flex flex-column align-items-start pb-0">
                <div class="avatar bg-rgba-primary p-50 m-0">
                    <div class="avatar-content">
                        <i class="feather icon-users text-primary font-medium-5"></i>
                    </div>
                </div>
                <h2 class="text-bold-700 mt-1 mb-25">{{ $countmembers }}</h2>
                <p class="mb-0">Existing Members</p>
            </div>
            {{-- <div class="card-content">
                <div id="subscribe-gain-chart"></div>
            </div> --}}
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-12">
      <div class="card">
          <div class="card-header d-flex flex-column align-items-start pb-0">
              <div class="avatar bg-rgba-primary p-50 m-0">
                  <div class="avatar-content">
                      <i class="feather icon-users text-primary font-medium-5"></i>
                  </div>
              </div>
              <h2 class="text-bold-700 mt-1 mb-25">0</h2>
              <p class="mb-0">New Members <span class="badge badge-success">New</span></p>
          </div>          
          {{-- <div class="card-content match-height">
              <div id="subscribe-gain-chart"></div>
          </div> --}}
      </div>
  </div>  
  <div class="col-lg-3 col-md-6 col-12">
        <div class="card">
            <div class="card-header d-flex flex-column align-items-start pb-0">
                <div class="avatar bg-rgba-primary p-50 m-0">
                    <div class="avatar-content">
                        <i class="feather icon-home text-primary font-medium-5"></i>
                    </div>
                </div>
                <h2 class="text-bold-700 mt-1 mb-25">{{ $countextensions }}</h2>
                <p class="mb-0">Extensions</p>
            </div>
            {{-- <div class="card-content">
                <div id="subscribe-gain-chart"></div>
            </div> --}}
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-12">
        <div class="card">
            <div class="card-header d-flex flex-column align-items-start pb-0">
                <div class="avatar bg-rgba-warning p-50 m-0">
                    <div class="avatar-content">
                        <i class="feather icon-package text-warning font-medium-5"></i>
                    </div>
                </div>
                <h2 class="text-bold-700 mt-1 mb-25">5</h2>
                <p class="mb-0">Appointment Booking</p>
            </div>
            {{-- <div class="card-content">
                <div id="orders-received-chart"></div>
            </div> --}}
        </div>
    </div>
</div>
<div class="row">   
  <div class="col-lg-3 col-md-6 col-12">
    <div class="card">
          <div class="card-header d-flex flex-column align-items-start pb-0">
              <div class="avatar bg-rgba-danger p-50 m-0">
                  <div class="avatar-content">
                      <i class="feather icon-bell text-danger font-medium-5"></i>
                  </div>
              </div>
              <h2 class="text-bold-700 mt-1 mb-25">5</h2>
              <p class="mb-0">Notifications <span class="badge badge-danger">New</span></p>
          </div>
          {{-- <div class="card-content">
              <div id="subscribe-gain-chart"></div>
          </div> --}}
      </div>
  </div>
  <div class="col-lg-3 col-md-6 col-12">
    <div class="card">
        <div class="card-header d-flex flex-column align-items-start pb-0">
            <div class="avatar bg-rgba-success p-50 m-0">
                <div class="avatar-content">
                    <i class="feather icon-calendar text-success font-medium-5"></i>
                </div>
            </div>
            <h4 class="text-bold-700 mt-1 mb-25">6days</h4>
            <p class="mb-0">Next Event: <a href="/events"><span class="badge badge-warning">DOSSOM</span></p></a> 
        </div>
        {{-- <div class="card-content">
            <div id="subscribe-gain-chart"></div>
        </div> --}}
    </div>
</div>  
<div class="col-lg-3 col-md-6 col-12">
      <div class="card">
          <div class="card-header d-flex flex-column align-items-start pb-0">
              <div class="avatar bg-rgba-primary p-50 m-0">
                  <div class="avatar-content">
                      <i class="feather icon-cloud text-primary font-medium-5"></i>
                  </div>
              </div>
              <h2 class="text-bold-700 mt-1 mb-25">23</h2>
              <p class="mb-0">Prayer requests</p>
          </div>
          {{-- <div class="card-content">
              <div id="subscribe-gain-chart"></div>
          </div> --}}
      </div>
  </div>
  <div class="col-lg-3 col-md-6 col-12">
      <div class="card">
          <div class="card-header d-flex flex-column align-items-start pb-0">
              <div class="avatar bg-rgba-warning p-50 m-0">
                  <div class="avatar-content">
                      <i class="feather icon-file-text text-warning font-medium-5"></i>
                  </div>
              </div>
              <h2 class="text-bold-700 mt-1 mb-25">55</h2>
              <p class="mb-0">Testimonies</p>
          </div>
          {{-- <div class="card-content">
              <div id="orders-received-chart"></div>
          </div> --}}
      </div>
  </div>
</div>
<div class="row match-height">
  <div class="col-md-6 col-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Reports</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <ul class="activity-timeline timeline-left list-unstyled">
              <li>
                <div class="timeline-icon bg-primary">
                  <i class="feather icon-plus font-medium-2 align-middle"></i>
                </div>
                <div class="timeline-info">
                  <p class="font-weight-bold mb-0">LightHouse Midweek Report</p>
                  <span class="font-small-3">Bonbon macaroon jelly beans gummi bears jelly lollipop apple</span>
                </div>
                <small class="text-muted">25 mins ago</small>
              </li>
              <li>
                <div class="timeline-icon bg-warning">
                  <i class="feather icon-alert-circle font-medium-2 align-middle"></i>
                </div>
                <div class="timeline-info">
                  <p class="font-weight-bold mb-0">Akure Midweek Report</p>
                  <span class="font-small-3">Cupcake gummi bears soufflé caramels candy</span>
                </div>
                <small class="text-muted">15 days ago</small>
              </li>
              <li>
                <div class="timeline-icon bg-danger">
                  <i class="feather icon-check font-medium-2 align-middle"></i>
                </div>
                <div class="timeline-info">
                  <p class="font-weight-bold mb-0">Ghana Midweek Report</p>
                  <span class="font-small-3">Candy ice cream cake. Halvah gummi bears</span>
                </div>
                <small class="text-muted">20 days ago</small>
              </li>
              <li>
                <div class="timeline-icon bg-success">
                  <i class="feather icon-check font-medium-2 align-middle"></i>
                </div>
                <div class="timeline-info">
                  <p class="font-weight-bold mb-0">ILe Ife Children Church Report</p>
                  <span class="font-small-3">Candy ice cream cake. </span>
                </div>
                <small class="text-muted">25 days ago</small>
              </li>
              <li>
                <div class="timeline-icon bg-primary">
                  <i class="feather icon-check font-medium-2 align-middle"></i>
                </div>
                <div class="timeline-info">
                  <p class="font-weight-bold mb-0">Osogbo Church Midweek Report</p>
                  <span class="font-small-3">Candy ice cream. Halvah bears Cupcake gummi bears.</span>
                </div>
                <small class="text-muted">28 days ago</small>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-6">
      <div class="card">
        <div class="card-header">
          <h4 class="mb-0">Requisition Request</h4>
        </div>
        <div class="card-content">
          <div class="table-responsive mt-1">
            <table class="table table-hover-animation mb-0">
              <thead>
                <tr>
                  <th>ORDER</th>
                  <th>ITEM NAME</th>
                  <th>REQUESTED BY</th>
                  <th>DESCRIPTION/PURPOSE</th>
                  <th>PRICE</th> 
                  <TH>STATUS</TH>  
                  <th>ACTION</th>              
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>#879985</td>
                  <td><i class="fa fa-circle font-small-3 text-success mr-50"></i>Sell</td>
                  <td class="p-1">
                    <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                      <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                      data-original-title="Vinnie Mostowy" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="../images/portrait/small/avatar-s-5.png" alt="Avatar" height="30" width="30">
                      </li>
                      <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                      data-original-title="Elicia Rieske" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="../images/portrait/small/avatar-s-7.png" alt="Avatar" height="30" width="30">
                      </li>                      
                    </ul>
                  </td>
                  <td>Sangotedo, Lagos</td>
                  <td>
                    <span>40M</span>
                    <div class="progress progress-bar-success mt-1 mb-0">
                      <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </td>                  
                </tr>
                <tr>
                  <td>#156897</td>
                  <td><i class="fa fa-circle font-small-3 text-warning mr-50"></i>Pending</td>
                  <td class="p-1">
                    <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                      <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                      data-original-title="Trina Lynes" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="../images/portrait/small/avatar-s-1.png" alt="Avatar" height="30" width="30">
                      </li>
                      <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                      data-original-title="Lilian Nenez" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="../images/portrait/small/avatar-s-2.png" alt="Avatar" height="30" width="30">
                      </li>
                      <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                      data-original-title="Alberto Glotzbach" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="../images/portrait/small/avatar-s-3.png" alt="Avatar" height="30" width="30">
                      </li>
                    </ul>
                  </td>
                  <td>Ile Ife, Osun State</td>
                  <td>
                    <span>23M</span>
                    <div class="progress progress-bar-warning mt-1 mb-0">
                      <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </td>                  
                </tr>
                <tr>
                  <td>#568975</td>
                  <td><i class="fa fa-circle font-small-3 text-success mr-50"></i>Selling</td>
                  <td class="p-1">
                    <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                      <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                      data-original-title="Lai Lewandowski" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="../images/portrait/small/avatar-s-6.png" alt="Avatar" height="30" width="30">
                      </li>
                      <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                      data-original-title="Elicia Rieske" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="../images/portrait/small/avatar-s-7.png" alt="Avatar" height="30" width="30">
                      </li>
                      <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                      data-original-title="Darcey Nooner" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="../images/portrait/small/avatar-s-8.png" alt="Avatar" height="30" width="30">
                      </li>                     
                    </ul>
                  </td>
                  <td>Akure, Ondo State</td>
                  <td>
                    <span>63M</span>
                    <div class="progress progress-bar-success mt-1 mb-0">
                      <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </td>                 
                </tr>
                <tr>
                  <td>#245689</td>
                  <td><i class="fa fa-circle font-small-3 text-danger mr-50"></i>Canceled</td>
                  <td class="p-1">
                    <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                      <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                      data-original-title="Vinnie Mostowy" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="../images/portrait/small/avatar-s-5.png" alt="Avatar" height="30" width="30">
                      </li>
                      <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                      data-original-title="Elicia Rieske" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="../images/portrait/small/avatar-s-7.png" alt="Avatar" height="30" width="30">
                      </li>
                    </ul>
                  </td>
                  <td>Magodo, Lagos</td>
                  <td>
                    <span>125M</span>
                    <div class="progress progress-bar-danger mt-1 mb-0">
                      <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </td>                  
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    
  </div>
</section>
@endsection

@push('scripts')
   
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/charts/apexcharts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/extensions/tether-theme-arrows.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/extensions/tether.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('vendors/css/extensions/shepherd-theme-default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/pages/dashboard-analytics.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/pages/card-analytics.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/plugins/tour/tour.css')}}">



    <!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('vendors/js/charts/apexcharts.min.js')}}"></script>
    <script src="{{ asset('vendors/js/extensions/tether.min.js')}}"></script>
    <script src="{{ asset('vendors/js/extensions/shepherd.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('js/scripts/pages/dashboard-analytics.js')}}"></script>




@endpush
