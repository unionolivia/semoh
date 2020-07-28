@extends('layouts/contentLayoutMaster') <!-- choose any one option {contentLayoutMaster/fullLayoutMaster} -->

@section('title', 'Financial History')  <!-- change title accordingly-->

@section('content')
                          <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Line Area Chart</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div id="line-area-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

@endsection

@push('scripts')
<script src="{{asset ('vendors/js/vendors.min.js') }}"></script>
<script src="{{asset ('vendors/js/charts/apexcharts.min.js') }}"></script>
<script src="{{asset ('js/core/app-menu.js') }}"></script>
<script src="{{asset ('js/core/app.js') }}"></script>
<script src="{{asset ('js/scripts/components.js') }}"></script>
<script src="{{asset ('js/scripts/charts/chart-apex.js') }}"></script>

@endpush