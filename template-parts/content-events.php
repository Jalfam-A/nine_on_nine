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
<div class="container upcoming-events-container">
        <article <?php post_class();?> id="post-<?php the_ID();?>" >
            <a href="<?php the_permalink(); ?>">
                <div class="events-thumbnail">
                    <!-- Get the Post thumbnail -->
                    <?php the_post_thumbnail( 'large' ); ?>  
                </div>
                <div class="">
                    <!-- get the post information -->
                    <p><?php the_category(); ?></p>
                    <p><?php the_title('<h3 class="entry-title">', '</h3>'); ?></p>
                    <p><?php the_field('short_description'); ?></p>
                    <div class="time-date-location-price" id="time-date-location-price">
                        <div>
                        <p><?php the_field('event_time'); ?></p>
                        <p><?php the_field('event_date'); ?></p>
                        </div>
                        <div>
                        <p><?php the_field('event_location'); ?></p>
                        <p>$ <?php the_field('price'); ?></p>
                        </div>
                    </div>
                </div>
                 <!-- <a href="#" class="see-event-details">SEE EVENT DETAILS <img src="<//?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/chevron.png'); ?>" alt="Right Arrow" class="icon"></a> -->
            </a>
        </article>
</div>



