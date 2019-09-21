 
@extends('layouts.app')

@include('includes.header')

 <!-- Content
  ============================================= -->
  <div id="content">
    
        <!-- Secondary Navigation
        ============================================= -->
        <div class="bg-secondary">
            <div class="container-fluid">
              <ul class="nav secondary-nav">
                <li class="nav-item"> <a class="nav-link" href="{{ url('/') }}"><span><i class="fas fa-mobile-alt"></i></span> Mobile</a> </li>
                <li class="nav-item"> <a class="nav-link" href="recharge-bill-dth"><span><i class="fas fa-tv"></i></span> DTH</a> </li>
                <li class="nav-item"> <a class="nav-link" href="individual-business-loan"><span><i class="fas fa-credit-card"></i></span> Individual <br>Business<br> Loan</a> </a> </li>
                <li class="nav-item"> <a class="nav-link" href="recharge-bill-broadband"><span><i class="fas fa-wifi"></i></span> Broadband</a> </li>
                <li class="nav-item"> <a class="nav-link" href="mutual-fund-and-other-investment-products"><span><i class="fas fa-phone"></i></span> Mutual fund / Investment <br>products</a> </li>
                <li class="nav-item"> <a class="nav-link" href="bank-account-opening"><span><i class="fas fa-plug"></i></span> Bank Account <br>Opening</a> </li>
                <li class="nav-item"> <a class="nav-link" href="cash-collection-and-bank-account-deposits"><span><i class="fas fa-plug"></i></span> Cash Collection <br> Bank Account deposits</a> </li>
                <li class="nav-item"> <a class="nav-link" href="recharge-bill-electricity"><span><i class="fas fa-lightbulb"></i></span> Electricity</a> </li>
                
                <li class="nav-item"> <a class="nav-link" href="recharge-bill-gas"><span><i class="fas fa-flask"></i></span> Gas</a> </li>
                <li class="nav-item"> <a class="nav-link active" href="recharge-bill-water"><span><i class="fas fa-tint"></i></span> Water</a> </li>
              </ul>
            </div>
          </div>
        
        <!-- Secondary Navigation end -->
        
        <section class="container">
          <div class="bg-light shadow-md rounded p-4">
            <div class="row">
            
              <!-- Water Bill
              ============================================= -->
              <div class="col-lg-4 mb-4 mb-lg-0">
                <h2 class="text-4 mb-3">Pay Your Water Bill</h2>
                <form id="gasBill" method="post">
                  <div class="form-group">
                      <select class="custom-select" id="operator" required="">
                        <option value="">Select Your Operator</option>
                        <option>1st Operator</option>
                        <option>2nd Operator</option>
                        <option>3rd Operator</option>
                        <option>4th Operator</option>
                        <option>5th Operator</option>
                        <option>6th Operator</option>
                        <option>7th Operator</option>
                      </select>
                    </div>
                  <div class="form-group">
                    <input type="text" class="form-control" data-bv-field="number" id="consumerNumber" required placeholder="Enter Consumer Number">
                  </div>
                  <div class="form-group input-group">
                    <div class="input-group-prepend"> <span class="input-group-text">$</span> </div>
                    <input class="form-control" id="amount" placeholder="Enter Amount" required type="text">
                  </div>
                  <button class="btn btn-primary btn-block" type="submit">Continue</button>
                </form>
              </div><!-- Water Bill end -->
              
              <!-- Slideshow
              ============================================= -->
              <div class="col-lg-8">
                <div class="owl-carousel owl-theme single-slider" data-animateout="fadeOut" data-animatein="fadeIn" data-autoplay="true" data-loop="true" data-autoheight="true" data-nav="true" data-items="1">
                  <div class="item"><a href="#"><img class="img-fluid" src="{{asset('frontend/images/slider/banner-10.jpg')}}" alt="banner 10" /></a></div>
                  <div class="item"><a href="#"><img class="img-fluid" src="{{asset('frontend/images/slider/banner-7.jpg')}}" alt="banner 7" /></a></div>
                  <div class="item"><a href="#"><img class="img-fluid" src="{{asset('frontend/images/slider/banner-8.jpg')}}" alt="banner 8" /></a></div>
                </div>
              </div><!-- Slideshow end -->
              
            </div>
          </div>
        </section>
        
        <!-- Tabs
        ============================================= -->
        <div class="section pt-4 pb-3">
          <div class="container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item"> <a class="nav-link active" id="mobile-recharge-tab" data-toggle="tab" href="#mobile-recharge" role="tab" aria-controls="mobile-recharge" aria-selected="true">Water Bill Payment</a> </li>
              <li class="nav-item"> <a class="nav-link" id="billpayment-tab" data-toggle="tab" href="#billpayment" role="tab" aria-controls="billpayment" aria-selected="false">Best Offers</a> </li>
              <li class="nav-item"> <a class="nav-link" id="why-quickai-tab" data-toggle="tab" href="#why-quickai" role="tab" aria-controls="why-quickai" aria-selected="false">Pay Online</a> </li>
            </ul>
            <div class="tab-content my-3" id="myTabContent">
              <div class="tab-pane fade show active" id="mobile-recharge" role="tabpanel" aria-labelledby="mobile-recharge-tab">
                <p>Instant Online Water Bill Payment Iisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet. Mediocrem qualisque in has. Enim utroque perfecto id mei, ad eam tritani labores facilisis, ullum sensibus no cum. Eius eleifend in quo. At mei alia iriure propriae.</p>
                <p>Partiendo voluptatibus ex cum, sed erat fuisset ne, cum ex meis volumus mentitum. Alienum pertinacia maiestatis ne eum, verear persequeris et vim. Mea cu dicit voluptua efficiantur, nullam labitur veritus sit cu. Eum denique omittantur te, in justo epicurei his, eu mei aeque populo. Cu pro facer sententiae, ne brute graece scripta duo. No placerat quaerendum nec, pri alia ceteros adipiscing ut. Quo in nobis nostrum intellegebat. Ius hinc decore erroribus eu, in case prima exerci pri. Id eum prima adipisci. Ius cu minim theophrastus, legendos pertinacia an nam.</p>
                </div>
              <div class="tab-pane fade" id="billpayment" role="tabpanel" aria-labelledby="billpayment-tab">
                <p>Partiendo voluptatibus ex cum, sed erat fuisset ne, cum ex meis volumus mentitum. Alienum pertinacia maiestatis ne eum, verear persequeris et vim. Mea cu dicit voluptua efficiantur, nullam labitur veritus sit cu. Eum denique omittantur te, in justo epicurei his, eu mei aeque populo. Cu pro facer sententiae, ne brute graece scripta duo. No placerat quaerendum nec, pri alia ceteros adipiscing ut. Quo in nobis nostrum intellegebat. Ius hinc decore erroribus eu, in case prima exerci pri. Id eum prima adipisci. Ius cu minim theophrastus, legendos pertinacia an nam.</p>
                <p>Instant Online mobile recharge Iisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet. Mediocrem qualisque in has. Enim utroque perfecto id mei, ad eam tritani labores facilisis, ullum sensibus no cum. Eius eleifend in quo. At mei alia iriure propriae.</p>
              </div>
              <div class="tab-pane fade" id="why-quickai" role="tabpanel" aria-labelledby="why-quickai-tab">
                <p>Cu pro facer sententiae, ne brute graece scripta duo. No placerat quaerendum nec, pri alia ceteros adipiscing ut. Quo in nobis nostrum intellegebat. Ius hinc decore erroribus eu, in case prima exerci pri. Id eum prima adipisci. Ius cu minim theophrastus, legendos pertinacia an nam.</p>
                <p>Partiendo voluptatibus ex cum, sed erat fuisset ne, cum ex meis volumus mentitum. Alienum pertinacia maiestatis ne eum, verear persequeris et vim. Mea cu dicit voluptua efficiantur, nullam labitur veritus sit cu. Eum denique omittantur te, in justo epicurei his, eu mei aeque populo.</p>
                <p>Instant Online mobile recharge Iisque persius interesset his et, in quot quidam persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit. Ridens mediocritatem ius an, eu nec magna imperdiet. Mediocrem qualisque in has. Enim utroque perfecto id mei, ad eam tritani labores facilisis, ullum sensibus no cum. Eius eleifend in quo. At mei alia iriure propriae.</p>
              </div>
            </div>
          </div>
        </div><!-- Tabs end -->
        
        
        @include('includes.referearn')

        @include('includes.download-app')
       
        
      </div><!-- Content end -->

      @include('includes.footer')