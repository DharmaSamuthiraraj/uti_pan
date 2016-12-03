@extends('layouts.app')
@section('content')
   <section class="homebanner-slider">
      @include('includes.banner')
    </section>
    <section class="services-section">
      <div class="container">
        <div class="row">
          <div class="title-section">
            <h1>Our Services</h1>
            <span class="divder yellow">&nbsp;</span> </div>
          <div id="services-slider" class="owl-carousel">
                        <div class="item">
              <div class="services-black">
                <div class="services-img"><img src="images/icon1.png" alt="Intra day Tips" /></div>
                <div class="service-bottom"></div>
                <h2>Documents Required Lists</h2>
                <p>Documents for proof of identity,Documents for proof of address, Documents for proof of date birth & Documents for proof of office address</p>
                <a href="#" class="eq-button btn-theme4"><span>Read more</span></a> </div>
            </div>
                        <div class="item">
              <div class="services-black">
                <div class="services-img"><img src="images/icon2.png" alt="Commodity Intra Tips" /></div>
                <div class="service-bottom"></div>
                <h2>Apply for a new PAN Card</h2>
                <p>STMC facilitates you to apply for a new PAN Card in 3 simple steps. Individuals who have never applied for a PAN Card before and currently can apply online.</p>
                <a href="#" class="eq-button btn-theme4"><span>Read more</span></a> </div>
            </div>
                        <div class="item">
              <div class="services-black">
                <div class="services-img"><img src="images/icon3.png" alt="Stock Future Tips" /></div>
                <div class="service-bottom"></div>
                <h2>Changes/Correction in PAN Card</h2>
                <p>Correction/Change in PAN card Applicant’s name, Correction of Father’s Name, Change in Birth date, Alteration of the address</p>
                <a href="#" class="eq-button btn-theme4"><span>Read more</span></a> </div>
            </div>
                        <div class="item">
              <div class="services-black">
                <div class="services-img"><img src="images/icon4.png" alt="Stock Option Tips" /></div>
                <div class="service-bottom"></div>
                <h2>Lost / Damaged PAN Card</h2>
                <p>Those who wish to Reprint PAN card can submit a separate application. This is also made similar to that made for new PAN card application in Form 49A.</p>
                <a href="#" class="eq-button btn-theme4"><span>Read more</span></a> </div>
            </div>
                        
                        
                      </div>
        </div>
      </div>
    </section>
    <section class="why-choose-section full-width">
      <div class="container">
                <div class="row table-row">
          <div class="col-md-6 pad-both-none">
            <div class="why-choose-img" style="background:url(images/about_bg.jpg) no-repeat center center; background-size:cover;">&nbsp;</div>
            <div class="why-choose-img-mob"><img src="images/about_bg.jpg" class="img-responsive"  alt="Why Choose us" title="Why Choose us" /></div>
          </div>
          <div class="col-md-6 pad-l-50">
            <div class="why-choose-holder">
              <h2>We help you make your life easier!</h2>
              <span class="divder blue">&nbsp;</span>
              <div class="why-choose-content">
                <div class="col-sm-12 col-md-12 col-lg-10 pad-left-none"> 
                <h3>Telephone Support</h3>
<p>Need help with your PAN Application? Get telephone support and speed up your application process.</p> 
<h3>Status Update</h3>
<p>Keep a track of your PAN Application by opting for automated status update on your mobile and email.</p>
<h3>Pickup</h3>
<p>For added speed, convenience and flexibility, we would arrange for pick up of your PAN Application documents.</p>
</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="about-section">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-8 container-center">
            <div class="title-section">
              <h1>Why do we need a PAN Card?</h1>
              <span class="divder yellow">&nbsp;</span> </div>
            <div class="about-container"> <p>
            
            PAN Card is an essential document for most us in India, not just for the purpose of filing tax returns but many of us, use it as a form of identification, as well. Today having a PAN card has become mandatory for most people irrespective of whether they have taxable income or not.
            </p>  </div>
          </div>
        </div>
      </div>
    </section>
@stop