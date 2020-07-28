@extends('layouts/contentLayoutMaster') <!-- choose any one option {contentLayoutMaster/fullLayoutMaster} -->

@section('title', 'Dashboard')  <!-- change title accordingly-->

@section('content')
<section id="decks">
  <div class="row">
      <div class="col-12 mt-1 mb-1">
          <h4 class="text-uppercase">Available Properties</h4>
      </div>
  </div>
  <div class="row">
      <div class="col-12">
          <div class="card-deck-wrapper">
              <div class="card-deck">
                  <div class="card">
                      <div class="card-content">
                          <img class="card-img-top img-fluid" src="../images/slider/01.jpg" alt="Card image cap" />
                          <div class="card-body">
                              <h4 class="card-title">Marvel Property</h4>
                              <p class="card-text">This card has supporting text below as a natural lead-in to
                                  additional content.</p>
                                  <hr>
                                  <div class="d-flex flex-row justify-content-between">
                                    <a href="#" class="btn btn-outline-primary">Learn</a>
                                    <a href="#invest" data-toggle="modal" class="btn btn-custom">Invest</a>
                                  </div>   
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-content">
                          <img class="card-img-top img-fluid" src="../images/slider/04.jpg" alt="Card image cap" />
                          <div class="card-body">
                              <h4 class="card-title">Marvel Property</h4>
                              <p class="card-text">This card has supporting text below as a natural lead-in to
                                  additional content.</p>
                                  <hr>
                                  <div class="d-flex flex-row justify-content-between">
                                    <a href="#" class="btn btn-outline-primary">Learn</a>
                                    <a href="#" class="btn btn-custom">Invest</a>
                                  </div>   
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-content">
                          <img class="card-img-top img-fluid" src="../images/slider/05.jpg" alt="Card image cap" />
                          <div class="card-body">
                              <h4 class="card-title">Marvel Property</h4>
                              <p class="card-text">This card has supporting text below as a natural lead-in to
                                  additional content.</p>
                                  <hr>
                                  <div class="d-flex flex-row justify-content-between">
                                    <a href="#" class="btn btn-outline-primary">Learn</a>
                                    <a href="#" class="btn btn-custom">Invest</a>
                                  </div>   
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-content">
                          <img class="card-img-top img-fluid" src="../images/slider/06.jpg" alt="Card image cap" />
                          <div class="card-body">
                              <h4 class="card-title">Marvel Property</h4>
                              <p class="card-text">This card has supporting text below as a natural lead-in to
                                  additional content.</p>
                                  <hr>
                                  <div class="d-flex flex-row justify-content-between">
                                    <a href="#" class="btn btn-outline-primary">Learn</a>
                                    <a href="#" class="btn btn-custom">Invest</a>
                                  </div>   
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="row">
    <div class="col-12">
        <div class="card-deck-wrapper">
            <div class="card-deck">
                <div class="card">
                    <div class="card-content">
                        <img class="card-img-top img-fluid" src="../images/slider/01.jpg" alt="Card image cap" />
                        <div class="card-body">
                            <h4 class="card-title">Marvel Property</h4>
                            <p class="card-text">This card has supporting text below as a natural lead-in to
                                additional content.</p>
                                <hr>
                                <div class="d-flex flex-row justify-content-between">
                                  <a href="#" class="btn btn-outline-primary">Learn</a>
                                  <a href="#" class="btn btn-custom">Invest</a>
                                </div>                            
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <img class="card-img-top img-fluid" src="../images/slider/04.jpg" alt="Card image cap" />
                        <div class="card-body">
                            <h4 class="card-title">Marvel Property</h4>
                            <p class="card-text">This card has supporting text below as a natural lead-in to
                                additional content.</p>
                                <hr>
                                <div class="d-flex flex-row justify-content-between">
                                  <a href="#" class="btn btn-outline-primary">Learn</a>
                                  <a href="#" class="btn btn-custom">Invest</a>
                                </div>   
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <img class="card-img-top img-fluid" src="../images/slider/05.jpg" alt="Card image cap" />
                        <div class="card-body">
                            <h4 class="card-title">Marvel Property</h4>
                            <p class="card-text">This card has supporting text below as a natural lead-in to
                                additional content.</p>
                                <hr>
                                <div class="d-flex flex-row justify-content-between">
                                  <a href="#" class="btn btn-outline-primary">Learn</a>
                                  <a href="#" class="btn btn-custom">Invest</a>
                                </div>   
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <img class="card-img-top img-fluid" src="../images/slider/06.jpg" alt="Card image cap" />
                        <div class="card-body">
                            <h4 class="card-title">Marvel Property</h4>
                            <p class="card-text">This card has supporting text below as a natural lead-in to
                                additional content.</p>
                                <hr>
                                <div class="d-flex flex-row justify-content-between">
                                  <a href="#" class="btn btn-outline-primary">Learn</a>
                                  <a href="#" class="btn btn-custom">Invest</a>
                                </div>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- Decks section end -->
 <!-- Modal -->
