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
<!-- <h2>This is page-recipes.php </h2> -->

<div class="recipes-flex-container">
    <div class="recipes-container"></div>
        <h2>All Recipes</h2>
        
        <div class="flex-inner-container">
            <div class="flex-recipes">
                <?php
                $args = array(
                    'post_type'      => 'events',
                    'posts_per_page' => 16,
                );
                $loop = new WP_Query($args);
                while ( $loop->have_posts() ) {
                    $loop->the_post();
                    get_template_part ('template-parts/content', 'events');
                }
                ?>
            </div>
        </div>
        
    </div>
    
<?php get_footer(); ?>


<?php
$args = array{
    'post_type' => 'events_content'
    'post_per_page' => -1,
};

&loop = new WP_Query($args);

if($loop->have_post()) {
    while ($loop->have_post()) {
        $loop->the_post();

        the_post_thumbnail('medium');
        the_title();
        the_excerpt();

    }
}
?>