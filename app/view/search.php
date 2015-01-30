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
		<div class="clearfix">
		  <div class="search-logo pull-left">
		  		<a href="index.html" class="logo"><img src="/images/logo.png" alt="" title="Welcome To Wiwigo"></a>
		  </div>
		  <!--search-logo end-->

		  <div class="search-header pull-left">
		  	<div class="city-form">
				<form action="/search" method="get" id="mainsearch">
					<ul class="clearfix">
						<li><input type="text" name="from" placeholder="From. Enter a city" value="<?=$data['from']?>"></li>
						<li><input type="text" name="to" placeholder="To. Enter a city" value="<?=$data['to']?>"></li>
						<li>
							<input type="text" name="start" placeholder="Depart" id="depart-date" value="<?=$data['start']?>">
						</li>
						<li>
							<input type="text" name="end" placeholder="Return" id="return-date" value="<?=$data['end']?>">
						</li>
						<li><button class="btn btn-success btn-search">search</button></li>
					</ul>
				</form>
			</div>
		  </div>
		  <!--search-header end-->

		  <div class="search-login pull-right">
		  	<ul class="adjust help  clearfix">
		  		<li class="call">Booking: <a href="tel+1234-5678-9821">1800 12345 789</a></li>
		  		<li class="sine-in"><span>login</span></li>
		  		<li class="sine-in last"><span>sign up</span></li>
		  	</ul>
		  </div>
		  <!--search-login end-->

		</div>
	</div>
</header>
<!--HEADER END-->

<div class="banner page-search"></div>
<!--BANNER END-->

