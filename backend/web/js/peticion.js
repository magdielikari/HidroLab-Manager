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

		for(data in model)
			cache[data] = model[data];

		$('#modal').modal('hide');

		// Todo: Save this data in cookie
	});

	$('#modal').on('click', '.buttonSelectMultiple', function(){
		var selected = [];
		var selector = $('table').data('selector');

		$('.grid-view').find('input:checked').each(function(i){
			selected.push(jQuery.parseJSON($(this).val()).Tipo_id);
		});

		cache[selector] = selected;

		console.log(cache);
	});

	// get the click of the create button
	$('.modalButton').click(function(){
		var data = $(this).data();
		var titulo = data.title;
		var url = $(this).attr('value');

		if(data.depends && cache.general)
		{
			var query = {};

			query[data.column] = cache[data.depends][data.column];

			url = mergeParam(url, query);
		}

		$('.modal-title').text(titulo);
		$('#modal').modal('show')
			.find('#modalContent')
			.load(url);
	});

	function mergeParam (url, params){
		return url + '?' + jQuery.param(params);
	}
});