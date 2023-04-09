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
    'post_type' => '9_on_9_university_tournament',
    'posts_per_page' => 1

};
?>

<section class="9-on-9-tournament-university-edition">
    <div>
        <img src="<?php echo esc_url(get_template_directory_uri() .'/assets/img/events-listing-page/university-edtion-image.jpg' ); ?>" alt="an image of the nine-on-nine board" class="university-edition-image-file">
    </div>
    <div class="university-edition-text">
        <div>
            <h4>EVENT</h4>

            <h2>9 on 9 Tournament - University Edition</h2>
            <div class ="university-edition-description">
                <p>Think your skills surpass your friends? Then show thme what you can do in the official 
                    9 on 9 Tournament - University Edition. Hope you can all attend and have fun. All ages 
                    welcome! Bring lots of water though.</p>

                <div class="event-details">
                    <div>
                        <div class="time">
                            <p>11:00 AM</p>
                        </div> <!--end of div-->
                        <div class="date">
                            <p>Wed, Feb 22, 2023</p>
                        </div> <!--end of div-->
                    </div>
                    <div>
                        <div class="location">
                            <p>SUB, University of Alberta</p>
                        </div> <!--end of div-->
                        <div class="event-price">
                            <p>$10</p>
                        </div> <!--end of div-->
                    </div>
                </div><!--end of event-details-page-->
                <div class="link-to-event-detail-page">
                    <a href="#" class="see-event-details">SEE EVENT DETAILS <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icons/chevron.png'); ?>" alt="Right Arrow" class="icon"></a>
                </div>
            </div> <!--end of university-edition-description-->
            
        </div>
    </div> <!--end of university-edition-text-->
</section>




<?php
get_footer();
?>