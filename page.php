<?php get_header() ?>
<main>
  <div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php if (is_page('30th')) : ?>
	  		<div class="wrap is-30th">
				<?php the_content(); ?>
	  		</div>
		<?php else : ?>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		<?php endif; ?>
	 
    <?php endwhile;
    endif; ?>
  </div>
</main>
<?php get_footer() ?>