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


    <section <?php post_class();?> id="post-<?php the_ID();?>" >
        <!--breadcrumbs here-->
        <div class="event-details-upper-container">
            <div class="">
                <h2>EVENT</h2>
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

     
    
    </section>

<?php
get_footer();
