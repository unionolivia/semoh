<!-- Description -->
@extends('layouts/fullLayoutMaster')

@section('title', 'GLT-CIS')

@section('pageStyle')

    <link rel="stylesheet" href="{{ asset('css/pages/authentication.css') }}">

@endsection



@section('content')

<section class="row flexbox-container">
    <div class="col-xl-8 col-10 d-flex justify-content-center">
        <div class="card rounded-0 mb-0">
            <div class="row m-0">
                <div class="col-lg-6 d-lg-block d-none text-center align-self-center pl-0 pr-3 py-0">
                    <img src="../../../images/pages/setman.png" alt="branding logo">
                </div>
                <div class="col-lg-6 col-12 p-0">
                    <div class="card rounded-0 mb-0 p-2">
                        <div class="card-header pt-50 pb-1">
                            <div class="card-title">
                                <h4 class="mb-0">Welcome</h4>
                            </div>
                        </div>
                        <p class="px-2">God's Love Tarbernalce - Central Information System. <span class="strong"> GLT-CIS </span></p>
                        <div class="card-content">
                            <div class="card-body pt-0">
                                <p>We are called to preach and teach with all simplicity and clarity, New Creation Realities in Christ Jesus,
                                    stressing emphatically the integrity of God’s Word by the Power of the Holy Spirit.</p>
                                    <hr>
                                    <div>
                                        <a href="/login" class="btn btn-secondary"> Login </a>
                                        <a href="/register" class="btn btn-success">Register</a>
                                    </div>
                                
                            </div>
                        </div> 
                    </div>
                    <a href="http://glt.church" class="btn btn-default"> GLT CHURCH </a>
                    <a href="http://glt.church" class="btn btn-default"> SOTM </a>
                    <a href="http://gbs.glt.church" class="btn btn-default">BUSINESS SCHOOL</a>

                </div>
            </div>
        </div>
    </div>
</section>



@endsection
