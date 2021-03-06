<?php 
/* 
  Template Name: Porfolio Page
*/
?>

<?php get_header(); ?>


<section class="row">
  <div class="small-12 columns text-center">
    <div class="leader">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php the_title(); ?>
      
      <?php the_content(); ?>

    <?php endwhile; endif; ?>       
    </div>
  </div>
</section>

<?php get_template_part('content', 'portfolio'); ?>

<?php get_footer(); ?>
