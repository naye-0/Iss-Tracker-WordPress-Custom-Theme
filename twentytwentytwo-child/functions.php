<?php
// Styles und Scripts des Parent-Themes laden
function twentytwentytwo_child_enqueue_styles() {
    // Parent-Theme CSS laden
    wp_enqueue_style(
        'parent-style', // Handle for the parent theme's stylesheet
        get_template_directory_uri() . '/style.css' // Path to the parent theme's stylesheet
    );

    // Optional: Child-Theme CSS laden (falls zusätzliche CSS-Regeln vorhanden sind)
    wp_enqueue_style(
        'child-style', // Handle for the child theme's stylesheet
        get_stylesheet_directory_uri() . '/style.css', // Path to the child theme's stylesheet
        array('parent-style'), // Dependency on the parent theme's stylesheet
        wp_get_theme()->get('Version') // Automatische Versionierung (uses the theme version for cache-busting)
    );
}
// Hook the function into the 'wp_enqueue_scripts' action to load styles at the correct time
add_action('wp_enqueue_scripts', 'twentytwentytwo_child_enqueue_styles');

function enqueue_leaflet_assets() {
    // Add Leaflet CSS
    wp_enqueue_style(
        'leaflet-css', // Handle for the Leaflet CSS
        'https://unpkg.com/leaflet@1.9.4/dist/leaflet.css' // URL to the Leaflet CSS file from a CDN
    );

    // Add Leaflet JS
    wp_enqueue_script(
        'leaflet-js', // Handle for the Leaflet JavaScript
        'https://unpkg.com/leaflet@1.9.4/dist/leaflet.js', // URL to the Leaflet JavaScript file from a CDN
        array(), // No dependencies for this script
        null, // No version specified
        true // Load the script in the footer for better performance
    );

    // Add custom JS for ISS Map
    wp_enqueue_script(
        'iss-map-js', // Handle for the custom ISS map JavaScript
        get_template_directory_uri() . '-child/js/iss-map.js', // Path to the custom JavaScript file in the child theme
        array('leaflet-js'), // Dependency on the Leaflet JavaScript
        null, // No version specified
        true // Load the script in the footer for better performance
    );
}
// Hook the function into the 'wp_enqueue_scripts' action to load Leaflet assets at the correct time
add_action('wp_enqueue_scripts', 'enqueue_leaflet_assets');