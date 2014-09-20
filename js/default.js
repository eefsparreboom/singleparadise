/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var map;
var infowindows = [];
var openInfoWindow=null;
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
            setCenter('prague');
            
            
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
      function setMarker(address,type,sHTML){
        var geo = new google.maps.Geocoder;

        geo.geocode({'address':address},function(results, status){
                if (status == google.maps.GeocoderStatus.OK) {
                    var location = results[0].geometry.location;
                    var marker = new google.maps.Marker({
                      position: new google.maps.LatLng(location.lat(), location.lng()),
                      map: map,
                      icon: '/img/bird'+type+'.png'
                    });
                    marker.object = sHTML;
                    var infoWindow = '';
//                    infowindows.push(marker);
                    bindInfoWindow(marker, map, infoWindow);
                } else {
                  alert("Geocode was not successful for the following reason: " + status);
                }

         });

    }
    function bindInfoWindow(marker, map, infoWindow) {
            infowindows.push(marker);
            google.maps.event.addListener(marker, 'click', function() {
                $('#iModalInfo').modal();
                var object = marker.object;
                console.log('object');
                console.log(object);
                $('.modal-title').html(object.name);
                var html = '<tr>';
                    html += '  <th><span class="glyphicon glyphicon-plane"></span></th>';
                    html += '  <th><span class="glyphicon glyphicon-heart-empty"></span>&nbsp;&nbsp;Flirty birds</th>';
                    html += '  <th><span class="glyphicon glyphicon-time"></span>&nbsp;&nbsp;Duration</th>';
                    html += '  <th><span class="glyphicon glyphicon-euro"></span></th>';
                    html += '  <th></th>';
                  html += '</tr>';
                for(i=0;i<object.flights.length;i++){
                    var flight = object.flights[i];
                  html += '<tr>';
                    html += '  <td>'+flight.code+'</td>';
                    html += '  <td>'+flight.singles+'</td>';
                    html += '  <td>'+flight.duration+'</td>';
                    html += '  <td>&euro;'+flight.fare+'</td>';
                    if(parseInt(flight.seats)>0){
                        html += '  <td>'+flight.seats+' seats available! <a class="btn btn-primary pull-right" href="http://www.transavia.com/hv/nl-NL/reisgids/vliegtickets/nederland/vliegticket-'+object.name+'?city='+object.code+'">Book</a></td>';
                    }else{
                        html += '  <td>'+flight.seats+' seats available :(</td>';
                    }
                      
                  html += '</tr>';
              }
                $('.modal-body table').html(html);
            });


        }
    
    
      google.maps.event.addDomListener(window, 'load', initialize);
      
$(document).ready(function(){
   $('.cDivCalendar').datepicker().on('changeDate',function(){
           updateBirds();
       }
    ); 
    $('.cDivCalendar').datepicker('update', '11-05-2014');
    $('.cDivFilter input[type="checkbox"]').click(function(){
        updateBirds();
    });
    $('.cInputPrice').slider({
        value:[100,800]
    });
    
    function updateBirds(){
        var vars = {};
        console.log(infowindows);
        for (var i = 0; i < infowindows.length; i++ ) {
            infowindows[i].setMap(null);
          }
          infowindows = [];
          
        ///todo: set date
        vars.date = '';
        if($('.cDivFilter input:checked').length===1){
            vars.duration = $('.cDivFilter input:checked').val();
        }
        $.get('/xhr.php',vars,function(p){
            for (var key in p) {
                if (p.hasOwnProperty(key)) {
                    var city = p[key];
                    var sHTML = city;
                    var bird = Math.floor((Math.random() * 4) + 1);
                    if(city.flights.length > 0){
                        setMarker(city.name,bird.toString(),sHTML);
                    }
                  console.log(p[key]);
                }
              }
        },'json');
    }
    updateBirds();
});