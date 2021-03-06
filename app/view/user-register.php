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
			
									<li ><input type="text" name="name" placeholder="Contact Name" data-parsley-length="[4, 50]" data-parsley-required="true" data-parsley-error-message="Contact Name must be in range 4-25"></li>
									<li><input type="text" name="mobile" placeholder="Mobile Number" data-parsley-pattern="\d{10}" data-parsley-required="true" data-parsley-error-message="Not a valid mobile number"></li>																										
									<li ><input type="text" name="email" placeholder="email" data-parsley-required="true" data-parsley-type="email" data-parsley-error-message="Not a valid Email Address" id="email"><span class="error-block" id="email-error">This email is already registered with us</span></li>
									<li><input type="password" name="password" placeholder="Password" data-parsley-required="true" data-parsley-minlength="5" data-parsley-error-message="Password must be at least 5 character long" id="password"></li>
									
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
		url:'<?=API_URL?>/user/register',
		type:'POST',
		data:formData}).done(function(data){
		result=$.parseJSON(data);
		if (result.error[0]=='401') {
			$.ajax({
				url:'<?=WEB_URL?>/mauth?request_token='+$('input[name=request_token]').val(),
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
			window.location.replace('<?=WEB_URL?>/login');
		}
	})
});
$('#email').click(function(){
	$("#email-error").hide();
});
$('#username').click(function(){
	$("#username-error").hide();
});
</script>

</body>
</html>
