<?php
/**
 * Template Name: Topics専用テンプレート
 */
get_header();
?>

<main class="p-csr">
  <div class="p-csr__inner">
    <?php while (have_posts()) : the_post(); ?>
      <div class="p-csr__hero">
        <div class="p-csr__head">
          <p class="p-csr__labelEn" lang="en">Topics</p>
          <p class="p-csr__labelJa">地域・社会のトピックス</p>
        </div>
        <p class="p-csr__acronym" lang="en">
          <span>Topics</span>
        </p>
      </div>
      <h1 class="p-csr__title"><?php the_title(); ?></h1>
      <div class="p-csr__content">
        <?php the_content(); ?>
      </div>
    <?php endwhile; ?>
  </div>
</main>

<?php get_footer(); ?>
