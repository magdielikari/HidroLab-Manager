$(function(){
	// get the click of the create button
	$('.modalButton').click(function(){
		var titulo=$(this).attr('data-title');
		$('.modal-title').text(titulo);
		$('#modal').modal('show')
			.find('#modalContent')
			.load($(this).attr('value'));
	});
});