<div class="modal fade text-left" id="pay" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel1">1000Homes- default</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
            <div class="card-content d-flex flex-row mb-0">
              <div class="card-body">
                  <img src="{{ asset('images/house2.png') }}" alt="element 01" width="150" class="float-left px-1">                 
                  
                  <div class="item-name">
                    <h5>Diamond Terrace</h5>  
                                      
                  </div>
                    <div>
                        <table>
                          <thead>
                            
                              <th>Unit</th>
                              <th>Total</th>
                              <th>ROI</th>
                                                       
                          </thead>
                          <tfoot>
                            
                              <th>2</th>
                              <th>&#8358;5,000,000</th>
                              <th>15%</th>
                           
                          </tfoot>
                        </table>                    
                  </div>
                </div>
            </div> 
                  
           
              <div class="col-12 card-header badge-warning text-white rounded">
                Choose Payment Method
              </div> 
               <div class="card-body shadow-sm p-3 mb-1 bg-white rounded d-flex flex-row justify-content-between">
                  <p>Online Payment</p>
                  <fieldset>
                    <input type="radio" name="onlinepayment" id="onlinepayment" checked>     
                  </fieldset>                            
                </div>  
                <div class="card-body shadow-sm p-3 mb-0 bg-white rounded">                
                  <div class="d-flex flex-row justify-content-between">
                    <p> Offline Payment </p>
                    <fieldset>
                      <input type="radio" name="offlinepayment" id="offlinepayment">
                    </fieldset>                    
                  </div>                  
                  <p>Your subcribtion for this property would be on hold for 24hrs until payment is confirmed kindly ensure that payment is made withing th estipulated time.</p>
                
                </div>        
          </div>
          <div class="modal-footer">            
            <a href="#"  data-dismiss="modal" class="btn btn-custom">Invest</a>
              {{-- <button type="button" class="btn btn-custom" data-dismiss="modal">Invest</button> --}}
          </div>
      </div>
  </div>
</div>
 <!-- Defualt Modal section end -->
<!-- Modal -->
  <div class="modal fade text-left" id="invest" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1">Basic Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <div class="card">
                <div class="card-content">
                    <img class="card-img-top img-fluid" src="../images/slider/01.jpg" alt="Card image cap" />
                    <div class="card-body">
                        <h4 class="card-title">Marvel Property</h4>
                        <p class="card-text">This card has supporting text below as a natural lead-in to
                            additional content.</p>
                            <hr>
                            <div class="d-flex flex-row">
                              <div class="item-quantity">
                                <p class="quantity-title">Quantity</p>
                                <div class="input-group quantity-counter-wrapper">
                                    <input type="text" class="quantity-counter" value="1">
                                </div>
                            </div>
                            </div>   
                    </div>
                </div>
            </div>
            </div>
            <div class="modal-footer">
              <a href="#pay" data-dismiss="modal" data-toggle="modal" class="btn btn-custom">Invest</a>
                
            </div>
        </div>
    </div>
  </div>



@endsection

@push('scripts')
    
@endpush