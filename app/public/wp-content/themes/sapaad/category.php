<?php get_header(); ?>

<section class="learn-more-section py-5">
  <div class="container">
    <h2 class="section-title"><?php single_cat_title(); ?></h2>
    <p class="section-subtitle">Showing posts related to "<?php single_cat_title(); ?>"</p>

    <div class="row mt-4">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="col-md-4 mb-4">
          <div class="card h-100">
            <?php if (has_post_thumbnail()) : ?>
              <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top" alt="<?php the_title(); ?>">
            <?php endif; ?>
            <div class="card-body">
              <h5 class="card-title"><?php the_title(); ?></h5>
              <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
              <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
      <?php endwhile; else: ?>
        <div class="col">
          <p>No posts found in this category.</p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
