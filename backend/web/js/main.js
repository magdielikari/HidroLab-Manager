$(function(){
	// get the click of the create button
	$('.modalButton').click(function(){
		var titulo=$(this).attr('data-title');
		$('.modal-title').text(titulo);
		$('#modal').modal('show')
			.find('#modalContent')
			.load($(this).attr('value'));
	});

	// Register event on table rows inside the grid placed in AJAX Modal.
	$('#modal').on('click', '.gridRow', function(){
		// Get the data and reload modal
		reloadModal($(this).data('url'));
	});

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

	function reloadModal(url){
		$('#modal').modal('hide');

		setTimeout(function(){
			$('#modal').modal('show')
				.find('#modalContent')
				.load(url);
		},500);
	}

	// Hacer la llamada a servidor para verificar si existe la cookie "petProcc"
	window.cookie.check('petProcc', function(res){
		if(res)
			alert('Cookie exists');

		else
			alert('Cookie doesnt exist');

		console.log(res);
	});
});