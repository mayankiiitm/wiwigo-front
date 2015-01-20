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
	  		<a href="index.html" class="logo"><img src="/images/logo.png" alt="" title="Welcome To Wiwigo"></a>
	  </div>
	  <div class="col-md-10 col-sm-10">
	  	<ul class="help pull-right clearfix">
	  		<li class="call">Booking: <a href="tel+1234-5678-9821">1800 12345 789</a></li>
	  		<li class="sine-in"><span>login</span></li>
	  		<li class="sine-in last"><span>sign up</span></li>
	  	</ul>
	  </div>
	 </d/iv>
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
			<div class="col-md-12 col-sm-12">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="agency-registration">
							<h4>Agency Vehicle Addition</h4>
							<form action="" method="post" enctype="multipart/form-data" id="form1">
								<ul class="registran clearfix">
									
									<li class="pull-left"><input type="text" name="number" placeholder="Plate Number"></li>
				
									<li class="pull-right"><input type="text" name="year" placeholder="Year"></li>

									<li class="pull-left"><input type="text" name="seats" placeholder="Number of seats available:5"></li>

									<li class="pull-right">
										<select name="model" id="model">
										<option value="0">--Select Model--</option>
											<?php foreach ($data->data->cars as $key => $value) {?>
												<option value="<?=$value->id?>"><?=$value->model?></option>
											<?php }?>
										</select>
									</li>

									<li class="clearboth"><input type="text" name="rpk" placeholder="Rate Per km."></li>

									<li><input type="text" name="ta" placeholder="TA/DA Per Day"></li>								
								</ul>

								<div class="check-row vehicle-checkbox clearfix">
									<div class="checkbox">
								    	<input type="checkbox" id="air" name="ac" value="1">
								        <label class="css-label" for="air" style="background-position: 0px 0px;"> Air Conditioning </label>
								   </div>

								   <div class="checkbox">
								    	<input type="checkbox" id="gps" name="gps" value="1">
								        <label class="css-label" for="gps" style="background-position: 0px 0px;"> GPS Tracking</label>
								   </div>

									<div class="checkbox">
								    	<input type="checkbox" id="luggage" name="lc" value="1">
								        <label class="css-label" for="luggage" style="background-position: 0px 0px;">Luggage Carrier</label>
								   </div>

								   <div class="checkbox">
								    	<input type="checkbox" id="option5" name="o5" value="1">
								        <label class="css-label" for="option5" style="background-position: 0px 0px;">Option5</label>
								   </div>
								</div>

								
								<div class="button-row">
									<div class="fileUpload btn btn-primary">
									    <span>upload rc</span>
									    <input type="file" class="upload" name="rc">
									</div>
									<div class="fileUpload btn photo">
									    <span>upload photos</span>
									    <input type="file" class="upload" name="jimage[]" multiple>
									</div>
									<div>
										<input type="hidden" value="<?=$_SESSION['a_token']?>" name="access_token">
										<button class="btn btn-success btn-another" type="submit" id="submit">Done</button>
										<span class="error-block" id="message"></span>
									</div>
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
						<li><a href="#">Agency Registration</a></li>
						<li><a href="#">My Account</a></li>
						<li><a href="#">Contact Us</a></li>
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
	$(document).ready(function(){
		alert($("#model").val());
		$('form').parsley({errorTemplate: "<span class='my-parsley-error'></span>",errorsWrapper: "<div></div>",});
		$('form').submit(function(e){
			var form=$(this);
			e.preventDefault();
			$("#submit").text('Adding...').attr("disabled","disabled");
			$('#email-error').hide();
			var formData = new FormData($(this)[0]);
			$.ajax({
				url:'http://10.0.0.230/agency/vehicle',
				type:'POST',
				data:formData,
				processData: false,
    			contentType: false,
				success:function(res){
					result=$.parseJSON(res);
					if (result.error[0]=='401') {
						$.post('http://10.0.0.230/agency/refresh?access_token='+$('input[name=access_token]').val(),function(data){
							response=$.parseJSON(data);
							$.cookie('atoken',response.data.access_token);
							$('input[name=access_token]').val(response.data.access_token);
							$('form').submit();
						});
					}else if ($.inArray(106,result.error)>-1){
						$('#message').text(result.message).css("display","inline");
						$("#submit").text('Done').removeAttr("disabled");
					}else{
						$('input[type=file]').val('');
						$('input[type=text]').val('');
						$('#message').text(result.message).css("display","inline");
						$("#submit").text('Add More').removeAttr("disabled");
					}
				}
			});
		});
	});
</script>

</body>
</html>
