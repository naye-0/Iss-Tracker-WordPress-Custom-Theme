document.addEventListener("DOMContentLoaded", function () { // Wait for the DOM to fully load before executing the script
    // Initialize the map
    const map = L.map('issMap').setView([0, 0], 2); // Create a Leaflet map centered at [0, 0] with a zoom level of 2

    // Add OpenStreetMap tiles
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', { // Add OpenStreetMap tiles as the base layer
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors' // Attribution for OpenStreetMap
    }).addTo(map); // Add the tile layer to the map

    // Add a custom marker for the ISS
    const issIcon = L.icon({ // Define a custom icon for the ISS marker
        iconUrl: 'https://upload.wikimedia.org/wikipedia/commons/d/d0/International_Space_Station.svg', // URL of the ISS icon
        iconSize: [60, 42], // Set the size of the icon
        iconAnchor: [25, 16], // Set the anchor point of the icon (relative to its size)
    });

    const marker = L.marker([0, 0], { icon: issIcon }).addTo(map); // Create a marker at [0, 0] with the custom ISS icon and add it to the map

    // Fetch ISS location and update map
    async function updateISSLocation() { // Define an asynchronous function to fetch and update the ISS location
        try {
            const response = await fetch('http://api.open-notify.org/iss-now.json'); // Fetch the ISS location data from the API
            const data = await response.json(); // Parse the response as JSON
    
            if (data.message === 'success') { // Check if the API response indicates success
                const { latitude, longitude } = data.iss_position; // Extract latitude and longitude from the response
    
                // Update marker position
                marker.setLatLng([latitude, longitude]); // Update the marker's position on the map
    
                // Center the map on the ISS
                map.setView([latitude, longitude], 3); // Center the map on the ISS with a zoom level of 3
    
                // Update additional data
                // Update the HTML element with the ISS's current coordinates
                document.getElementById('issInfo').innerHTML = `
                    <p>Latitude: ${latitude}</p>
                    <p>Longitude: ${longitude}</p>
                `;
            }
        } catch (error) { // Handle any errors that occur during the fetch or update process
            console.error("Failed to fetch ISS location:", error); // Log the error to the console
        }
    }
    

    // Update ISS location every 5 seconds
    updateISSLocation(); // Call the function once to update the ISS location immediately
    setInterval(updateISSLocation, 5000); // Set an interval to update the ISS location every 5 seconds
});