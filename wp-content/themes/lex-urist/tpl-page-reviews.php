<?php
/*
Template Name: Страница отзывы
*/
?>
<?php get_header(); ?>

<section class="area-page">
  <div class="container middle-container">
    <?php while (have_posts()) : the_post(); ?>
      <h1 class="page-title"><?php the_title();  ?></h1>
    <?php endwhile; ?>
    <div class="area-page-content content-page-stl">
      <div class="row reviews-area row-ajax">
        <?php echo do_shortcode( '[cpt_ajax_load_more post_type="reviews" init_load="9" scroll="true" template="reviews-list"]' ); ?>  
      </div>
      <!-- row reviews-area -->
    </div>
  </div>
  <!-- full-container container -->
</section>
<!--area-page-->

<?php get_footer(); ?>