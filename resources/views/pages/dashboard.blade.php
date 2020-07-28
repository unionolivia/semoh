@extends('layouts/contentLayoutMaster') <!-- choose any one option {contentLayoutMaster/fullLayoutMaster} -->

@section('title', 'Dashboard')  <!-- change title accordingly-->

@section('content')
<section>
<div class="mb-3">  
  <a class="btn btn-custom" href="/dashboard">Daimond Terrace 1</a>
  <a class="btn btn-custom" href="/dashboard">Marvel Court</a>
  <a class="btn btn-custom" href="/dashboard">Magodo Crest</a>
  <a class="btn btn-custom" href="/dashboard">Marvel Court 2</a>
  <a class="btn btn-custom" href="/dashboard">Leverage Place 1</a>
</div>
  
</section>
<section>
  <div class="row match-height">
      <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="card bg-analytics text-white">
          <div class="card-content">
            <div class="card-body text-center">
              <img src="../images/elements/Diamond-terrace.svg" class="img-fluid" alt="card-img">  
            </div>
          </div>
        </div>
      </div>  
      <div class="col-lg-6 col-md-12 col-sm-12">
      <div class="card bg-analytics text-white">
        <div class="card-content">
          <div class="card-body embed-responsive embed-responsive-item embed-responsive-16by9">
            <iframe class="img-thumbnail" src="https://www.youtube.com/embed/vTlSEMdC5qw" allowfullscreen></iframe>
            {{-- <img src="../images/elements/Live-feed.svg" class="img-fluid" alt="card-img">   --}}
          </div>
        </div>
      </div>
    </div>
</div> 
</section>

<section id="dashboard-analytics">
  <div class="row match-height">
      <div class="col-lg-6 col-md-12 col-sm-12">
      <div class="card bg-analytics">
        <div class="card-header">
          <h4 class="card-title">Activity Timeline</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <ul class="activity-timeline timeline-left list-unstyled">
              <li>
                <div class="timeline-icon bg-primary">
                  <i class="feather icon-plus font-medium-2 align-middle"></i>
                </div>
                <div class="timeline-info">
                  <p class="font-weight-bold mb-0">Client Meeting</p>
                  <span class="font-small-3">Bonbon macaroon jelly beans gummi bears jelly lollipop apple</span>
                </div>
                <small class="text-muted">25 mins ago</small>
              </li>
              <li>
                <div class="timeline-icon bg-warning">
                  <i class="feather icon-alert-circle font-medium-2 align-middle"></i>
                </div>
                <div class="timeline-info">
                  <p class="font-weight-bold mb-0">Email Newsletter</p>
                  <span class="font-small-3">Cupcake gummi bears soufflé caramels candy</span>
                </div>
                <small class="text-muted">15 days ago</small>
              </li>
              <li>
                <div class="timeline-icon bg-danger">
                  <i class="feather icon-check font-medium-2 align-middle"></i>
                </div>
                <div class="timeline-info">
                  <p class="font-weight-bold mb-0">Plan Webinar</p>
                  <span class="font-small-3">Candy ice cream cake. Halvah gummi bears</span>
                </div>
                <small class="text-muted">20 days ago</small>
              </li>             
            </ul>
          </div>
          
        </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="card">
          <div class="card-content">
              <div class="card-body">
                  <div class="row pb-50">
                      <div class="col-lg-6 col-12 d-flex justify-content-between flex-column order-lg-1 order-2 mt-lg-0 mt-2">
                          <div>
                              <h2 class="text-bold-700 mb-25">₦ 2,500,00.00</h2>
                              <p class="text-bold-500 mb-75">Investment till date</p>
                              <h5 class="font-medium-2">
                                  <span class="text-success">10 Units</span>
                                  <span style="font-size:10px">vs 140 units outstanding</span>
                              </h5>
                          </div>
                          <a href="#" class="btn btn-primary shadow">Invite an Investor <i class="feather icon-chevrons-right"></i></a>
                      </div>
                      <div class="col-lg-6 col-12 d-flex justify-content-between flex-column text-right order-lg-2 order-1">
                          <div class="dropdown chart-dropdown">
                              <button class="btn btn-sm border-0 dropdown-toggle p-0" type="button" id="dropdownItem5"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Last 7 Days
                              </button>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem5">
                                <a class="dropdown-item" href="#">Last 28 Days</a>
                                <a class="dropdown-item" href="#">Last Month</a>
                                <a class="dropdown-item" href="#">Last Year</a>
                              </div>
                          </div>
                          <div id="avg-session-chart"></div>
                      </div>
                  </div>
                  <hr/>
                  <div class="row avg-sessions pt-50">
                      <div class="col-6">
                          <p class="mb-0">Goal: ₦ 36,300,00.00</p>
                          <div class="progress progress-bar-primary mt-25">
                            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="50" aria-valuemax="100"
                              style="width:50%"></div>
                          </div>
                      </div>
                      <div class="col-6">
                          <p class="mb-0">Subscribers: 15</p>
                          <div class="progress progress-bar-warning mt-25">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="60" aria-valuemax="100"
                              style="width:60%"></div>
                          </div>
                      </div>
                      <div class="col-6">
                          <p class="mb-0">Return on Investment: 17.5%</p>
                          <div class="progress progress-bar-danger mt-25">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="70" aria-valuemax="100"
                              style="width:70%"></div>
                          </div>
                      </div>
                      <div class="col-6">
                          <p class="mb-0">Estimated Duration: 1yr</p>
                          <div class="progress progress-bar-success mt-25">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="90" aria-valuemax="100"
                              style="width:90%"></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
      
  </div>  
  <div class="row match-height">      
      
    <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="mb-0">Market Place Orders</h4>
        </div>
        <div class="card-content">
          <div class="table-responsive mt-1">
            <table class="table table-hover-animation mb-0">
              <thead>
                <tr>
                  <th>ORDER</th>
                  <th>STATUS</th>
                  <th>AGENTS</th>
                  <th>LOCATION</th>
                  <th>PRICE</th>                 
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
  
</section>
@endsection

@push('scripts')
    
@endpush