<?php
/**
 * This is the page-about-us.php file
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

<body>
    <section class="about-us-container">
        <!--breadcrumbs here-->
        <div class="container breadcrumbs">
        <a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Home</a>
            <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/icons/chevron.png' ?>" alt="Chevron Right" class="icon">
            <a href="" class="">About Us</a>
        </div>
        <div class="about-us-upper-section">
            <div class="pandemic-change-world-image"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/about-us/worldisclose.jpg' ); ?>" alt="an image of sign that say the world is temporarily closed" class="pandemic-change-world-image-file"/></div>
        
        <!--start of jalfam-text-->
        <div class="jalfam-text">
            <div>
                <h2>About JALFAM Games Inc.</h2>
            </div>
            <div>
                <h3>The pandemic changed the world.</h3>
            </div>
            
            
            <div class="about-us-paragraph">
            <p>At JALFAM Games Inc., we recognized that Covid-19 had a significant impact on peoples mental and physical wellbeing. 
            We wanted to create something that could bring joy, movement, and a sense of community to people s lives. Thats why we developed 9on9, 
            a game that promotes fun, activity, and skill-building.</p>
    
            <p>9on9 is a versatile game that can be played both indoors and outdoors, making it accessible to everyone. It involves two teams, 
            each consisting of one to four players, who compete against each other to be the first team to reach exactly 99 points by tossing bean pucks 
            onto a playing board. With its simple rules and fast-paced gameplay, 9on9 is a game that is easy to learn and suitable for all ages.</p>
            
            <p>Our goal at JALFAM Games Inc. is to create games that not only provide entertainment but also promote healthy 
            lifestyles and social connection. We believe that through our games, we can contribute to the well-being of our players and 
            help them overcome the challenges of these trying times. We invite you to join us in the world of 9on9 and experience the joy of movement, 
            skill-building, and friendly competition.</p>      
            </div>

            <div>
                <h3>Meet the Team</h3>
            </div>
            <div class="meet-the-team-image">
                <img src="<?php echo esc_url(get_template_directory_uri() .'/assets/img/about-us/jalfam-team.png' ); ?>" alt="an image showing the people behind JALFAM" class="meet-the-team-image-file">
                <figcaption>JALFAM - John: left, Annette: center, and Leann: right.</figcaption>
            </div>
            
    
        
        </div> <!--end of jalfam text-->
        
        
        </div><!--end of top section-->
        
        <div class="inner-container event-details-lower-container">
            <div class="current-events"><h3>Check out our Events</h3></div>
            <div class="event-details-lower-inner-container">
                <?php
                $args = array(
                    'post_type'      => 'upcoming-events',
                    'posts_per_page' => 2,
                    
                    
                );
                $loop = new WP_Query($args);
                while ( $loop->have_posts() ) {
                    $loop->the_post();
                    get_template_part ('template-parts/content', 'previous-events');
                }
                ?>
            </div>
        </div>
        
    
</section>
</body>
<?php get_footer(); ?>

