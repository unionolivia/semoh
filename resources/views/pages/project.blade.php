@extends('layouts/contentLayoutMaster') <!-- choose any one option {contentLayoutMaster/fullLayoutMaster} -->

@section('title', 'Projects')  <!-- change title accordingly-->

@section('content')
<section id="ecommerce-products" class="grid-view">

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
        <div class="wishlist">
          <i class="fa fa-heart-o"></i> <span>Wishlist</span>
        </div>
        <div class="cart">
          <i class="feather icon-shopping-cart"></i> <span class="add-to-cart">Subcribe Now</span> <a
            href="{{url('viewincart')}}" class="view-in-cart d-none">View In Cart</a>
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
              ₦ 42,600,000.00
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
              ₦ 42,600,000.00
            </h6>
          </div>
        </div>
        <div class="wishlist">
          <i class="fa fa-heart-o"></i> <span>Wishlist</span>
        </div>
        <div class="cart">
          <i class="feather icon-shopping-cart"></i> <span class="add-to-cart">Subcribe Now</span> <a
            href="viewincart" class="view-in-cart d-none">View In Cart</a>
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
        <div class="wishlist">
          <i class="fa fa-heart-o"></i> <span>Wishlist</span>
        </div>
        <div class="cart">
          <i class="feather icon-shopping-cart"></i> <span class="add-to-cart">Subcribe Now</span> <a
            href="viewincart" class="view-in-cart d-none">View In Cart</a>
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
              ₦ 42,600,000.00
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
              ₦ 42,600,000.00
            </h6>
          </div>
        </div>
        <div class="wishlist">
          <i class="fa fa-heart-o"></i> <span>Wishlist</span>
        </div>
        <div class="cart">
          <i class="feather icon-shopping-cart"></i> <span class="add-to-cart">Subcribe Now</span> <a
            href="viewincart" class="view-in-cart d-none">View In Cart</a>
        </div>
      </div>
    </div>
  </div>




</section>
@endsection

@push('scripts')

<link rel="stylesheet" type="text/css" href="vendors/css/extensions/nouislider.min.css">
<link rel="stylesheet" type="text/css" href="vendors/css/forms/select/select2.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/pages/app-ecommerce-shop.css') }}">

<script src="vendors/js/extensions/Wnumb.js"></script>
<script src="vendors/js/extensions/nouislider.min.js"></script>
<script src="vendors/js/forms/select/select2.min.js"></script>
<!-- Page Specific JS -->
<script src="{{ asset('js/scripts/pages/app-ecommerce-shop.js') }}"></script>
@endpush