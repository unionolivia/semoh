@extends('layouts/contentLayoutMaster') <!-- choose any one option {contentLayoutMaster/fullLayoutMaster} -->
@section('title', 'Legal')  <!-- change title accordingly-->

@section('content')
        <div id="app">
          <example-component></example-component>

          <section id="validation">
    				<div class="row">
     		   	<div class="col-12">
            <div class="card col-md-6">
                <div class="card-header">
                    <h4 class="card-title">Upload legal Documents</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="form-group">
                            <select class="custom-select form-control required" id="eventStatus3" name="eventStatus">
                                <option value="">Select project</option>
                                <option value="diamondterrace">Diamond Terrace</option>
                                <option value="Magodoproject">Magodo Project</option>
                                <option value="Yabahostel">Yaba Hostel</option>
                            </select>
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


        </div>

@endsection
