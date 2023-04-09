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
    'post_type' => 'black_friday_sales',
    'posts_per_page' => 1

};
?>

<section class="black-friday-sales-container">
    <div>
        <img src="<?php echo esc_url(get_template_directory_uri() .'/assets/img/events-listing-page/university-edtion-image.jpg' ); ?>" alt="an image of the nine-on-nine board" class="holiday-madness-image-file">
    </div>
    <div class="holiday-madness-text">
        <div>
            <h4>NEWS</h4>

            <h2>Black Friday Sales</h2>
            <div class ="holiday-madness-description">
                <p>01/30/2023</p>
            </div> <!--end of holiday-madness-description-->
            
        </div>
    </div> <!--end of holiday-madness-text-->
</section>




<?php
get_footer();
?>