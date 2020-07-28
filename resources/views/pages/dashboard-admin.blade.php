@extends('layouts/contentLayoutMaster') <!-- choose any one option {contentLayoutMaster/fullLayoutMaster} -->

@section('title', 'Dashboard')  <!-- change title accordingly-->

@section('content')
<div class="row card-body">
  <div class="mr-3 mb-n2 text-uppercase">
    <h3>Projects</h3>
  </div>
  
  <a href="/addproject" class="btn btn-custom mr-4 rounded" >Add a project <i class="fa fa-home"></i></a>
</div>
<div class="content-body">
  
  <!-- Statistics card section start -->
  <section id="statistics-card">
      <div class="row">
          <div class="col-lg-3 col-sm-6 col-12">
              <div class="card">
                  <div class="card-header d-flex flex-column align-items-start pb-0">
                    <h4 class="mt-1">Number of Projects</h4>
                      <div class="avatar bg-rgba-primary p-50 m-0">
                          <div class="avatar-content">
                            <i class="fa fa-home text-primary font-medium-5"></i>
                          </div>
                      </div>
                      <h2 class="text-bold-700 mt-1"> <span style="color:#8E4606">7,420</span></h2>
                      <a href="/viewproject" class="mb-1"> Learn more <i class="feather icon-arrow-right"></i></a>
                  </div>
                  <div class="card-content">
                      <div id="line-area-chart-1"></div>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-12">
              <div class="card">
                  <div class="card-header d-flex flex-column align-items-start pb-0">
                    <h4 class="mt-1">New Projects</h4>  
                    <div class="avatar bg-rgba-success p-50 m-0">
                          <div class="avatar-content">
                              <i class="feather icon-credit-card text-success font-medium-5"></i>
                          </div>
                      </div>
                      <h2 class="text-bold-700 mt-1"> <span style="color:#8E4606">7</span></h2>
                      <a href="/viewproject" class="mb-1"> Learn more <i class="feather icon-arrow-right"></i></a>                      
                  </div>
                  <div class="card-content">
                      <div id="line-area-chart-2"></div>
                  </div>
              </div>
          </div>
          {{-- <div class="col-lg-3 col-sm-6 col-12">
              <div class="card">
                  <div class="card-header d-flex flex-column align-items-start pb-0">
                      <div class="avatar bg-rgba-danger p-50 m-0">
                          <div class="avatar-content">
                              <i class="feather icon-shopping-cart text-danger font-medium-5"></i>
                          </div>
                      </div>
                      <h2 class="text-bold-700 mt-1">36%</h2>
                      <p class="mb-0">Quarterly Sales</p>
                  </div>
                  <div class="card-content">
                      <div id="line-area-chart-3"></div>
                  </div>
              </div>
          </div> --}}
          {{-- <div class="col-lg-3 col-sm-6 col-12">
              <div class="card">
                  <div class="card-header d-flex flex-column align-items-start pb-0">
                      <div class="avatar bg-rgba-warning p-50 m-0">
                          <div class="avatar-content">
                              <i class="feather icon-package text-warning font-medium-5"></i>
                          </div>
                      </div>
                      <h2 class="text-bold-700 mt-1">97.5K</h2>
                      <p class="mb-0">Orders Received</p>
                  </div>
                  <div class="card-content">
                      <div id="line-area-chart-4"></div>
                  </div>
              </div>
          </div> --}}
      </div>
      <div class="row card-body">
        <div class="mr-3 mb-n2 text-uppercase">
          <h3>Investments</h3>
        </div>
        
        <a href="/addproject" class="btn btn-custom mr-4 rounded" >Invite an Investor  <i class="feather icon-user-plus"></i></a>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-0">
                  <h4 class="mt-1">Total Investments</h4>
                    <div class="avatar bg-rgba-primary p-50 m-0">
                        <div class="avatar-content">
                          <i class="fa fa-money text-success font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="text-bold-700 mt-1"> <span style="color:#8E4606">&#8358;74,020,990</span></h2>
                    <a href="/viewproject" class="mb-1"> Learn more <i class="feather icon-arrow-right"></i></a>
                </div>
                <div class="card-content">
                    <div id="line-area-chart-1"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-0">
                  <h4 class="mt-1">Today's Investments</h4>  
                  <div class="avatar bg-rgba-danger p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather icon-credit-card text-danger font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="text-bold-700 mt-1"> <span style="color:#8E4606">&#8358;700,000</span></h2>
                    <a href="/viewproject" class="mb-1"> Learn more <i class="feather icon-arrow-right"></i></a>                      
                </div>
                <div class="card-content">
                    <div id="line-area-chart-2"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-0">
                  <h4 class="mt-1">Total Investors</h4>  
                    <div class="avatar bg-rgba-danger p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather icon-shopping-cart text-danger font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="text-bold-700 mt-1"> <span style="color:#8E4606">37</span></h2>
                    <a href="/viewproject" class="mb-1"> Learn more <i class="feather icon-arrow-right"></i></a>  
                </div>
                <div class="card-content">
                    <div id="line-area-chart-3"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-0">
                  <h4 class="mt-1">Today's Investors</h4>  
                    <div class="avatar bg-rgba-warning p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather icon-package text-warning font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="text-bold-700 mt-1"> <span style="color:#8E4606">4</span></h2>
                    <a href="/viewproject" class="mb-1"> Learn more <i class="feather icon-arrow-right"></i></a>  
                </div>
                <div class="card-content">
                    <div id="line-area-chart-4"></div>
                </div>
            </div>
        </div>
    </div>      
  </section>
  <!-- // Statistics Card section end-->

