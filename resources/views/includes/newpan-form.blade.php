  <section class="aboutus-page">
      <div class="container">
        <div class="row">
          <div class="inner-wrapper">
            <div class="col-xs-12 content-block">
            <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
            <p>Fill your details</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
            <p>Verify New Pan</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
            <p>Make your payment</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
            <p>Print, Sign & Courier</p>
        </div>
    </div>
			</div>
            <div class="row setup-content" id="step-1">
<form name="new_pan" id="trial_form" role="form" class="form-horizontal" method="post" action="/pan/new">
             
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="free-trail-form">
                    <section class="common-form">
                      <h2>1 Personal Information</h2>
                      <div class="form-group">
                        <label class="control-label col-xs-3">Category of Applicant <span class="red">*</span></label>
                        <div class="col-xs-6">
                          <label class="radio-inline">
                          <input type="radio" name="category" value="Individuals" {{ isset($user['category']) && $user['category'] == 'Individuals' ? 'checked' : '' }}>
                          Individuals</label>
                          <label class="radio-inline">
                          <input type="radio"  name="category" value="Army" {{ isset($user['category']) && $user['category'] == 'Army' ? 'checked' : '' }}>
                          Army </label>
                          <label class="radio-inline">
                          <input type="radio"  name="category" value="Navy" {{ isset($user['category']) && $user['category'] == 'Navy' ? 'checked' : '' }}>
                          Navy </label>
                          <label class="radio-inline">
                          <input type="radio"  name="category" value="Airforce" {{ isset($user['category']) && $user['category'] == 'Airforce' ? 'checked' : '' }}>
                          Air Force </label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-3">Applicant Name <span class="red">*</span>&nbsp;<a href="#" data-tooltip="Please Do not use abbreviations in the first and last name / Sur Name"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label>
                        
                        <div class="col-xs-3">
                          <input type="text" name="firstName" class="form-control"  placeholder="First Name" required id="first" onchange="upperMe('first')" autocomplete="off" onblur="initialvalidation('first');" value="{{ $user['firstName'] or '' }}">
                          <p class="red">(Name should be exactly as per the ID proof)</p>
                        </div>
                        <div class="col-xs-3">
                        <input type="text" name="lastName" class="form-control" onkeyUp="copyText2()"  placeholder="Last Name" required id="last" onchange="upperMe('last')" autocomplete="off" onblur="initialvalidation('last');" value="{{ $user['lastName'] or '' }}">
                         
                        </div>
                        <div class="col-xs-3">
                            <input type="text" name="middleName" class="form-control" id="middle" onkeyUp="copyText()"   placeholder="Middle Name" required id="middle" onchange="upperMe('middle')" autocomplete="off"  onblur="initialvalidation('middle');" value="{{ $user['middleName'] or '' }}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-3">Date of Birth <span class="red">*</span></label>
                        <div class="col-xs-2">
                        
                        <select id="dobday" name="date" class="form-control"></select></div>
                    		 <div class="col-xs-2"><select id="dobmonth" name="month"  class="form-control"></select></div>
                    		 <div class="col-xs-2"><select id="dobyear" name="year" class="form-control"></select></div>
                         <!-- <div class="input-group date">
                            <input type="date" value="11-11-2016" name="dateOfbirth" class="form-control"  required>
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span> </div>
                        </div>-->
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-3">Gender <span class="red">*</span></label>
                        <div class="col-xs-6">
                          <label class="radio-inline">
                          <input type="radio" name="gender" value="male" {{ isset($user['gender']) && $user['gender'] == 'male' ? 'checked' : '' }}>
                          Male</label>
                          <label class="radio-inline">
                          <input type="radio" name="gender"  value="female" {{ isset($user['gender']) && $user['gender'] == 'female' ? 'checked' : '' }} >
                          Female</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-3">Marital Status <span class="red">*</span></label>
                        <div class="col-xs-6">
                          <label class="radio-inline">
                          <input type="radio" name="maritalStatus"  value="single" {{ isset($user['maritalStatus']) && $user['maritalStatus'] == 'single' ? 'checked' : '' }}>
                          Single</label>
                          <label class="radio-inline">
                          <input type="radio" name="maritalStatus" value="married" {{ isset($user['maritalStatus']) && $user['maritalStatus'] == 'married' ? 'checked' : '' }}>
                          Married</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-3">Name on the Pancard <span class="red">*</span>&nbsp;<a href="#" data-tooltip="Full abbreviated name to be printed on Pancard"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label>
                        <div class="col-xs-6">
                          <input type="text" class="form-control" name="panFirstName" placeholder="First Name" id="full"  onchange="upperMe('print_first')" onblur="initialvalidation('print_middle');"  autocomplete="off" maxlength="50" value="{{ $user['panFirstName'] or '' }}">
                          <p class="red">(Name on the PAN Card should be based on the name of the applicant)</p>
                        </div>
                        <div class="col-xs-3">
                          <input type="text" class="form-control" name="panLastName" id="printlast"   placeholder="Last Name" onchange="upperMe('print_last')" autocomplete="off"  onkeypress="return lettersOnly(event)" value="{{ $user['panLastName'] or '' }}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-3">Any Other Name <a href="#" data-tooltip="Please check the box if you have been known by any other name and providing details of other name is mandatory. Title should be simlar to the one provided in applicant name"><i class="fa fa-question-circle" aria-hidden="true"></i></a>
                        <input type="checkbox" id="chkbox" name="anyothername" value="{{ $user['anyothername'] or '' }}" />
                        </label>
                       
                       <div id="details">
                          <div class="col-xs-3">
                            <input type="text" class="form-control" name="otherName1" value="{{ $user['otherName1'] or '' }}">
                          </div>
                          <div class="col-xs-3">
                            <input type="text" class="form-control" name="otherName2" value="{{ $user['otherName2'] or '' }}">
                          </div>
                          <div class="col-xs-3">
                            <input type="text" class="form-control" name="otherName3" value="{{ $user['otherName3'] or '' }}">
                          </div></div>
                        
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-3">Father's Name <a href="#" data-tooltip="Should not be prefixed with titles such as Shri, Smt, Kumari, Dr., Major, M/s etc and married women applicants should give only their Father's name and not Husband's name"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label>
                        <div class="col-xs-3">
                          <input type="text" name="fatherFirstName" class="form-control"  value="{{ $user['fatherFirstName'] or ''}}" placeholder="First Name" required>
                        </div>
                        <div class="col-xs-3">
                          <input type="text" name="fatherMiddleName" class="form-control" value="{{ $user['fatherMiddleName'] or ''}}" placeholder="Middle Name">
                        </div>
                        <div class="col-xs-3">
                          <input type="text" name="fatherLastName" class="form-control" value="{{ $user['fatherLastName'] or ''}}" placeholder="Last Name">
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4">
                  <div class="free-trail-form" style="height:245px;">
                    <section class="common-form">
                      <h2>2 Contact Details</h2>
                      <div class="form-group">
                        <label class="control-label col-xs-4">Mobile <span class="red">*</span> &nbsp;<a href="#" data-tooltip="Application status updates are sent using the SMS facility on the mobile numbers mentioned in the application form. (applicable for Indian mobile numbers)."><i class="fa fa-question-circle" aria-hidden="true"></i></a></label>
                        <div class="input-group col-xs-7"> <span class="input-group-addon">+91</span>
                          <input type="tel" name="mobile" required class="form-control" placeholder="Mobile" value="{{ $user['mobile'] or ''}}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-4">Email <span class="red">*</span> &nbsp;<a href="#" data-tooltip="Valid e-mail id to be provided so that applicant can be contacted in case of any discrepancy in the application and/or for receiving PAN through e-mail."><i class="fa fa-question-circle" aria-hidden="true"></i></a></label>
                        <div class="input-group col-xs-7">
                          <input type="email" name="email" class="form-control" placeholder="Email" required value="{{ $user['email'] or ''}}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-4">Landline</label>
                        <div class="col-sm-2" style="padding:0px;">
                          <input type="tel" name="stdCode" class="form-control" placeholder="STD" value="{{ $user['stdCode'] or ''}}">
                        </div>
                        <div class="col-sm-5" style="padding:0px;">
                          <input type="tel" name="landline" class="form-control" placeholder="Landline" required value="{{ $user['landline'] or ''}}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-5">Communication <span class="red">*</span></label>
                        <div class="col-xs-7">
                          <label class="radio-inline">
                          <input type="radio" name="communicationPref" value="Residence" {{ isset($user['communicationPref']) && $user['communicationPref'] == 'Residence' ? 'checked' : '' }}>
                          Residence</label>
                          <label class="radio-inline">
                          <input type="radio" name="communicationPref" value="Office" {{ isset($user['communicationPref']) && $user['communicationPref'] == 'Office' ? 'checked' : '' }}>
                          Office </label>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4">
                  <div class="free-trail-form" style="height:245px;">
                    <section class="common-form">
                      <h2>3 Document Proof</h2>
                      <div class="form-group">
                        <label class="control-label col-xs-5">ID Proof <span class="red">*</span></label>
                        <div class="col-xs-7">
                          <select class="form-control" name="idProof" required id="proofofidentity" onchange="selchange();replaceprrofid()">
                            <option value="">Select</option>
                            <option value="Voters Identity Card" {{ isset($user['idProof']) && $user['idProof'] == 'Voters Identity Card' ? 'selected' : '' }}>Voters Identity Card</option>
                            <option value="Driving License">Driving License</option>
                            <option value="Passport">Passport</option>
                            <option value="Certificate of Identity signed by a Gazetted Officer in prescribed format only">Certificate of Identity signed by a Gazetted Officer in prescribed format only</option>
                            <option value="Certificate of Identity signed by a MP in prescribed format only">Certificate of Identity signed by a MP in prescribed format only</option>
                            <option value="Certificate of Identity signed by a MLA in prescribed format only">Certificate of Identity signed by a MLA in prescribed format only</option>
                            <option value="Certificate of Identity signed by a Municipal Councilor in prescribed format only">Certificate of Identity signed by a Municipal Councilor in prescribed format only</option>
                            <option value="Ration Card with photograph">Ration Card with photograph</option>
                            <option value="Arms License">Arms License</option>
                            <option value="Pensioner Card with Photograph">Pensioner Card with Photograph</option>
                            <option value="Central Government Health Scheme Card">Central Government Health Scheme Card</option>
                            <option value="Ex-servicemen Contributory Heath Scheme photo card">Ex-servicemen Contributory Heath Scheme photo card</option>
                            <option value="Photo Identity card issued by the Central Government/State Government/Public Sector Undertaking">Photo Identity card issued by the Central Government/State Government/Public Sector Undertaking</option>
                            <option value="Bank certificate in original on letter head from the branch
                            (along with name and stamp of the issuing officer) containing duly attested photograph and
                            bank account number of the applicant">Bank certificate in original on letter head from the branch
                            (along with name and stamp of the issuing officer) containing duly attested photograph and
                            bank account number of the applicant</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-5" style="padding-top:0px;">Address Proof <span class="red">*</span></label>
                        <div class="col-xs-7">
                          <select class="form-control" name="addressProof" required id="proofofresidence" onchange="residchange();replaceproofofresidence()">
                            <option value="">Select the Address Proof</option>                         
                            <option value="Voters Identity Card" {{ isset($user['addressProof']) && $user['addressProof'] == 'Voters Identity Card' ? 'selected' : '' }}>Voters Identity Card</option>
                            <option value="Driving License">Driving License</option>
                            <option value="Passport">Passport</option>
                            <option value="Bank Account Statement">Bank Account Statement</option>
                            <option value="Credit Card Statement">Credit Card Statement</option>
                            <option value="Landline telephone or broadband connection bill">Landline telephone or broadband connection bill </option>
                            <option value="Employer Certificate">Employer Certificate</option>
                            <option value="Electricity Bill">Electricity Bill</option>
                            <option value="Depository Account Statement">Depository Account Statement</option>
                            <option value="Certificate of Address signed by a Gazetted Officer in prescribed format only">Certificate of Address signed by a Gazetted Officer in prescribed format only</option>
                            <option value="Certificate of Address signed by a MP in prescribed format only">Certificate of Address signed by a MP in prescribed format only</option>
                            <option value="Certificate of Address signed by a MLA in prescribed format only">Certificate of Address signed by a MLA in prescribed format only</option>
                            <option value="Certificate of Address signed by a Municipal Councillor  in prescribed format only">Certificate of Address signed by a Municipal Councillor  in prescribed format only</option>
                            <option value="Water Bill">Water Bill</option>
                            <option value="Consumer Gas Connection Card">Consumer Gas Connection Card</option>
                            <option value="Credit Card Statement">Credit Card Statement</option>
                            <option value="Passport of the spouse">Passport of the spouse</option>
                            <option value="Post office pass book">Post office pass book </option>
                            <option value="Domicile Certificate issued by the Government">Domicile Certificate issued by the Government</option>
                            <option value="Allotment letter of accommodation issued by Central/state Government less than 3 years old">Allotment letter of accommodation issued by Central/state Government less than 3 years old</option>
                            <option value="Property Registration Document">Property Registration Document</option>
                            <option value="Latest Property Tax Assessment Order">Latest Property Tax Assessment Order</option>
                            <option value="Elector's Photo Identity Card">Elector's Photo Identity Card</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-5" style="padding-top:0px;">Date of Birth <span class="red">*</span></label>
                        <div class="col-xs-7">
                          <select class="form-control" name="dobProof" required id="dobproof" onchange="idhange();replaceproofofdob()">
                            <option value="">Select the Proof for Date of Birth</option>
                            <option value="Birth Certificate issued by the Municipal Authority" {{ isset($user['dobproof']) && $user['dobproof'] == 'Birth Certificate issued by the Municipal Authority' ? 'selected' : '' }}>Birth Certificate issued by the Municipal Authority</option>
                            <option value="Pension Payment Order">Pension Payment Order</option>
                            <option value="Marriage certificate issued by Registrar of Marriages">Marriage certificate issued by Registrar of Marriages</option>
                            <option value="Matriculation certificate">Matriculation certificate</option>
                            <option value="Domicile certificate issued ">Domicile certificate issued </option>
                            <option value="Affidavit sworn before a magistrate stating the date of birth by the Government">Affidavit sworn before a magistrate stating the date of birth by the Government</option>
                            <option value="Driving License">Driving License</option>
                            <option value="Passport">Passport</option>
                            <option value="Voters Identity Card">Voters Identity Card</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-5" style="padding-top:0px;">Office Address</label>
                        <div class="col-xs-7">
                          <select class="form-control" name="offAddressProof">
                            <option value="">Select office Address Proof </option>
                            <option value="Credit Card Statement carrying Office Address" {{ isset($user['offAddressProof']) && $user['offAddressProof'] == 'Credit Card Statement carrying Office Address' ? 'selected' : '' }}>Credit Card Statement carrying Office Address </option>
                            <option value="Bank Account Statement carrying Office Address ">Bank Account Statement carrying Office Address </option>
                            <option value="Employer Certificate carrying Office Address">Employer Certificate carrying Office Address </option>
                            <option value="Electricity Bill carrying Office Address ">Electricity Bill carrying Office Address </option>
                            <option value="Telephone Bill carrying Office Address">Telephone Bill carrying Office Address </option>
                            <option value="Depository Account Statement carrying Office Address">Depository Account Statement carrying Office Address </option>
                            <option value="Office Property Tax Assessment Order">Office Property Tax Assessment Order</option>
                            <option value="Bank Account Statement carrying Office Address">Bank Account Statement carrying Office Address </option>
                          </select>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4">
                  <div class="free-trail-form" style="height:245px;">
                    <section class="common-form">
                      <h2>4 Income Source</h2>
                      <div class="form-group">
                        <div class="col-xs-1"></div>
                        <label class="checkbox-inline col-xs-5">
                        <input type="checkbox" id="checkbox" name="incomeSource" value="No Income" {{ isset($user['incomeSource']) && $user['incomeSource'] == 'No Income' ? 'checked' : '' }}>
                        No Income</label>
                        <label class="checkbox-inline col-xs-5">
                        <input type="checkbox" id="discheckbox1" name="incomeSource"  value="Business Profession" {{ isset($user['incomeSource']) && $user['incomeSource'] == 'Business Profession' ? 'checked' : '' }}>
                        Business/Profession</label>
                      </div>
                      <div class="form-group">
                        <div class="col-xs-1"></div>
                        <label class="checkbox-inline  col-xs-5">
                        <input type="checkbox" id="discheckbox2" name="incomeSource" value="Salary" {{ isset($user['incomeSource']) && $user['incomeSource'] == 'Salary' ? 'checked' : '' }}>
                        Salary</label>
                        <label class="checkbox-inline  col-xs-5">
                        <input type="checkbox" id="discheckbox3" name="incomeSource" value="House Property" {{ isset($user['incomeSource']) && $user['incomeSource'] == 'House Property' ? 'checked' : '' }}>
                        House Property</label>
                      </div>
                      <div class="form-group">
                        <div class="col-xs-1"></div>
                        <label class="checkbox-inline  col-xs-5">
                        <input type="checkbox" id="discheckbox4" name="incomeSource" value="Capital Gains" {{ isset($user['incomeSource']) && $user['incomeSource'] == 'Capital Gains' ? 'checked' : '' }}>
                        Capital Gains</label>
                        <label class="checkbox-inline  col-xs-5">
                        <input type="checkbox" id="discheckbox5" name="incomeSource" value="Other Sources" {{ isset($user['incomeSource']) && $user['incomeSource'] == 'Other Sources' ? 'checked' : '' }}>
                        Other Sources</label>
                      </div>
                      <div class="form-group">
                        <div class="col-xs-6">
                          <select class="form-control select-list" id="income" name="Annual Income" disabled="disabled">
                            <option value="">Annual Income</option>
                            <option value="Less Than 3,00,000">Less Than 3,00,000</option>
                            <option value="Between 3,00,001 to 5,00,000">Between 3,00,001 to 5,00,000</option>
                            <option value="Between 5,00,001 to 8,00,000">Between 5,00,001 to 8,00,000</option>
                            <option value="Greater than 8,00,000">Greater than 8,00,000</option>
                          </select>
                        </div>
                        <div class="col-xs-6">
                          <select class="form-control" id="business" disabled="disabled">
                            <option value="">BUSINESS TYPE</option>
                            <option value="Medical Profession and Business">Medical Profession and Business</option>
                            <option value="Engineering">Engineering</option>
                            <option value="Architecture">Architecture</option>
                            <option value="Chartered Accountant / Accountancy">Chartered Accountant / Accountancy</option>
                            <option value="Interior Decoration">Interior Decoration</option>
                            <option value="Technical Consultancy">Technical Consultancy</option>
                            <option value="Company Secretary">Company Secretary</option>
                            <option value="Legal Practitioner and Solicitors">Legal Practitioner and Solicitors</option>
                            <option value="Government Contractors">Government Contractors</option>
                            <option value="Insurance Agency">Insurance Agency</option>
                            <option value="Films, TV and Such other Entertainment">Films, TV and Such other Entertainment</option>
                            <option value="Information technology">Information technology</option>
                            <option value="Builders and developers">Builders and developers</option>
                            <option value="Members of Stock Exchange, Share Brokers and Sub- Brokers">Members of Stock Exchange, Share Brokers and Sub- Brokers</option>
                            <option value="Performing Arts and Yatra">Performing Arts and Yatra</option>
                            <option value="Operation of Ships, Hovercrafts, Aircrafts  or  Helicopters">Operation of Ships, Hovercrafts, Aircrafts  or  Helicopters</option>
                            <option value="Plying Taxies, Lorries, Trucks, Buses or other commercial vehicles">Plying Taxies, Lorries, Trucks, Buses or other commercial vehicles</option>
                            <option value="Ownership of Horses or Jockeys">Ownership of Horses or Jockeys</option>
                            <option value="Cinema Halls and other theatres">Cinema Halls and other theatres</option>
                            <option value="Others">Others</option>
                          </select>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="free-trail-form">
                    <section class="common-form">
                      <h2>5 Address Information</h2>
                      <div class="col-xs-12" style="margin-bottom:10px;">
                      <div class="col-xs-6">
                        <h4>Residence Address <span class="red">*</span></h4>
                         <a href="#" data-tooltip="Residential address is mandatory for individuals"><i class="fa fa-question-circle" aria-hidden="true"></i></a>
                      </div>
                      <div class="col-xs-6">
                        <h4>Office Address (Optional) </h4>
                         <a href="#" data-tooltip="If Address for Communication is selected as Office then Proof of Office Address along with Proof of residential address is mandatory"><i class="fa fa-question-circle" aria-hidden="true"></i></a>
                      </div></div>
                      
                      <div class="form-group">
                        <label class="control-label col-xs-3">Flat/Room/Door/Block No.</label>
                        <div class="col-xs-3">
                          <input type="text" class="form-control" name="resDoorNo" placeholder="" value="{{ $user['resDoorNo'] or '' }}">
                        </div>
                        <label class="control-label col-xs-3">Name of Office</label>
                        <div class="col-xs-3">
                          <input type="text" class="form-control" name="officeName" placeholder="" value="{{ $user['officeName'] or '' }}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-3">Name of Premises/Building/Village</label>
                        <div class="col-xs-3">
                          <input type="text" class="form-control" name="resBuilding" placeholder=""  value="{{ $user['resBuilding'] or '' }}">
                        </div>
                        <label class="control-label col-xs-3">Flat/Room/Door/Block No.</label>
                        <div class="col-xs-3">
                          <input type="text" class="form-control" name="offDoorNo"  value="{{ $user['offDoorNo'] or '' }}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-3">Road / Street / Lane / Post Office</label>
                        <div class="col-xs-3">
                          <input type="text" class="form-control" name="resStreet" placeholder=""  value="{{ $user['resStreet'] or '' }}">
                        </div>
                        <label class="control-label col-xs-3">Name of Premises/Building/Village</label>
                        <div class="col-xs-3">
                          <input type="text" class="form-control" name="offBuilding" placeholder=""  value="{{ $user['offBuilding'] or '' }}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-3">Area/Locality/Taluka/Sub-Division </label>
                        <div class="col-xs-3">
                          <input type="text" class="form-control" name="resArea" placeholder=""  value="{{ $user['resArea'] or '' }}">
                        </div>
                        <label class="control-label col-xs-3">Road/Street/Lane/Post Office</label>
                        <div class="col-xs-3">
                          <input type="text" class="form-control" name="offStreet" placeholder=""  value="{{ $user['offStreet'] or '' }}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-3">State/Union/Teritory</label>
                        <div class="col-xs-3">
                  <select id="listBox" class="form-control" onchange='selct_district(this.value)' name="resState"></select>
                        </div>
                        <label class="control-label col-xs-3">Area/Locality/Taluka/Sub-Division</label>
                        <div class="col-xs-3">
                          <input type="text" class="form-control" name="offArea" placeholder=""  value="{{ $user['offArea'] or '' }}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-3">Town/City/District</label>
                        <div class="col-xs-3">                          
                           <select id='secondlist' class="form-control" name="resCity"></select>                         
                        </div>
                        <label class="control-label col-xs-3">State/Union Territory</label>
                        <div class="col-xs-3">
                           <select id="statelist" class="form-control" onchange='selct_district(this.value)' name="offState"></select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-3">Pincode</label>
                        <div class="col-xs-3">
                          <input type="text" class="form-control" name="resPinCode" placeholder=""  value="{{ $user['resPinCode'] or '' }}">
                        </div>
                        <label class="control-label col-xs-3">Town/City/District</label>
                        <div class="col-xs-3">
                         <select id='citylist' class="form-control" name="offCity"></select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-3">Country</label>
                        <div class="col-xs-3">
                          <input type="text" class="form-control" name="resCountry" placeholder="India" readonly="readonly"  value="{{ $user['resCountry'] or '' }}">
                        </div>
                        <label class="control-label col-xs-3">Pincode</label>
                        <div class="col-xs-3">
                          <input type="text" class="form-control" name="offPincode" placeholder=""  value="{{ $user['offPincode'] or '' }}">
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="free-trail-form">
                    <section class="common-form">
                      <h2>5 Address Information</h2>
                      <div class="row col-xs-12">
                        <h4>
                          <input type="checkbox" value="" style="margin-right:10px;" class="cbxShowHide">
                          Representative Assessee is applicable </h4>
                         <a href="#" data-tooltip="This field is mandatory if applicant is minor, deceased, idiot, lunatic or mentally retarded."><i class="fa fa-question-circle" aria-hidden="true"></i></a>
                      </div>
                      <br>
                         <br>
                      <div class="block">
                      <div class="form-group">
                        <label class="control-label col-xs-3">Title</label>
                        <div class="col-xs-6">
                          <label class="radio-inline">
                          <input type="radio" name="Title"  value="shri">
                          Shri</label>
                          <label class="radio-inline">
                          <input type="radio" name="Title"  value=" Smt">
                          Smt</label>
                          <label class="radio-inline">
                          <input type="radio" name="Title" value="Kumari" >
                          Kumari</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-3">Name</label>
                        <div class="col-xs-3">
                          <input type="text" class="form-control" name="repFirstName" placeholder="First Name">
                        </div>
                        <div class="col-xs-3">
                          <input type="text" class="form-control" name="repMiddleName" placeholder="Middle Name">
                        </div>
                        <div class="col-xs-3">
                          <input type="text" class="form-control" name="repLastName"  placeholder="Last Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-3">Flat/Room/Door/Block No. <span class="red">*</span></label>
                        <div class="col-xs-3">
                          <input type="text" class="form-control" name="repdoorNumber" placeholder="">
                        </div>
                        <label class="control-label col-xs-3">State/Union Territory <span class="red">*</span></label>
                        <div class="col-xs-3">
                        
                           <select id="state" name="repState"  class="form-control" onchange='selct_district(this.value)'></select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-3">Name of Premises/Building/Village <span class="red">*</span></label>
                        <div class="col-xs-3">
                          <input type="text" class="form-control" name="repBuildingname"  placeholder="">
                        </div>
                        <label class="control-label col-xs-3">Town/City/District <span class="red">*</span></label>
                        <div class="col-xs-3">
                        
                             <select id='city' class="form-control" name="repCity" ></select>
   
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-3">Road/Street/Lane/Post Office <span class="red">*</span></label>
                        <div class="col-xs-3">
                          <input type="text" class="form-control" name="repStreet" placeholder="" >
                        </div>
                        <label class="control-label col-xs-3">Pincode <span class="red">*</span></label>
                        <div class="col-xs-3">
                          <input type="text" class="form-control" name="repPincode" placeholder="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-3">Area/Locality/Taluka/Sub-Division <span class="red">*</span></label>
                        <div class="col-xs-3">
                          <input type="text" class="form-control" name="repArea" placeholder="" >
                        </div>
                        <label class="control-label col-xs-3">Country</label>
                        <div class="col-xs-3">
                          <input type="text" class="form-control" name="repCountry" placeholder="India" readonly="readonly">
                        </div>
                      </div></div>
                    </section>
                  </div>
                </div> 
                
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="free-trail-form">
                    <section class="common-form">
                      <h2>Declaration</h2>
                      
                     <p> I have enclosed <span id="blankline">________________________ </span><span id="prfid" style="text-decoration:underline;display:none;"></span> as proof of identity,<span id="blankline1">________________________ </span> <span id="prfid1" style="text-decoration:underline;display:none;"></span> as proof of address and<span id="blankline2">________________________ </span><span id="prfid3" style="text-decoration:underline;display:none"></span> as proof of date of birth.</p>
                     <p>I <span id='app_name'>________________________</span>, the applicant, in the capacity of do hereby declare that what is stated above is true to the best of my information and belief.</p>
<p>Date: <span id='date'></span> City of residence<span id="blankline4">________________________ </span><span id="cityid1" style="text-decoration:underline;display:none;"> </span></p>
<p class="red-color">* Mandatory. Please ensure the name in the ID Proof matches  <span id='app_name'>________________________</span>. If the name does not match, the application would not be accepted. </p>
               
                      
                      
                     <div class="form-btn text-center">
                     
                     <button type="submit"  class="eq-button btn-theme4" value="">Submit</button>&nbsp;&nbsp;<button type="submit" class="eq-button btn-theme4" value="">Reset</button>
                     </div>                      
                      
                    </section>
                  </div>
                </div>
                <input type="hidden" name='uid' value="{{ $user['uid'] or '' }}"> 
              </form>
            </div>          
   			
            </div>
          </div>
        </div>
      </div>
    </section>

  

  