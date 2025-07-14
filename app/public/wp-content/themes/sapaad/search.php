<?php
/**
 * The template for displaying search results pages
 * @package sapaad
 */

get_header(); ?>

<div class="container py-5">
  <h2 class="mb-4">
    <?php
    printf(
      esc_html__( 'Search Results for: %s', 'sapaad' ),
      '<span class="text-primary">' . esc_html( get_search_query() ) . '</span>'
    );
    ?>
  </h2>

  <?php if ( have_posts() ) : ?>
    <div class="row gy-4">
      <?php while ( have_posts() ) : the_post(); ?>
        <div class="col-md-6 col-lg-4">
          <div class="card h-100 shadow-sm border-0">
            <?php if ( has_post_thumbnail() ) : ?>
              <a href="<?php the_permalink(); ?>">
                <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top" alt="<?php the_title_attribute(); ?>">
              </a>
            <?php endif; ?>

            <div class="card-body d-flex flex-column">
              <h5 class="card-title">
                <a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark">
                  <?php the_title(); ?>
                </a>
              </h5>

              <p class="card-text text-muted">
                <?php echo wp_trim_words( get_the_excerpt(), 20 ); ?>
              </p>

              <div class="mt-auto">
                <a href="<?php the_permalink(); ?>" class="btn btn-outline-primary btn-sm mt-2">
                  Read More
                </a>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>

    <div class="mt-5">
      <?php the_posts_pagination([
        'mid_size'  => 2,
        'prev_text' => __('« Prev', 'sapaad'),
        'next_text' => __('Next »', 'sapaad'),
        'class'     => 'pagination justify-content-center'
      ]); ?>
    </div>

  <?php else : ?>
    <div class="alert alert-warning mt-5" role="alert">
      <?php esc_html_e( 'No results found. Please try a different search.', 'sapaad' ); ?>
    </div>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