<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3">
				<div class="row">
					<div class="col-md-12">
						<aside>
							<div class="map-row">
								<div class="google-map">
									<iframe src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyCWU5OJnKeeiPo8VQ16BWCJrDvxw294VRw&origin=<?=$_GET['from']?>&destination=<?=$_GET['to']?>"></iframe>
								</div>
								<div class="distance">
									<span>total distance</span>
									<p><?=$data['search']->details->distance?> kms, one way</p>
								</div>
							</div>
							<!--map-row end-->

							<div class="results-row">
								<h4>Refine Results</h4>

								<div class="resultbox">
									<span class="result-info"><i class="sprit-airro"></i>make &amp; model</span>
									<div class="modelbox clearfix" id="models_checkbox">
									<?php
									foreach ($data['cars'] as $key => $value) {?>
								 <div class="checkbox">
										     <input type="checkbox" name="model_<?=$value->id?>" id="model_<?=$value->id?>" value="<?=$value->id?>">
										     <label for="model_<?=$value->id?>" class="css-label"><?=$value->model?></label>
									   	</div>
									<?php } ?>
										
									</div>
								</div>
								<!--resultbox end-->


								<div class="resultbox">
									<span class="result-info"><i class="sprit-airro"></i>seats available</span>
									<div class="seats-row">
										
											<select id="seats" name="seats">
												<option value="0">Any</option>
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
												<option>6</option>
												<option>7</option>
												<option>8</option>
												<option>9</option>
												<option>10</option>
												<option>11</option>
												<option>12</option>
											</select>
										
									</div>
								</div>
								<!--resultbox end-->


								<div class="resultbox">
									<span class="result-info"><i class="sprit-airro"></i>star rating</span>
									<div class="rating-bar">
										<span>Star Rating</span>
										<ul id="ratings_checkbox">
											<li>
												<div class="checkbox">
											     <input type="checkbox" name="rating_5" id="rating_5" value="5">
											     <label for="checkboxs1" class="css-label"></label>
										        	<i class="sprit-rating-a"></i>
													<i class="sprit-rating-a"></i>
													<i class="sprit-rating-a"></i>
													<i class="sprit-rating-a"></i>
													<i class="sprit-rating-a"></i>
													<span>4</span>
											   	</div>
											</li>
											<li>
												<div class="checkbox">
											     <input type="checkbox" name="rating_4" id="rating_4" value="4">
											     <label for="rating_4" class="css-label"></label>
										        	<i class="sprit-rating-a"></i>
													<i class="sprit-rating-a"></i>
													<i class="sprit-rating-a"></i>
													<i class="sprit-rating-a"></i>
													<span>11</span>
											   	</div>
											</li>
											<li>
												<div class="checkbox">
											     <input type="checkbox" name="rating_3" id="rating_3" value="3">
											     <label for="rating_3" class="css-label"></label>
										        	<i class="sprit-rating-a"></i>
													<i class="sprit-rating-a"></i>
													<i class="sprit-rating-a"></i>
													<span>39</span>
											   	</div>
											</li>
											<li>
												<div class="checkbox">
											     <input type="checkbox" name="rating_2" id="rating_2" value="2">
											     <label for="rating_2" class="css-label"></label>
										        	<i class="sprit-rating-a"></i>
													<i class="sprit-rating-a"></i>
													<span>55</span>
											   	</div>
											</li>
											<li>
												<div class="checkbox">
											     <input type="checkbox" name="rating_1" id="rating_1" value="1">
											     <label for="rating_1" class="css-label"></label>
										        	<i class="sprit-rating-a"></i>
													<span>8</span>
											   	</div>
											</li>
										</ul>
									</div>
								</div>
								<!--resultbox end-->


								<div class="resultbox">
									<span class="result-info"><i class="sprit-airro"></i>amenities</span>
									
									<div class="amenities-row">
										<div class="checkbox">
										     <input type="checkbox" name="ac" id="ac" value="1">
										     <label for="ac" class="css-label">Air Conditioning</label>
									   	</div>
									   	<div class="checkbox">
										     <input type="checkbox" name="gps" id="gps" value="1">
										     <label for="gps" class="css-label">GPS Tracking</label>
									   	</div>
									   	<div class="checkbox">
										     <input type="checkbox" name="lc" id="lc" value="1">
										     <label for="lc" class="css-label">Luggage Carrier</label>
									   	</div>

										<div class="checkbox">
										     <input type="checkbox" name="o5" id="o5">
										     <label for="o5" class="css-label">Option5</label>
									   	</div>

									</div>
								</div>
								<!--resultbox end-->


								<div class="resultbox">
									<span class="result-info"><i class="sprit-airro"></i>Price</span>
									<div class="progress-main">
										<p>
											<label for="amount">Price</label>
											<input type="text" id="amount" name="price">
											<input type="hidden" name="p_min" value="0">
											<input type="hidden" name="p_max" value="0">
										</p>
										<div id="slider-range"></div>
									</div>
								</div>
								<div class="">
									<button class="btn btn-success btn-search" id="filters" style="height:45px">Apply Filters</button>
								</div>
								<!--resultbox end-->
							</div>
							<!--results-row end-->

						</aside>
					</div>
				</div>
			</div>
			<div class="col-md-9 col-sm-9">
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="heading-two"><h2><?=$data['search']->details->search_count?> cabs found</h2></div>
					</div>
					<div class="col-md-4 col-md-offset-4 col-sm-3 col-sm-offset-3">
						<div class="sortbox">
								<select id="sortby">
								<?php 
								$default=WEB_URL.$_SERVER['REQUEST_URI'];
								$default=str_replace('&sort=price', '', $default);
								$default=str_replace('&sort=rating', '', $default);
								$default=str_replace('&order=1', '', $default);
								?>
									<option value="0">Sort By:</option>
									<option value="<?=$default?>">Default</option>
									<option value="<?=$default?>&sort=price" <?php echo Input::get('sort')=='price' && !Input::get('order')?'selected':''?>>Price(Low to High)</option>
									<option value="<?=$default?>&sort=price&order=1" <?php echo Input::get('sort')=='price' && Input::get('order')=='1'?'selected':''?>>Price(High to Low)</option>
									<option value="<?=$default?>&sort=rating" <?php echo Input::get('sort')=='rating' && !Input::get('order')?'selected':''?>>Rating(Low to High)</option>
									<option value="<?=$default?>&sort=rating&order=1" <?php echo Input::get('sort')=='rating' && Input::get('order')=='1'?'selected':''?>>Rating(High to Low)</option>
								</select>
						</div>
					</div>
				</div>





				<?php 

				$slider=0;$carousel=0;
				foreach ($data['search']->result as $key => $value) {  ?>
					<div class="row">
					<div class="col-md-12"><span class="border-solid"></span></div>
				</div>
				<!--END BORDER-->

				<div class="row">
					<div class="col-md-4 col-sm-4">
						<div class="slidebox">
							<div class="flexs-row">
								<div id="slider<?=$slider++?>" class="flexslider">
								  <ul class="slides">
								  <?php 
								  $ses[]=$value;
								  	if ($value->photo1) { ?>
								  		<li><img src="<?=API_URL.'/'.$value->photo1?>"></li>
								  	<?php } ?>
								  
								  	<?php 
								  	if ($value->photo2) { ?>
								  		<li><img src="<?=API_URL.'/'.$value->photo2?>"></li>
								  	<?php } ?>
								  <?php 
								  	if ($value->photo3) { ?>
								  		<li><img src="<?=API_URL.'/'.$value->photo3?>"></li>
								  	<?php } ?>
								  <?php 
								  	if ($value->photo4) { ?>
								  		<li><img src="<?=API_URL.'/'.$value->photo4?>"></li>
								  	<?php } ?>
								  <?php 
								  	if ($value->photo5) { ?>
								  		<li><img src="<?=API_URL.'/'.$value->photo5?>"></li>
								  	<?php } ?>
								  <?php 
								  	if ($value->photo6) { ?>
								  		<li><img src="<?=API_URL.'/'.$value->photo6?>"></li>
								  	<?php } 
								  	$res['search']=$ses;
								    $res['from']=$_GET['from'];
								    $res['to']=$_GET['to'];
								    $res['start']=$_GET['start'];
								    $res['end']=$_GET['end'];
								  	$_SESSION['search']=json_encode($res); ?>
		
								  </ul>
								  <div class="star-box">
									<span><small><?=$value->model_name?></small></span>
										<?php Helper::rating($value->rating)?>
									</div>
								</div>
							</div>
							<!--flexs-row end-->
			
							<div id="carousel<?=$carousel++?>" class="flexslider diration">
							  <ul class="slides">
					    	 	 <?php 
								  	if ($value->photo1) { ?>
								  		<li><img src="<?=API_URL.'/'.$value->photo1?>"></li>
								  	<?php } ?>
								  
								  	<?php 
								  	if ($value->photo2) { ?>
								  		<li><img src="<?=API_URL.'/'.$value->photo2?>"></li>
								  	<?php } ?>
								  <?php 
								  	if ($value->photo3) { ?>
								  		<li><img src="<?=API_URL.'/'.$value->photo3?>"></li>
								  	<?php } ?>
								  <?php 
								  	if ($value->photo4) { ?>
								  		<li><img src="<?=API_URL.'/'.$value->photo4?>"></li>
								  	<?php } ?>
								  <?php 
								  	if ($value->photo5) { ?>
								  		<li><img src="<?=API_URL.'/'.$value->photo5?>"></li>
								  	<?php } ?>
								  <?php 
								  	if ($value->photo6) { ?>
								  		<li><img src="<?=API_URL.'/'.$value->photo6?>"></li>
								  	<?php } ?>
							  </ul>
							</div>
						</div>
						<!--slidebox end-->
					</div>

					<div class="col-md-8 col-sm-8">
						<div class="row">
							<div class="colo-md-12 col-sm-12">
								<div class="article-info">
									<div class="starheading clearfix">
										<h4 class="pull-left"><?=$value->agency?></h4>
										<div class="starbox pull-left">
											<?php Helper::rating($value->rating)?>
											<span>(<?=$value->rating_count?>)</span>
										</div>
									</div>

									<div class="row">
										<div class="col-md-12 col-sm-12">
										<div class="car-text"><small><?=$value->model_name?>:</small> <?=$value->seats?> Passenger Seats</div>
										</div>
									</div>
									

									<div class="row">
										<div class="col-md-12 col-sm-12">
											<ul class="list-b clearfix">
											<?php 
											if ($value->ac) {
												echo '<li> Air Conditioning </li>';
											} 

											if ($value->gps) {
												echo '<li> GPS Tracking </li>';
											}

											if ($value->lc) {
												echo '<li> Luggage Carrier </li>';
											}

											if ($value->o5) {
												echo '<li> English Speaking </li>';
											}

											?>
											</ul>
										</div>
									</div>

									<div class="row">
										<div class="col-md-12">
											<div class="border-adjust"></div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-12 col-sm-12">
											<div class="exchange">
												<small>INR<?=ceil($value->price)?></small>
												<div class="farewraper">
													<span class="fare-info">Fare details</span>
													<div class="fare-tooltip">
														<h5>fare details</h5>
														<ul class="clearfix">
															<li>Rate per km</li>
															<li><?=$value->rpk?></li>
															<li>Driver Day BA/TA</li>
															<li>Rs. <?=$value->ta?></li>
															<li>Journey Days</li>
															<li><?=$data['search']->details->duration?></li>
															<li>Approximate Distance</li>
															<li><?=ceil($data['search']->details->distance)?>kms</li>
															<li>Minumum km charged per Day</li>
															<li>:250 kms</li>
															<li>Fare Calculation</li>
															<?php
															$dis=ceil($data['search']->details->distance);
															$dur=$data['search']->details->duration;

															 if (250*$dur>2*$dis) {?>
																<li>:(<?=$dur?> x 250 x <?=$value->rpk?>)+(<?=$value->ta?>x<?=$dur?>)</li>	
															<?php }else {?> 
																<li>:(<?=$dis?> x <?=$value->rpk?> x 2)+(<?=$value->ta?>x<?=$dur?>)</li>	
															<?php } ?>
															
															<li>Fare</li>
															<li>:Rs <?=$value->price?></li>
														</ul>
													</div>
												</div>
												<!--farewraper end-->
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-4 col-sm-12">
											<div class="paybox">
												<div class="paytext">
													<span>inr<?=ceil($value->price/5)?><small class="showpay">?</small></span>
													<div class="payview">
														<p>Pay 20% now to book cab rental and pay
														 remaining 80% to driver</p>
													</div>
												</div>
												<span>20% advance</span>
											</div>
										</div>
										<div class="col-md-8 col-sm-6">
											<a href="/booking?id=<?=$value->id?>"><button class="btn  btn-success btn-book">book now!</button></a>
										</div>
									</div>
								</div>
								<!--article-info end-->
							</div>
						</div>
					</div>
				</div>
				<!--END SECTION-->
	
				<?php }?>
				<?php 
				$page=Input::get('page')?Input::get('page'):1;
				$num=ceil($data['search']->details->search_count/10);
				$url=WEB_URL.str_replace('&page='.$page, '', $_SERVER['REQUEST_URI']);
				$url=str_replace('&page=','', $url);
				$url1=str_replace('&page','', $url);
				$url=$url.'&'
				?>
				<div class="row">
					<div class="col-md-12">
						<nav>
						  <ul class="pagination">
						    <li>
						      <small>Page 1 of <?=$num?></small>
						    </li>
						    <?php
						    if ($page==1) {?>
						    	<li><span>&laquo;</span></li>
						    <?php }else{ ?>
						    	<li><a href="<?=$url1?>">&laquo;</a></li>
						    	<?php } ?>
						    <?php 
						    if ($num<=5 || ($num>5 && $page<=3)) {
						    	$pivot=$num<=5?$num:5;
						    	for ($i=1; $i <=$pivot ; $i++) { 
						    		if ($i==$page) {?>
						    			<li><span><?=$i?></span></li>		
						    		<?php }else{?>
						    			<li><a href="<?=$url?>page=<?=$i?>"><?=$i?></a></li>		
						    		<?php } ?>
						    								    			
						    		
						    <?php } 
						    }elseif ($num>5 && $page>3 && $num-$page>=2) { ?>
						    	<li><a href="<?=$url?>page=<?=$page-2?>"><?=$page-2?></a></li>
						    	<li><a href="<?=$url?>page=<?=$page-1?>"><?=$page-1?></a></li>
						    	<li><span><?=$page?></span></li>
						    	<li><a href="<?=$url?>page=<?=$page+1?>"><?=$page+1?></a></li>
						    	<li><a href="<?=$url?>page=<?=$page+2?>"><?=$page+2?></a></li>			
						    <?php } elseif ($num>5 && $page>3 && $num-$page<2) { 
						    			for ($i=$num-4; $i <=$num ; $i++) { 
						    				if ($i==$page) { ?>
												<li><span><?=$i?></span></li>						    					
						    				
						    				<?php } else{ ?>
						    						<li><a href="<?=$url?>page=<?=$i?>"><?=$i?></a></li>
						    				<?php } 
						    	} 
						    } ?>
						    <?php
						    if ($page==$num) {?>
						    	<li><span>&raquo;</span></li>
						    <?php }else{ ?>
						    	<li><a href="<?=$url?>page=<?=$num?>">&raquo;</a></li>
						    	<?php } ?>
						  </ul>
						</nav>
						<!--pagination end-->
					</div>
				</div>
				<!--END PAGINATION-->
			</div>
		</div>
	</div>
