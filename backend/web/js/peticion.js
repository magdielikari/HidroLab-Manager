$(function(){
	var cache = {
		cliente: null,
		general: null,
		tipos: null,
		subTipos: null,
		ramas: null,
		parametros: null,
		muestras: null,
		muestreo: null,
		equiposGeneral: null,
		costo: null,
		costoAdministrativo: null,
		costoMuestra: null,
		costoParametro: null,
		peticion: null
	};

	var state = 0;

	$(document).ready(function(){
		$(this).trigger('toggleStates');
	});

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
		$(document).trigger('toggleStates');
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
			selected.push($.parseJSON($(this).val()));
		});

		cache[selector] = selected;

		$('#modal').modal('hide');
		$(document).trigger('toggleStates');
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
	$('body').on('click', '.modalSelect', function(){
		var data   = $(this).data();
		var titulo = data.title;
		var url    = $(this).attr('value');

		if(data.depends)
		{
			var query = {};

			$.map(data.depends, function(val, i){
				for(ar in val){
					if($.isArray(cache[i])){
						var summary = [];

						for(index in cache[i])
							summary.push(val[ar] + '[]=' + cache[i][index][val[ar]]);

						var result = summary.join('&');

						if($.isEmptyObject(query))
							query = result;

						else
							query = mergeToQueryString(query, result);
					}

					else
						query[val[ar]] = cache[i][val[ar]];
				}
			});
			console.log(query);
			url = mergeParam(url, query);
		}

		$('.modal-title').text(titulo);
		$(document).trigger('modal:load', url);
	});

	/**
	 * Change the tracking state of the process
	 */
	$(document).on('toggleStates', function(event){
		toggleStates();
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

		return url + '?' + $.param(params);
	}

	/**
	 * Disables or enables all buttons depending of the container's dependecy
	 */
	function toggleStates(){
		$('.thumbnail').each(function(index, element){
			var data = $(element).data();

			if(data.depends){
				if(!cache[data.depends]){
					$(element).find('button').each(function(index, elem){
						$(elem).prop('disabled', true);
					});
				}

				else{
					var dat = $(element).data();

					if(dat.name == 'ramas'){
						$(element).find('button').each(function(index, elem){
							$(elem).prop('disabled', checkDepartment(data));
						});
					}

					else{
						$(element).find('button').each(function(index, elem){
							$(elem).prop('disabled', false);
						});
					}
				}
			}
		});
	}

	function checkDepartment(data){
		var general = cache.general;

		if(general.Departamento_id == data.ignore){
			cache.ramas = true;

			return true;
		}

		return false;
	}

	function mergeToQueryString(obj, string){
		var objParams, result;

		if(typeof obj === 'string')
			objParams = obj;

		else
			objParams = $.param(obj)

		result = $.grep([objParams, string], Boolean).join('&');

		return result;
	}
});