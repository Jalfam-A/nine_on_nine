<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nine_on_nine
 */

?>


<!-- <h2>Upcoming Events</h2> -->
<div class="container upcoming-events-container" id="upcoming-events-container">
        <article <?php post_class();?> id="post-<?php the_ID();?>" >
            <a class="upcoming-events-link" href="<?php the_permalink(); ?>">
                <div class="events-thumbnail">
                    <!-- Get the Post thumbnail -->
                    <?php the_post_thumbnail( 'medium' ); ?>  
                </div>
            </a>
            <div class="upcoming-events">
                <!-- get the post information -->
                    <div class="upcoming-events-title">
                        <p><?php the_category(); ?></p>
                        <a href="<?php the_permalink(); ?>"><p><?php the_title('<h3 class="entry-title">', '</h3>'); ?></p></a>
                    </div>
                    <div class="upcoming-events-description">
                        <p><?php the_excerpt(); ?></p>
                    </div> 
                    <div class="time-date-location-price">
                        <div>
                           <p><?php the_field('event_time'); ?></p>
                           <p><?php the_field('event_date'); ?></p>
                        </div>
                        <div class="location-price">
                           <p><?php the_field('event_location'); ?></p>
                           <p>$ <?php the_field('price'); ?></p>
                        </div>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="see-event-details">See Event Details <span>&rarr;</span></a>
            </div>
                 <!--  -->

        </article>
</div>



