<?php require_once 'userl-header.php';?>
<!--HEADER END-->
<section class="banner booking">
	<div class="container">
		<div class="ficaption"><h1>Book A Cab From Anywhere In India</h1></div>
	</div>
</section>
<!--BANNER END-->

<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<aside>
							<div class="agency-aside">
								<div class="car-sec">
									<img src="/images/car.jpg" alt="" title="" class="img-responsive">
									<div class="star-box">
										<span><small>skoda citigo</small> or Similar</span>
									</div>
								</div>
								<div class="car-sec">
									<img src="/images/car2.jpg" alt="" title="" class="img-responsive">
									<div class="star-box">
										<span><small>opel astra</small> or Similar</span>
									</div>
								</div>
							</div>
						</aside>
					</div>
				</div>
			</div>
			<div class="col-md-9 col-sm-9">
				<div class="row">
					<div class="col-md-12">
						<div class="heading-two"><h2>User Registration</h2></div>
						<div class="agency-registration">
							<form action="#" method="post">
								<ul class="registran clearfix">
									<li class="pull-left"><input type="text" name="organization" placeholder="Organization Name" data-parsley-length="[4, 250]" data-parsley-required="true" data-parsley-error-message="Organization Name must be in range 4-250"></li>
									<li class="pull-right"><input type="text" name="name" placeholder="Contact Name" data-parsley-length="[4, 50]" data-parsley-required="true" data-parsley-error-message="Contact Name must be in range 4-25"></li>
									<li class="pull-left"><input type="text" name="landline" placeholder="Landline" data-parsley-type="number" data-parsley-required="true" data-parsley-error-message="Not a valid landline number"></li>
									<li class="pull-right"><input type="text" name="mobile" placeholder="Mobile Number" data-parsley-pattern="\d{10}" data-parsley-required="true" data-parsley-error-message="Not a valid mobile number"></li>																										
									<li class="clearboth">
										<select id="state" name="state" data-parsley-required="true" data-parsley-min=1 data-parsley-error-message="Please select state">
											<option value="0"><em>---Select State---</em></option>
											<option value="1">Andaman &amp; Nicobar</option>
											<option value="2">Andhra Pradesh</option>
											<option value="3">Arunachal Pradesh</option>
											<option value="4">Assam</option>
											<option value="5">Bihar</option>
											<option value="6">Chandigarh</option>
											<option value="7">Chhattisgarh</option>
											<option value="8">Dadra &amp; Nagar Haveli</option>
											<option value="9">Daman &amp; Diu</option>
											<option value="10">Delhi</option>
											<option value="11">Goa</option>
											<option value="12">Gujarat</option>
											<option value="13">Haryana</option>
											<option value="14">Himachal Pradesh</option>
											<option value="15">Jammu &amp; Kashmir</option>
											<option value="16">Jharkhand</option>
											<option value="17">Karnataka</option>
											<option value="18">Kerala</option>
											<option value="19">Lakshadweep</option>
											<option value="20">Madhya Pradesh</option>
											<option value="21">Maharashtra</option>
											<option value="22">Manipur</option>
											<option value="23">Meghalaya</option>
											<option value="24">Mizoram</option>
											<option value="25">Nagaland</option>
											<option value="26">Orissa</option>
											<option value="27">Pondicherry</option>
											<option value="28">Punjab</option>
											<option value="29">Rajasthan</option>
											<option value="30">Sikkim</option>
											<option value="31">Tamil Nadu</option>
											<option value="32">Tripura</option>
											<option value="33">Uttar Pradesh</option>
											<option value="34">Uttaranchal</option>
											<option value="35">West Bengal</option>
										</select>
									</li>

									<li class="clearboth">
										<input type="text" name="city" placeholder="City" id="city" data-parsley-required="true" data-parsley-error-message="Please fill in City">
									</li>
									<li class="clearboth">
										<input type="text" name="area" placeholder="Area" id="area" data-parsley-required="true" data-parsley-error-message="Please fill in Area">
									</li>
									<li><input type="text" name="address" placeholder="Address" data-parsley-length="[4, 250]" data-parsley-required="true" data-parsley-error-message="Address must be in range 4-250"></li>
									
									
									<li><input type="text" name="pin" placeholder="Pin Code" data-parsley-length="[6,6]" data-parsley-required="true" data-parsley-error-message="Not a valid PIN"></li>
									<li ><input type="text" name="email" placeholder="email" data-parsley-required="true" data-parsley-type="email" data-parsley-error-message="Not a valid Email Address" id="email"><span class="error-block" id="email-error">This email is already registered with us</span></li>
									<li><input type="text" name="username" placeholder="Username" id="username" data-parsley-required="true" data-parsley-length="[4, 50]" data-parsley-error-message="Username must be in range 4-50"><span class="error-block" id="username-error">Someone has taken this username already</span></li>
									<li class="pull-left"><input type="password" name="password" placeholder="Password" data-parsley-required="true" data-parsley-minlength="5" data-parsley-error-message="Password must be at least 5 character long" id="password"></li>
									<li class="pull-right"><input type="password" name="confirm" placeholder="Confirm Password" data-parsley-required="true" data-parsley-equalto="#password" data-parsley-error-message="Confirm Password and Password must be same"></li>
									<input type="hidden" value="<?=$_SESSION['request_token']?>" name="request_token">
								</ul>
								<div class="button-row">
									<button type="submit" class="btn btn-success btn-vehicle" id="submit">register</button>
								</div>
							</form>
						</div>
						<!--agency-registration end-->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--content end-->

</div>
<!--WRAPPER END-->

<?php require_once 'userl-footer.php';?>
<script type="text/javascript">
$('form').parsley({errorTemplate: "<span class='my-parsley-error'></span>",errorsWrapper: "<div></div>",});
$("form").submit(function(e){
	e.preventDefault();
	var formData=$(this).serialize();
	$("#submit").attr('disabled','true');
	$("#submit").text('Processing...');
	$.ajax({
		url:'http://10.0.0.230/agency/register',
		type:'POST',
		data:formData}).done(function(data){
		result=$.parseJSON(data);
		if (result.error[0]=='401') {
			$.ajax({
				url:'http://10.0.0.3/mauth?request_token='+$('input[name=request_token]').val(),
				type:'GET',
				success: function(data){
					var result=$.parseJSON(data);
					$('input[name=request_token]').val(result.data.request_token);
					$('form').submit();
				}
			});
		}else if($.inArray(100 , result.error)>-1) {
			$("#email-error").show();
			$("#submit").removeAttr('disabled','true');
			$("#submit").text('REGISTER');
		}else if($.inArray(101 ,result.error)>-1) {
			$("#username-error").show();
			$("#submit").removeAttr('disabled','true');
			$("#submit").text('REGISTER');
		}else {
			window.location.replace('http://10.0.0.3/agency/login');
		}
	})
});
$('#email').click(function(){
	$("#email-error").hide();
});
$('#username').click(function(){
	$("#username-error").hide();
});
var availablecities=[];
var state='';
$("#city").click(function(){
	if ($("#state").val()>0 && $("#state").val()!=state){
		$.ajax({
			url:'http://10.0.0.230/term/cities',
			type:'GET',
			data:'state='+$("#state").val(),
			success: function(data){
				availablecities.length=0;
				var d=$.parseJSON(data);
				$.each(d.data,function(index, value){
					availablecities.push(value.city);
				});
				console.log(availablecities);
			}
		});
		state=$("#state").val();
	};
});
$( "#city" ).autocomplete({
source: availablecities
});
</script>

</body>
</html>