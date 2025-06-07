<?php
/**
 * Template Name: Startseite
 * Description: Vorlage für die Startseite mit allen notwendigen Elementen.
 */
// Metadata for the WordPress template, including its name and description.

get_header(); // Includes the header template of the theme.
?>

<main id="site-content" role="main">
    <!-- Main content area of the page -->
    
    <!-- Hero-Bereich -->
    <section class="hero">
        <!-- Hero section to display introductory content -->
        <div class="container">
            <!-- Container for the site description -->
            <p class="hero-description">
                <?php bloginfo('description'); // Displays the website's description from WordPress settings. ?>
            </p>
        </div>
        <div class="container">
            <!-- Container for additional hero content -->
            <p>
            The <a href="https://en.wikipedia.org/wiki/International_Space_Station" target="_blank" rel="noopener noreferrer">
            International Space Station</a> is moving at close to 28,000 km/h so its location changes really fast! Where is it right now?
            <!-- Displays a paragraph with a link to the Wikipedia page about the ISS -->
            </p>
        </div>
    </section>

    <!-- Hauptinhalt -->
    <section class="content">
        <!-- Main content section -->
        <div class="container">
            <!-- Container for the interactive map and ISS information -->
            <div id="issMap" style="width: 100%; height: 500px;"></div>
            <!-- Placeholder for the ISS map, styled to take full width and 500px height -->
            <div id="issInfo" style="margin-top: 10px;"></div>
            <!-- Placeholder for additional ISS information, styled with a margin at the top -->
        </div>
    </section>
</main>

<?php
get_footer(); // Includes the footer template of the theme.
?>