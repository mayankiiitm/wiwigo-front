<?php require_once 'agency-header.php'; ?>
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="row">
					<div class="col-md-12">
						<div class="addition agency-registration">
							<h4>Agency Driver Addition</h4>
							<form action="#" method="post" enctype="multipart/form-data" id="form1">
								<ul class="clearfix">
									<li><input type="text" name="name" placeholder="Driver Name" data-parsley-required="true" data-parsley-error-message="Name is required"></li>
									<li><input type="text" name="address" placeholder="Address" data-parsley-required="true" data-parsley-error-message="Address is required" ></li>
									<li><input type="text" name="mobile" placeholder="Mobile" data-parsley-required="true" data-parsley-error-message="Mobile is required" data-parsley-pattern="\d{10}"></li>
									<li><input type="text" name="email" placeholder="Email" data-parsley-required="true" data-parsley-error-message="Email is required" data-parsley-type="email"></li>
									<li>
										<div class="checkbox">
										     <input type="checkbox" name="english" id="checkbox-d">
										     <label for="checkbox-d" class="css-label">English Speaking</label>
									   	</div>
									</li>
								</ul>
								<div class="button-row">
									<div class="fileUpload btn btn-primary">
									    <span>upload license</span>
									    <input type="file" class="upload" name="licence">
									    
									</div><span class="error-block" id="email-error"></span>
									<input type="hidden" value="<?=$_SESSION['a_token']?>" name="access_token">
									<div><button class="btn btn-success btn-another" type="submit" id="submit">Done</button><span class="error-block" id="submit-error"></div>
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
<?php require_once 'agency-footer.php';?>

<script type="text/javascript">
	$(document).ready(function(){
		$('form').parsley({errorTemplate: "<span class='my-parsley-error'></span>",errorsWrapper: "<div></div>",});
		$('form').submit(function(e){
			$("#submit-error").text('');
			$('#email-error').text('');
			if (!($('input[type=file]').val())) {
				$('#email-error').text('Please upload licence').css("display","inline");
				return false;
			};
			var form=$(this);
			e.preventDefault();
			$("#submit").text('Adding...').attr("disabled","disabled");
			$('#email-error').hide();
			var formData = new FormData($(this)[0]);
			$.ajax({
				url:'http://10.0.0.230/agency/driver',
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
						$('#email-error').text(result.message).css("display","inline");
						$("#submit").text('Done').removeAttr("disabled");
					}else if (result.success=='1'){
						$('input[type=file]').val('');
						$('input[type=text]').val('');
						$("#submit").text('Add More').removeAttr("disabled");
						$("#submit-error").text('Driver Added').css("color","green").css("display","inline");
					}else{
						$("#submit-error").text('some error occured. Please try again').css("color","red").css("display","inline");
					}
				}
			});
		});
	
	});
</script>
</body>
</html>
