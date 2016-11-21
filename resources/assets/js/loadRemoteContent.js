$(document).on('ajax:success', 'btn[data-remote]', function(e, data, status, xhr){
	var target = $('#modal');
	target.find('.modal-body').html(xhr.reponseText);
	target.modal('show');
	target.on('ajax:success', 'form[data-remote]', function(e, data, status, xhr){
		$('#content').html(xhr.reponseText);
		target.modal('hide');
	});
	
	target.on('ajax:error', 'form[data-remote]', function(e, data, status, xhr){
		target.find('#alert-box').show().find('ul').html(toList(data.reponseJSON));
	});
});

function toList(messages){
	var converted = '';
	$.each(messages, function(key, value){
		converted += '<li>' + value + '</li>';
	});
	return converted;
}