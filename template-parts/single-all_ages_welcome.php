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
    'post_type' => 'all_ages_welcome',
    'posts_per_page' => 1

};
?>

<section class="all-ages-welcome-container">
    <div>
        <img src="<?php echo esc_url(get_template_directory_uri() .'/assets/img/events-listing-page/university-edtion-image.jpg' ); ?>" alt="an image of the nine-on-nine board" class="all-ages-welcome-image-file">
    </div>
    <div class="all-ages-welcome-text">
        <div>
            <h4>EVENT</h4>

            <h2>9 on 9 Tournament - All Ages Welcome</h2>
            <div class ="all-ages-welcome-description">
                <p>01/30/2023</p>
            </div> <!--end of all-ages-welcome-description-->
            
        </div>
    </div> <!--end of all-ages-welcome-text-->
</section>




<?php
get_footer();
?>