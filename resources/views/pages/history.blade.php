@extends('layouts/contentLayoutMaster') <!-- choose any one option {contentLayoutMaster/fullLayoutMaster} -->

@section('title', 'Financial History')  <!-- change title accordingly-->

@section('content')
<div class="row" id="table-striped">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Striped rows</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <p class="card-text">All payment made within the last 6 months.</p>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th scope="col">Invoice No.</th>
                                <th scope="col">Date</th>                                
                                <th scope="col">Description</th>
                                <th scope="col">Amount paid</th>
                                <th scope="col">Receipt</th>
                            </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">221</th>
                          <td>15th March, 2018</td>
                          <td>Marvel Court stage one (Foundation)</td>
                          <td><span>&#8358;</span>8,000,000.00</td>
                          <td><a href="/invoice" class="btn btn-outline-primary float-left btn-inline mb-50">View</a></td>
                        </tr>
                        <tr>
                          <th scope="row">222</th>
                          <td>30th April, 2018</td>
                          <td>Marvel Cour Stage two - (Block work)</td>
                          <td><span>&#8358;</span>3,000,000.00</td>
                          <td><a href="/invoice" class="btn btn-outline-primary float-left btn-inline mb-50">View</a></td>
                        </tr>
                        <tr>
                          <th scope="row">223</th>
                          <td>21st May, 2018</td>
                          <td>Marvel Court Stage Three - (Decking works)</td>
                          <td><span>&#8358;</span>3,500,000.00</td>
                          <td><a href="/invoice" class="btn btn-outline-primary float-left btn-inline mb-50">View</a></td>
                        </tr>
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')

@endpush