<style type="text/css">
  #price2, #price4 {display:none;}
</style>
<section class="aboutus-page">
  <div class="container">
    <div class="row">
      <div class="inner-wrapper">
        <div class="col-xs-12 content-block">
          <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
              <div class="stepwizard-step"> <a href="#step-1" type="button" class="btn btn-default btn-circle" disabled="disabled">1</a>
                <p>Fill your Details</p>
              </div>
              <div class="stepwizard-step"> <a href="#step-2" type="button" class="btn btn-primary btn-circle">2</a>
                <p>Verify New Pan</p>
              </div>
              <div class="stepwizard-step"> <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                <p>Make your payment</p>
              </div>
              <div class="stepwizard-step"> <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                <p>Print, Sign & Courier</p>
              </div>
            </div>
          </div>
          <div class="row setup-content" id="step-2">
            <form name="new_pan" id="trial_form" role="form" class="form-horizontal" method="post" action="/pan/payment">
              <div class="free-trail-form">
                <section class="common-form">
                  <h2>PAYMENT SUMMARY</h2>
                  <div class="row">
                    <div class="container">
                      <table cellpadding="0" cellspacing="0" width="100%" border="0">
                        <tr>
                          <td><ul class="list">
                              <li><img src="/images/yes.png" border="0"/>Basic PAN Card Service <a href="#" data-tooltip="STMC would process your application without any Premium Services"><i class="fa fa-question-circle" aria-hidden="true"></i></a></li>
                              <li><img src="/images/yes.png" border="0"/>Government Prescribed Fee <a href="#" data-tooltip="STMC would process your application without any Premium Services"><i class="fa fa-question-circle" aria-hidden="true"></i></a></li>
                              <li>
                                <input type="checkbox" id="premiumsupport" checked="checked" onclick="change()"  >
                                </input>
                                <span class="pl10">Premium Support <a href="#" data-tooltip="STMC would provide premium support services of Telephone, SMS and Email"><i class="fa fa-question-circle" aria-hidden="true"></i></a> </span></li>
                              <!--li>
                          <input type="checkbox" class="checked" value="" />
                          <span class="pl10">Document Pickup <a href="#" data-tooltip="We would arrange for pickup of your pan application"><i class="fa fa-question-circle" aria-hidden="true"></i></a></span></li-->
                            </ul></td>
                          <td style="padding-right:20px;"><div class="pull-right">
                              <ul class="list pull-right">
                                <li class="text-right"> <strong>FREE</strong></li>
                                <li  class="text-right"> <strong>&#8377; 93</strong></li>
                                <li  class="text-right"> <strong>&#8377; 99</strong></li>
                                <!--li class="light-color text-right">&#8377; 199</li-->
                              </ul>
                            </div></td>
                        </tr>
                      </table>
                      <!--form class="form-inline col-xs-4" role="form">
                      <div class="form-group">
                        <label for="name">Pickup Pincode</label>
                        <input type="text" class="form-control" />
                        <button type="submit" class="btn btn-primary" value="verify">Verify</button>
                      </div>
                    </form-->
                    </div>
                  </div>
                  <div class="row">
                    <div class="container" >
                      <table cellpadding="0" cellspacing="0" border="0" width="100%">
                        <tr>
                          <td></td>
                          <td  style="padding-right:20px;"><div class="pull-right">
                              <ul class="list pull-right">
                                <li class="text-right"> <strong>
                                  <label for="name">Total Amount &#8377; <span  id="price2">93</span> <span  id="price1">192</span></label>
                                  </strong></li>
                                <li class="text-right"> <strong>
                                  <label for="name"><strong>Net Amount (Including Service Tax) &#8377; <span  id="price3">221</span> <span  id="price4">107</span></strong></label>
                                  </strong></li>
                              </ul>
                            </div></td>
                        </tr>
                      </table>
                        <br>
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="75%"  id="applicationdate">I agree to STMC's Terms of Service</td>
                            <td width="25%"><div align="center">
                                <button type="submit" class="btn btn-success" value="">Proceed to Payment</button>
                                <a href="/pan/edit/{{$user['uid']}}" class="btn btn-danger" style="color:#fff;">Edit Form</a>
                              </div></td>
                          </tr>
                        </table>
                    </div>
                  </div>
                  <br />
                </section>
              </div>
                <input type="hidden" name="normalAmt" value="107">
               <input type="hidden" name="premiumAmt" value="221">
            </form>
              <div class="free-trail-form">
                <section class="common-form">
                  <h2>Personal Information</h2>
                  <div class="row">
                    <div class="container">
                      <div class="col-xs-6">
                        <table border="0" class="dis_table" cellspacing="0" cellpadding="0" width="100%">
                          <tr>
                            <td width="50%">Category of Applicant</td>
                            <td width="50%" >{{$user['category']}}</td>
                          </tr>
                          <tr>
                            <td valign="top">Name of the Applicant</td>
                            <td>{{ $user['firstName'] . ' '. $user['middleName'] .' '. $user['lastName']}}</td>
                          </tr>
                          <tr>
                            <td>Name on the PAN Card</td>
                            <td >{{ $user['panFirstName']}}</td>
                          <tr> 
                          <td>Any Other Name</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Father's Name </td>
                            <td>{{ $user['fatherFirstName'] .' '.$user['fatherMiddleName'] . ' ' . $user['fatherLastName']}}</td>
                          </tr>
                          <tr>
                            <td>Communication Address</td>
                            <td>{{ $user['communicationPref']}}</td>
                          </tr>
                          <tr>
                            <td>Annual Income</td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Source Income</td>
                            <td>&nbsp;</td>
                          </tr>
                        </table>
                      </div>
                      <div class="col-xs-6">
                        <table border="0" class="dis_table" cellspacing="0" cellpadding="0" width="100%">
                          <tr>
                            <td width="50%">Date of Birth</td>
                            <td width="50%">{{$user['date'].'-'.$user['month'].'-'.$user['year']}}</td>
                          </tr>
                          <tr>
                            <td>Gender</td>
                            <td>{{ $user['gender']}}</td>
                          </tr>
                          <tr>
                            <td>Marital Status</td>
                            <td>{{ $user['maritalStatus']}}</td>
                          </tr>
                          <tr>
                            <td>Mobile </td>
                            <td>{{ $user['mobile']}}</td>
                          </tr>
                          <tr>
                            <td>Email ID </td>
                            <td>{{ $user['email']}}</td>
                          </tr>
                          <tr>
                            <td>Current City of Residence</td>
                            <td>{{ $user['resCity']}}</td>
                          </tr>
                          <tr>
                            <td>Business Type</td>
                            <td>{{ $user['incomeSource']}}</td>
                          </tr>
                          <tr>
                            <td>Land Line</td>
                            <td>{{$user['stdCode'].'-'.$user['landline']}}</td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
              <div class="free-trail-form">
                <section class="common-form">
                  <h2>Proof of Documents</h2>
                  <div class="row">
                    <div class="container">
                      <div class="col-xs-12">
                        <table border="0" class="dis_table" cellspacing="0" cellpadding="0" width="100%">
                          <tr>
                            <td width="50%">Proof of Identity </td>
                            <td width="50%">{{$user['idProof']}}</td>
                          </tr>
                          <tr>
                            <td>Proof of Residence Address </td>
                            <td>{{$user['addressProof']}}</td>
                          </tr>
                          <tr>
                            <td>Proof of Date of Birth</td>
                            <td>{{$user['dobProof']}}</td>
                          </tr>
                          <tr>
                            <td>Proof of Office Address </td>
                            <td>{{$user['offAddressProof']}}</td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="free-trail-form" style="height:350px;">
                  <section class="common-form">
                    <h2>Residence Address</h2>
                    <table width="100%" class="dis_table" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="50%">Flat No.</td>
                        <td width="50%">{{ $user['resDoorNo']}}</td>
                      </tr>
                      <tr>
                        <td>Name of Premises</td>
                        <td>{{ $user['resBuilding']}}</td>
                      </tr>
                      <tr>
                        <td>Street</td>
                        <td>{{ $user['resStreet']}}</td>
                      </tr>
                      <tr>
                        <td>Area</td>
                        <td>{{ $user['resArea']}}</td>
                      </tr>
                      <tr>
                        <td>City</td>
                        <td>{{ $user['resCity']}}</td>
                      </tr>
                      <tr>
                        <td>State</td>
                        <td>{{ $user['resState']}}</td>
                      </tr>
                      <tr>
                        <td>Country</td>
                        <td>{{ $user['resCountry']}}</td>
                      </tr>
                      <tr>
                        <td>Pincode</td>
                        <td>{{ $user['resPinCode']}}</td>
                      </tr>
                    </table>
                  </section>
                </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="free-trail-form" style="height:350px;">
                  <section class="common-form">
                    <h2>Office Address</h2>
                  </section>
                </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="free-trail-form" style="height:350px;">
                  <section class="common-form">
                    <h2>Representative Assessee Address </h2>
                  </section>
                </div>
              </div>
              <div class="free-trail-form">
                <section class="common-form">
                  <div class="row">
                    <div class="col-lg-12 col-md-12">
                      <div class="form-content"> <br>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="6%">Date:</td>
                            <td width="64%">&nbsp;</td>
                            <td width="30%"><div align="center">Applicant</div></td>
                          </tr>
                          <tr>
                            <td>City:</td>
                            <td id="citydown">&nbsp;</td>
                            <td><div align="center"></div></td>
                          </tr>
                        </table>
                        <br>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
