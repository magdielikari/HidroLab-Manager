$(function(){
	var cache = {
		cliente: null,
		general: null,
		tipos: null,
		subTipos: null,
		ramas: null,
		parametros: null,
		muestras: null,
		equiposGeneral: null,
		costoMuestra: null,
		costoParametro: null,
		peticion: null
	};

	// Register event on table rows inside the grid placed in AJAX Modal.
	$('#modal').on('click', '.gridRow', function(){
		// Get the data and reload modal
		$('#modal').trigger('modal:reload', $(this).data('url'));
	});

	// Get the model data when this button is clicked and close the modal
	// Store the model data in the cache and store id in cookie object
	$('#modal').on('click', '.buttonSelect', function(){
		var model = $(this).data('model');

		cache.cliente = model;
		$('#modal').modal('hide');

		// Todo: Save this data in cookie
	});
});