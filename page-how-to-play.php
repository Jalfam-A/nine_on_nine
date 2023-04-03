<?php
/**
 * This is the page-how-to-play.php file
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nine_on_nine
 * 
 * 
 * 
 */

get_header();
?>


    <!-- CONTAINER -->
    <div class="mb-3">
        <!-- Breadcrumbs -->
        <div class="container breadcrumbs">
            <a href="" class="">Home</a>
            <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/icons/chevron.png' ?>" alt="Chevron Right" class="icon">
            <a href="" class="">How To Play</a>
        </div>

        <!-- PAGE TITLE & NAV -->
        <div class="bg-green py-3">
            <div class="whats-in-the-box-text">
                <h1 class="whats-in-the-box-heading">How To Play</h1>
                <div class="howtoplay-links">
                    <a href="#setup" class="whats-in-the-box-title">The Setup</a>
                    <a href="#scoring" class="whats-in-the-box-title">The Scoring</a>
                    <a href="#pointzone" class="whats-in-the-box-title">The Point Zones</a>
                </div>
                
            </div>
        </div>

        <!-- THE SETUP -->
        <div class="" id="setup">
            <div class="whats-in-the-box-text my-3">
                <h3 class="whats-in-the-box-heading">The Setup</h3>
            </div>    
        

            <div class="steps-breadcrumb">
                <a href="#step1" class="container">Step 1</a>
                <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/icons/chevron.png' ?>" alt="Chevron Right" class="icon">                <a href="#step2" class="container">Step 2</a>
                <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/icons/chevron.png' ?>" alt="Chevron Right" class="icon">                <a href="#step3" class="container">Step 3</a>
                <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/icons/chevron.png' ?>" alt="Chevron Right" class="icon">                <a href="#step4" class="container">Step 4</a>
            </div>
        </div>

        <!-- SETUP STEPS -->
        <div class="">

            <!-- Setup - Step 1 -->
            <div class="hero-banner steps" id="step1">

                <!-- Step 1 - Image -->
                <div class="step-image-left">
                    <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/front-page/herobanner.jpg' ?>" alt="">
                </div>

                <!-- Step 1 - Message -->
                <div class="hero-message m-right">
                    <h2 class="">Step 1</h2>
                    <h1 class="">Place the Board on level ground.</h1>
                    <p class="">9on9 is a dynamic game for 1-4 players per team, suitable for indoor or outdoor play, challenging teams to reach 99 points by tossing bean pucks on the board.</p>
                </div>

            </div>

            <!-- Setup - Step 2 -->
            <div class="hero-banner bg-blue steps" id="step2">

                <!-- Step 2 - Message -->
                <div class="hero-message m-left">
                    <h2 class="">Step 2</h2>
                    <h1 class="">Create 2 teams. Each team gets 4 bean pucks.</h1>
                    <p class="">1 to 4 players each team. Select a colour for each team.</p>
                </div>
                
                <!-- Step 2 - Image -->
                <div class="step-image-right">
                    <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/front-page/herobanner.jpg' ?>" alt="">
                </div>

            </div>

            <!-- Setup - Step 3 -->
            <div class="hero-banner steps" id="step3">

                <!-- Step 3 - Image -->
                <div class="hero-imag step-image-left">
                    <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/front-page/herobanner.jpg' ?>" alt="" >
                </div>

                <!-- Step 3 - Message -->
                <div class="hero-message m-right">
                    <h2 class="">Step 3</h2>
                    <h1 class="">Determine who shoots first.</h1>
                    <p class="">1 to 4 players each team. Select a colour for each team.</p>
                </div>

            </div>

            <!-- Setup - Step 4 -->
            <div class="hero-banner bg-green steps" id="step4">

                <!-- Step 4 - Message -->
                <div class="hero-message m-left">
                    <h2 class="">Step 4</h2>
                    <h1 class="">Create 2 teams. Each team gets 4 bean pucks.</h1>
                    <p class="">1 to 4 players each team. Select a colour for each team.</p>
                </div>
                
                <!-- Step 4 - Image -->
                <div class="hero-image step-image-right">
                    <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/front-page/herobanner.jpg' ?>" alt="">
                </div>

            </div>

        </div>






        <!-- SCORING STEPS -->
        <div class="" id="scoring">
            <div class="whats-in-the-box-text my-3">
                <h3 class="whats-in-the-box-heading">The Scoring</h3>
            </div>

            <!-- Scoring - Step 1 -->
            <div class="hero-banner steps" id="">

                <!-- Step 1 - Image -->
                <div class="step-image-left">
                    <img  src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/front-page/herobanner.jpg' ?>" alt="">
                </div>

                <!-- Step 1 - Message -->
                <div class="hero-message m-right">
                    <h2 class="">Step 1</h2>
                    <h1 class="">Throw 1 bean puck at a time alternating teams until all have been thrown.</h1>
                    <p class="">This completes a round.</p>
                </div>

            </div>




            <!-- Scoring - Step 2 -->
            <div class="hero-banner bg-blue steps" id="step4">

                <!-- Step 2 - Message -->
                <div class="hero-message m-left">
                    <h2 class="">Step 2</h2>
                    <h1 class="">At the end of each round, each team adds their score to the previous round.</h1>
                    <p class="">The team with the most points after each round throws first in the next round. </p>
                    <p class="">If there is a tie, the winner from the previous round goes first.</p>
                </div>

                <!-- Step 2 - Image -->
                <div class="step-image-right">
                    <img class="right-img" src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/front-page/herobanner.jpg' ?>" alt="" >
                </div>

            </div>

        </div>




        <!-- THE POINT ZONES -->
        <div class="container" id="pointzones">
            <div class="whats-in-the-box-text my-3">
                <h3 class="whats-in-the-box-heading">The Point Zones</h3>
            </div>

            <!-- Image of the board with labels -->
            <div class="">
                <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/how-to-play/point-zones-board.png' ?>" alt="Image of the board with labels" class="">
            </div>

            <!-- Image of the scoring instructions and notes -->
            <div class="hero-banner">
                <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/how-to-play/point-zones-label.png' ?>" alt="Labels for the board" class="step-image-left">
                <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/how-to-play/point-zones-notes.png' ?>" alt="Notes for the board" class="step-image-right">
            </div>

        </div>


        <!-- Buy Now CTA -->
        <div class="hero-banner bg-blue container">

            <!-- Hero Message -->
            <div class="cta-hero-message">
                <!-- Hero Text -->
                <div class="">
                    <p class="">A game for fun, movement, and skill!</p>
                    <h3 class="">Games can't get more fun than this.</h3>
                    <p class="">9on9 is a dynamic game for 1-4 players per team, suitable for indoor or outdoor play,
                        challenging
                        teams to reach 99 points by tossing bean pucks on the board.</p>
                </div>

                <!-- Hero CTAs -->
                <div class="hero-cta mt-2">
                    <a href="#" class="hero-cta-buynow ">BUY NOW</a>
                </div>
            </div>

            <!-- CTA Image -->
            <div class="hero-image step-image-left step-image-right">
                <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/front-page/herobanner.jpg' ?>" alt="" class="">
            </div>
        </div>


    </div>

<?php
get_sidebar();
get_footer();
