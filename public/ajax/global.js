$("form").submit(function(e){
	e.preventDefault();
	$.ajax({
		url:'http://127.0.0.1/agency/register',
		type:'POST',
		data:$(this).serialize(),
		success: function(data){
			var result=$.parseJSON(data);
			if (result.error[0]=='401'){
				$.ajax({
					url:'http://10.0.0.3/mauth?request_token='+$('input[name=request_token]').val(),
					type:'GET',
					success: function(data){
						var result=$.parseJSON(data);
						console.log(result.data.request_token);
						$('input[name=request_token]').val(result.data.request_token);
						$.ajax({
							url:'http://127.0.0.1/agency/register',
							type:'POST',
							data:$("form").serialize(),
							success:function(data){
								console.log(data)
							}					
						});			
					}
				});
			};
		}
	});
});
