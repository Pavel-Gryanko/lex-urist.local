<div class="content-item">
<article class="reviews-col">
  <div class="reviews-author-face" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>');"></div>
  <div class="reviews-author-data"><span class="reviews-author__name"><?php the_title(); ?></span>
    <address class="reviews-author__adress"><?php the_field('reviewsCity'); ?></address>
  </div>
  <div><i><?php the_excerpt(); ?></i></div>
</article>
</div>