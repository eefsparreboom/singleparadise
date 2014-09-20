/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function initialize() {
        var mapOptions = {
          center: { lat: -34.397, lng: 150.644},
          zoom: 8
        };
        var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
      }
      function getLatLong(address){
        var geo = new google.maps.Geocoder;

        geo.geocode({'address':address},function(results, status){
                if (status == google.maps.GeocoderStatus.OK) {
                  return results[0].geometry.location;
                } else {
                  alert("Geocode was not successful for the following reason: " + status);
                }

         });

    }
      google.maps.event.addDomListener(window, 'load', initialize);