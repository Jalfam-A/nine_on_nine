<?php
/**
 *   Template part for displaying content in the single.php template (individual/article blog page)
 *   @link https://developer.wordpress.org/theme/basics/template-hierarchy/
 *
 *   @package nine_on_nine
**/
?>
<!-- <h2>This is content recipe</h2> -->
<?php
$args = array(
    'post_type' => 'events_listing',
    'posts_per_page' => -1
);
$loop = new WP_Query( $args );
if ( $loop->have_posts() ) {
    while ( $loop->have_posts() ) {
        $loop->the_post();
        ?>
        <div class="events-listing-img">
            <?php the_post_thumbnail(medium) ?>
        </div>
        <div class="events-listing-headings">
            <h2><?php the_title(); ?></h2>
        </div>
        <div class="events-listing-excerpt">
            <?php the_excerpt();?>
        </div>
        <?php ?>
        <div class="link-to-event-detail-page">
                <a href="#" class="see-event-details">SEE EVENT DETAILS <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/chevron.png'); ?>" alt="Right Arrow" class="icon"></a>
        </div>
        <?php
    }
}
wp_reset_postdata();
?>
            



