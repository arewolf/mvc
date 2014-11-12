/**
 * Application JS
 */
(function() {

	var form = new ReptileForm('form');


	// Do something when errors are detected.
	form.on('validationError', function(e, err) {
		$('body').append('<p>Errors: ' + JSON.stringify(err) + '</p>');
	});


	// Do something when the AJAX request has returned in success
	form.on('xhrSuccess', function(e, data) {
		if (data.redirect){
			location.href = data.redirect;
		}else if (data.notice){
			
		}
	});

	// Do something when the AJAX request has returned with an error
	form.on('xhrError', function(e, xhr, settings, thrownError) {
		$('body').append('<p>Submittion Error</p>');
	});

})();