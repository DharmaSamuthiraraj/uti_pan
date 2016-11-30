@extends('layouts.app')
@section('content')
  
    <div class="page-wrapper">
    <section class="header-panel">
      <div class="block-header-wrapper">
        <div class="container">
          <div class="row">
            <h2 class="title">Re-issue of Lost / Damaged PAN</h2>
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
                      <h2>1 Personal Information</h2>
                      <div class="form-group">
                        <label class="control-label col-xs-3">Category of Applicant <span class="red">*</span></label>
                        <div class="col-xs-6">
                          <label class="radio-inline">
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                          Individuals </label>
                          <label class="radio-inline">
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                          Army </label>
                          <label class="radio-inline">
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                          Navy </label>
                          <label class="radio-inline">
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                          Air Force </label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-3">Applicant Name <span class="red">*</span></label>
                        <div class="col-xs-5">
                          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="First Name">
                          <p class="red">(Name should be exactly as per the ID proof)</p>
                        </div>
                        <div class="col-xs-2">
                          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Middle Name">
                        </div>
                        <div class="col-xs-2">
                          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Last Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-3">Date of Birth <span class="red">*</span></label>
                        <div class="col-xs-4">
                          <div class="input-group date">
                            <input type="text" class="form-control" placeholder="18-09-2016">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-3">Gender <span class="red">*</span></label>
                        <div class="col-xs-6">
                          <label class="radio-inline">
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                          Male</label>
                          <label class="radio-inline">
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                          Female</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-3">Marital Status <span class="red">*</span></label>
                        <div class="col-xs-6">
                          <label class="radio-inline">
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                          Single</label>
                          <label class="radio-inline">
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                          Married</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-3">Name on the Pancard <span class="red">*</span></label>
                        <div class="col-xs-6">
                          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="First Name">
                          <p class="red">(Name on the PAN Card should be based on the name of the applicant)</p>
                        </div>
                        <div class="col-xs-3">
                          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Last Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-3">Any Other Name
                        <input type="checkbox" id="chkPassport" />
                        </label>
                        <div id="uti"  style="display: none">
                          <div class="col-xs-3">
                            <input type="name" class="form-control"  value="" placeholder="First Name">
                          </div>
                          <div class="col-xs-3">
                            <input type="name" class="form-control" value="" placeholder="Middle Name"    >
                          </div>
                          <div class="col-xs-3">
                            <input type="name" class="form-control" value="" placeholder="Last Name"  >
                          </div>
                        </div>
                        <div id="stmc">
                          <div class="col-xs-3">
                            <input type="name" class="form-control" readonly="readonly"  >
                          </div>
                          <div class="col-xs-3">
                            <input type="name" class="form-control" readonly="readonly"  >
                          </div>
                          <div class="col-xs-3">
                            <input type="name" class="form-control" readonly="readonly"  >
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-3">Father's Name</label>
                        <div class="col-xs-3">
                          <input type="name" class="form-control"  value="" placeholder="First Name">
                        </div>
                        <div class="col-xs-3">
                          <input type="name" class="form-control" value="" placeholder="Middle Name"    >
                        </div>
                        <div class="col-xs-3">
                          <input type="name" class="form-control" value="" placeholder="Last Name"  >
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4">
                  <div class="free-trail-form">
                    <section class="common-form">
                      <h2>2 Contact Details</h2>
                      <div class="form-group">
                        <label class="control-label col-xs-3">Mobile</label>
                        <div class="input-group col-xs-8"> <span class="input-group-addon">+91</span>
                          <input type="text" class="form-control" placeholder="Mobile">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-3">Email</label>
                        <div class="input-group col-xs-8">
                          <input type="text" class="form-control" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-3">Landline</label>
                        <div class="col-sm-2" style="padding:0px;">
                          <input type="text" class="form-control" placeholder="STD">
                        </div>
                        <div class="col-sm-6" style="padding:0px;">
                          <input type="text" class="form-control" placeholder="Landline">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-4">Communication <span class="red">*</span></label>
                        <div class="col-xs-8">
                          <label class="radio-inline">
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                          Residence</label>
                          <label class="radio-inline">
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                          Office </label>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4">
                  <div class="free-trail-form" style="height:272px;">
                    <section class="common-form">
                      <h2>3 Document Proof</h2>
                      <div class="form-group">
                        <label class="control-label col-xs-5">ID Proof</label>
                        <div class="col-xs-7">
                          <select class="form-control">
                            <option value="">Select</option>
                            <option value="1">Voters Identity Card</option>
                            <option value="2">Driving License</option>
                            <option value="3">Passport</option>
                            <option value="13">Certificate of Identity signed by a Gazetted Officer in prescribed format only</option>
                            <option value="14">Certificate of Identity signed by a MP in prescribed format only</option>
                            <option value="15">Certificate of Identity signed by a MLA in prescribed format only</option>
                            <option value="16">Certificate of Identity signed by a Municipal Councilor in prescribed format only</option>
                            <option value="18">Ration Card with photograph</option>
                            <option value="19">Arms License</option>
                            <option value="20">Pensioner Card with Photograph</option>
                            <option value="21">Central Government Health Scheme Card</option>
                            <option value="22">Ex-servicemen Contributory Heath Scheme photo card</option>
                            <option value="24">Photo Identity card issued by the Central Government/State Government/Public Sector Undertaking</option>
                            <option value="26">Bank certificate in original on letter head from the branch
                            (along with name and stamp of the issuing officer) containing duly attested photograph and
                            bank account number of the applicant</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-5" style="padding-top:0px;">Address Proof</label>
                        <div class="col-xs-7">
                          <select class="form-control">
                            <option value="">Select</option>
                            <option value="">Select</option>
                            <option value="1">Voters Identity Card</option>
                            <option value="2">Driving License</option>
                            <option value="3">Passport</option>
                            <option value="4">Bank Account Statement</option>
                            <option value="5">Credit Card Statement</option>
                            <option value="7">Landline telephone or broadband connection bill </option>
                            <option value="8">Employer Certificate</option>
                            <option value="10">Electricity Bill</option>
                            <option value="11">Depository Account Statement</option>
                            <option value="13">Certificate of Address signed by a Gazetted Officer in prescribed format only</option>
                            <option value="18">Certificate of Address signed by a MP in prescribed format only</option>
                            <option value="19">Certificate of Address signed by a MLA in prescribed format only</option>
                            <option value="20">Certificate of Address signed by a Municipal Councillor  in prescribed format only</option>
                            <option value="22">Water Bill</option>
                            <option value="23">Consumer Gas Connection Card</option>
                            <option value="24">Credit Card Statement</option>
                            <option value="26">Passport of the spouse</option>
                            <option value="27">Post office pass book </option>
                            <option value="29">Domicile Certificate issued by the Government</option>
                            <option value="30">Allotment letter of accommodation issued by Central/state Government less than 3 years old</option>
                            <option value="31">Property Registration Document</option>
                            <option value="32">Latest Property Tax Assessment Order</option>
                            <option value="33">Elector's Photo Identity Card</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-5" style="padding-top:0px;">Date of Birth</label>
                        <div class="col-xs-7">
                          <select class="form-control">
                            <option value="">Select</option>
                            <option value="1">Birth Certificate issued by the Municipal Authority</option>
                            <option value="2">Pension Payment Order</option>
                            <option value="3">Marriage certificate issued by Registrar of Marriages</option>
                            <option value="4">Matriculation certificate</option>
                            <option value="5">Domicile certificate issued </option>
                            <option value="6">Affidavit sworn before a magistrate stating the date of birth by the Government</option>
                            <option value="7">Driving License</option>
                            <option value="8">Passport</option>
                            <option value="10">Voters Identity Card</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-5" style="padding-top:0px;">Office Address</label>
                        <div class="col-xs-7">
                          <select class="form-control">
                            <option value="">Select</option>
                            <option value="1">Credit Card Statement carrying Office Address </option>
                            <option value="2">Bank Account Statement carrying Office Address </option>
                            <option value="3">Employer Certificate carrying Office Address </option>
                            <option value="4">Electricity Bill carrying Office Address </option>
                            <option value="5">Telephone Bill carrying Office Address </option>
                            <option value="6">Depository Account Statement carrying Office Address </option>
                            <option value="7">Office Property Tax Assessment Order</option>
                            <option value="8">Bank Account Statement carrying Office Address </option>
                          </select>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4">
                  <div class="free-trail-form" style="height:272px;">
                    <section class="common-form">
                      <h2>4 Income Source</h2>
                      <div class="form-group">
                        <div class="col-xs-1"></div>
                        <label class="checkbox-inline col-xs-5">
                        <input type="checkbox" value="">
                        No Income</label>
                        <label class="checkbox-inline col-xs-5">
                        <input type="checkbox" value="">
                        Business/Profession</label>
                      </div>
                      <div class="form-group">
                        <div class="col-xs-1"></div>
                        <label class="checkbox-inline  col-xs-5">
                        <input type="checkbox" value="">
                        Salary</label>
                        <label class="checkbox-inline  col-xs-5">
                        <input type="checkbox" value="">
                        House Property</label>
                      </div>
                      <div class="form-group">
                        <div class="col-xs-1"></div>
                        <label class="checkbox-inline  col-xs-5">
                        <input type="checkbox" value="">
                        Capital Gains</label>
                        <label class="checkbox-inline  col-xs-5">
                        <input type="checkbox" value="">
                        Other Sources</label>
                      </div>
                      <div class="form-group">
                        <div class="col-xs-6">
                          <select class="form-control">
                            <option value="">Annual Income</option>
                            <option value="">Less Than 3,00,000</option>
                            <option value="">Between 3,00,001 to 5,00,000</option>
                            <option value="">Between 5,00,001 to 8,00,000</option>
                            <option value="">Greater than 8,00,000</option>
                          </select>
                        </div>
                        <div class="col-xs-6">
                          <select class="form-control">
                            <option value="">BUSINESS TYPE</option>
                            <option value="1">Medical Profession and Business</option>
                            <option value="2">Engineering</option>
                            <option value="3">Architecture</option>
                            <option value="4">Chartered Accountant / Accountancy</option>
                            <option value="5">Interior Decoration</option>
                            <option value="6">Technical Consultancy</option>
                            <option value="7">Company Secretary</option>
                            <option value="8">Legal Practitioner and Solicitors</option>
                            <option value="9">Government Contractors</option>
                            <option value="10">Insurance Agency</option>
                            <option value="11">Films, TV and Such other Entertainment</option>
                            <option value="12">Information technology</option>
                            <option value="13">Builders and developers</option>
                            <option value="14">Members of Stock Exchange, Share Brokers and Sub- Brokers</option>
                            <option value="15">Performing Arts and Yatra</option>
                            <option value="16">Operation of Ships, Hovercrafts, Aircrafts  or  Helicopters</option>
                            <option value="17">Plying Taxies, Lorries, Trucks, Buses or other commercial vehicles</option>
                            <option value="18">Ownership of Horses or Jockeys</option>
                            <option value="19">Cinema Halls and other theatres</option>
                            <option value="20">Others</option>
                          </select>
                        </div>
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