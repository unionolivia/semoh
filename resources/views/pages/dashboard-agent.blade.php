@extends('layouts/contentLayoutMaster') <!-- choose any one option {contentLayoutMaster/fullLayoutMaster} -->

@section('title', 'Dashboard')  <!-- change title accordingly-->

@section('content')
<section>
<div class="mb-1">  
  <a class="btn btn-custom" href="/dashboard">Daimond Terrace 1</a>
  <a class="btn btn-custom" href="/dashboard">Marvel Court</a>
  <a class="btn btn-custom" href="/dashboard">Magodo Crest</a>
  <a class="btn btn-custom" href="/dashboard">Marvel Court 2</a>
  <a class="btn btn-custom" href="/dashboard">Leverage Place 1</a>
</div>  
</section>
<section id="decks">
  <div class="row">
      <div class="col-12 mt-1 mb-1">
          <h4 class="text-uppercase">Decks</h4>
      </div>
  </div>
  <div class="row">
      <div class="col-12">
          <div class="card-deck-wrapper">
              <div class="card-deck">
                  <div class="card">
                      <div class="card-content">
                          <img class="card-img-top img-fluid" src="../images/slider/01.jpg" alt="Card image cap" />
                          <div class="card-body">
                              <h4 class="card-title">Card title</h4>
                              <p class="card-text">This card has supporting text below as a natural lead-in to
                                  additional content.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-content">
                          <img class="card-img-top img-fluid" src="../images/slider/04.jpg" alt="Card image cap" />
                          <div class="card-body">
                              <h4 class="card-title">Card title</h4>
                              <p class="card-text">This card has supporting text below as a natural lead-in to
                                  additional content.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-content">
                          <img class="card-img-top img-fluid" src="../images/slider/05.jpg" alt="Card image cap" />
                          <div class="card-body">
                              <h4 class="card-title">Card title</h4>
                              <p class="card-text">This card has supporting text below as a natural lead-in to
                                  additional content.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-content">
                          <img class="card-img-top img-fluid" src="../images/slider/06.jpg" alt="Card image cap" />
                          <div class="card-body">
                              <h4 class="card-title">Card title</h4>
                              <p class="card-text">This card has supporting text below as a natural lead-in to
                                  additional content.</p>
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Decks section end -->

<section id="dashboard-analytics mt-1">
   
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
                  <th>PROJECT NAME</th>                 
                  <th>OFFER</th>                 
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