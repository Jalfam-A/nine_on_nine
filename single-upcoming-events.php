<?php
/**
 * The template for displaying all single posts.
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * 
 * @package nine_on_nine
 */
?>

<?php get_header(); ?>

<?php
/**
 * This is the page-events-us.php file
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


    <section class="single-event-container"<?php post_class();?> id="post-<?php the_ID();?>" >
        <!--breadcrumbs here-->
        <div class="container breadcrumbs">
        <a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Home</a>
            <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/icons/chevron.png' ?>" alt="Chevron Right" class="icon">
        <a href="http://jalfama.web.dmitcapstone.ca/upcoming-events/" class="">EVENTS LISTING</a>
            <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/icons/chevron.png' ?>" alt="Chevron Right" class="icon">
        <a href="" class="">EVENTS</a>
        </div>
        <div class="event-details-upper-container">
            <div class="">
                <h5>EVENT</h5>
            </div>
                <div class="event-details-small-details"> <!--event time,date,place,price-->
                    <div class="event-details-time-and-date"> <!--time and date-->
                        <div class="">
                            <p><?php the_field('event_time'); ?></p>
                        </div>
                        <div class="">
                            <p><?php the_field('event_date'); ?></p>
                        </div>
                    </div> <!--time and date end-->
                    <div class="event-details-place-and-price"> <!--place and price-->
                        <div class="">
                            <p><?php the_field('event_location'); ?></p>
                        </div>
                        <div class="">
                            <p>$ <?php the_field('price'); ?></p>
                        </div>
                    </div> <!--place and price end-->
                </div> <!--event time,date,place,price end-->
                <div class="">
                    <div class="event-details-title">
                        <h3><?php the_field('event_title'); ?></h3>
                    </div>
                    <div class="event-details-text-content">
                        <p><?php the_field('short_description'); ?></p>
                    </div>
                </div>
            <div class="event-details-main-image"> <!--main image-->
                <img src="<?php the_field('event_image'); ?>">
            </div>
                <div class="event-details-text-content">
                    <p><?php the_field('event_description'); ?></p>
                </div>
            </div>
        </div>

        <div class="inner-container event-details-lower-container">
            <div class="current-events"><h3>Current Events</h3></div>
            <div class="event-details-lower-inner-container">
                <?php
                $args = array(
                    'post_type'      => 'upcoming-events',
                    'posts_per_page' => 2,
                    'offset'         => 2, // Skip the first two posts
                    
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

<?php
get_footer();
