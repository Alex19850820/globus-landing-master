$(document).on('click', '#next', function (e) {
	e.preventDefault();
	$('.active').removeClass( 'active');
	// $('#countItems').remove();
	var button = $(this);
	//создаем экземпляр класс FormData, тут будем хранить всю информацию для отправки
	var form_data = new FormData();
	//var inpage = $('.more_btn').data('inpage');
	// var count = parseInt($('#next').attr('data-page')) + 1;
	// var count = parseInt($('#next').attr('data-page'));
	var count = parseInt($(this).attr('data-page'));
	var cat = $(this).attr('data-cat');
	// $('.more_btn').attr('data-page', count);
	form_data.append('action', 'get_next_page');
	// form_data.append('inpage', inpage);
	form_data.append('page', count);
	form_data.append('cat', cat);
	$.ajax({
		url: myajax.url,
		type: 'post',
		data: form_data,
		contentType: false,
		processData: false,
		success: function (response) {
			var $response = $(response);
			// $('.build').append($response);
			button.addClass("active");
			$('.build').html($response);

		}
	});
});
$(document).on('click', '#get_table', function (e) {
	e.preventDefault();
	var form_data = new FormData();
	var cat = $(this).attr('data-jk');
	var cost = $('#cost').find('span:first').text();
	var area = $('#area').find('span:first').text();
	var flats = $('#flats').find('.active').text();
	var region = $('#region').find('option:checked').val();
	var property = $('#property').find('option:checked').val();
	form_data.append('action', 'get_table');
	form_data.append('jk_id', cat);
	form_data.append('region', region);
	if(property !== '') {
		form_data.append('property', property);
	}
	form_data.append('cost', cost);
	form_data.append('area', area);
	form_data.append('flats', flats);
	$.ajax({
		url: myajax.url,
		type: 'post',
		data: form_data,
		contentType: false,
		processData: false,
		success: function (response) {
			var $response = $(response);
			 // $('#table').append($response);
			if($('#table').is('table')){
				$('#table').html($response);
			} else {
				$('#result').html($response);
			}

			// button.addClass("active");
			// $('.build').html($response);

		}
	});
});
