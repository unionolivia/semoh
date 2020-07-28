<!-- Description -->
@extends('layouts/contentLayoutMaster')

@section('title', 'Invoice')

@section('content')
<section class="card invoice-page">
                    <div id="invoice-template" class="card-body">
                        <!-- Invoice Company Details -->
                        <div id="invoice-company-details" class="row">
                            <div class="col-md-6 col-sm-12 text-left pt-1">
                                <div class="media pt-1">
                                    <img src="../images/logo/logo.png" alt="company logo" class="" />
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 text-right">
                                <h1>Invoice</h1>
                                <div class="invoice-details mt-2">
                                    <h6>INVOICE NO.</h6>
                                    <p>001/2019</p>
                                    <h6 class="mt-2">INVOICE DATE</h6>
                                    <p>10 Dec 2018</p>
                                </div>
                            </div>
                        </div>
                        <!--/ Invoice Company Details -->

                        <!-- Invoice Recipient Details -->
                        <div id="invoice-customer-details" class="row pt-2">
                            <div class="col-md-6 col-sm-12 text-left">
                                <h5>Recipient</h5>
                                <div class="recipient-info my-2">
                                    <p>Mr. Smith Sisanmi</p>
                                    <p>5 Olusesi Olugborogan Street</p>
                                    <p>Lekki Ajah, Eti-Osa</p>
                                    <p>Lagos State</p>
                                </div>
                                <div class="recipient-contact pb-2">
                                    <p>
                                        <i class="feather icon-mail"></i>
                                        smith@1000homes.ng
                                    </p>
                                    <p>
                                        <i class="feather icon-phone"></i>
                                        +234 803 707 9950
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 text-right">
                                <h5>1000homes Property Company Limited.</h5>
                                <div class="company-info my-2">
                                    <p>5 Olusesi Olugborogan Street</p>
                                    <p>Lekki Ajah, Eti-Osa</p>
                                    <p>Lagos State</p>
                                </div>
                                <div class="company-contact">
                                    <p>
                                        <i class="feather icon-mail"></i>
                                        enguries@1000homes.ng
                                    </p>
                                    <p>
                                        <i class="feather icon-phone"></i>
                                        +234 803 415 7046
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/ Invoice Recipient Details -->

                        <!-- Invoice Items Details -->
                        <div id="invoice-items-details" class="pt-1 invoice-items-table">
                            <div class="row">
                                <div class="table-responsive col-sm-12">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>DESCRIPTION</th>
                                                <th>QUANTITY</th>
                                                <th>RATE</th>
                                                <th>AMOUNT</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Marvel Court stage one (Foundation)</td>
                                                <td>1</td>
                                                <td><span>&#8358;</span> 3,500,000.00</td>
                                                <td><span>&#8358;</span> 3,500,000.00</td>
                                            </tr>
                                            <tr>
                                                <td>Marvel Court stage one (Block Work)</td>
                                                <td>1</td>
                                                <td><span>&#8358;</span> 3,000,000.00</td>
                                                <td><span>&#8358;</span> 3,000,000.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="invoice-total-details" class="invoice-total-table">
                            <div class="row">
                                <div class="col-7 offset-5">
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <tbody>
                                                <tr>
                                                    <th>SUBTOTAL</th>
                                                    <td><span>&#8358;</span> 6,500,000.00</td>
                                                </tr>
                                                <tr>
                                                    <th>DISCOUNT (7.5%)</th>
                                                    <td><span>&#8358;</span> 487,500.00</td>
                                                </tr>
                                                <tr>
                                                    <th>TOTAL</th>
                                                    <td><span>&#8358;</span> 6,987,500‬</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Invoice Footer -->
                        <div id="invoice-footer" class="text-right pt-3">
                            <p>Transfer the amounts to the business amount below. Please include invoice number on your check.
                                <p class="bank-details mb-0">
                                    <span class="mr-4">BANK: <strong>ZENITH BANK PLC</strong></span>
                                    <span>ACCOUNT NUMBER: <strong>011224633</strong></span>
                                </p>
                        </div>
                        <!--/ Invoice Footer -->

                    </div>
                </section>
              <!-- <div class="content-body">
               

            </div> -->
        </div>
@endsection