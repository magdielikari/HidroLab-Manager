var cookie = {
	check: function(name, callback){
		'use strict';

		var data = {
			action: 'check',
			name: name
		};

		this.ajax(data, function(response){
			callback(response);
		});
	},
	delete: function(name){
		var data = {
			action: 'delete',
			name: name
		};

		this.ajax(data);
	},

	ajax: function(data, callback){
		$.ajax({
			url: window.ajaxDir,
			data: data,
			dataType: 'json'
		})
		.done(function(response){
			if(callback)
				callback(response);
		});
	},

	hasData: function(){
		var result;
		$.ajax({
			url: window.ajaxDir,
			async: false,
			data: {
				action: 'verify'
			},
			dataType: 'json'
		}).done(function(response){
			result = response.data;
		});

		return result;
	}
};