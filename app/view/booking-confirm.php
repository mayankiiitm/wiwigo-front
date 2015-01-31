<?php require_once 'userl-header.php';?>
	<!--HEADER END-->
	<section class="banner booking-confir">
	<div class="container">
		<div class="ficaption"><h1>Frnventore veritatis et qhere</h1></div>
	</div>
	</section>
	<!--BANNER END-->

	<div class="paddingadjust-confir content">
		<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="heading-box"><h2>Booking  Confirmation</h2></div>
			</div>
		</div>
		<div class="clearfix paddingtop-adjust border-printtype">
			<span class="border-left"></span>
			<span class="border-right"></span>
			<div class="col-md-6">
				<ul class="booking-details">
					<li class="clearfix">
						<span>From City:</span>
						<small><?=$data->data->booking->origin?></small>
					</li>
					<li class="clearfix">
						<span>Starting Date:</span>
						<small><?=date("d-M-Y", strtotime($data->data->booking->start));?></small>
					</li>
					<li class="clearfix">
						<span>Vehicle:</span>
						<small><?=$data->data->booking->model?></small>
					</li>
					<li class="clearfix">
						<span>Name:</span>
						<small><?=$data->data->booking->name?></small>
					</li>
					<li class="clearfix">
						<span>Mobile:</span>
						<small><?=$data->data->booking->mobile?></small>
					</li>
					<li class="clearfix">
						<span>Pickup Address:</span>
						<address><?=$data->data->booking->address.', '.$data->data->booking->area.', '.$data->data->booking->city.', '.$data->data->booking->state_name?></address>
					</li>
				</ul>
			</div>
			<div class="col-md-5 col-md-offset-1">
				<ul class="booking-details">
					<li class="clearfix">
						<span>To City:</span>
						<small><?=$data->data->booking->destination?></small>
					</li>
					<li class="clearfix">
						<span>End Date:</span>
						<small><?=date("d-M-Y", strtotime($data->data->booking->end));?></small>
					</li>
					<li class="clearfix">
						<span>Agency Name:</span>
						<small><?=$data->data->booking->agency?></small>
					</li>
					<li class="clearfix">
						<span>Email:</span>
						<small><?=$data->data->booking->email?></small>
					</li>
					<li class="clearfix">
						<span>Pickup Time:</span>
						<small><?=$data->data->booking->pickup_time?></small>
					</li>
					<li class="clearfix">
						<span>Booking ID:</span>
						<small><?=$data->data->booking->id?></small>
					</li>
				</ul>
			</div>
		</div>

		<div class="sendinfo-box">
			<div class="sendinfo-in">
				<div class="row">
					<div class="col-md-6">
						<h4>send confirmation</h4>			
					</div>
					<div class="col-md-6">
						<h4>share love</h4>
					</div>
				</div>
			</div>
			<!--sendinfo-in end-->
			<div class="row">
				<div class="col-md-6">
					<ul class="email-social">
						<li><a href="#"><i class="sprit-email"></i></a> <span>Email</span></li>
						<li><a href="#"><i class="sprit-sms"></i></a> <span>SMS</span></li>
						<li><a href="#"><i class="sprit-pri"></i></a> <span>Print</span></li>
					</ul>
				</div>
				<div class="col-md-6">
					<ul class="email-social">
						<li><a href="#"><i class="sprit-facebook"></i></a></li>
						<li><a href="#"><i class="sprit-twitter"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<!--sendinfo-box end-->
	</div>
	</div>
	<!--content end-->

</div>
<!--WRAPPER END-->

<!--footer start-->
<?php require_once 'userl-footer.php';?>

<script type="text/javascript">
	$(document).ready(function(){
		

	});
</script>

</body>
</html>
