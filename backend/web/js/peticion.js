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

	/**
	 * Whenever an element with the class ".gridrow" is clicked, it will close the current modal
	 * and load the new url with the stored url data
	 */
	$('#modal').on('click', '.gridRow', function(){
		// Get the data and reload modal
		$('#modal').trigger('modal:reload', $(this).data('url'));
	});

	/**
	 * Whenever an element with the class "buttonSelect" is clicked, it will get the rendered model data
	 * and store in the proper cache property.
	 *
	 * After the process is done, the modal will hide
	 */
	$('#modal').on('click', '.buttonSelect', function(){
		var model = $(this).data('model');

		for(data in model)
			cache[data] = model[data];

		$('#modal').modal('hide');
		console.log(cache);
	});

	/**
	 * Whenever an element with the class "buttonSelectMultiple" is clicked, it will search the selector
	 * and store in the proper cache property.
	 *
	 * After the process is done, the modal will hide
	 */
	$('#modal').on('click', '.buttonSelectMultiple', function(){
		var selected = [];
		var selector = $('table').data('selector');

		$('.grid-view').find('input:checked').each(function(i){
			selected.push(jQuery.parseJSON($(this).val()));
		});

		cache[selector] = selected;

		$('#modal').modal('hide');
		console.log(cache);
	});

	/**
	 * Makes an Http request and renders the content in a modal if status is 200
	 * If button element has data conditions, it will process the following
	 *
	 * [data]
	 * 		title:   Sets the title of the modal
	 * 		depends: Gets the data from Cache and depending of the column to select in property will alter
	 * 				 the Http to render the desired content
	 * 		column:  Gets the value of the dependant cache property and parses it to query string in Http request
	 * 				 this is mandatory for the "depends" data to work
	 * 		array:   Sets whenever the column value is an array, so the Http request can handle the value as array
	 */
	$('.modalButton').click(function(){
		var data   = $(this).data();
		var titulo = data.title;
		var url    = $(this).attr('value');

		if(data.depends)
		{
			var query = {};

			if(data.array){
				var summary = [];

				for(e in cache[data.depends]){
					summary.push(data.column + '[]=' + cache[data.depends][e][data.column]);
				}

				query = summary.join('&');
			}

			else
				query[data.column] = cache[data.depends][data.column];

			url = mergeParam(url, query);
		}

		$('.modal-title').text(titulo);
		$('#modal').modal('show')
			.find('#modalContent')
			.load(url);
	});

	/**
	 * Creates a new url with the provided url and the params to parse
	 * The params are used to parse as query string
	 * 
	 * @param  {string}        url    The url to merge with the params
	 * @param  {string/object} params The element used to parse as query string
	 * @return {string}        		  The new url string
	 */
	function mergeParam (url, params){
		if(typeof params === 'string')
			return url + '?' + params;

		return url + '?' + jQuery.param(params);
	}
});