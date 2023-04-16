<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nine_on_nine
 */

?>


<!-- <h2>This is content recipe</h2> -->
<div class="container recipe-container">
        <article <?php post_class();?> id="post-<?php the_ID();?>" >
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'small' ); ?>  
                 <!-- get the page title -->
                 <?php the_title('<h3 class="entry-title">', '</h3>'); ?>
                 
            </a>
        </article>
</div>


