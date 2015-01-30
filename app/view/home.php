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
					<li style="margin-bottom:20px"><input type="text" name="from" placeholder="Starting city" data-parsley-required="true" data-parsley-error-message="Please fill in Starting City"></li>
					<li style="margin-bottom:20px"><input type="text" name="to" placeholder="Destination city" data-parsley-required="true" data-parsley-error-message="Please fill in Destination City"></li>
					<li>
						<input type="text" name="start" placeholder="Start date" id="depart" readonly="true" data-parsley-required="true" data-parsley-error-message="Please Select Start Date">
					</li>
					<li>
						<input type="text" name="end" placeholder="Return date" id="return" readonly="true" data-parsley-required="true" data-parsley-error-message="Please select return date">
					</li>
				</ul>
				<button class="btn btn-success btn-org" id="submit" type="submit">search cabs</button>
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
<div class="overlay"></div>
<div class="pickup-row">
	<div class="pickup-box">
		<span>Pickup Address</span>
		
			<div class="sort-row">
				<input type="text" placeholder="Pickup Address">
			</div>
			<button class="btn btn-success">Submit</button>
		
	</div>
</div>
<!--footer start-->
<?php require_once 'userl-footer.php';?>

<script type="text/javascript">
	$(document).ready(function(){
		initialize();
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
			dateFormat: "yy-mm-dd",
			minDate: 0
		});
	$('form').parsley({errorTemplate: "<span class='my-parsley-error'></span>",errorsWrapper: "<div></div>",});
	});
</script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script> 
<script type="text/javascript">
	var geocoder;

  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(successFunction, errorFunction);
} 
//Get the latitude and the longitude;
function successFunction(position) {
    var lat = position.coords.latitude;
    var lng = position.coords.longitude;
    codeLatLng(lat, lng)
}

function errorFunction(){
    alert("Geocoder failed");
}

  function initialize() {
    geocoder = new google.maps.Geocoder();



  }

  function codeLatLng(lat, lng) {

    var latlng = new google.maps.LatLng(lat, lng);
    geocoder.geocode({'latLng': latlng}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
      console.log(results)
        if (results[1]) {
         //formatted address
         $('input[name=from]').val(results[0].formatted_address);
        } 
      } 
    });
  }
</script>


</body>
</html>