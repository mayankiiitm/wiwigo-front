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
									<li><input type="text" name="name" placeholder="Full Name" value="<?php echo isset($data['user']->data->name)?$data['user']->data->name:''?>" data-parsley-required="true" data-parsley-error-message="Please enter Name"></li>
									<li><input type="text" name="email" placeholder="Email" value="<?php echo isset($data['user']->data->email)?$data['user']->data->email:''?>" data-parsley-required="true" data-parsley-error-message="Please enter Email"></li>
									<li><input type="text" name="mobile" placeholder="Mobile" value="<?php echo isset($data['user']->data->mobile)?$data['user']->data->mobile:''?>" data-parsley-required="true" data-parsley-error-message="Please enter Mobile"></li>
									<li><input type="text" name="pickup_time" placeholder="Pickup Time" data-parsley-required="true" data-parsley-error-message="Please enter Time"></li>
								</ul>

								<div class="pickupbox">
									<h4>Pickup Address</h4>
									<ul class="form-two clearfix">
										<li>
											<?php $s_id=isset($data['user']->data->s_id)?$data['user']->data->s_id:0?>
											<select id="state" name="state" data-parsley-required="true" data-parsley-min=1 data-parsley-error-message="Please select state">
											<option value="0"><em>---Select State---</em></option>
											<option value="1" <?=$s_id==1?'selected':''?>>Andaman &amp; Nicobar</option>
											<option value="2" <?=$s_id==2?'selected':''?>>Andhra Pradesh</option>
											<option value="3" <?=$s_id==3?'selected':''?>>Arunachal Pradesh</option>
											<option value="4" <?=$s_id==4?'selected':''?>>Assam</option>
											<option value="5" <?=$s_id==5?'selected':''?>>Bihar</option>
											<option value="6" <?=$s_id==6?'selected':''?>>Chandigarh</option>
											<option value="7" <?=$s_id==7?'selected':''?>>Chhattisgarh</option>
											<option value="8" <?=$s_id==8?'selected':''?>>Dadra &amp; Nagar Haveli</option>
											<option value="9" <?=$s_id==9?'selected':''?>>Daman &amp; Diu</option>
											<option value="10" <?=$s_id==10?'selected':''?>>Delhi</option>
											<option value="11" <?=$s_id==11?'selected':''?>>Goa</option>
											<option value="12" <?=$s_id==12?'selected':''?>>Gujarat</option>
											<option value="13" <?=$s_id==13?'selected':''?>>Haryana</option>
											<option value="14" <?=$s_id==14?'selected':''?>>Himachal Pradesh</option>
											<option value="15" <?=$s_id==15?'selected':''?>>Jammu &amp; Kashmir</option>
											<option value="16" <?=$s_id==16?'selected':''?>>Jharkhand</option>
											<option value="17" <?=$s_id==17?'selected':''?>>Karnataka</option>
											<option value="18" <?=$s_id==18?'selected':''?>>Kerala</option>
											<option value="19" <?=$s_id==19?'selected':''?>>Lakshadweep</option>
											<option value="20" <?=$s_id==20?'selected':''?>>Madhya Pradesh</option>
											<option value="21" <?=$s_id==21?'selected':''?>>Maharashtra</option>
											<option value="22" <?=$s_id==22?'selected':''?>>Manipur</option>
											<option value="23" <?=$s_id==23?'selected':''?>>Meghalaya</option>
											<option value="24" <?=$s_id==24?'selected':''?>>Mizoram</option>
											<option value="25" <?=$s_id==25?'selected':''?>>Nagaland</option>
											<option value="26" <?=$s_id==26?'selected':''?>>Orissa</option>
											<option value="27" <?=$s_id==27?'selected':''?>>Pondicherry</option>
											<option value="28" <?=$s_id==28?'selected':''?>>Punjab</option>
											<option value="29" <?=$s_id==29?'selected':''?>>Rajasthan</option>
											<option value="30" <?=$s_id==30?'selected':''?>>Sikkim</option>
											<option value="31" <?=$s_id==31?'selected':''?>>Tamil Nadu</option>
											<option value="32" <?=$s_id==32?'selected':''?>>Tripura</option>
											<option value="33" <?=$s_id==33?'selected':''?>>Uttar Pradesh</option>
											<option value="34" <?=$s_id==34?'selected':''?>>Uttaranchal</option>
											<option value="35" <?=$s_id==35?'selected':''?>>West Bengal</option>
										</select>
										</li>
										<li>
											<input type="text" name="city" placeholder="City" id="city" value="<?php echo isset($data['user']->data->city)?$data['user']->data->city:''?>" data-parsley-required="true" data-parsley-error-message="Please enter City">
										</li>
										<li>
											<input type="text" name="area" placeholder="Area" id="area" value="<?php echo isset($data['user']->data->area)?$data['user']->data->area:''?>" data-parsley-required="true" data-parsley-error-message="Please enter Area">
										</li>
										<li><input type="text" name="address" placeholder="Pickup Address" value="<?php echo isset($data['user']->data->address)?$data['user']->data->address:''?>" data-parsley-required="true" data-parsley-error-message="Please enter Pickup Address"></li>
											
										<?php if (isset($data['user']->data->id)) { ?>
											<input type="hidden" name="u_id" value="<?=$data['user']->data->id?>">
										<?php } else {?>
											<li><input type="password" name="password" placeholder="Password" data-parsley-required="true" data-parsley-error-message="Please enter Password"></li>
										    <li><input type="password" placeholder="Confirm Password" data-parsley-required="true" data-parsley-error-message="Please enter Name"></li>
										<?php }?>
										
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





<!--jquery libraries-->
<?php require_once 'userl-footer.php';?>

<script type="text/javascript">
	$(document).ready(function(){
		$('form').parsley({errorTemplate: "<span class='my-parsley-error'></span>",errorsWrapper: "<div></div>",});
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
			url:'<?=API_URL?>/term/cities',
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
