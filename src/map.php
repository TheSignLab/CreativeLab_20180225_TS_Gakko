<!DOCTYPE html>
<html>
<body>

<h1>My First Google Map</h1>

<div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function initMap() {
var mapProp= {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9GYBR1X36wkFZp8oziec9vkTm2vy3Ifw&callback=initMap" async defer></script>
</body>
</html>