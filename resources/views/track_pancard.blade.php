@extends('layouts.app')
@section('content')
  
    <div class="page-wrapper">
    <section class="header-panel">
      <div class="block-header-wrapper">
        <div class="container">
          <div class="row">
            <h2 class="title">Track PAN Application Status</h2>
          </div>
        </div>
      </div>
    </section>
    <section class="aboutus-page">
      <div class="container">
        <div class="row">
          <div class="inner-wrapper">
            <div class="col-xs-12 content-block">
              <form name="trial_form " id="trial_form" class="form-horizontal" method="post" action="#">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="free-trail-form">
                    <section class="common-form">
                      <h2 style="border-bottom:none;"></h2>
                      
                      <div class="form-group">
                        <label class="control-label col-xs-3">Reference Number <span class="red">*</span></label>
                        <div class="col-xs-6">
                          <input type="email" class="form-control" id="Reference Number" placeholder="Reference Number">
                         
                        </div>
                        
                        
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-3">Date of Birth <span class="red">*</span></label>
                        <div class="col-xs-6">
                          <div class="input-group date">
                            <input type="text" class="form-control" placeholder="18-09-2016">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
                        </div>
                      </div>
                      
                      <div class="form-btn">
                  <button type="submit" name="btn_trial" class="eq-button btn-theme4">Submit</button>
                </div>
                      
                      
                      
                    </section>
                  </div>
                </div>
                
                
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
    
    
@stop