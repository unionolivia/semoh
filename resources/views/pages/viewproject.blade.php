@extends('layouts/contentLayoutMaster') <!-- choose any one option {contentLayoutMaster/fullLayoutMaster} -->

@section('title', 'Projects')  <!-- change title accordingly-->

@section('content')
<div class="content-detached">
    <div class="content-body">
        <!-- Ecommerce Content Section Starts -->
        <section id="ecommerce-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="ecommerce-header-items">
                        <div class="result-toggler">
                            <button class="navbar-toggler shop-sidebar-toggler" type="button" data-toggle="collapse">
                                <span class="navbar-toggler-icon d-block d-lg-none"><i class="feather icon-menu"></i></span>
                            </button>
                            <div class="search-results">
                                16285 results found
                            </div>
                        </div>
                        <div class="view-options">
                            <select class="price-options form-control" id="ecommerce-price-options">
                                <option selected>Featured</option>
                                <option value="1">Lowest</option>
                                <option value="2">Highest</option>
                            </select>
                            <div class="view-btn-option">
                                <button class="btn btn-white view-btn grid-view-btn active">
                                    <i class="feather icon-grid"></i>
                                </button>
                                <button class="btn btn-white list-view-btn view-btn">
                                    <i class="feather icon-list"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Ecommerce Content Section Starts -->
        <!-- background Overlay when sidebar is shown  starts-->
        <div class="shop-content-overlay"></div>
        <!-- background Overlay when sidebar is shown  ends-->

        <!-- Ecommerce Search Bar Starts -->
        <section id="ecommerce-searchbar">
            <div class="row mt-1">
                <div class="col-sm-12">
                    <fieldset class="form-group position-relative">
                        <input type="text" class="form-control search-product" id="iconLeft5" placeholder="Search here">
                        <div class="form-control-position">
                            <i class="feather icon-search"></i>
                        </div>
                    </fieldset>
                </div>
            </div>
        </section>
        <!-- Ecommerce Search Bar Ends -->
      <section id="ecommerce-products" class="list-view">
          <div class="card ecommerce-card">
            <div class="card-content">
                <div class="item-img text-center">
                    <img class="img-fluid" src="{{ asset('images/house2.png') }}" alt="img-placeholder">
                </div>
                <div class="card-body">
                    <div class="item-wrapper">
                        <div class="item-rating">
                            <div class="badge badge-primary badge-md">
                                <span>4</span> <i class="feather icon-star"></i>
                            </div>
                        </div>
                        <div>
                            <h6 class="item-price">
                                $39.99
                            </h6>
                        </div>
                    </div>
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
                          <div class="col-sm-6">
                            <i class="mb-0 fa fa-users"> Subscribers: 17</i>
                              <div class="progress progress-bar-warning mt-25">
                                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="60" aria-valuemax="100" style="width:60%"></div>
                              </div>
                          </div>
                      </div>
                    </div>
                </div>             
                <div class="item-options text-center">
                    <div class="item-wrapper">
                        <div class="item-rating">
                            <div class="badge badge-primary badge-md">
                                <span>4</span> <i class="feather icon-star"></i>
                            </div>
                        </div>
                        <div class="item-cost">
                            <h6 class="item-price">
                              &#8358;30,000,000.99
                            </h6>
                        </div>
                    </div>
                    <div class="wishlist">
                        <i class="fa fa-heart-o"></i> <span>Wishlist</span>
                    </div>
                    <div class="cart">
                      <i class="feather icon-shopping-cart"></i> <span class="add-to-cart">Add to cart</span><a href="#default" class="view-in-cart d-none" data-toggle="modal" data-target="#default">View Details</a>
                                               
                    </div>
                </div>
            </div>
        </div>
        <div class="card ecommerce-card">
          <div class="card-content">
              <div class="item-img text-center">
                  <img class="img-fluid" src="{{ asset('images/house2.png') }}" alt="img-placeholder">
              </div>
              <div class="card-body">
                  <div class="item-wrapper">
                      <div class="item-rating">
                          <div class="badge badge-primary badge-md">
                              <span>4</span> <i class="feather icon-star"></i>
                          </div>
                      </div>
                      <div>
                          <h6 class="item-price">
                              $39.99
                          </h6>
                      </div>
                  </div>
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
                          <i class="mb-0 fa fa-bullseye"> Goal: &#8358;100,000</i>
                            <div class="progress progress-bar-primary mt-25">
                              <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="50" aria-valuemax="100" style="width:50%"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <i class="mb-0 fa fa-users"> Subscribers: 12</i>
                            <div class="progress progress-bar-warning mt-25">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="60" aria-valuemax="100" style="width:60%"></div>
                            </div>
                        </div>
                    </div>
                  </div>
              </div>             
              <div class="item-options text-center">
                  <div class="item-wrapper">
                      <div class="item-rating">
                          <div class="badge badge-primary badge-md">
                              <span>4</span> <i class="feather icon-star"></i>
                          </div>
                      </div>
                      <div class="item-cost">
                          <h6 class="item-price">
                            &#8358;30,000,000.99
                          </h6>
                      </div>
                  </div>
                  <div class="wishlist">
                      <i class="fa fa-heart-o"></i> <span>Wishlist</span>
                  </div>
                  <div class="cart">
                    <i class="fa fa-home"><span>Subscribe Now</span></i><a href="#default" class="view-in-cart d-none" data-toggle="modal" data-target="#default">View Details</a>
                                             
                  </div>
              </div>
          </div>
      </div>
      </section>
    </div>
