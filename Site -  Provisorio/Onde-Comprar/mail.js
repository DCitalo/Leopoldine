$(function(){
	$('#cod_estados').change(function(){
		if( $(this).val() ) {
			$('#cod_cidades').hide();
			$('.carregando').show();
			$.getJSON('cidades.ajax.php?search=',{cod_estados: $(this).val(), ajax: 'true'}, function(j){
				var options = '<option value=""></option>';	
				for (var i = 0; i < j.length; i++) {
					if (j[i].nome == null) {
						options += '<option value="' + j[i].nome + '" style="display:none">' + j[i].nome + '</option>';
					}else{
						options += '<option value="' + j[i].nome + '">' + j[i].nome + '</option>';
					}
				}	
				$('#cod_cidades').html(options).show();
				$('.carregando').hide();
			});
		} else {
			$('#cod_cidades').html('<option value="">-- Escolha um estado --</option>');
		}
	});
});
$(function() {

	// Get the form.
	var form = $('#ComoComprar');

	// Get the messages div.
	var formMessages = $('#form-messages');

	// Set up an event listener for the contact form.
	$(form).submit(function(e) {
		// Stop the browser from submitting the form.
		e.preventDefault();

		// Serialize the form data.
		var formData = $(form).serialize();

		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData
		})
		.done(function(response) {
			// Make sure that the formMessages div has the 'success' class.
			$(formMessages).removeClass('error');
			$(formMessages).addClass('alert');
			$(formMessages).addClass('alert-success');

			// Set the message text.
			$(formMessages).text(response);

			// Clear the form.
			$('.form-group').hide();
		})
		.fail(function(data) {
			// Make sure that the formMessages div has the 'error' class.
			$(formMessages).removeClass('success');
			$(formMessages).addClass('alert');
			$(formMessages).addClass('alert-danger');

			// Set the message text.
			if (data.responseText !== '') {
				$(formMessages).text(data.responseText);
			} else {
				$(formMessages).text('Oops! An error occured and your message could not be sent.');
			}
		});

	});

});