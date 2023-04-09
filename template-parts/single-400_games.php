<?php
/**
 * This is the front-page.php file
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nine_on_nine
 */

get_header();
?>
<?php
$args = array{
    'post_type' => '400_games_sold',
    'posts_per_page' => 1

};
?>

<section class="400-games-sold-in-edmonton">
    <div>
        <img src="<?php echo esc_url(get_template_directory_uri() .'/assets/img/events-listing-page/university-edtion-image.jpg' ); ?>" alt="an image of the nine-on-nine board" class="university-edition-image-file">
    </div>
    <div class="university-edition-text">
        <div>
            <h4>NEWS</h4>

            <h2>400 games sold in Edmonton</h2>
            <div class ="university-edition-description">
                <p>01/30/2023</p>
            </div> <!--end of university-edition-description-->
            
        </div>
    </div> <!--end of university-edition-text-->
</section>




<?php
get_footer();
?>