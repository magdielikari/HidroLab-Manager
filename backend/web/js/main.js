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
		console.log(this);

		// Hide the modal whenever the row is clicked.
		$('#modal').modal('hide');
	});
});