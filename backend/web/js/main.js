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

	$(document).on('modal:load', function(event, url){
		loadModal(url);
	});

	$('.modalButton').click(function(){
		var url = $(this).attr('value');
		var titulo = $(this).data('title');

		$('.modal-title').text(titulo);

		loadModal(url);
	});

	function loadModal(url){
		$('#modal').modal('show')
			.find('#modalContent')
			.load(url);
	}

	function reloadModal(url){
		$('#modal').modal('hide');

		setTimeout(function(){
			loadModal(url);
		},500);
	}
});