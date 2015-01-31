<?php 
require_once 'user-header.php';?>
<!--HEADER END-->

<section class="banner my-account">
	<div class="container">
		<div class="ficaption"><h1>Frnventore veritatis et qhere</h1></div>
	</div>
</section>
<!--BANNER END-->

<div class="padding-adjust content">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="heading-box"><h2>My Account</h2></div>
			</div>
		</div>
		<div class="row ">
			<div class="col-md-12 col-sm-12">
				<div class="row myaccount-padding-adjust">
					<div class="colo-md-3 col-sm-3">
						<div class="my-image">
							<img src="images/myaccount-1.jpg" alt="" title="image">
							<span><?=$data->data->name?></span>
						</div>
					</div>
					<div class="col-md-9 col-sm-9">
						<div class="myaccount-main">
							<ul class="my-details">
								<li class="clearfix">
									<span>Name:</span> <p><?=$data->data->name?></p>
								</li>
								<li class="clearfix">
									<span>Email:</span> <p><?=$data->data->email?></p>
								</li>
								<li class="clearfix">
									<span>Phone:</span> <p><?=$data->data->mobile?></p>
								</li>
								<?php if(!$data->data->active) {?>
								<li class="clearfix">
								<span>Mobile Verification:</span>
								<div id="verifyli">
									<input type="text" id="verifyi" style="width:65px;height:35px" placeholder="code" name="code">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" style="color:red;text-decoration:underline" id="verifyb">Verify</a>
								</div>
								</li>
								<?php }?>
								<li class="clearfix">
									<span>Address:</span> <p><?=$data->data->address.', '.$data->data->area.', '.$data->data->city.', '.$data->data->state.', PIN-'.$data->data->pin?></p>
								</li>
							</ul>
							<!--my-details end-->

							<div class="row">
								<div class="col-md-12 col-sm-12">
									<ul class="tab-bar clearfix">
										<li class="active"><a href="#">Current Order</a><span class="tsprit-nor"></span></li>
										<li class="last"><a href="#">Order History</a></li>
									</ul>

									<div class="orderrow1 active">
										<ul class="order-row">
											<?php foreach ($data->data->current_order as $key => $value) {?>
												<li>
													<p class="<?=$key?'':'active'?>"><?=$value->id.' '.$value->origin.' '.$value->destination.' '.date("d-M-Y", strtotime($value->start)).' '.date("d-M-Y", strtotime($value->end)).' '.$value->model.' '.strtoupper($value->number)?></p>
													<div class="row order-detail" style="<?=$key?'':'display:block'?>">
														<div class="col-md-3 col-sm-3">
															<div class="car-sec">
																<img src="<?=API_URL.'/'.$value->photo1?>" alt="" title="<?=$value->model?>">
																<div class="star-box clearfix">
																	<span><small><?=$value->model?></small></span>
																</div>
															</div>
														</div>

														<div class="col-md-9 col-sm-9">
															<div class="row">
																<div class="col-md-6">
																	<ul class="adjust booking-details">
																		<li class="clearfix">
																			<span>From City:</span>
																			<small><?=$value->origin?></small>
																		</li>
																		<li class="clearfix">
																			<span>Starting Date:</span>
																			<small><?=date("d-M-Y", strtotime($value->start))?></small>
																		</li>
																		<li class="clearfix">
																			<span>Vehicle:</span>
																			<small><?=$value->model?></small>
																		</li>
																		<li class="clearfix">
																			<span>Name:</span>
																			<small><?=$value->name?></small>
																		</li>
																		<li class="clearfix">
																			<span>Mobile:</span>
																			<small><?=$value->mobile?></small>
																		</li>
																		<li class="clearfix">
																			<span>Pickup Address:</span>
																			<address><?=$value->address.', '.$value->area.', '.$value->city.', '.$value->state_name.',PIN- '.$value->pin?></address>
																		</li>
																	</ul>
																</div>
																<div class="col-md-6">
																	<ul class="booking-details">
																		<li class="clearfix">
																			<span>To City:</span>
																			<small><?=$value->destination?></small>
																		</li>
																		<li class="clearfix">
																			<span>End Date:</span>
																			<small><?=date("d-M-Y", strtotime($value->end))?></small>
																		</li>
																			<li class="clearfix">
																			<span>Plate Number:</span>
																			<small><?=$value->number?></small>
																		</li>
																		<li class="clearfix">
																			<span>Pickup Time:</span>
																			<small><?=$value->pickup_time?></small>
																		</li>
																		<li class="clearfix">
																			<span>Booking ID:</span>
																			<small><?=$value->id?></small>
																		</li>
																
																	</ul>
																</div>
																<div class="btn-wrap">		
																	<button class="btn btn-secondry cancel-btn" value="<?=$value->id?>">cancel order</button>
																</div>
															</div>
														</div>
								
													</div>
													<!--order-detail end-->
												</li>												
											<?php }?>

	
										</ul>
										<!--order-row end-->
										
									</div>
									<!--orderrow1 end-->

									<div class="orderrow1">	
										<ul class="order-row">
											<?php foreach ($data->data->order_history as $key => $value) {?>
												<li>
													<p class="<?=$key?'':'active'?>"><?=$value->id.' '.$value->origin.' '.$value->destination.' '.date("d-M-Y", strtotime($value->start)).' '.date("d-M-Y", strtotime($value->end)).' '.$value->model.' '.strtoupper($value->number)?></p>
													<div class="row order-detail" style="<?=$key?'':'display:block'?>">
														<div class="col-md-3 col-sm-3">
															<div class="car-sec">
																<img src="<?=API_URL.'/'.$value->photo1?>" alt="" title="<?=$value->model?>">
																<div class="star-box clearfix">
																	<span><small><?=$value->model?></small></span>
																</div>
															</div>
														</div>

														<div class="col-md-9 col-sm-9">
															<div class="row">
																<div class="col-md-6">
																	<ul class="booking-details">
																		<li class="clearfix">
																			<span>From City:</span>
																			<small><?=$value->origin?></small>
																		</li>
																		<li class="clearfix">
																			<span>Starting Date:</span>
																			<small><?=date("d-M-Y", strtotime($value->start))?></small>
																		</li>
																		<li class="clearfix">
																			<span>Vehicle:</span>
																			<small><?=$value->model?></small>
																		</li>
																		<li class="clearfix">
																			<span>Driver:</span>
																			<small><?=$value->driver_name?></small>
																		</li>
																		<li class="clearfix">
																			<span>Name:</span>
																			<small><?=$value->name?></small>
																		</li>
																		<li class="clearfix">
																			<span>Paid:</span>
																			<small>INR <?=$value->advance?></small>
																		</li>
																
																	</ul>
																</div>
																<div class="col-md-6">
																	<ul class="booking-details">
																		<li class="clearfix">
																			<span>To City:</span>
																			<small><?=$value->destination?></small>
																		</li>
																		<li class="clearfix">
																			<span>End Date:</span>
																			<small><?=date("d-M-Y", strtotime($value->end))?></small>
																		</li>
																			<li class="clearfix">
																			<span>Plate Number:</span>
																			<small><?=$value->number?></small>
																		</li>
																		<li class="clearfix">
																			<span>Pickup Time:</span>
																			<small><?=$value->pickup_time?></small>
																		</li>
																		<li class="clearfix">
																			<span>Booking ID:</span>
																			<small><?=$value->id?></small>
																		</li>
																
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<!--order-detail end-->
												</li>
											<?php }?>

										</ul>
										<!--order-row end-->
									</div>
									<!--orderrow1 end-->
								</div>
							</div>
							<!--end-->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--content end-->
