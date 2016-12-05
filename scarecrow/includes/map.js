function load(){

  var point = new google.maps.LatLng(12.97422, 80.24285);

  var myMapOptions = {
    zoom: 16,
    scrollwheel: false,
    zoomControl: false,
    scaleControl: false,
    panControl: false,
    center: point,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };

  var map = new google.maps.Map(document.getElementById("map"),myMapOptions);
    

  var image = new google.maps.MarkerImage(
    'images/map.png',
    new google.maps.Size(50,48),
    new google.maps.Point(0,0),
    new google.maps.Point(25,48)
  );

  var shadow = new google.maps.MarkerImage(
    'images/mapshade.png',
    new google.maps.Size(78,48),
    new google.maps.Point(0,0),
    new google.maps.Point(25,48)
  );

  var shape = {
    coord: [25,0,26,1,28,2,30,3,32,4,33,5,35,6,37,7,39,8,40,9,42,10,44,11,46,12,47,13,48,14,48,15,48,16,49,17,49,18,49,19,49,20,49,21,49,22,49,23,49,24,49,25,49,26,49,27,49,28,49,29,49,30,49,31,49,32,49,33,47,34,45,35,44,36,42,37,40,38,39,39,37,40,35,41,34,42,32,43,30,44,29,45,27,46,25,47,24,47,23,46,21,45,19,44,18,43,16,42,14,41,13,40,11,39,9,38,8,37,6,36,4,35,3,34,1,33,0,32,0,31,0,30,0,29,0,28,0,27,0,26,0,25,0,24,0,23,0,22,0,21,0,20,0,19,0,18,0,17,0,16,0,15,0,14,1,13,3,12,5,11,7,10,8,9,10,8,12,7,13,6,15,5,17,4,19,3,20,2,22,1,24,0,25,0],
    type: 'poly'
  };

  var marker = new google.maps.Marker({
    draggable: false,
    raiseOnDrag: false,
    icon: image,
    shadow: shadow,
    shape: shape,
    map: map,
    position: point
  });
  
    var infowindow = new google.maps.InfoWindow({
content: "<div class='popbub'><img style='float:left; width:88px; height:66px; margin: 0 10px 0 0;' src='images/regus.png' alt='rmz millennia' /><strong>IdeaCube Interactive&trade;</strong><br />RMZ Millennia Business Park Phase II<br />Perungudi, Chennai - 600 096</div>",
maxWidth: 450
});
 
// Add listner for marker. You can add listner for any object. It is just an example in which I am specifying that infowindow will be open on marker mouseover

google.maps.event.addListener(marker, "mouseover", function() {
infowindow.open(map, marker);
});

infowindow.open(map,marker);

}