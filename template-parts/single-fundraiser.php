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
    'post_type' => 'fundraiser',
    'posts_per_page' => 1

};
?>

<section class="fundraiser-container">
    <div>
        <img src="<?php echo esc_url(get_template_directory_uri() .'/assets/img/events-listing-page/university-edtion-image.jpg' ); ?>" alt="an image of the nine-on-nine board" class="fundaraiser-image-file">
    </div>
    <div class="fundraiser-text">
        <div>
            <h4>EVENT</h4>

            <h2>9 on 9 Tournament - Fundraiser</h2>
            <div class ="seniors-edition-description">
                <p>01/30/2023</p>
            </div> <!--end of fundraiser-description-->
            
        </div>
    </div> <!--end of fundraiser-text-->
</section>




<?php
get_footer();
?>