</div>
<!--content end-->

</div>
<!--WRAPPER END-->

<!--footer start-->
<?php require_once 'userl-footer.php';?>
<div class="login-box">
	<div class="review-popup">
		<div class="container">
			<span class="close-b">x</span>
			<div class="travelname">
				<div class="row">
					<div class="col-md-12">
						<h4>reviews</h4>
						<div class="travel-text">
							<ul class="clearfix">
								<li><i class="sprit-rating-a"></i></li>
								<li><i class="sprit-rating-a"></i></li>
								<li><i class="sprit-rating-a"></i></li>
								<li><i class="sprit-rating-a"></i></li>
								<li><i class="sprit-rating-n"></i></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="popup-row">
				<div class="row">
					<div class="col-md-12 col-sm-12">

						<div class="comment-box clearfix">
							<h4 class="pull-left">All comments</h4>
							<div class="starbox pull-left">
								<i class="sprit-rating-a"></i>
								<i class="sprit-rating-a"></i>
								<i class="sprit-rating-a"></i>
								<i class="sprit-rating-a"></i>
								<i class="sprit-rating-n"></i>
								<span>(28)</span>
							</div>
						</div>

						<div class="customerview">
							<div class="row">
								<div class="col-md-12">
									<div class="view-rating pull-right">
										<span>show: <a href="#">All,</a> <a href="#">Ratings only</a></span>
									</div>
								</div>
							</div>
						</div>
						<!--customerview end-->

						<div class="view-section">
							<div class="view-info">
								<div class="row">
									<div class="col-md-6">
										<div class="username">
											<h5>aditya goyal</h5>
											<p>Travelled on 8th December, 2014</p>
										</div>
									</div>
									<div class="col-md-6">
										<div class="viewstar pull-right">
											<ul class="clearfix">
												<li class="bus">
													vehicle
													<span>
														<i class=sprit-a></i>
														<i class=sprit-a></i>
														<i class=sprit-a></i>
														<i class=sprit-a></i>
														<i class=sprit-a></i>
													</span>
												</li>
												<li class="bus">
													driver 
													<span>
														<i class=sprit-a></i>
														<i class=sprit-a></i>
														<i class=sprit-n></i>
														<i class=sprit-n></i>
														<i class=sprit-n></i>
													</span>
												</li>
												<li class="bus">
													agency
													<span>
														<i class=sprit-a></i>
														<i class=sprit-a></i>
														<i class=sprit-n></i>
														<i class=sprit-n></i>
														<i class=sprit-n></i>
													</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!--VIEW-INFO END-->

							<div class="view-info">
								<div class="row">
									<div class="col-md-6">
										<div class="username">
											<h5>ayush jain</h5>
											<p>Travelled on 6th December, 2014</p>
										</div>
									</div>
									<div class="col-md-6">
										<div class="viewstar pull-right">
											<ul class="clearfix">
												<li class="bus">
													vehicle
													<span>
														<i class=sprit-a></i>
														<i class=sprit-a></i>
														<i class=sprit-a></i>
														<i class=sprit-a></i>
														<i class=sprit-a></i>
													</span>
												</li>
												<li class="bus">
													driver 
													<span>
														<i class=sprit-a></i>
														<i class=sprit-a></i>
														<i class=sprit-n></i>
														<i class=sprit-n></i>
														<i class=sprit-n></i>
													</span>
												</li>
												<li class="bus">
													agency
													<span>
														<i class=sprit-a></i>
														<i class=sprit-a></i>
														<i class=sprit-n></i>
														<i class=sprit-n></i>
														<i class=sprit-n></i>
													</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!--VIEW-INFO END-->

							<div class="view-info">
								<div class="row">
									<div class="col-md-6">
										<div class="username">
											<h5>varidhi sharma</h5>
											<p>Travelled on 1st December, 2014</p>
										</div>
									</div>
									<div class="col-md-6">
										<div class="viewstar pull-right">
											<ul class="clearfix">
												<li class="bus">
													vehicle
													<span>
														<i class=sprit-a></i>
														<i class=sprit-a></i>
														<i class=sprit-a></i>
														<i class=sprit-a></i>
														<i class=sprit-a></i>
													</span>
												</li>
												<li class="bus">
													driver 
													<span>
														<i class=sprit-a></i>
														<i class=sprit-a></i>
														<i class=sprit-n></i>
														<i class=sprit-n></i>
														<i class=sprit-n></i>
													</span>
												</li>
												<li class="bus">
													agency
													<span>
														<i class=sprit-a></i>
														<i class=sprit-a></i>
														<i class=sprit-n></i>
														<i class=sprit-n></i>
														<i class=sprit-n></i>
													</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!--VIEW-INFO END-->

							<div class="view-info">
								<div class="row">
									<div class="col-md-6">
										<div class="username">
											<h5>s sharma</h5>
											<p>Travelled on 28 November, 2014</p>
										</div>
									</div>
									<div class="col-md-6">
										<div class="viewstar pull-right">
											<ul class="clearfix">
												<li class="bus">
													vehicle
													<span>
														<i class=sprit-a></i>
														<i class=sprit-a></i>
														<i class=sprit-a></i>
														<i class=sprit-a></i>
														<i class=sprit-a></i>
													</span>
												</li>
												<li class="bus">
													driver 
													<span>
														<i class=sprit-a></i>
														<i class=sprit-a></i>
														<i class=sprit-n></i>
														<i class=sprit-n></i>
														<i class=sprit-n></i>
													</span>
												</li>
												<li class="bus">
													agency
													<span>
														<i class=sprit-a></i>
														<i class=sprit-a></i>
														<i class=sprit-n></i>
														<i class=sprit-n></i>
														<i class=sprit-n></i>
													</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!--VIEW-INFO END-->

						</div>
						<!--view-section end-->

					</div>
				</div>
			</div>
		</div>
	</div>
	<!--review-popup end-->
