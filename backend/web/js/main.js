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

	$("#modal").on('submit','form', function() {
		var form_data=$("form").serialize();
		var action_url=$("form").attr("action");
		$.ajax({
          method: "POST",
          url: action_url,
          data: form_data,
          dataType: 'json'
        })
		.done(function( data ) {
		console.log(data);
		if(data.success){
			$('#modal').modal('hide');
			setTimeout(function(){
				$('#modal').modal('show')
					.find('#modalContent')
					.load(data.url);
			},500);
			}
		});
		return false;
	});
});
//       $(".form-group").removeClass("has-error");      //remove error class
//       $(".help-block").html("");                      //remove existing error messages
//       var form_data = $("#contact-form").serialize();
//       var action_url = $("#contact-form").attr("action");
//       $.ajax({
//          method: "POST",
//          url: action_url,
//           data: form_data
//       })
//       .done(function( data ) {
//           console.log(data);
//           if(data.success == true)    {       //data saved successfully 
//           }
//          else{       //validation errors occurred
//              $.each(data.error, function(ind, vl) {      //show errors to user
//                   $(".field-contactform-"+ind).addClass("has-error");
//                   $(".field-contactform-"+ind).find(".help-block").html(vl[0]);
//               });
//           }
//        });
//        return false;