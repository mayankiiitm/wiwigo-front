<?php require_once 'userl-header.php';?>
<section class="banner booking">
	<div class="container">
		<div class="ficaption"><h1>Book A Cab From Anywhere</h1></div>
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
							<div class="chose">
								<div class="car-sec">
									<img src="images/car.jpg" alt="" title="<?=$data['search']->model_name?>" class="img-responsive">
									<div class="star-box">
										<span><small><?=$data['search']->model_name?></small></span>
									</div>
								</div>
								<div class="chose-details">
									<h4>itinerary details</h4>
									<p><?=$data['from']?> to <?=$data['to']?></p>
									<p><?=$data['start']?></p>
									<p>to</p>
									<p><?=$data['end']?></p>
									<p><?=$data['search']->model_name?></p>
									<p><?=$data['search']->agency?></p>
									<p>fare = <?=$data['search']->price?>*</p>
									<p>pay now= <?=ceil($data['search']->price/5)?></p>
								</div>
							</div>
							<!--chose end-->

						</aside>
					</div>
				</div>
			</div>
			<div class="col-md-9 col-sm-9">
				<div class="row">
					<div class="col-md-12">
						<div class="heading-two"><h2>Book you cab now</h2></div>
						
						<ul class="tab-bar clearfix">
							<li class="active"><a href="#">Pickup Details</a><span class="tsprit-nor"></span></li>
							<li class="last disable" id="disable"><a href="#">Payment Method</a></li>
						</ul>
					
						<div class="tab-article" style="display:block;">
							<form action="/process-payment?id=<?=$_GET['id']?>" method="post">
								<ul class="form-two clearfix">
									<li><input type="text" name="name" placeholder="Full Name"></li>
									<li><input type="text" name="email" placeholder="Email"></li>
									<li><input type="text" name="mobile" placeholder="Mobile"></li>
									<li><input type="text" name="pickup_time" placeholder="Pickup Time"></li>
								</ul>

								<div class="pickupbox">
									<h4>Pickup Address</h4>
									<ul class="form-two clearfix">
										<li>
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
										<li>
											<input type="text" name="city" placeholder="City" id="city">
										</li>
										<li>
											<input type="text" name="area" placeholder="Area" id="area">
										</li>
										<li><input type="text" name="address" placeholder="Pickup Address"></li>
										<li><input type="password" name="password" placeholder="Password"></li>
										<li><input type="password" placeholder="Confirm Password"></li>
									</ul>
								</div>

								<div class="checkbox">
							    	<input type="checkbox" name="female" id="checkboxb">
							        <label for="checkboxb" class="css-label">Solo female traveller will be using this rental.</label>
							   </div>
								<input type="hidden" value="<?=$_SESSION['request_token']?>" name="request_token">
								<input type="hidden" name="origin" value="<?=$data['from']?>">
								<input type="hidden" name="destination" value="<?=$data['to']?>">
								<input type="hidden" name="start" value="<?=$data['start']?>">
								<input type="hidden" name="end" value="<?=$data['end']?>">
								<input type="hidden" name="v_id" value="<?=$data['search']->id?>">
								<input type="hidden" name="u_id" value="">
								<input type="hidden" name="price" value="<?=$data['search']->price?>">
								<input type="hidden" name="advance" value="<?=ceil($data['search']->price/5)?>">
								<input type="hidden" name="payment_page" value="payment">
								<button type="submit" class="btn btn-success btn-org">continue</button>
							</form>
						</div>
						<!--tab-article end-->
						
						<div class="tab-article">
							<div class="getway-box">
								<h2>Full fledged payment gateway info:</h2>
								<form action="#" method="post">
									<ul class="form-two clearfix">
										<li><input type="text" name="card" placeholder="Card Number"></li>
										<li><input type="text" name="name" placeholder="Name"></li>
										<li>
											<select>
												<option>Card Expiration Month</option>
												<option>January</option>
												<option>February</option>
												<option>March</option>
												<option>April</option>
												<option>May</option>
												<option>June</option>
												<option>July</option>
												<option>Agust</option>
												<option>September</option>
												<option>October</option>
												<option>November</option>
												<option>December</option>
											</select>
										</li>
										<li>
											<select>
												<option>Card Expiration Year</option>
												<option>2015</option>
												<option>2016</option>
												<option>2017</option>
												<option>2018</option>
												<option>2019</option>
												<option>2020</option>
												<option>2021</option>
												<option>2022</option>
												<option>2023</option>
												<option>2024</option>
												<option>2025</option>
												<option>2026</option>
												<option>2027</option>
												<option>2028</option>
												<option>2029</option>
												<option>2030</option>
												<option>2031</option>
												<option>2032</option>
												<option>2033</option>
												<option>2034</option>
												<option>2035</option>
											</select>
										</li>
										<li><input type="text" name="Security" placeholder="Security Code"></li>
										<li><img src="images/card.png" alt="" title=""></li>
									</ul> 

									<div class="checkbox">
								    	<input type="checkbox" name="checkboxa" id="checkboxa">
								        <label for="checkboxa" class="css-label">Click here to confirm that you have read and agreed to the <span>Rental Conditions </span> and <span>Terms &amp; Conditions</span> </label>
								   </div>
									
									<button type="submit" class="btn btn-success btn-org">continue</button>
									
								</form>
							</div>
							<!--getway-box end-->
						</div>
						<!--tab-article end-->
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
				<span class="racspase-logo pull-right"><img src="images/rackspace.png" alt="" title=""></span>
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

<script type="text/javascript">
	$(document).ready(function(){
		//NTH-CHILD EVEN IE8 SUPPORT
		//$(".form-two li:nth-child(even)").css("margin-left", "15px");

		//TAB SECTION
		$('ul.tab-bar li').click(function(){
			if ($(this).attr('id')=='disable') {
				return false;};
			var num = $(this).index();
			$(this).addClass('active').siblings().removeClass('active');
			$('.tab-article:eq('+num+')').slideDown().siblings('.tab-article').slideUp();
			return false;
		});
		$('#disable').click(function(e){
			e.preventDefault();
		});

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
