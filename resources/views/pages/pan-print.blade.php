@extends('layouts.app')
@section('content')
  
    <div class="page-wrapper">
    <section class="header-panel">
      <div class="block-header-wrapper">
        <div class="container">
          <div class="row">
            <h2 class="title">New Pan Card Application</h2>
          </div>
        </div>
      </div>
    </section>
    <section class="aboutus-page">
      <div class="container">
        <div class="row">
          <div class="inner-wrapper">
            <div class="col-xs-12 content-block">
            <div class="stepwizard">
              @include('includes.wizzard_header')
</div>
            <div class="row setup-content" id="step-1">
             @include('includes.newpan_form')
              </div>
              
              <div class="row setup-content" id="step-2">
          
              </div>
              <div class="row setup-content" id="step-3">
              
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
    
    
@stop