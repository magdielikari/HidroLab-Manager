$(function(){
	// Post form in modal and Display the results.
	$("#modal").on('submit','form', function() {
		var form_data = $("form").serialize();
		var action_url = $("form").attr("action");
		
		$.ajax({
          method: "POST",
          url: action_url,
          data: form_data,
          dataType: 'json'
        }).done(function(data){
			if(data.success)
				reloadModal(data.url);		
		});
		return false;
	});

	$('#modal').on('modal:reload', function(event, url){
		reloadModal(url);
	});

	function reloadModal(url){
		$('#modal').modal('hide');

		setTimeout(function(){
			$('#modal').modal('show')
				.find('#modalContent')
				.load(url);
		},500);
	}
});