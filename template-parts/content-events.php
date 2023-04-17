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
            <a href="<?php the_permalink(); ?>">
                <div class="events-thumbnail">
                    <!-- Get the Post thumbnail -->
                    <?php the_post_thumbnail( 'large' ); ?>  
                </div>
                <div class="upcoming-events">
                    <!-- get the post information -->
                    <p><?php the_category(); ?></p>
                    <div class="upcoming-events-title">
                        <p><?php the_title('<h3 class="entry-title">', '</h3>'); ?></p>
                    </div>
                    <div class="upcoming-events-description">
                        <p><?php the_field('short_description'); ?></p>
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
                    <p><a href="<?php the_permalink(); ?>" class="see-event-details">SEE EVENT DETAILS <img src="<//?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/orange-right-arrow.png'); ?>" alt="Right Arrow" class="icon"></a></p>
                </div>
                 <!--  -->
            </a>
        </article>
</div>



