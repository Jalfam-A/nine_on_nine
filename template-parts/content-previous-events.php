<?php
/**
 *   Template part for displaying content in the single.php template (individual/article blog page)
 *   @link https://developer.wordpress.org/theme/basics/template-hierarchy/
 *
 *   @package nine_on_nine
**/
?>

<!-- <h2>Previous News and Events</h2> -->

<div class="container previous-news-and-events-container single-event-events-container" id="single-event-events-container-id">
<a href="<?php the_permalink(); ?>">
  <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    
    <div class="previous-news-and-events" id="previous-news-and-events">
      
        <div class="image-container">
          <?php the_post_thumbnail( array(300, 300)); ?>
        </div>
        
        <div class="info-container">
        <a href="<?php the_permalink(); ?>">
          <!-- get the page title and event time -->
          <p><?php the_category(); ?></p>
          
          <a class="previous-events-title" href="<?php the_permalink(); ?>"><?php the_title('<h3 class="entry-title">', '</h3>'); ?></a>
          <a class="previous-events-date" href="<?php the_permalink(); ?>"><p><?php the_field('event_date'); ?></p></a>
        </a>
        </div>
        
        <div class="block-hover">
        </div>
      
    </div>
       
    
  </article>
  </a>
</div>