<input type="hidden" name="access_token" value="<?=$_SESSION['u_token']?>">
</div>
<!--WRAPPER END-->
<?php require_once 'user-footer.php';?>

<script type="text/javascript">
	$(document).ready(function(){
		
		$('.currntorder1 button').click(function(){
			var num = $(this).index();
			$('.orderrow1:eq('+num+')').addClass('active').slideDown().siblings('.orderrow1').slideUp();
			return false;
		});

		//TAB SECTION
		$('ul.tab-bar li').click(function(){
			var num = $(this).index();
			$(this).addClass('active').siblings().removeClass('active');
			$('.orderrow1:eq('+num+')').slideDown().siblings('.orderrow1').slideUp();
			return false
		});

		$('.order-row li p').click(function(){
			var $this = $(this);
			if($this.next('.order-detail').is(':hidden')){
			$this.parents('.orderrow1').find('.order-detail').slideUp();
			$this.addClass('active').next('.order-detail').slideDown()
			.parents('li').siblings('li').find('p').removeClass('active');
			}
		});
		$('#verifyb').click(function(){
			var btn=$(this);
			var code=$('#verifyi').val();
			if (!code || code=='') {alert('enter code');return false;}
			$.ajax({
				url:'<?=API_URL?>/user/verify',
				data:$('input').serialize(),
				type:'POST',
				success:function(res){
					result=$.parseJSON(res);
					if (result.error[0]=='401') {
					$.post('<?=API_URL?>/user/refresh?access_token='+$('input[name=access_token]').val(),function(data){
						response=$.parseJSON(data);
						$.cookie('atoken',response.data.access_token);
						$('input[name=access_token]').val(response.data.access_token);
						btn.trigger("click");
					});
					}else if (result.success=='1') {
						$('#verifyli').html('<p>Verified</p>')
					}else{
						alert('Invalid Code');
					}
				}
			});	
			return false;		
		});
	});
</script>
</body>
</html>
