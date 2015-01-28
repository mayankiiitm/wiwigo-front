<?php require_once 'agency-header.php';?>
<div class="content">
	<div class="container">
		<div class="agency-box">
			<div class="row">
				<div class="col-md-8 col-sm-8">
					<div class="heading-two"><h2>Agency Account</h2></div>
				</div>
			</div>
		</div>
		<!--agency-box end-->


		<div class="agency-adju">
			<div class="row currntbox">
				<div class="col-md-8 col-sm-8">
					<ul class="tab-bar clearfix">
						<li class="last active"><a href="#">All Vehicles</a><span class="tsprit-nor"></span></li>
						<li><a href="#">All Drivers</a></li>
					</ul>
				</div>
			</div>
			<!--currntbox end-->

			<div class="orderrow1 active">
				<ul class="order-row">
				<?php 
				foreach ($data->data->vehicles as $key => $value) {?>
					<li id="v_<?=$value->id?>"> <span class="number numberbg-n"><?=$key+1?></span>
						<p class="<?php echo $key?'':'active'?>"><?=$value->model_name?> <?=$value->seats?> Seater Added ON <?=date("d-M-Y", strtotime($value->created_at))?></p>
						<div class="row order-detail" style="<?php echo $key?'':'display:block'?>">
							<div class="col-md-3 col-sm-3">
								<div class="car-sec">
									<img src="<?='http://10.0.0.230/'.$value->photo1?>" alt="" title="image">
									<div class="star-box clearfix">
										<span><small><?=$value->model_name?></small></span>
									</div>
								</div>
							</div>

							<div class="col-md-9 col-sm-9">
								<div class="btn-wrap">
									<form method="post">
										<input type="text" class="mdp" style="width:200px" name="date"><br>
										<input type="hidden" name="id" value="<?=$value->id?>">
										<button class="btn  btn-success btn-disp">Unavailable</button><span class="error-block"></span><br><br>
									</form>
									<button class="btn  btn-success btn-disp deletev" value="<?=$value->id?>">delete</button>					
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
				<ul class="order-row">
					<?php 
					foreach ($data->data->drivers as $key => $value) {?>
						<li id="d_<?=$value->id?>"> <span class="number numberbg-n"><?=$key+1?></span>
							<p class="<?php echo $key?'':'active'?>"><?=$value->name?> <?=$value->mobile?> Added ON <?=date("d-M-Y", strtotime($value->created_at))?></p>
							<div class="row order-detail" style="<?php echo $key?'':'display:block'?>">
								<div class="col-md-3 col-sm-3">
									<div class="car-sec">
										<img src="<?='http://10.0.0.230/'.$value->licence?>" alt="" title="image">
									</div>
								</div>

								<div class="col-md-9 col-sm-9">
									<div class="btn-wrap">		
										<button class="btn  btn-success btn-disp deleted" value="<?=$value->id?>">delete</button>					
									</div>
								</div>
							</div>
							<!--order-detail end-->
						</li>
					<?php }?>
				</ul>
				<!--order-row end-->
			</div>
		</div>
		<!--orderbox end-->
	</div>
	<!--container end-->
</div>
<!--content end-->
<input type="hidden" name="access_token" value="<?=$_SESSION['a_token']?>" id="a_token">
</div>
<!--WRAPPER END-->

<!--footer start-->
<?php require_once 'agency-footer.php';?>

<script type="text/javascript">
	$(document).ready(function(){
		 $( "#slider-range" ).slider({
			range: true,
			min: 0,
			max: 7799,
			values: [ 500, 7799 ],
			slide: function( event, ui ) {
			$( "#amount" ).val($("<div>").html("&#x20B9;").text() + ui.values[ 0 ] +'   '+$("<div>").html("&#x20B9;")
				.text() + ui.values[ 1 ] );
			}
			});
			$( "#amount" ).val($("<div>").html("&#x20B9;").text() + $( "#slider-range" ).slider( "values", 0 ) 
				+'   '+
			$("<div>").html("&#x20B9;").text() + $( "#slider-range" ).slider( "values", 1 ) );
		//RANGE SLIDER END

		// SEARCH PAGE SLIDE SHOW
		$('.result-info').click(function(){
			$(this).find('i').toggleClass('active');
			$(this).next().slideToggle();	
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
			$this.addClass('active').next('.order-detail').slideDown().parents('li').siblings('li').find('p').removeClass('active');
		}
	});	
	$('.mdp').multiDatesPicker({dateFormat: "yy-mm-dd"});
	$('form').submit(function(e){
		e.preventDefault();
		var date=$(this).find('input[name=date]');
		var data=$(this).serialize();
		var id=$(this).find('input[name=id]').val();
		var url='http://10.0.0.230/agency/vehicle/'+id+'/unavailable?access_token='+$('#a_token').val();
		$.ajax({
			url:url,
			type:'POST',
			data:data,
			success:function(res){
				result=$.parseJSON(res);
					if (result.error[0]=='401') {
						$.post('http://10.0.0.230/agency/refresh?access_token='+$('input[name=access_token]').val(),function(data){
							response=$.parseJSON(data);
							$.cookie('atoken',response.data.access_token);
							$('input[name=access_token]').val(response.data.access_token);
							$('form').submit();
						});
					}else if (result.success=='1') {
						alert('Unavailability added');
					}else{
						alert('some error occured');
					}
			}//success end
		});
	});

	$(".deletev").click(function(){
		var del=$(this);
		var id=$(this).val();
		$.ajax({
			url:'http://10.0.0.230/agency/vehicle/'+id+'/delete',
			type:'POST',
			data:'access_token='+$('input[name=access_token]').val(),
			success:function(res){
				result=$.parseJSON(res);
					if (result.error[0]=='401') {
						$.post('http://10.0.0.230/agency/refresh?access_token='+$('input[name=access_token]').val(),function(data){
							response=$.parseJSON(data);
							$.cookie('atoken',response.data.access_token);
							$('input[name=access_token]').val(response.data.access_token);
							$('del').trigger("click");
						});
					}else if (result.success=='1') {
						alert('Vehicle Deleted');
						$('#v_'+id).remove();
					}else{
						alert('some error occured');
					}
			}//success end
		});
	});

		$(".deleted").click(function(){
		var del=$(this);
		var id=$(this).val();
		$.ajax({
			url:'http://10.0.0.230/agency/driver/'+id+'/delete',
			type:'POST',
			data:'access_token='+$('input[name=access_token]').val(),
			success:function(res){
				result=$.parseJSON(res);
					if (result.error[0]=='401') {
						$.post('http://10.0.0.230/agency/refresh?access_token='+$('input[name=access_token]').val(),function(data){
							response=$.parseJSON(data);
							$.cookie('atoken',response.data.access_token);
							$('input[name=access_token]').val(response.data.access_token);
							$('del').trigger("click");
						});
					}else if (result.success=='1') {
						alert('Driver Deleted');
						$('#d_'+id).remove();
					}else{
						alert('some error occured');
					}
			}//success end
		});
	});
});
</script>
</body>
</html>