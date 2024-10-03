<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapbox Route Example</title>
    <!-- Include Mapbox GL JS -->
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.15.0/mapbox-gl.css" rel="stylesheet" />
    <!-- Include Mapbox Directions plugin -->
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.1/mapbox-gl-directions.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.1/mapbox-gl-directions.css" rel="stylesheet" />
    <style>
        body { margin: 0; padding: 0; }
        #map { position: absolute; top: 0; bottom: 0; width: 100%; }
        #info { position: absolute; background: white; margin: 10px; padding: 10px; border-radius: 5px; font-family: Arial, sans-serif; font-size: 14px; z-index: 1; }
    </style>
</head>
<body>

<div id="map"></div>
<div id="info">Finding the route...</div>

<script>
    // Set Mapbox access token
    mapboxgl.accessToken = 'pk.eyJ1IjoiYjBybi1zbHl0aGVyaW4iLCJhIjoiY20wbDZ3NmVuMDJkdzJtcXlubWdrMmVkMyJ9.iTnPcb-yrYGlbB7C_L45SQ';

    // Initialize the map
    const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [76.6844, 10.2849], // Default center: Athirappilly Waterfalls
        zoom: 10
    });

    // Add zoom and rotation controls
    map.addControl(new mapboxgl.NavigationControl());

    // Add geolocation control to track user's location
    const geolocate = new mapboxgl.GeolocateControl({
        positionOptions: {
            enableHighAccuracy: true
        },
        trackUserLocation: true,
        showUserHeading: true
    });
    map.addControl(geolocate);

    // Add Directions control
    const directions = new MapboxDirections({
        accessToken: mapboxgl.accessToken,
        unit: 'metric',
        profile: 'mapbox/driving', // Driving directions, can change to walking, cycling, etc.
        alternatives: true, // Allow alternative routes
        geometries: 'geojson'
    });

    // Set destination to Athirappilly Waterfalls
    const destination = [76.6844, 10.2849]; // Coordinates of Athirappilly

    // Add Directions control to the map
    map.addControl(directions, 'top-left');

    // When the user's location is retrieved, set origin and destination
    geolocate.on('geolocate', function (event) {
        const userCoordinates = [event.coords.longitude, event.coords.latitude];
        
        // Set user's location as origin and Athirappilly as the destination
        directions.setOrigin(userCoordinates);
        directions.setDestination(destination);

        // Update info panel with a message
        document.getElementById('info').textContent = 'Calculating route from your location to Athirappilly Waterfalls...';
    });

    // Listen for route load event to update UI
    directions.on('route', function (event) {
        const route = event.route[0];
        const distance = (route.distance / 1000).toFixed(2); // Distance in km
        const duration = (route.duration / 60).toFixed(2); // Duration in minutes

        // Update the info panel with the route information
        document.getElementById('info').textContent = `Route found! Distance: ${distance} km, Duration: ${duration} mins`;
    });
</script>

</body>
</html>
