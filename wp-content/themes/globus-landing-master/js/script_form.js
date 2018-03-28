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