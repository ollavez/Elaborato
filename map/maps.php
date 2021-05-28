<!DOCTYPE html>
<html>
<head>
    <title>Add Map</title>

    <style type="text/css">

        #map {
            height: 400px;

            width: 100%;

        }
    </style>
    <script>
        // Initialize and add the map
        function initMap() {
            // The location of Uluru
            const parcoCastello = { lat:  45.582925724337414, lng: 8.920701308861952 };




            const map = new google.maps.Map(document.getElementById("map"), {
                scaleControl: true,
                zoom: 10,
                center: parcoCastello,
            });

            // The marker, positioned at Uluru



            const marker = new google.maps.Marker({
                position: parcoCastello,
                map: map,
            });


        }
    </script>
</head>
<body>
<h3>My Google Maps Demo</h3>
<!--The div element for the map -->
<div id="map"></div>



<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASSxxySa2qzIrDI2x_iIXJNtQgks49S_M&callback=initMap"
    async defer
></script>
</body>
</html>