</div>
<script type="text/javascript">
	$(document).ready(function(){
		 $( "#slider-range" ).slider({
			range: true,
			min: 0,
			max: 50000,
			values: [ 0, 50000 ],
			slide: function( event, ui ) {
			$( "#amount" ).val($("<div>").html("&#x20B9;").text() + ui.values[ 0 ] +'   '+$("<div>").html("&#x20B9;")
				.text() + ui.values[ 1 ] );
			$('input[name=p_min]').val(ui.values[0]);
			$('input[name=p_max]').val(ui.values[1]);
			}
			});
			$( "#amount" ).val($("<div>").html("&#x20B9;").text() + $( "#slider-range" ).slider( "values", 0 ) 
				+'   '+
			$("<div>").html("&#x20B9;").text() + $( "#slider-range" ).slider( "values", 1 ) );
		//RANGE SLIDER END


		
		$('.result-info').click(function(){
			$(this).find('i').toggleClass('active');
			$(this).next().slideToggle();	
		});
		// SEARCH PAGE SLIDE SHOW


		var lefta=($(window).width()-$('.login-box').width())/2,
	    topa=($(window).height()-$('.login-box').height())/2;

		$('.starheading').click(function(){
			$('.login-box').css({left:lefta, top:topa}).fadeIn();
			$('.overlay').fadeIn();
			return false;
		});
		$('.close-b').click(function(){
			$('.login-box, .overlay').fadeOut();
		});

		$(window).resize(function(){
	   		lefta=($(window).width()-$('.login-box').width())/2,
	    	topa=($(window).height()-$('.login-box').height())/2;
	    	  $('.login-box').css({
      			left:lefta,
      			top:topa
      		 });
	    });
		//LOGIN POPUP END

		
		 $( "#depart-date, #return-date" ).datepicker({
		 	buttonImage: "images/home-datepicker.png",
			numberOfMonths: 2,
			showOn: "both",
			buttonImageOnly: true,
			showButtonPanel: true,
			dateFormat: "yy-mm-dd",
			minDate:0
		});
		 //DATEPICKER

		$('.fare-info').hover(function(){
			$(this).siblings('.fare-tooltip').fadeIn();
		}, function(){
			$('.fare-tooltip').fadeOut();
		});
		// FARE SECTION TOOLTIP

		$('.showpay').hover(function(){
			$(this).parents('.paytext').find('.payview').fadeIn();
		}, function(){
			$('.payview').fadeOut();
		});
		

	  $('#carousel0').flexslider({
	    animation: "slide",
	    controlNav: false,
	    animationLoop: false,
	    slideshow: false,
	    itemWidth:50,
	    itemMargin:4,
	    maxItems: 3,
	    asNavFor: '#slider0'
	  });
	  $('#slider0').flexslider({
	    animation: "slide",
	    controlNav: false,
	    directionNav: false,
	    animationLoop: false,
	    slideshow: false,
	    sync: "#carousel0"
	  });
	  // FIRST CROWSEL
	
	$('#carousel1').flexslider({
	    animation: "slide",
	    controlNav: false,
	    animationLoop: false,
	    slideshow: false,
	    itemWidth:50,
	    itemMargin:4,
	    maxItems: 3,
	    asNavFor: '#slider1'
	  });
	  $('#slider1').flexslider({
	    animation: "slide",
	    controlNav: false,
	    directionNav: false,
	    animationLoop: false,
	    slideshow: false,
	    sync: "#carousel1"
	  });
	  // SECOND CROWSEL

	  $('#carousel2').flexslider({
	    animation: "slide",
	    controlNav: false,
	    animationLoop: false,
	    slideshow: false,
	    itemWidth:50,
	    itemMargin:4,
	    maxItems: 3,
	    asNavFor: '#slider2'
	  });
	  $('#slider2').flexslider({
	    animation: "slide",
	    controlNav: false,
	    directionNav: false,
	    animationLoop: false,
	    slideshow: false,
	    sync: "#carousel2"
	  });
	  // THIRD CROWSEL

	  $('#carousel3').flexslider({
	    animation: "slide",
	    controlNav: false,
	    animationLoop: false,
	    slideshow: false,
	    itemWidth:50,
	    itemMargin:4,
	    maxItems: 3,
	    asNavFor: '#slider3'
	  });
	  $('#slider3').flexslider({
	    animation: "slide",
	    controlNav: false,
	    directionNav: false,
	    animationLoop: false,
	    slideshow: false,
	    sync: "#carousel3"
	  });
	  // FORTH CROWSEL

	  $('#carousel4').flexslider({
	    animation: "slide",
	    controlNav: false,
	    animationLoop: false,
	    slideshow: false,
	    itemWidth:50,
	    itemMargin:4,
	    maxItems: 3,
	    asNavFor: '#slider4'
	  });
	  $('#slider4').flexslider({
	    animation: "slide",
	    controlNav: false,
	    directionNav: false,
	    animationLoop: false,
	    slideshow: false,
	    sync: "#carousel4"
	  });
	  // FIFTH CROWSEL

	  $('#carousel5').flexslider({
	    animation: "slide",
	    controlNav: false,
	    animationLoop: false,
	    slideshow: false,
	    itemWidth:50,
	    itemMargin:4,
	    maxItems: 3,
	    asNavFor: '#slider5'
	  });
	  $('#slider5').flexslider({
	    animation: "slide",
	    controlNav: false,
	    directionNav: false,
	    animationLoop: false,
	    slideshow: false,
	    sync: "#carousel5"
	  });
	  // FIVE CROWSEL

	  $('#carousel6').flexslider({
	    animation: "slide",
	    controlNav: false,
	    animationLoop: false,
	    slideshow: false,
	    itemWidth:50,
	    itemMargin:4,
	    maxItems: 3,
	    asNavFor: '#slider6'
	  });
	  $('#slider6').flexslider({
	    animation: "slide",
	    controlNav: false,
	    directionNav: false,
	    animationLoop: false,
	    slideshow: false,
	    sync: "#carousel6"
	  });
	  // SIX CROWSEL

	  $('#carousel7').flexslider({
	    animation: "slide",
	    controlNav: false,
	    animationLoop: false,
	    slideshow: false,
	    itemWidth:50,
	    itemMargin:4,
	    maxItems: 3,
	    asNavFor: '#slider7'
	  });
	  $('#slider7').flexslider({
	    animation: "slide",
	    controlNav: false,
	    directionNav: false,
	    animationLoop: false,
	    slideshow: false,
	    sync: "#carousel7"
	  });
	  // SEVEN CROWSEL

	  $('#carousel8').flexslider({
	    animation: "slide",
	    controlNav: false,
	    animationLoop: false,
	    slideshow: false,
	    itemWidth:50,
	    itemMargin:4,
	    maxItems: 3,
	    asNavFor: '#slider8'
	  });
	  $('#slider8').flexslider({
	    animation: "slide",
	    controlNav: false,
	    directionNav: false,
	    animationLoop: false,
	    slideshow: false,
	    sync: "#carousel8"
	  });
	  // EIGHT CROWSEL

	  $('#carousel9').flexslider({
	    animation: "slide",
	    controlNav: false,
	    animationLoop: false,
	    slideshow: false,
	    itemWidth:50,
	    itemMargin:4,
	    maxItems: 3,
	    asNavFor: '#slider9'
	  });
	  $('#slider9').flexslider({
	    animation: "slide",
	    controlNav: false,
	    directionNav: false,
	    animationLoop: false,
	    slideshow: false,
	    sync: "#carousel9"
	  });
	  // NIN CROWSEL

	  $('#filters').click(function(e){
	  	var url='';
	  	var seats=$('#seats').val();
	  	var ac=$('#ac').is(":checked")?'1':0;
	  	var lc=$('#lc').is(":checked")?'1':0;
	  	var o5=$('#o5').is(":checked")?'1':0;
	  	var gps=$('#gps').is(":checked")?'1':0;
	  	var p_min=$('input[name=p_min]').val();
	  	var p_max=$('input[name=p_max]').val();
	  	var model='';
	  	var rating='';
	  	$('#models_checkbox input[type=checkbox]').each(function() {
   			if ($(this).is(":checked")) {

       			model=model==''?$(this).val():model+','+$(this).val();
  			 }
		});
		$('#ratings_checkbox input[type=checkbox]').each(function() {
   			if ($(this).is(":checked")) {

       			rating=rating==''?$(this).val():rating+','+$(this).val();
  			 }
		});
		if (seats!=0) {
			url+='&seats='+seats;
		}
		if (ac!=0) {
			url+='&ac=1';
		}
		if (lc!=0) {
			url+='&lc=1';
		}
		if(o5!=0){
			url+='&o5=1';
		}
		if(gps!=0){
			url+='&gps=1';
		}
		if (p_min!=0) {
			url+='&p_min='+p_min;
		}
		if (p_max!=0) {
			url+='&p_max='+p_max;
		}
		if (model){
			url+='&model='+model;
		}
		if (rating) {
			url+='&rating='+rating
		}
		window.location.replace('http://wiwigo.com/search?'+$('#mainsearch').serialize()+url);
	  });
	$('#sortby').change(function(){
		if ($(this).val()!='0') {
			window.location.replace($(this).val());
		};
	});
	});
</script>

</body>
</html>