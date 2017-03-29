<style type="text/css">
#price2, #price4 {
  display:none;
}
</style>
<section class="aboutus-page">
<div class="container">
  <div class="row"> 
  
  <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
              <div class="stepwizard-step"> <a href="#step-1" type="button" class="btn btn-default btn-circle" disabled="disabled">1</a>
                <p>Fill your Details</p>
              </div>
              <div class="stepwizard-step"> <a href="#step-2" type="button" class="btn btn-default btn-circle"  disabled="disabled" >2</a>
                <p>Verify New Pan</p>
              </div>
              <div class="stepwizard-step"> <a href="#step-3" type="button" class="btn btn-primary btn-circle">3</a>
                <p>Make your payment</p>
              </div>
              <div class="stepwizard-step"> <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                <p>Print, Sign & Courier</p>
              </div>
            </div>
          </div>
          <div class="row setup-content" id="step-3">
           <div class="container">
           <br />
            <h3>Total Amount: {{ $payment['premiumAmt'] }}</h3>

            <h4 class="text-center"><a href="/pan/pdfview" class="btn btn-danger">Paid</a></h4>
           </div>

          </div>
        </div>
  
  </div>
</div>
</section>
