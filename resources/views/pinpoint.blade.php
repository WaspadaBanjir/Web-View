<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta charset="utf-8">
        <title>Waspada Banjir</title>
        <style>
        /* Always set the map height explicitly to define the size of the div
        * element that contains the map. */
        #map {
            height: 100%;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            font-size: 14px;
        }
        </style>
    </head>
    <body>
        <div id="map"></div>

        <footer style="position:absolute;bottom:0;width:100%;">(
            <div style="background:white;padding:20px;border-top: 2px solid #303F9F;">
                <!-- <div style="width:30px; height:30px; border-radius:20px; background:red;" onclick="addPinpoint()">
                    <img src="/resources/assets/ic_add_black_24dp.png" /> 
                </div> -->
                <div class="row" style="padding:10px; background:#000066; color:white;">
                    <div> Gunung Sahari </div>
                    <div> SIAGA 1 </div>
                </div>
                <div> &nbsp </div>
                <div class="row" style="padding:10px; background:#000066; color:white;">
                    <div> Tanah Abang </div>
                    <div> SIAGA 1 </div>
                </div>
            </div>
        </footer>

        <script>
            var citymap = {
                Petamburan_Baru: { 
                center: {lat: -6.157261, lng: 106.787668},
                population: 100000
                },
                Gunung_Sahari: {
                center: {lat: -6.151887, lng: 106.837442},
                population: 100000
                },
                Kebon_Kosong: {
                center: {lat: -6.165804, lng: 106.850130},
                population: 100000
                },
                Tanah_Abang: {
                center: {lat: -6.177614, lng: 106.816507},
                population: 100000
                }
            };
            
            function callAPI() {
                $.ajax({
                    type: "POST",
                    url: url,
                    data: data,
                    success: success,
                    dataType: dataType
                });
            }

            function addPinpoint() {

            }

            function initMap() {
                // Create the map.
                var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: {lat: -6.181151, lng: 106.828768},
                mapTypeId: 'terrain'
                });

                // Construct the circle for each value in citymap.
                // Note: We scale the area of the circle based on the population.
                for (var city in citymap) {
                    // Add the circle for this city to the map.
                    if(city == "Petamburan_Baru" || city == "Kebon_Kosong") {
                        var cityCircle = new google.maps.Circle({
                            strokeColor: '#003300',
                            strokeOpacity: 0.8,
                            strokeWeight: 2,
                            fillColor: '#009933',
                            fillOpacity: 0.35,
                            map: map,
                            center: citymap[city].center,
                            radius: Math.sqrt(citymap[city].population) * 1
                        });
                    } else {
                        var cityCircle = new google.maps.Circle({
                            strokeColor: '#FF0000',
                            strokeOpacity: 0.8,
                            strokeWeight: 2,
                            fillColor: '#FF0000',
                            fillOpacity: 0.35,
                            map: map,
                            center: citymap[city].center,
                            radius: Math.sqrt(citymap[city].population) * 1
                        });
                    }
                }

                infoWindow = new google.maps.InfoWindow;

                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                        };

                        infoWindow.setPosition(pos);
                        infoWindow.setContent('Location found.');
                        infoWindow.open(map);
                        map.setCenter(pos);
                    }, function() {
                        handleLocationError(true, infoWindow, map.getCenter());
                    });
                } else {
                    // Browser doesn't support Geolocation
                    handleLocationError(false, infoWindow, map.getCenter());
                }
            }
        </script>
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI4F1gw7Ow3H6-BgoZc30n-TpOzRbhNw0&callback=initMap">
        </script>
    </body>
</html>