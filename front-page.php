<?php get_header(); ?>

<div class="container">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="content">
      <?php the_content(); ?>
    </div>
  <?php endwhile; else: ?>
  	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
