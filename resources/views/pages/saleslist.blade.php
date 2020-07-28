@extends('layouts/contentLayoutMaster')

@section('title', 'Sales')
@section('content')

<div class="d-flex flex-row justify-content-end">
    <a href="#" class="btn btn-custom mb-2 rounded-xl ">Add new sale +</a>
</div>
<div class="card">    
    <div class="card-content">
      <div class="table-responsive mt-1">
        <table class="table table-hover-animation mb-0">
          <thead>
            <tr>
              <th>CLIENT</th>
              <th>AGENTS NAME</th>
              <th>HOUSE TYPE</th>
              <th>PROJECT NAME</th>
              <th>TERMS</th>
              <th>COST PRICE</th> 
              <th>OFFER</th>  
              <th>DECISION</th>              
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Sisanmi Smith</td>
              <td>Kanyinsola Adekunel</td>
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
              <td>
                <span>70M</span>
                <div class="progress progress-bar-success mt-1 mb-0">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </td>
              <td>
                <a href="#" class="btn btn-outline-primary">Accept/Reject</a>      
            </td>                  
            </tr>
            <tr>
                <td>Sisanmi Smith</td>
                <td>Kanyinsola Adekunel</td>
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
              <td>
                <span>43M</span>
                <div class="progress progress-bar-warning mt-1 mb-0">
                  <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </td> 
              <td>
                <a href="#" class="btn btn-outline-primary">Accept/Reject</a>      
            </td>                  
            </tr>
            <tr>
                <td>Sisanmi Smith</td>
                <td>Kanyinsola Adekunel</td>
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
              <td>
                <span>83M</span>
                <div class="progress progress-bar-success mt-1 mb-0">
                  <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </td>
              <td>
                <a href="#" class="btn btn-outline-primary">Accept/Reject</a>      
            </td>                 
            </tr>
            <tr>
                <td>Sisanmi Smith</td>
                <td>Kanyinsola Adekunel</td>
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
              <td>
                <span>225M</span>
                <div class="progress progress-bar-danger mt-1 mb-0">
                  <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </td>
              <td>
                <a href="#" class="btn btn-outline-primary">Accept/Reject</a>      
            </td>                   
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
    
@endsection