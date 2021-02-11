<?php get_header(); ?>

<section class="area-page">
	<?php while (have_posts()) : the_post(); ?>
		<div class="container middle-container">
			<h1 class="page-title"><?php the_title();  ?></h1>
			<div class="area-page-content content-page-stl"> <?php the_content();  ?></div>
		</div>
		<!-- full-container container -->
	<?php endwhile; ?>
</section>
<!--area-page-->

<?php get_footer(); ?>