<?php
/* Template Name: Category Listing */
get_header(); ?>

<section class="learn-more-section py-5">
  <div class="container">
    <h2 class="section-title">Learn More</h2>
    <p class="section-subtitle">Discover what POS can do for you</p>

    <div class="row mt-4">
      <?php
      $terms = get_terms([
        'taxonomy' => 'video-category', // your custom taxonomy name
        'hide_empty' => true,
        'orderby' => 'name',
        'order' => 'ASC',
      ]);

      if (!empty($terms) && !is_wp_error($terms)):
        foreach ($terms as $term):
          $link = get_term_link($term);
          ?>
          <div class="col-md-3 mb-3">
            <a href="<?php echo esc_url($link); ?>" class="btn btn-outline-secondary w-100">
              <?php echo esc_html($term->name); ?>
            </a>
          </div>
          <?php
        endforeach;
      else:
        echo '<p class="text-muted">No video categories found.</p>';
      endif;
      ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>