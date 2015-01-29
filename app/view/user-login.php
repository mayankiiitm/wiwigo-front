<?php require_once 'userl-header.php';?>
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
						<div class="heading-two"><h2>User Login</h2></div>
						<div class="agency-registration">
							<form action="#" method="post">
								<ul class="registran clearfix">
								
									<li><input type="text"  placeholder="Email/Username" data-parsley-required="true" data-parsley-error-message="Please enter Email or Username" id="email" name="email"><span class="error-block" id="email-error">Invalid Username/Email or Password</span></li>
									<li><input type="password" name="password" placeholder="Password" data-parsley-required="true" data-parsley-error-message="Please enter your password" id="password"></li>
									<input type="hidden" value="<?=$_SESSION['request_token']?>" name="request_token">
								</ul>
								<div class="button-row">
									<button type="submit" class="btn btn-success btn-vehicle" id="submit">LOGIN</button>
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
$('form').submit(function(e){
	e.preventDefault();
	$('#submit').html("<i class='loder'></i>");
	var formData=$(this).serialize();
	$("#submit").attr('disabled','true');
	$("#submit").text('Processing...');
	$.ajax({
        url: '<?=API_URL?>/user/login',
        data: formData,
        type: 'POST'
    }).done(function(data){
		result=$.parseJSON(data);
		if (result.error[0]=='401'){
			$.ajax({
				url:'<?=WEB_URL?>/mauth?request_token='+$('input[name=request_token]').val(),
				type:'GET',
				success: function(data){
					var result=$.parseJSON(data);
					$('input[name=request_token]').val(result.data.request_token);
					$('form').submit();
				}
			});
		}else if (result.success==1) {
			$.cookie('utoken',result.data.access_token);
			window.location.replace('<?=WEB_URL?>/login');
		}else if ($.inArray(104,result.error)>-1) {
			$("#email-error").show();
			$('input[name=password]').val('');
			$("#submit").removeAttr('disabled','true');
	        $("#submit").text('LOGIN');
		}else{
			$("#email-error").text('Some Error Ocuured. Please try again').show();
			$("#submit").removeAttr('disabled','true');
	        $("#submit").text('LOGIN');
		}
	})
});
$('#email,#password').click(function(){
	$("#email-error").hide();
});
</script>
</body>
</html>