</div>
<div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel1">Basic Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <h5>Check First Paragraph</h5>
              <p>Diamond terrace 1 is a uniquely designed contemporary terrace apartments that provide all the basics requirements of a growing family. The spaces are large enough yet compact and very functional without trading off aesthetics.
                .</p>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Accept</button>
          </div>
      </div>
  </div>
</div>



{{-- <section id="ecommerce-products" class="grid-view">
<div class="card ecommerce-card">
    <div class="card-content">
      <div class="item-img text-center">
        <img src="{{ asset('images/house2.png') }}" style="height: 200px; width: 200px;" alt="img-placeholder">
      </div>
      <div class="card-body">
        <div class="item-wrapper">
          <div class="item-rating">
            <div class="badge badge-primary badge-md">
              4 <i class="feather icon-star ml-25"></i>
            </div>
          </div>
          <div>
            <h6 class="item-price">
            ₦36,300,00.00
            </h6>
          </div>
        </div>
        <div class="item-name">
          <span>Project Name</span>
          <p class="item-company">By <span class="company-name">Google</span></p>
        </div>
        <div>
          <p class="item-description">
            Location
          </p>
        </div>
      </div>
      <div class="item-options text-center">
        <div class="item-wrapper">
          <div class="item-rating">
            <div class="badge badge-primary badge-md">
              4 <i class="feather icon-star ml-25"></i>
            </div>
          </div>
          <div class="item-cost">
            <h6 class="item-price">
            ₦36,300,00.00
            </h6>
          </div>
        </div>
        <!-- <div class="wishlist">
          <i class="fa fa-heart-o"></i> <span>Wishlist</span>
        </div> -->
        <div class="cart">
          <i class="feather icon-home"></i> <span class="add-to-cart">Select project</span> <a
            href="{{url('updateproject')}}" class="view-in-cart d-none">Update Now</a>
        </div>
      </div>
    </div>
  </div>

  <div class="card ecommerce-card">
  <div class="card-content">
      <div class="item-img text-center">
        <img src="{{ asset('images/house2.png') }}" style="height: 200px; width: 200px;" alt="img-placeholder">
      </div>
      <div class="card-body">
        <div class="item-wrapper">
          <div class="item-rating">
            <div class="badge badge-primary badge-md">
              4 <i class="feather icon-star ml-25"></i>
            </div>
          </div>
          <div>
            <h6 class="item-price">
            ₦36,300,00.00
            </h6>
          </div>
        </div>
        <div class="item-name">
          <span>Project Name</span>
          <p class="item-company">By <span class="company-name">Google</span></p>
        </div>
        <div>
          <p class="item-description">
            Location
          </p>
        </div>
      </div>
      <div class="item-options text-center">
        <div class="item-wrapper">
          <div class="item-rating">
            <div class="badge badge-primary badge-md">
              4 <i class="feather icon-star ml-25"></i>
            </div>
          </div>
          <div class="item-cost">
            <h6 class="item-price">
            ₦36,300,00.00
            </h6>
          </div>
        </div>
        <!-- <div class="wishlist">
          <i class="fa fa-heart-o"></i> <span>Wishlist</span>
        </div> -->
        <div class="cart">
          <i class="feather icon-home"></i> <span class="add-to-cart">Select project</span> <a
            href="{{url('updateproject')}}" class="view-in-cart d-none">Update Now</a>
        </div>
      </div>
    </div>
  </div>


  <div class="card ecommerce-card">
  <div class="card-content">
      <div class="item-img text-center">
        <img src="{{ asset('images/house2.png') }}" style="height: 200px; width: 200px;" alt="img-placeholder">
      </div>
      <div class="card-body">
        <div class="item-wrapper">
          <div class="item-rating">
            <div class="badge badge-primary badge-md">
              4 <i class="feather icon-star ml-25"></i>
            </div>
          </div>
          <div>
            <h6 class="item-price">
            ₦36,300,00.00
            </h6>
          </div>
        </div>
        <div class="item-name">
          <span>Project Name</span>
          <p class="item-company">By <span class="company-name">Google</span></p>
        </div>
        <div>
          <p class="item-description">
            Location
          </p>
        </div>
      </div>
      <div class="item-options text-center">
        <div class="item-wrapper">
          <div class="item-rating">
            <div class="badge badge-primary badge-md">
              4 <i class="feather icon-star ml-25"></i>
            </div>
          </div>
          <div class="item-cost">
            <h6 class="item-price">
            ₦36,300,00.00
            </h6>
          </div>
        </div>
        <!-- <div class="wishlist">
          <i class="fa fa-heart-o"></i> <span>Wishlist</span>
        </div> -->
        <div class="cart">
          <i class="feather icon-home"></i> <span class="add-to-cart">Select project</span> <a
            href="{{url('updateproject')}}" class="view-in-cart d-none">Update Now</a>
        </div>
      </div>
    </div>
  </div>


  <div class="card ecommerce-card">
  <div class="card-content">
      <div class="item-img text-center">
        <img src="{{ asset('images/house2.png') }}" style="height: 200px; width: 200px;" alt="img-placeholder">
      </div>
      <div class="card-body">
        <div class="item-wrapper">
          <div class="item-rating">
            <div class="badge badge-primary badge-md">
              4 <i class="feather icon-star ml-25"></i>
            </div>
          </div>
          <div>
            <h6 class="item-price">
            ₦36,300,00.00
            </h6>
          </div>
        </div>
        <div class="item-name">
          <span>Project Name</span>
          <p class="item-company">By <span class="company-name">Google</span></p>
        </div>
        <div>
          <p class="item-description">
            Location
          </p>
        </div>
      </div>
      <div class="item-options text-center">
        <div class="item-wrapper">
          <div class="item-rating">
            <div class="badge badge-primary badge-md">
              4 <i class="feather icon-star ml-25"></i>
            </div>
          </div>
          <div class="item-cost">
            <h6 class="item-price">
            ₦36,300,00.00
            </h6>
          </div>
        </div>
        <!-- <div class="wishlist">
          <i class="fa fa-heart-o"></i> <span>Wishlist</span>
        </div> -->
        <div class="cart">
          <i class="feather icon-home"></i> <span class="add-to-cart">Select project</span> <a
            href="{{url('updateproject')}}" class="view-in-cart d-none">Update Now</a>
        </div>
      </div>
    </div>
  </div>




</section> --}}
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