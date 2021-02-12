<section class="sec-reviews">
  <div class="middle-container container">
    <h2 class="set-title-line">О Бирже Lex говорят люди</h2>
    <h2 class="stl-st-3 reviews-title"><b>Познакомьтесь с отзывами наших клиентов <br> и можете оставить свой отзыв!</b></h2>
    <div class="row reviews-area">
    <?php
        $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $params = array(
            'posts_per_page' => 4, // количество постов на странице
            'post_type' => 'reviews', // тип постов
            'paged' => $current_page // текущая страница
        );
        query_posts($params);
        $wp_query->is_archive = true;
        $wp_query->is_home = false;
        while (have_posts()): the_post();
            ?>
      <article class="col-xs-12 col-sm-6 col-md-6 reviews-col">
        <div class="reviews-author-face" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>');"></div>
        <div class="reviews-author-data"><span class="reviews-author__name"><?php the_title(); ?></span>
          <address class="reviews-author__adress"><?php the_field('reviewsCity'); ?></address>
        </div>
        <div><i><?php the_excerpt(); ?></i></div>
      </article>
      <?php endwhile; ?>
    </div>
    <!-- row reviews-area -->
  </div>
</section>
<!-- sec--reviews -->