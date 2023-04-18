<?php
/**
 * The template for displaying all pages.
 * 
 * This is the template that displays all pages by default. Please note that this is the WordPress construct of pages and that other 'pages' on your WordPress site may use a different template.
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package nine-on-nine
 */
?>

<?php get_header(); ?>
<!-- <h2>This is page-events.php </h2> -->

<section class="events-flex-container">
    <div class="container breadcrumbs">
        <a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Home</a>
            <img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/img/icons/chevron.png' ?>" alt="Chevron Right" class="icon">
        <a href="" class="">EVENTS LISTING</a>
    </div>
    <div class="events-container">
        <div class="upcoming-events-container">
            <h2>Upcoming Events</h2>
            <div class="upcoming-events-inner-container">
                <?php
                $args = array(
                    'post_type'      => 'upcoming-events',
                    'posts_per_page' => 2,
                );
                $loop = new WP_Query($args);
                while ( $loop->have_posts() ) {
                    $loop->the_post();
                    get_template_part ('template-parts/content', 'events');
                }
                ?>
            </div>
        </div>

        <div class="inner-container">
            <h3>Previous News and Events</h3>
            <div class="previous-news-and-events-lg">
                <?php
                $args = array(
                    'post_type'      => 'upcoming-events',
                    'posts_per_page' => 16,
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
    </div>
</section>
    
<?php get_footer(); ?>