<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Maps with Laravel</title>

    <style>
        #map {
            height: 500px;
            width: 100%;
            margin-top: 10px;
        }
        #controls {
            display: flex;
            flex-direction: column;
            max-width: 400px;
            margin-bottom: 10px;
        }
        input, button {
            margin: 5px 0;
            padding: 10px;
            font-size: 16px;
        }
        button {
            cursor: pointer;
            border: none;
        }
        .btn-primary {
            background-color: blue;
            color: white;
        }
        .btn-secondary {
            background-color: gray;
            color: white;
        }
        #selected-locations, #route-info {
            margin-top: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2>Select order direction</h2>

<div id="controls">
    <input id="from-input" type="text" placeholder="Enter start location">
    <button class="btn-secondary" onclick="getCurrentLocation()">📍 Use My Location</button>
    <input id="to-input" type="text" placeholder="Enter destination">
    <button class="btn-primary" onclick="calculateRoute()">🚗 Get Directions</button>
    <button class="btn-secondary" onclick="clearRoute()">❌ Clear</button>
</div>

<!-- Display Selected Locations & Coordinates -->
<div id="selected-locations">
    <p>From: <span id="from-location">Not selected</span></p>
    <p>Lat: <span id="from-lat">N/A</span>, Lng: <span id="from-lng">N/A</span></p>
    <p>To: <span id="to-location">Not selected</span></p>
    <p>Lat: <span id="to-lat">N/A</span>, Lng: <span id="to-lng">N/A</span></p>
</div>

<!-- Display Distance and Duration -->
<div id="route-info">
    <p>Distance: <span id="distance">N/A</span></p>
    <p>Duration: <span id="duration">N/A</span></p>
</div>

<div id="map"></div>

<!-- Hidden Inputs for Backend -->
<input type="hidden" id="from-lat-input" name="from_lat">
<input type="hidden" id="from-lng-input" name="from_lng">
<input type="hidden" id="to-lat-input" name="to_lat">
<input type="hidden" id="to-lng-input" name="to_lng">

<script>
    let map, directionsService, directionsRenderer;

    function initMap() {
        const alexandriaBounds = {
            north: 31.5,
            south: 31.0,
            west: 29.7,
            east: 30.2
        };

        map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: 31.205753, lng: 29.924526 },
            zoom: 13
        });

        directionsService = new google.maps.DirectionsService();
        directionsRenderer = new google.maps.DirectionsRenderer();
        directionsRenderer.setMap(map);

        setupAutocomplete("from-input", "from-location", "from-lat", "from-lng", "from-lat-input", "from-lng-input", alexandriaBounds);
        setupAutocomplete("to-input", "to-location", "to-lat", "to-lng", "to-lat-input", "to-lng-input", alexandriaBounds);
    }

    function setupAutocomplete(inputId, displayId, latId, lngId, latInputId, lngInputId, bounds) {
        const input = document.getElementById(inputId);
        const displayElement = document.getElementById(displayId);
        const latElement = document.getElementById(latId);
        const lngElement = document.getElementById(lngId);
        const latInput = document.getElementById(latInputId);
        const lngInput = document.getElementById(lngInputId);

        const autocomplete = new google.maps.places.Autocomplete(input, {
            bounds: bounds,
            componentRestrictions: { country: "eg" },
            fields: ["formatted_address", "geometry"]
        });

        autocomplete.addListener("place_changed", function () {
            const place = autocomplete.getPlace();
            if (!place.geometry) {
                alert("No details available for: " + place.name);
                return;
            }

            displayElement.textContent = place.formatted_address;
            latElement.textContent = place.geometry.location.lat().toFixed(6);
            lngElement.textContent = place.geometry.location.lng().toFixed(6);
            latInput.value = place.geometry.location.lat();
            lngInput.value = place.geometry.location.lng();

            if (inputId === "from-input") {
                document.getElementById("to-input").focus();
            }
        });
    }

    function getCurrentLocation(event) {
         // Prevent form submission
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                const latlng = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };

                const geocoder = new google.maps.Geocoder();
                geocoder.geocode({ location: latlng }, function (results, status) {
                    if (status === "OK") {
                        if (results[0]) {
                            document.getElementById("from-input").value = results[0].formatted_address;
                            document.getElementById("from-location").textContent = results[0].formatted_address;
                            document.getElementById("from-lat").textContent = latlng.lat.toFixed(6);
                            document.getElementById("from-lng").textContent = latlng.lng.toFixed(6);
                            document.getElementById("from-lat-input").value = latlng.lat;
                            document.getElementById("from-lng-input").value = latlng.lng;
                        } else {
                            alert("No address found for your location.");
                        }
                    } else {
                        alert("Geocoder failed due to: " + status);
                    }
                });
            }, function () {
                alert("Geolocation permission denied.");
            });
        } else {
            alert("Geolocation is not supported by this browser.");
        }
    }


    function calculateRoute(event) {
         // Prevent form submission
        const from = document.getElementById("from-input").value;
        const to = document.getElementById("to-input").value;

        if (!from || !to) {
            alert("Please enter both locations.");
            return;
        }

        directionsService.route({
            origin: from,
            destination: to,
            travelMode: google.maps.TravelMode.DRIVING
        }, function (response, status) {
            if (status === "OK") {
                directionsRenderer.setDirections(response);

                const route = response.routes[0].legs[0];
                document.getElementById("distance").textContent = route.distance.text;
                document.getElementById("duration").textContent = route.duration.text;
            } else {
                alert("Could not get directions: " + status);
            }
        });
    }مهلا

    function clearRoute(event) {
         // Prevent form submission

        document.getElementById("from-input").value = "";
        document.getElementById("to-input").value = "";
        document.getElementById("from-location").textContent = "Not selected";
        document.getElementById("to-location").textContent = "Not selected";
        document.getElementById("from-lat").textContent = "N/A";
        document.getElementById("from-lng").textContent = "N/A";
        document.getElementById("to-lat").textContent = "N/A";
        document.getElementById("to-lng").textContent = "N/A";
        document.getElementById("distance").textContent = "N/A";
        document.getElementById("duration").textContent = "N/A";
        directionsRenderer.setDirections({ routes: [] });
    }

    window.initMap = initMap;
</script>

</body>
</html>
