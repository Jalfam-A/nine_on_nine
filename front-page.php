<?php
/**
 * This is the front-page.php file
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nine_on_nine
 */

get_header();
?>


<body>
    <section class="homepage-container">

    <!-- HERO BANNER -->
    <div class="hero-banner">
        <!-- Hero Image -->
        <div class="hero-image">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/front-page/homepage-hero-banner.jpg'); ?>" alt="Image of 2 people playing 9on9">
        </div>

        <!-- Hero Message -->
        <div class="hero-message">
            <!-- Hero Text -->
            <div class="hero-text">
                <h4 class="">A game for fun, movement, and skill!</h4>
                <h2 class="">Games can't get more fun than this.</h1>
                <p class="">9ON9 is a dynamic game for 1-4 players per team, suitable for indoor or outdoor play,
                    challenging
                    teams to reach 99 points by tossing bean pucks on the board.</p>
            </div>

            <!-- Hero CTAs -->
            <div class="hero-cta">
                <a href="<?php echo get_permalink( get_product_id_by_slug( '9on9-boardgame' ) ); ?>" class="hero-cta-buynow">BUY NOW</a>
                <a href="http://jalfama.web.dmitcapstone.ca/how-to-play/" class="hero-cta-howtoplay">HOW TO PLAY <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/orange-right-arrow.png'); ?>" alt="Right Arrow" class="icon"></a>
            </div>
        </div>
    </div>


    <!-- WHAT'S IN THE BOX -->
    <div class="whats-in-the-box">
        <!-- Intro Text -->
        <div class="whats-in-the-box-text">
            <!--<h4 class="whats-in-the-box-heading">--><h4 class="">What's in the box?</h4>
            <!--<h2 class="whats-in-the-box-subheading">--><h2 class="">Games can't get more fun than this.</h2>
            <p class="whats-in-the-box-description">Each box comes with: 1 game board (2-pieces), 4 green bean pucks, 4 blue bean pucks, and game instructions.</p>
        </div>

        <!-- Images -->
        <div class="whats-in-the-box-images">
            <div class="whats-in-the-box-image">
                <p class="whats-in-the-box-image-title">The Board</p>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/front-page/theboard.png' ); ?>" alt="Image of the Board" class="whats-in-the-box-image-file">
            </div>
            <div class="whats-in-the-box-image whats-in-the-box-second-image">
                <p class="whats-in-the-box-image-title">The Bean Pucks</p>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/front-page/thebeanpucks.jpg' ); ?>" alt="Image of the Bean Pucks" class="whats-in-the-box-image-file">
            </div>
        </div>
    </div>

           <!-- Download the App Section -->
           <div class="steps download-app">
                <div class="step-component center-vertical">
                    <!-- Step 1 - Image -->
                    <div class="step-image step-image-left">
                        <img class="mr-3" src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/how-to-play/how-to-play-app-iphone.jpg' ?>" alt="">
                    </div>

                    <!-- Step 1 - Message -->
                    <div class="step-message m-right">
                        <h2 class="step-component-h2">Scoring app available on apple App store!</h2>
                        <!-- <p class="">Download our scoring app!</p> -->
                        
                        <!-- Hero CTAs -->
                        <div class="hero-cta mt-2">
                            <a href="https://apps.apple.com/ca/app/90n9/id6447753042" class="hero-cta-buynow ">Download our scoring app!</a>
                        </div>
                    </div>

                    
                </div>

            </div>



    <!-- TESTIMONIALS - EDITABLE BY CLIENT-->
    <div class="testimonials">
        <!-- Intro Text -->
        <div class="testimonials-headings">
            <h2 class="">Testimonials</h2>
        </div>

    <!-- Four-up Testimonials -->
    <div class="testimonial-container">
    <!-- Indv. Testimonial 1-->
    <div class="testimonial">
        <!-- Commentor -->
        <div class="">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/css/img/front-page/puck-blue.png' ); ?>" alt="Bean Puck Icon - Blue">
            <h3>Kelsey</h3>
        </div>
        <!-- Comment -->
        <div class="">
            <p class="">The game 9ON9 is so fun and the perfect amount of challenging!</p>
        </div>
    </div>

    <!-- Indv. Testimonial 2-->
    <div class="testimonial">
        <!-- Commentor -->
        <div class="">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/css/img/front-page/puck-green.png' ); ?>" alt="Bean Puck Icon - Blue" class="">
            <h3 class="">Kent</h3>
        </div>
        <!-- Comment -->
        <div class="">
            <p class="">Our Family loves our 9ON9 game.</p>
        </div>
    </div>

    <!-- Indv. Testimonial 3-->
    <div class="testimonial">
        <!-- Commentor -->
        <div class="">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/css/img/front-page/puck-blue.png' ); ?>" alt="Bean Puck Icon - Blue" class="">
            <h3 class="">Colt</h3>
        </div>
        <!-- Comment -->
        <div class="">
            <p class="">I like 9ON9 because I have to think and use strategy to win.</p>
        </div>
    </div>

    <!-- Indv. Testimonial 4-->
    <div class="testimonial">
        <!-- Commentor -->
        <div class="">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/css/img/front-page/puck-green.png' ); ?>" alt="Bean Puck Icon - Blue" class="">
            <h3 class="">Darlene</h3>
        </div>
        <!-- Comment -->
        <div class="">
            <p class="">9ON9 was one of the best games we ve invested in for our summer property.</p>
        </div>
    </div>
    </div>


    </div>

    <!-- EVENT FEATURE - EDITABLE BY CLIENT -->
    <div class="event-feature">
        <!-- Event Feature Info -->
        <div class="event-feature-info">
            <!-- Event Feature Message Details-->
            <div class="event-feature-message">
                <h5 class="latest-updates-text">Latest Updates</h5>
                <h2 class="">9ON9 Events</h2>
                <!-- <p class="">details on featured event</p> -->
                <!-- Event Feature Message Button -->
                <a href="<?php echo esc_url('/upcoming-events/ '); ?>" class="button-styles">
                    View all upcoming events
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/orange-right-arrow.png'); ?>" alt="Right Arrow" class="icon">
                </a>
            </div>
        </div>

        <!-- Event Feature Image -->
        <div class="event-feature-image">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/front-page/latestevents.png' ); ?>" alt="Image Related to the Event">
        </div>
    </div>

    <!-- INSTAGRAM POSTS -->
    <div class="instagram-container">
        <!-- Intro Text -->
        <div class="instagram-intro">
            <h2>Follow Us on Social Media!</h2>
        </div>

        <!-- Instagram Images -->
        <div class="instagram-plugin">
            <?php get_sidebar(); ?>
        </div>
    </div>

</section>

<?php
get_footer();
