$(document).ready(function(){
	$("form").submit(function(event){
		event.preventDefault();
		var serialized=$(this).serialize();
		var request=$(this).attr('id');
		
		$.ajax({
			type: "POST",
			url: "authentication?request="+request,
			data: serialized,
			dataType:"JSON",
			cache: false,
			async: true,
			success: function(result){
				console.log(result);
				if(result.error){
					 notify("top","center","","danger","animated bounceIn","animated bounceOut","Error ! ", result.error);
				}else
				if(result.success){
					notify("top","center","","success","animated bounceIn","animated bounceOut","", result.success);
				}
				if(result.redirect){
					window.location.href=result.redirect;
				}
			},
			error: function (xhr, ajaxOptions, thrownError) {
	        	alert(xhr.status);
	      	}
		});				
	});
	
	
})
