<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Book Outstation Cab Rental</title>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="/css/style.css">
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
	 </div>
 	</div>
</header>
<!--HEADER END-->
<div class="banner agency-account">		
	<div class="container">
		<div class="ficaption"><h1>Frnventore veritatis et qhere</h1></div>
	</div>	
</div>
<!--BANNER END-->

<div class="content">
	<div class="container">
		<div class="agency-box">
			<div class="row">
				<div class="col-md-8 col-sm-8">
					<div class="heading-two"><h2>Agency Account</h2></div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="width-adjust sortbox pull-right">
						<form action="#" method="post">
							<select>
								<option>Sort by:</option>
								<option>Sort by:</option>
								<option>Sort by:</option>
							</select>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!--agency-box end-->

		<div class="agency-adju agency-box">
			<div class="row">
				<div class="col-md-3 col-sm-3">
					<div class="car-sec">
						<img src="/images/car6.jpg" alt="" title="image">
						<div class="star-box clearfix">
							<span><small>Opel Astra</small> or Similar</span>
							<i class="sprit-rating-a"></i>
							<i class="sprit-rating-a"></i>
							<i class="sprit-rating-a"></i>
							<i class="sprit-rating-a"></i>
							<i class="sprit-rating-n"></i>
						</div>
					</div>
					<ul class="image-view clearfix">
						<li><img src="/images/account-a.jpg" alt="" title="image"></li>
						<li><img src="/images/account-b.jpg" alt="" title="image"></li>
						<li><img src="/images/account-c.jpg" alt="" title="image"></li>
					</ul>
				</div>

				<div class="col-md-9 col-sm-9">
					<div class="article-info">
						<div class="row">
							<div class="col-md-12">
								<div class="starheading clearfix">
									<h4 class="pull-left"><?=$data->data->details->organization?></h4>
									<div class="starbox pull-left">
									<?php
									Helper::rating($data->data->ratings->rating);
									?>
								
										
										<span>(<?=$data->data->ratings->rating_count?>)</span>
									</div>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-8">
								<ul class="adjust my-details">
									<li class="clearfix"><span>Username:</span><p><?=$data->data->details->username?></p></li>
									<li class="clearfix">
									<span>Name:</span> <p><?=$data->data->details->name?></p>
									</li>
									<li class="clearfix">
									<span>Email:</span> <p><?=$data->data->details->email?></p>
									</li>
									<li class="clearfix">
									<span>Mobile:</span> <p><?=$data->data->details->mobile?></p>
									</li>
									<li class="clearfix">
									<span>Phone:</span> <p><?=$data->data->details->landline?></p>
									</li>
									<li class="clearfix">
									<span>Address:</span> <p><?=$data->data->details->address.', '.$data->data->details->area.', '.$data->data->details->city.', '.$data->data->details->state.',PIN- '.$data->data->details->pin?></p>
									</li>
								</ul>
							</div>
							<div class="col-md-4">
								<ul class="agency my-details">
									<li class="clearfix"><span>member since: </span><small> <?=date("d-M-Y", strtotime($data->data->details->created_at));?></small></li>
									<li class="clearfix">
									<span>total vehicle:</span> <small><?=$data->data->count->vehicles?></small>
									</li>
									<li class="clearfix">
									<span>total drivers:</span> <small><?=$data->data->count->drivers?></small>
									</li>
								</ul>
							</div>
						</div>
						
						<div class="btn-wrap">
							<button class="btn  btn-success current-btn">add vehicle</button>
							<button class="btn btn-secondry cancel-btn">add driver</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--agency-box end-->

		<div class="agency-adju">
			<div class="row currntbox">
				<div class="col-md-8 col-sm-8">
					<ul class="tab-bar clearfix">
						<li class="last active"><a href="#">Current Orders</a><span class="tsprit-nor"></span></li>
						<li><a href="#">Order History</a><span class="tsprit-nor"></span></li>
						<li class="last"><a href="#">All Comments</a></li>
					</ul>
				</div>
			</div>
			<!--currntbox end-->

			<div class="orderrow1 active">
				<ul class="order-row">


				<?php 
				foreach ($data->data->current_order as $key => $value) { ?>
						

					<li> <span class="<?php echo $value->d_id?'number numberbg-n':'number'?>"><?=$key+1?></span>
						<p class="active"><?=$value->id.' '.$value->origin.' '.$value->destination.' '.date("d-M-Y", strtotime($value->start)).' '.date("d-M-Y", strtotime($value->end)).' '.$value->model.' '.strtoupper($value->number)?></p>
						<div class="row order-detail" style="<?php echo $key?'':'display:block'?>">
							<div class="col-md-3 col-sm-3">
								<div class="car-sec">
									<img src="http://10.0.0.230/<?=$value->photo1?>" alt="" title="<?=$value->model?>">
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
												<small id="from_<?=$value->id?>"><?=$value->origin?></small>
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
												<address><?=$value->address.', '.$value->area.', '.$value->city.', '.$value->state.',PIN- '.$value->pin?></address>
											</li>
											<li class="clearfix">
												<span>Advance Paid:</span>
												<small><?=$value->advance?></small>
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
												<span>Email:</span>
												<small><?=$value->email?></small>
											</li>
											<li class="clearfix">
												<span>Pickup Time:</span>
												<small><?=$value->pickup_time?></small>
											</li>
											<li class="clearfix">
												<span>Booking ID:</span>
												<small><?=$value->id?></small>
											</li>
											<li class="clearfix">
												<span>Remaining:</span>
												<small><?=$value->price-$value->advance?></small>
											</li>
										</ul>
									</div>
								</div>
								<?php if (!$value->d_id) {?>
								<div class="btn-wrap">		
									<button class="btn  btn-success btn-disp" value="start=<?=$value->start?>&end=<?=$value->end?>">dispatch vehicle</button>					
								</div>
								<?php } ?>
							</div>
						</div>
						<!--order-detail end-->
					</li>
					<?php } ?>
				</ul>
				<!--order-row end-->
			</div>

			<div class="orderrow1">
				<ul class="order-row">
				<?php 
				foreach ($data->data->order_history as $key => $value) { ?>
					<li><span class="number numberbg-n"><?=$key+1?></span>
						<p class="active"><?=$value->id.' '.$value->origin.' '.$value->destination.' '.date("d-M-Y", strtotime($value->start)).' '.date("d-M-Y", strtotime($value->end)).' '.$value->model.' '.strtoupper($value->number)?></p>
						<div class="row order-detail" style="<?php echo $key?'':'display:block'?>">
							<div class="col-md-3 col-sm-3">
								<div class="car-sec">
									<img src="http://10.0.0.230/<?=$value->photo1?>" alt="" title="<?=$value->model?>">
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
												<small><?=$value->price?></small>
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

			<div class="orderrow1">
				<div class="border-none agency-box">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="comment-box clearfix" style="padding-top:0;">
						<h4 class="pull-left">All Comments</h4>
						<div class="starbox pull-left">
							<?php Helper::rating($data->data->ratings->rating)?>
							<span>(<?=$data->data->ratings->rating_count?>)</span>
						</div>
					</div>

					<div class="view-section">
					<?php foreach ($data->data->feedback as $key => $value) {?>
						<div class="view-info">
							<div class="row">
								<div class="col-md-6">
									<div class="username">
										<h5><?=$value->name?></h5>
										<p>Travelled on <?=date("d-M-Y", strtotime($value->start));?></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="viewstar pull-right">
										<ul class="clearfix">
											<li class="bus">
												vehicle quallty 
												<span>
													<?php Helper::rating($value->vehicle,1)?>
												</span>
											</li>
											<li class="bus">
												agency quality 
												<span>
													<?php Helper::rating($value->agency,1)?>
												</span>
											</li>
											<li class="bus">
												staff behavlour
												<span>
													<?php Helper::rating($value->driver,1)?>
												</span>
											</li>
										</ul>
										<p><?=$value->message?></p>
									</div>
								</div>
							</div>
						</div>
					<?php }?>
					</div>
					<!--view-section end-->

				</div>
			</div>
		</div>
		<!--agency-box end-->
			</div>
		</div>
		<!--orderbox end-->

		

		

	</div>
	<!--container end-->
	<input type="hidden" name="access_token" value="<?=$_SESSION['a_token']?>">
</div>
<!--content end-->

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
</div>
<!--WRAPPER END-->
<!--POPUP-->
<div class="overlay"></div>
<div class="dispatch-row">
	<div class="dispatch-box">
		<span>Tata Indica DL 1Y 3C 8765</span>
		<form action="#" method="post">
			<div class="sort-row" id="driver-select">
			</div>
			<button class="btn btn-success btn-pare">Pare dispatch</button>
		</form>
	</div>
</div>
<!--POPUP END-->

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

<script type="text/javascript" src="/js/cookie.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('.order-row li p').click(function(){
			if ($(this).next('.order-detail').is(':visible')) {
				$(this).next('.order-detail').slideUp();
				$(this).removeClass('active');
				return false;
			};
			var $this = $(this),
				$wraper = $this.parents('.order-row');
			$('.order-detail').slideUp();
			$this.addClass('active').next('.order-detail').slideDown()
			.parents('li').siblings('li').find('p').removeClass('active');
		});

		//TAB SECTION
		$('ul.tab-bar li').click(function(){
			var num = $(this).index();
			$(this).addClass('active').siblings().removeClass('active');
			$('.orderrow1:eq('+num+')').slideDown().siblings('.orderrow1').slideUp();
			return false;
		});
		var lefta =($(window).width()-$('.dispatch-row').width())/2,
			topa = ($(window).height()-$('.dispatch-row').height())/2;

			$('.btn-disp').click(function(){
				var btn=$(this);
				$('.dispatch-row').css({left:lefta, top:topa}).fadeIn();
				$('.overlay').fadeIn();
				var url='http://10.0.0.230/agency/drivers/available?access_token='+$('input[name=access_token]').val()+'&'+$(this).val();
				$.get(url,function(res){
					result=$.parseJSON(res);
					if (result.error[0]=='401') {
						$.post('http://10.0.0.230/agency/refresh?access_token='+$('input[name=access_token]').val(),function(data){
							response=$.parseJSON(data);
							$.cookie('atoken',response.data.access_token);
							$('input[name=access_token]').val(response.data.access_token);
							btn.trigger("click");
						});
					}else if (result.success=='1') {
						var options='';
						$.each(result.data,function(key, value){options+="<option value='"+value.id+"'>"+value.name+"</option>"});
						$("#driver-select").append("<select>"+options+"</select>");
					}

				});
			});

		 $("body").mouseup(function(e){
	        var subject = $(".dispatch-row, .overlay"); 
	        if(e.target.class != subject.attr('class') && !subject.has(e.target).length)
	        { 
	            subject.fadeOut();
	        }
	    });

	});
</script>


</body>
</html>