"use strict";
$(document).ready(function() {

    var my_token = 'pk.eyJ1IjoiYmhhcnUiLCJhIjoiY2l0dmhxYWcwMDA1cjJ6cW14eHVpaHp4eCJ9.atVtH1bNhN4WgYUrzh0h_g';

//Basic map

    var mymap = L.map('advanced_map').setView([-23.5578561, -46.670285], 17);
    L.tileLayer('https://api.mapbox.com/styles/v1/mapbox/streets-v10/tiles/256/{z}/{x}/{y}?access_token={accessToken}', {
        maxZoom: 18,
        id: 'advanced_map',
        accessToken: my_token
    }).addTo(mymap);
    var marker = L.marker([-23.5578561, -46.670285]).addTo(mymap);
    var circle = L.circle([-23.5578561, -46.670285], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 500
    }).addTo(mymap);
    var polygon = L.polygon([
        [51.509, -0.08],
        [51.503, -0.06],
        [51.51, -0.047]
    ]).addTo(mymap);
    marker.bindPopup("<b>Marciano!</b>").openPopup();

    var left_height = $(window).height() - 1;
    $('.wrapper').css('height', left_height);
    $(".sidebar-toggle").on('click', function () {
        mymap.invalidateSize();
    });
});
