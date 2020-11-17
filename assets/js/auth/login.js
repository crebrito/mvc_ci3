(function($){
	$("#frm_login").submit(function(ev){
		ev.preventDefault();
		$.ajax({
			url: 'login/validate',
			type: 'POST',
			data: $(this).serialize(),
			success: function(data){
				var json = JSON.parse(data);
				console.log(json);
			},
			error: function(){

			},
		});
	});

})(jQuery)
