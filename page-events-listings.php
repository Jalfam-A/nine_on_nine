<?php
/**
 * This is the page-events-listings-us.php file
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


    <section class="event-listing-page">
        <div class=""> 
            <div class=""> <!--top cards start-->
                <div class="">
                    <h2>Upcoming Events</h2>
                </div>
                <div class=""> <!--First card start-->
                    <?php get_template_part('template-parts/content', 'events')?>
                </div>
        
    </section>

<!-- 
    Add comments to all html later
-->

<?php
get_sidebar();
get_footer();
