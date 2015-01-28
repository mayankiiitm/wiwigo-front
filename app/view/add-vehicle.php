<?php require_once 'agency-header.php';?>

<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="agency-registration">
							<h4>Agency Vehicle Addition</h4>
							<form action="" method="post" enctype="multipart/form-data" id="form1">
								<ul class="registran clearfix">
									
									<li class="pull-left"><input type="text" name="number" placeholder="Plate Number" data-parsley-required="true" data-parsley-error-message="Plate Number is required"></li>
				
									<li class="pull-right"><input type="text" name="year" placeholder="Year" data-parsley-required="true" data-parsley-error-message="Make Year is required"></li>

									<li class="pull-left"><input type="text" name="seats" placeholder="Number of seats available:5" data-parsley-required="true" data-parsley-error-message="Number of seats is required"></li>

									<li class="pull-right">
										<select name="model" id="model">
										<option value="0">--Select Model--</option>
											<?php foreach ($data->data->cars as $key => $value) {?>
												<option value="<?=$value->id?>"><?=$value->model?></option>
											<?php }?>
										</select>
										<span class="error-block" id="model-error">Please Select Model</span>
									</li>

									<li class="clearboth"><input type="text" name="rpk" placeholder="Rate Per km." data-parsley-required="true" data-parsley-error-message="Rate per KM is required"></li>

									<li><input type="text" name="ta" placeholder="TA/DA Per Day" data-parsley-required="true" data-parsley-error-message="TA/DA per day is required"></li>								
								</ul>

								<div class="check-row vehicle-checkbox clearfix">
									<div class="checkbox">
								    	<input type="checkbox" id="air" name="ac" value="1">
								        <label class="css-label" for="air" style="background-position: 0px 0px;"> Air Conditioning </label>
								   </div>

								   <div class="checkbox">
								    	<input type="checkbox" id="gps" name="gps" value="1">
								        <label class="css-label" for="gps" style="background-position: 0px 0px;"> GPS Tracking</label>
								   </div>

									<div class="checkbox">
								    	<input type="checkbox" id="luggage" name="lc" value="1">
								        <label class="css-label" for="luggage" style="background-position: 0px 0px;">Luggage Carrier</label>
								   </div>

								   <div class="checkbox">
								    	<input type="checkbox" id="option5" name="o5" value="1">
								        <label class="css-label" for="option5" style="background-position: 0px 0px;">Option5</label>
								   </div>
								</div>

								
								<div class="button-row">
									<div class="fileUpload btn btn-primary">
									    <span>upload rc</span>
									    <input type="file" class="upload" name="rc">
									</div>
									<div class="fileUpload btn photo">
									    <span>upload photos</span>
									    <input type="file" class="upload" name="jimage[]" id="jimage" multiple>
									</div>
									<div>
										<input type="hidden" value="<?=$_SESSION['a_token']?>" name="access_token">
										<button class="btn btn-success btn-another" type="submit" id="submit">Done</button>
										<span class="error-block" id="message"></span>
									</div>
								</div>
							</form>
						</div>
						<!--agency-registration end-->
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
<?php require_once 'agency-footer.php';?>

<script type="text/javascript">
	$(document).ready(function(){
		$("#model").change(function(){
			$("#model-error").hide();
		});
		$("#submit").click(function(){if ($("#model").val()<=0) {$("#model-error").show()};});
		$('form').parsley({errorTemplate: "<span class='my-parsley-error'></span>",errorsWrapper: "<div></div>",});
		$('form').submit(function(e){
			$('#message').text('');
			if ( !($('input[name=rc]').val() && $('#jimage').val())) {
				$('#message').text('Please upload Vehicle and RC images').css("display","inline");
				return false;
			};
			var form=$(this);
			e.preventDefault();
			$("#submit").text('Adding...').attr("disabled","disabled");
			$('#message').hide();
			var formData = new FormData($(this)[0]);
			$.ajax({
				url:'http://10.0.0.230/agency/vehicle',
				type:'POST',
				data:formData,
				processData: false,
    			contentType: false,
				success:function(res){
					result=$.parseJSON(res);
					if (result.error[0]=='401') {
						$.post('http://10.0.0.230/agency/refresh?access_token='+$('input[name=access_token]').val(),function(data){
							response=$.parseJSON(data);
							$.cookie('atoken',response.data.access_token);
							$('input[name=access_token]').val(response.data.access_token);
							$('form').submit();
						});
					}else if ($.inArray(106,result.error)>-1){
						$('#message').text(result.message).css("display","inline");
						$("#submit").text('Done').removeAttr("disabled");
					}else if(result.success=='1'){
						$('input[type=file]').val('');
						$('input[type=text]').val('');
						$('#message').text('Vehicle Added').css("color","green").css("display","inline");
						$("#submit").text('Add More').removeAttr("disabled");
					}else{
						$('#message').text('Some error Occured').css("color","red").css("display","inline");
					}
				}
			});
		});
	});
</script>

</body>
</html>