</div>  
</section>


<section id="dashboard-analytics">
    
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
                  <th>Customer Name</th>
                  <th>Agent Name</th>
                  <th>House Type</th>
                  <th>Price</th>
                  <th>Offer</th>
                  <th>Action</th>                 
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Funto Williams</td>
                  <td>Folashade Jacob</td>
                  <td class="p-1">
                    <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                      <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                      data-original-title="Vinnie Mostowy" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="../images/portrait/small/avatar-s-5.png" alt="Avatar" height="30" width="30">
                      </li>
                      <li class="ml-1">                         
                        <h4>Project name</h4>                      
                      </li>                                           
                    </ul>
                  </td>
                  <td>&#8358;47,000,000</td>
                  <td>
                    <span>&#8358;40M</span>
                    <div class="progress progress-bar-warning mt-1 mb-0">
                      <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </td> 
                  <td>
                    <div class="avatar bg-rgba-primary p-50 m-0">                      
                        <button class="btn btn-icon" type="button">
                          <i class="feather icon-more-vertical"></i>
                        </button>                                           
                    </div>
                    <div class="avatar bg-rgba-danger p-50 m-0">
                      <button class="btn btn-icon" type="button">
                        <i class="feather icon-trash-2"></i>
                      </button>
                    </div> 
                  </td>                 
                </tr>
                <tr>
                  <td>Funto Williams</td>
                  <td>Folashade Jacob</td>
                  <td class="p-1">
                    <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                      <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                      data-original-title="Vinnie Mostowy" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="../images/portrait/small/avatar-s-5.png" alt="Avatar" height="30" width="30">
                      </li>
                      <li class="ml-1">                         
                        <h4>Project name</h4>                      
                      </li>                                           
                    </ul>
                  </td>
                  <td>&#8358;47,000,000</td>
                  <td>
                    <span>&#8358;40M</span>
                    <div class="progress progress-bar-warning mt-1 mb-0">
                      <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </td> 
                  <td>
                    <div class="avatar bg-rgba-primary p-50 m-0">                      
                        <button class="btn btn-icon" type="button">
                          <i class="feather icon-more-vertical"></i>
                        </button>                                           
                    </div>
                    <div class="avatar bg-rgba-danger p-50 m-0">
                      <button class="btn btn-icon" type="button">
                        <i class="feather icon-trash-2"></i>
                      </button>
                    </div> 
                  </td>                 
                </tr>
                <tr>
                  <td>Funto Williams</td>
                  <td>Folashade Jacob</td>
                  <td class="p-1">
                    <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                      <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom"
                      data-original-title="Vinnie Mostowy" class="avatar pull-up">
                        <img class="media-object rounded-circle" src="../images/portrait/small/avatar-s-5.png" alt="Avatar" height="30" width="30">
                      </li>
                      <li class="ml-1">                         
                        <h4>Project name</h4>                      
                      </li>                                           
                    </ul>
                  </td>
                  <td>&#8358;47,000,000</td>
                  <td>
                    <span>&#8358;40M</span>
                    <div class="progress progress-bar-warning mt-1 mb-0">
                      <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </td> 
                  <td>
                    <div class="avatar bg-rgba-primary p-50 m-0">                      
                        <button class="btn btn-icon" type="button">
                          <i class="feather icon-more-vertical"></i>
                        </button>                                           
                    </div>
                    <div class="avatar bg-rgba-danger p-50 m-0">
                      <button class="btn btn-icon" type="button">
                        <i class="feather icon-trash-2"></i>
                      </button>
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