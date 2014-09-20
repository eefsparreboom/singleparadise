/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var map;
function initialize() {
        var styles = [
  {
    featureType: "water",
    stylers: [
      { hue: "#0067b2" },
        { saturation: 50 },
        { lightness: 50 }
    ]
  },
  {
    featureType: "landscape",
    stylers: [
      { hue: "#6db33f" },
        { saturation: 100 },
        { lightness: 50 }
    ]
  }
];

        var mapOptions = {
          //center: { lat: location.lat(), lng: location.lng()},
          zoom: 4,
          scrollwheel: false,
    navigationControl: false,
    mapTypeControl: false,
    scaleControl: false,
    styles: styles
        };
        map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
            setCenter('europe');
            setMarker('amsterdam');
      }
      function setCenter(address){
        var geo = new google.maps.Geocoder;

        geo.geocode({'address':address},function(results, status){
                if (status == google.maps.GeocoderStatus.OK) {
                    var location = results[0].geometry.location;
                    map.setCenter(new google.maps.LatLng(location.lat(), location.lng()));
                } else {
                  alert("Geocode was not successful for the following reason: " + status);
                }

         });

    }
      function setMarker(address){
        var geo = new google.maps.Geocoder;

        geo.geocode({'address':address},function(results, status){
                if (status == google.maps.GeocoderStatus.OK) {
                    var location = results[0].geometry.location;
                    var marker = new google.maps.Marker({
                      position: new google.maps.LatLng(location.lat(), location.lng()),
                      map: map,
                      icon: '/img/bird_green.png'
                    });
                } else {
                  alert("Geocode was not successful for the following reason: " + status);
                }

         });

    }
    
      google.maps.event.addDomListener(window, 'load', initialize);
      
$(document).ready(function(){
   $('.cDivCalendar').datepicker({
    }); 
    $('.cDivCalendar').datepicker('update', '11-05-2014');
    $('.cInputPrice').slider({
        value:[100,200]
    });
});