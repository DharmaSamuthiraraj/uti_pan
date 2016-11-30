<footer class="footer-container">
  <div class="container">
    <div class="row">
      <div class="footer-wrapper">
        <div class="col-xs-12 col-sm-6 col-md-5">
          <h2>About STMC</h2>
          <span class="divder gray">&nbsp;</span>
          <p>STMC is one of the best Multi Service Organisation in Chennai, We offered the following Service Life Insurance, Health Insurance, Genral Insurance, Home Loan, Mutual Funds, Fixed Deposit, Marriage Registration, Property & Document Registration, EC Copy of the Docs, Income Tax, PAN Card and Passport Services. </p>
          <div class="social-icon">
            <ul>
              <li class="facebook"><a  href="http://www.facebook.com/" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li class="twitter"><a href="http://www.twitter.com/"  title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
              <li class="google"><a href="https://plus.google.com/" title="Google plus" target="_blank"><i class="fa fa-google-plus"></i></a></li>
              <li class="linkedin"><a href="https://in.linkedin.com/"  title="Linkedin"  target="_blank"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <h2>Quick Link</h2>
          <span class="divder gray">&nbsp;</span>
          <div class="quick-links">
            <ul>
              <li><a href="#">About us</a></li>
              <li><a href="#">Contact us</a></li>
              <li><a href="#">Terms of Service</a></li>
              <li><a href="#">Refund Policy</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Disclaimer</a></li>
            </ul>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <h2>Contact us</h2>
          <span class="divder gray">&nbsp;</span>
          <div class="footer-address">
            <div class="footer-list"> <span class="address-icon"><span class="fa fa-map-marker"></span></span>
              <div class="address-text">No.59/91, 1st Floor,<br />
                5th Main Road, CIT Nagar East,<br />
                Nandanam, Chennai - 600035.<br />
                Tamilnadu, South India.<br />
                Chennai - 600115</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="copy-right-text">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-8">
          <p>Copyright &copy; STMC Chennai 2016. All rights reserved.</p>
        </div>
      </div>
    </div>
  </div>
</footer>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/revealmodal.js"></script>
<script type="text/javascript" src="js/stacktable.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/bootbox.min.js"></script>
<script src="js/state.js"></script>
<script src="js/wizard.js"></script>
<script src="js/dobPicker.min.js"></script>
<script src="js/apply_pan.js"></script>
<script>
<!-- //
function ClearForm(){
    document.new_pan.reset();
}
// -->
</script>

<script>

$('.cbxShowHide').click(function(){
    this.checked?$('.block').show(1000):$('.block').hide(1000);
});
</script>
<script>
$(document).ready(function(){
     //disable on page load
     $('#details :input').attr('disabled', true);
     
     $('#chkbox').change(function() {
          $('#details :input').attr('disabled', !this.checked);
     })
});

</script>
<script>
$('#checkbox').on('change', function() {
	if($('#checkbox').eq(0).is(':checked')){
    	$('#discheckbox1, #discheckbox2, #discheckbox3, #discheckbox4, #discheckbox5 ').not($(this)).attr('disabled', true);
    }
    else{
        $('#discheckbox1, #discheckbox2, #discheckbox3, #discheckbox4, #discheckbox5').not($(this)).attr('disabled', false);
    }
});
</script>
<script>
  var update_pizza = function () {
    if ($("#discheckbox2, #discheckbox4, #discheckbox3, #discheckbox5").is(":checked")) {
        $('#income').prop('disabled', false);
    }
    else {
        $('#income').prop('disabled', 'disabled');
    }
};

$(update_pizza);
$("#discheckbox2, #discheckbox4, #discheckbox3, #discheckbox5").change(update_pizza);

  
  </script>
<script>
  var update_pizza = function () {
    if ($("#discheckbox1").is(":checked")) {
        $('#income, #business').prop('disabled', false);
    }
    else {
        $('#income, #business').prop('disabled', 'disabled');
    }
};

$(update_pizza);
$("#discheckbox1").change(update_pizza);

  
  </script>
<script>
function copyText() {
first = document.getElementById("first");
last = document.getElementById("middle");
full = document.getElementById("full");
full.value = first.value + ' ' + last.value;
}
</script>
<script>
    function cTrig(#premiumsupport) { 
      if (document.getElementsById(#premiumsupport)[0].checked == true) {
        return false;
      } else {
       var box= confirm("Are you sure, you want to disable premium support?");
        if (box==true)
            return true;
        else
           document.getElementsById(#premiumsupport)[0].checked = true;
            
      }
    }
	
	
	
</script>
<script>
$('#premiumsupport').on('click', function(){
    if ( $(this).is(':checked')) {
        $('#price1').show();
		$('#price2').hide();
		$('#price3').show();
		$('#price4').hide();
    } 
    else {
        $('#price2').show();
		$('#price1').hide();
		$('#price3').hide();
		$('#price4').show();
    }

	
	
	
});




</script>
<script>
function copyText2() {
textBox2 = document.getElementById("last");
message2 = document.getElementById("printlast");
message2.value = textBox2.value;
}

</script>
<script>
			$(document).ready(function() {
				$.dobPicker({
					daySelector: '#dobday', /* Required */
					monthSelector: '#dobmonth', /* Required */
					yearSelector: '#dobyear', /* Required */
					dayDefault: 'Day', /* Optional */
					monthDefault: 'Month', /* Optional */
					yearDefault: 'Year', /* Optional */
					minimumAge: 12, /* Optional */
					maximumAge: 80 /* Optional */
				});
			});
		</script>