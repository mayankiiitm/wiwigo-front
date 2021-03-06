<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Book Outstation Cab Rental</title>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="/css/style.css">
<link rel="stylesheet" type="text/css" href="/css/parsley.css">
 <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <link rel="stylesheet" type="text/css" href="/css/all-ie.css">
 <![endif]-->
</head>
<body>
<div id="wrapper">
<header>
 	<div class="container">
	 <div class="row">
	  <div class="col-md-2 col-sm-2">
	  		<a href="/agency/login" class="logo"><img src="/images/logo.png" alt="" title="Welcome To Wiwigo"></a>
	  </div>
	  <div class="col-md-10 col-sm-10">
	  	<ul class="help pull-right clearfix">
	  		<li class="call">Booking: <a href="tel+1234-5678-9821">1800 12345 789</a></li>
	  		<li class="sine-in"><a href="/agency/login"><span>login</span></a></li>
	  		<li class="sine-in last"><a href="/agency/register"><span>sign up</span></a></li>
	  	</ul>
	  </div>
	 </div>
 	</div>
</header>
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
						<div class="heading-two"><h2>Agency Login</h2></div>
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


<!--footer start-->
<footer>
	<div class="container">
		<div class="row footer-inner">
			<div class="col-md-8 col-sm-8">
				<nav class="nav-primary">
					<ul class="clearfix">
						<li><a href="#">About</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Career</a></li>
						<li><a href="#">Terms &amp; Conditions</a></li>
						<li><a href="#">Cancellation &amp; Refund Policy </a></li>
						<li><a href="#">Privacy Policy</a></li>
					</ul>
				</nav>
				<nav class="nav-secondry">
					<ul class="clearfix">
						<li><a href="/agency/register">Agency Registration</a></li>
						<li><a href="/agency/login">Log In</a></li>
					</ul>
				</nav>
			</div>
			<div class="col-md-2 col-md-offset-2 col-sm-2 col-sm-offset-2">
				<div class="social">
					<ul class="clearfix">
						<li><a href="https://facebook.com/" target="_new" title="facebook"><i class="sprit-fb"></i></a></li>
						<li><a href="https://twitter.com/" target="_new" title="Twitter"><i class="sprit-twi"></i></a></li>
						<li><a href="https://plus.google.com" traget="_new" title="Google Plus" target="_new"><i class="sprit-goolge"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row copyright-box">
			<div class="col-md-8 col-sm-8">
				<div class="copyright pull-right">
					<p>Copyright © Wiwigo. All Rights Reserved.</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<span class="racspase-logo pull-right"><img src="/images/rackspace.png" alt="" title=""></span>
			</div>
		</div>
	</div>
</footer>
<!--footer end-->


<!--jquery libraries-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/js/jquery-1.11.1.min.js"><\/script>')</script>

<!--jqueryui plugin-->
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script>window.jQuery.ui || document.write('<script src="/js/jquery-ui.min.js"><\/script>')</script>

<!--Custome selectbox plugin-->
<script type="text/javascript" src="/js/jquery.fs.selecter.js"></script>

<!--Boostrap plugin-->
<script type="text/javascript" src="/js/bootstrap.js"></script>

<!--flexslider plugin-->
<script type="text/javascript" src="/js/jquery.flexslider.js"></script>

<!--datetimepicker plugin-->
<script type="text/javascript" src="/js/jquery.datetimepicker.js"></script>

<!--Custom-->
<script type="text/javascript" src="/js/custom.js"></script>


<script type="text/javascript" src="/js/parsley.js"></script>
<script type="text/javascript" src="/js/cookie.js"></script>
<script type="text/javascript">
$('form').parsley({errorTemplate: "<span class='my-parsley-error'></span>",errorsWrapper: "<div></div>",});
$('form').submit(function(e){
	e.preventDefault();
	$('#submit').html("<i class='loder'></i>");
	var formData=$(this).serialize();
	$("#submit").attr('disabled','true');
	$("#submit").text('Processing...');
	$.ajax({
        url: '<?=API_URL?>/agency/login',
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
			$.cookie('atoken',result.data.access_token);
			window.location.replace('<?=WEB_URL?>/agency/login');
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