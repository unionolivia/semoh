@extends('layouts/contentLayoutMaster') <!-- choose any one option {contentLayoutMaster/fullLayoutMaster} -->

@section('title', 'Commission')  <!-- change title accordingly-->

@section('content')


<div class="content-detached content-left">
  <div class="row">
    <div class="col-lg-4 col-sm-6 col-12">
        <div class="card">
            <div class="card-header d-flex align-items-start pb-0">
                <div>
                    <h2 class="text-bold-700">&#8358;780,109</h2>
                    <p>Total Commission Received</p>
                </div>
                <div class="avatar bg-rgba-success p-50">
                    <div class="avatar-content">
                        <i class="text-primary font-medium-5">&#8358;</i>
                    </div>
                </div>
            </div>            
        </div>
    </div>
    <div class="col-lg-4 col-sm-6 col-12">
        <div class="card">
            <div class="card-header d-flex align-items-start pb-0">
                <div>
                    <h2 class="text-bold-700">12</h2>
                    <p>Pending Projects</p>
                </div>
                <div class="avatar bg-rgba-primary p-50">
                    <div class="avatar-content">
                        <i class="feather icon-trending-up text-success font-medium-5"></i>
                    </div>
                </div>
            </div>            
        </div>
    </div>   
  </div>
  <section id="bg-variants">
    <div class="row">
        <div class="col-12 mt-1 mb-1">
            <h4 class="text-uppercase"> Projects</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12  ">
            <div class="card">
                <div class="card-content d-flex">
                    <div class="card-body">
                        <img src="../images/elements/apple-watch.png" alt="element 01" width="150" class="float-left px-1">
                        
                        <div class="item-name">
                          <span>Diamond Terrace - Diamond Estate</span>
                          <p class="item-company">By <span class="company-name">1000Homes</span></p>
                      </div>
                        <div>
                          <p class="item-description">
                             Diamond terrace 1 is a uniquely designed contemporary terrace apartments that provide all the basics
                             requirements of a growing family. The spaces are large enough yet compact and very functional 
                             without trading off aesthetics.
                          </p>
                          <div class="d-flex flex-row">
                            <div class="col-sm-6">
                              <i class="mb-0 fa fa-money"> Goal: &#8358;100,000</i>
                                <div class="progress progress-bar-primary mt-25">
                                  <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="50" aria-valuemax="100" style="width:50%"></div>
                                </div>                                                               
                            </div>
                            <div class="col-sm-6 mt-1">
                              <a href="#exampleModalLong"  data-toggle="modal">learn more <i class="feather icon-arrow-right"></i></a>
                            </div>                             
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="col-lg-8 col-md-8 col-sm-12  ">
          <div class="card">
              <div class="card-content d-flex">
                  <div class="card-body">
                      <img src="../images/elements/apple-watch.png" alt="element 01" width="150" class="float-left px-1">
                      
                      <div class="item-name">
                        <span>Diamond Terrace - Diamond Estate</span>
                        <p class="item-company">By <span class="company-name">1000Homes</span></p>
                    </div>
                      <div>
                        <p class="item-description">
                           Diamond terrace 1 is a uniquely designed contemporary terrace apartments that provide all the basics
                           requirements of a growing family. The spaces are large enough yet compact and very functional 
                           without trading off aesthetics.
                        </p>
                        <div class="d-flex flex-row">
                          <div class="col-sm-6">
                            <i class="mb-0 fa fa-money"> Goal: &#8358;100,000</i>
                              <div class="progress progress-bar-primary mt-25">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="50" aria-valuemax="100" style="width:50%"></div>
                                
                              </div>                              
                          </div> 
                          <div class="col-sm-6 mt-1">
                            <a href="#exampleModalLong"  data-toggle="modal">learn more <i class="feather icon-arrow-right"></i></a>
                          </div>                            
                      </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>               
    </div>
  </section>
</div>

         
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">              
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <h4 class="card-title">Carousel</h4>
                            <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                        </div>
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img src="../images/slider/01.jpg" class="d-block w-100" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img src="../images/slider/02.jpg" class="d-block w-100" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img src="../images/slider/03.jpg" class="d-block w-100" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
                                <span class="fa fa-angle-left icon-prev" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
                                <span class="fa fa-angle-right icon-next" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt assumenda mollitia
                                officia dolorum eius quasi.</p>
                        </div>
                    </div>
                    <div class="card-content">                      
                      <div class="card-body">
                        <h4>Milestones</h4>
                          <ul class="activity-timeline timeline-left list-unstyled">
                              <li>
                                  <div class="timeline-icon bg-primary">
                                      <i class="feather icon-plus font-medium-2"></i>
                                  </div>
                                  <div class="timeline-info">
                                      <p class="font-weight-bold">Task Added</p>
                                      <span>Bonbon macaroon jelly beans gummi bears jelly lollipop apple</span>
                                  </div>
                                  <small class="">25 days ago</small>
                              </li>
                              <li>
                                  <div class="timeline-icon bg-warning">
                                      <i class="feather icon-alert-circle font-medium-2"></i>
                                  </div>
                                  <div class="timeline-info">
                                      <p class="font-weight-bold">Task Updated</p>
                                      <span>Cupcake gummi bears soufflé caramels candy</span>
                                  </div>
                                  <small class="">15 days ago</small>
                              </li>
                              <li>
                                  <div class="timeline-icon bg-success">
                                      <i class="feather icon-check font-medium-2"></i>
                                  </div>
                                  <div class="timeline-info">
                                      <p class="font-weight-bold">Task Completed</p>
                                      <span>Candy ice cream cake. Halvah gummi bears
                                      </span>
                                  </div>
                                  <small class="">20 minutes ago</small>
                              </li>
                          </ul>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header d-flex flex-column align-items-start pb-0">
                                <div class="avatar bg-rgba-primary p-50 m-0">
                                    <div class="avatar-content">
                                        <i class="feather icon-users text-primary font-medium-5"></i>
                                    </div>
                                </div>
                                <h2 class="text-bold-700 mt-1">92.6k</h2>
                                <p class="mb-0">Subscribers Gained</p>
                            </div>
                            <div class="card-content">
                                <div id="line-area-chart-1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header d-flex flex-column align-items-start pb-0">
                                <div class="avatar bg-rgba-success p-50 m-0">
                                    <div class="avatar-content">
                                        <i class="feather icon-credit-card text-success font-medium-5"></i>
                                    </div>
                                </div>
                                <h2 class="text-bold-700 mt-1">97.5k</h2>
                                <p class="mb-0">Revenue Generated</p>
                            </div>
                            <div class="card-content">
                                <div id="line-area-chart-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
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
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
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
                    </div>
                </div>
                </div>                              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Accept</button>
            </div>
        </div>
    </div>
</div>
          


@endsection

@push('scripts')

<link rel="stylesheet" type="text/css" href="vendors/css/extensions/nouislider.min.css">
<link rel="stylesheet" type="text/css" href="vendors/css/forms/select/select2.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/pages/app-ecommerce-shop.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/modalextra.css') }}">

<script src="vendors/js/extensions/Wnumb.js"></script>
<script src="vendors/js/extensions/nouislider.min.js"></script>
<script src="vendors/js/forms/select/select2.min.js"></script>
<!-- Page Specific JS -->
<script src="{{ asset('js/scripts/pages/app-ecommerce-shop.js') }}"></script>
@endpush