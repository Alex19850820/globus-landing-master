/**
 * Created by apuc0 on 17.10.2017.
 */
var map = new ACMap();

$(document).on('click', '.build__btn', function() {
	var districtAddress;
	districtAddress = $(this).attr('data-address');
	var form_data = new FormData();
	form_data.append('action', 'take_map');
	form_data.append('address', districtAddress);
	$.ajax({
		url: myajax.url,
		type: 'post',
		data: form_data,
		contentType: false,
		processData: false,
		success: function (response) {
		    $('#result').html(response);
		    console.log(response);
		}
	});

    // $('.map__wrap').slideDown('slow');
    // $('.map__btn').addClass('active');
    // // return districtAddress;
    //
    // map.customGeoCoder(districtAddress, [], function (coor) {
    //     map.init({
    //         mapId: 'yaMap',
    //         height: '365px',
    //         zoom: 11,
    //         center: coor,
    //         controls: ['default', 'routeButtonControl'],
    //         placeMarks: [
    //         {
    //             address: districtAddress,
    //             properties: {
    //                 hintContent: districtAddress,
    //                 // balloonContent: districtAddress + ' - шикарные апартаменты!'
    //                 balloonContent: districtAddress + ''
    //             },
    //             options: {
    //                 draggable: true
    //             }
    //         }
    //     ]
    //     });
    //     console.log(coor);
    // });
});
