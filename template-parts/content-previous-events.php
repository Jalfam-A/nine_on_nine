<?php
/**
 *   Template part for displaying content in the single.php template (individual/article blog page)
 *   @link https://developer.wordpress.org/theme/basics/template-hierarchy/
 *
 *   @package nine_on_nine
**/
?>

<!-- <h2>Previous News and Events</h2> -->

<div class="container previous-news-and-events-container">
  <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <a href="<?php the_permalink(); ?>">
      <div class="image-container">
        <?php the_post_thumbnail('small'); ?>
      </div>
      <div class="info-container">
        <!-- get the page title and event time -->
        <?php the_title('<h3 class="entry-title">', '</h3>'); ?>
        <p><?php the_field('event_time'); ?></p>
      </div>
    </a>
  </article>
</div>
