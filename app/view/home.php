<?php require_once 'userl-header.php';?>
<div class="banner">
	<div class="flexslider">
		<ul class="slides">
			<li>
			  <img src="/images/banner.jpg" alt="" title=""/>
			</li>
			<li>
			  <img src="/images/banner1.jpg" alt="" title=""/>
			</li>
			<li>
			  <img src="/images/banner2.jpg" alt="" title=""/>
			</li>
			<li>
			  <img src="/images/banner3.jpg" alt="" title=""/>
			</li>
			<li>
			  <img src="/images/banner4.jpg" alt="" title=""/>
			</li>
			<li>
			  <img src="/images/banner5.jpg" alt="" title=""/>
			</li>
			<li>
			  <img src="/images/banner6.jpg" alt="" title=""/>
			</li>
			<li>
			  <img src="/images/banner7.jpg" alt="" title=""/>
			</li>
			<li>
			  <img src="/images/banner8.jpg" alt="" title=""/>
			</li>
			<li>
			  <img src="/images/banner9.jpg" alt="" title=""/>
			</li>
			<li>
			  <img src="/images/banner9.jpg" alt="" title=""/>
			</li>
			<li>
			  <img src="/images/banner10.jpg" alt="" title=""/>
			</li>
			<li>
			  <img src="/images/banner11.jpg" alt="" title=""/>
			</li>
			<li>
			  <img src="/images/banner12.jpg" alt="" title=""/>
			</li>
			<li>
			  <img src="/images/banner13.jpg" alt="" title=""/>
			</li>
			<li>
			  <img src="/images/banner14.jpg" alt="" title=""/>
			</li>
		</ul>
	</div>
	<div class="banner-form">
		<div class="form-box">
			<h1>Book your outstation cab now</h1>
			<form action="/search" method="get">
				<ul class="clearfix">
					<li><input type="text" name="from" placeholder="Starting city"></li>
					<li><input type="text" name="to" placeholder="Destination city"></li>
					<li>
						<input type="text" name="start" placeholder="Start date" id="depart">
					</li>
					<li>
						<input type="text" name="end" placeholder="Return date" id="return">
					</li>
					<input type="hidden" name="long" value="">
					<input type="hidden" name="lat" value="">
				</ul>
				<button class="btn btn-success btn-org" id="submit">search cabs</button>
			</form>
		</div>
	</div>	
</div>
<!--BANNER END-->

<section class="blog-box content">
	<div class="container">
		<div class="row blog-heading">
			<div class="col-md-12"><h2>Upidatat non proident in culcaecat cupidatat</h2></div>
		</div>
	</div>
	<div class="container">
		<div class="row blog-article">
			<div class="col-md-4 col-sm-4">
				<div class="row">
					<div class="col-md-3 col-sm-3"><i class="sprit-quailty"></i></div>
					<div class="col-md-9 col-sm-9">
						<h3>Quality</h3>
						<ul class="listlink">
							<li><a href="#">Ullamco laboris nisi ut aliquip</a></li>
							<li><a href="#">Ex ea commodo consequat</a></li>
							<li><a href="#">Duis aute irure dolor in</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="row">
					<div class="col-md-3 col-sm-3"><i class="sprit-check"></i></div>
					<div class="col-md-9 col-sm-9">
						<h3>Reliability</h3>
						<ul class="listlink">
							<li><a href="#">Ullamco laboris nisi ut aliquip</a></li>
							<li><a href="#">Ex ea commodo consequat</a></li>
							<li><a href="#">Duis aute irure dolor in</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="row">
					<div class="col-md-3 col-sm-3"><i class="sprit-thumb"></i></div>
					<div class="col-md-9 col-sm-9">
						<h3>Convenience</h3>
						<ul class="listlink">
							<li><a href="#">Ullamco laboris nisi ut aliquip</a></li>
							<li><a href="#">Ex ea commodo consequ</a></li>
							<li><a href="#">Duis aute irure dolor in</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--blog-box END-->

</div>
<!--WRAPPER END-->

<!--footer start-->
<?php require_once 'userl-footer.php';?>

<script type="text/javascript">
	$(document).ready(function(){
		$('.flexslider').flexslider({
			animation: "slide",
			controlNav: false,
			directionNav: false
		});
		//FLEXSLIDER

		//NTH-CHILD EVEN IE8 SUPPORT
		$(".form-box ul li:nth-child(even)").css("margin-left", "3px");

		//DATEPICKER
		$( "#depart, #return" ).datepicker({
		 	buttonImage: "images/home-datepicker.png",
			numberOfMonths: 2,
			showOn: "both",
			buttonImageOnly: true,
			showButtonPanel: true,
			dateFormat: "yy-mm-dd"
		});
		$('form').submit(function(e){
		 	if ($('input[name=starting]').val()=='') {e.preventDefault()};
		});

		navigator.geolocation.getCurrentPosition(function(cor){
			$('input[name=long]').val(cor.coords.longitude);
			$('input[name=lat]').val(cor.coords.latitude);
		});

	});
</script>


</body>
</html>