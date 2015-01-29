<?php 
require_once 'userl-header.php';?>
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
											<li>
												<p class="active">PM 123 F 235689 Delhi Mumbai 21/10/2014 27/12/2014 Tata Indica DL 1Y 3C 8765</p>
												<div class="row order-detail" style="display:block">
													<div class="col-md-3 col-sm-3">
														<div class="car-sec">
															<img src="images/car6.jpg" alt="" title="image">
															<div class="star-box clearfix">
																<span><small>Opel Astra</small> or Similar</span>
															</div>
														</div>
													</div>

													<div class="col-md-9 col-sm-9">
														<div class="row">
															<div class="col-md-6">
																<ul class="booking-details">
																	<li class="clearfix">
																		<span>From City:</span>
																		<small>Delhi</small>
																	</li>
																	<li class="clearfix">
																		<span>Starting Date:</span>
																		<small>21/10/2014</small>
																	</li>
																	<li class="clearfix">
																		<span>Vehicle:</span>
																		<small>Toyota Corela</small>
																	</li>
																	<li class="clearfix">
																		<span>Driver:</span>
																		<small>Ram Kumar Singh</small>
																	</li>
																	<li class="clearfix">
																		<span>Name:</span>
																		<small>Rakesh Banerjee</small>
																	</li>
																	<li class="clearfix">
																		<span>Paid:</span>
																		<small>INR 9078.21</small>
																	</li>
															
																</ul>
															</div>
															<div class="col-md-6">
																<ul class="booking-details">
																	<li class="clearfix">
																		<span>To City:</span>
																		<small>Mumbai</small>
																	</li>
																	<li class="clearfix">
																		<span>Duration Date:</span>
																		<small>27/12/2014</small>
																	</li>
																		<li class="clearfix">
																		<span>Plate Number:</span>
																		<small>DL 1Y 8C 7689</small>
																	</li>
																	<li class="clearfix">
																		<span>Pickup Time:</span>
																		<small>10:30 AM</small>
																	</li>
																	<li class="clearfix">
																		<span>Booking ID:</span>
																		<small>PM 123 F 235689</small>
																	</li>
															
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!--order-detail end-->
											</li>
											<li>
												<p>PM 123 F 235689 Delhi Mumbai 21/10/2014 27/12/2014 Tata Indica DL 1Y 3C 8765</p>
												<div class="row order-detail">
													<div class="col-md-3 col-sm-3">
														<div class="car-sec">
															<img src="images/car6.jpg" alt="" title="image">
															<div class="star-box clearfix">
																<span><small>Opel Astra</small> or Similar</span>
															</div>
														</div>
													</div>

													<div class="col-md-9 col-sm-9">
														<div class="row">
															<div class="col-md-6">
																<ul class="booking-details">
																	<li class="clearfix">
																		<span>From City:</span>
																		<small>Delhi</small>
																	</li>
																	<li class="clearfix">
																		<span>Starting Date:</span>
																		<small>21/10/2014</small>
																	</li>
																	<li class="clearfix">
																		<span>Vehicle:</span>
																		<small>Toyota Corela</small>
																	</li>
																	<li class="clearfix">
																		<span>Name:</span>
																		<small>Rakesh Banerjee</small>
																	</li>
																	<li class="clearfix">
																		<span>Mobile:</span>
																		<small>+91123456789</small>
																	</li>
																	<li class="clearfix">
																		<span>Pickup Address:</span>
																		<address>281/1 Floor, Ganga Jamuna, West Bengal, Kolkata-700122</address>
																	</li>
																	<li class="clearfix">
																		<span>Plate Number:</span>
																		<small>DL 1Y 8C 7689</small>
																	</li>
																</ul>
															</div>
															<div class="col-md-6">
																<ul class="booking-details">
																	<li class="clearfix">
																		<span>To City:</span>
																		<small>Mumbai</small>
																	</li>
																	<li class="clearfix">
																		<span>Duration Date:</span>
																		<small>27/12/2014</small>
																	</li>
																	<li class="clearfix">
																		<span>Agency Name:</span>
																		<small>Lorem ipsum Agency</small>
																	</li>
																	<li class="clearfix">
																		<span>Email:</span>
																		<small>banerjeerakesh@gmail.com</small>
																	</li>
																	<li class="clearfix">
																		<span>Pickup Time:</span>
																		<small>10:30 AM</small>
																	</li>
																	<li class="clearfix">
																		<span>Booking ID:</span>
																		<small>PM 123 F 235689</small>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!--order-detail end-->
											</li>
											<li>
												<p>PM 123 F 235689 Delhi Mumbai 21/10/2014 27/12/2014 Tata Indica DL 1Y 3C 8765</p>
												<div class="row order-detail">
													<div class="col-md-3 col-sm-3">
														<div class="car-sec">
															<img src="images/car6.jpg" alt="" title="image">
															<div class="star-box clearfix">
																<span><small>Opel Astra</small> or Similar</span>
															</div>
														</div>
													</div>

													<div class="col-md-9 col-sm-9">
														<div class="row">
															<div class="col-md-6">
																<ul class="booking-details">
																	<li class="clearfix">
																		<span>From City:</span>
																		<small>Delhi</small>
																	</li>
																	<li class="clearfix">
																		<span>Starting Date:</span>
																		<small>21/10/2014</small>
																	</li>
																	<li class="clearfix">
																		<span>Vehicle:</span>
																		<small>Toyota Corela</small>
																	</li>
																	<li class="clearfix">
																		<span>Name:</span>
																		<small>Rakesh Banerjee</small>
																	</li>
																	<li class="clearfix">
																		<span>Mobile:</span>
																		<small>+91123456789</small>
																	</li>
																	<li class="clearfix">
																		<span>Pickup Address:</span>
																		<address>281/1 Floor, Ganga Jamuna, West Bengal, Kolkata-700122</address>
																	</li>
																	<li class="clearfix">
																		<span>Plate Number:</span>
																		<small>DL 1Y 8C 7689</small>
																	</li>
																</ul>
															</div>
															<div class="col-md-6">
																<ul class="booking-details">
																	<li class="clearfix">
																		<span>To City:</span>
																		<small>Mumbai</small>
																	</li>
																	<li class="clearfix">
																		<span>Duration Date:</span>
																		<small>27/12/2014</small>
																	</li>
																	<li class="clearfix">
																		<span>Agency Name:</span>
																		<small>Lorem ipsum Agency</small>
																	</li>
																	<li class="clearfix">
																		<span>Email:</span>
																		<small>banerjeerakesh@gmail.com</small>
																	</li>
																	<li class="clearfix">
																		<span>Pickup Time:</span>
																		<small>10:30 AM</small>
																	</li>
																	<li class="clearfix">
																		<span>Booking ID:</span>
																		<small>PM 123 F 235689</small>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
												<!--order-detail end-->
											</li>
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

</div>
<!--WRAPPER END-->
<?php require_once 'userl-footer.php';?>

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
	});
</script>
</body>
</html>
