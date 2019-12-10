
// Google Map for contact us page

function initialize() {
     var map = new google.maps.Map(document.getElementById('map-2'), {
         zoom: 4,
         center: { lat: -33, lng: 151 }
     });


     var beachMarker = new google.maps.Marker({
         position: { lat: -33.890, lng: 151.274 },
         map: map,
         icon: 'images/map-pin.png'
     });
 }