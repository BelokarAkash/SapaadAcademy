<?php
/* Template Name: Academy */

get_header();
?>



<!-- Hero Section -->

<section class="container-fluid academy-hero py-5">
  <div class="row justify-content-between align-items-center">
    <?php if (have_rows('hero_section')): ?>
      <?php while (have_rows('hero_section')):
        the_row(); ?>
        <!-- Left Image -->
        <div class="col-md-4 d-none d-md-block">
          <?php $left_image = get_sub_field('left_image'); ?>
          <?php if ($left_image): ?>
            <img class="img-fluid" src="<?php echo esc_url($left_image['url']); ?>" alt="Mobile Hero Image">
          <?php endif; ?>
        </div>

        <!-- Center Content -->
        <div class="col-md-4 text-center px-3">
          <h5 class="text-success mb-3"><?php the_sub_field('title'); ?></h5>
          <h1 class="fw-bold mb-3"><?php the_sub_field('heading'); ?></h1>
          <p class="mb-4">
            <?php the_sub_field('content'); ?>
          </p>

          <?php get_sidebar(); ?>

          <!-- Mobile image -->
          <?php $mobile_image = get_sub_field('mobile_image'); ?>
          <?php if ($mobile_image): ?>
            <div class="d-block d-md-none mt-4">
              <img class="img-fluid" src="<?php echo esc_url($mobile_image['url']); ?>" alt="Mobile Hero Image">
            </div>
          <?php endif; ?>

        </div>

        <!-- Right Image -->
        <div class="col-md-4 d-none d-md-block">
          <?php $Right_Image = get_sub_field('Right Image'); ?>
          <?php if ($Right_Image): ?>
            <img class="img-fluid" src="<?php echo esc_url($Right_Image['url']); ?>" alt="Left Image">
          <?php endif; ?>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>




<!-- Collections Section -->
<?php if (have_rows('collections')): ?>
  <?php while (have_rows('collections')):
    the_row(); ?>
    <section class="collections-section py-5 bg-body-tertiary">
      <div class="container">
        <h2 class="mb-4 fw-bold"><?php the_sub_field('collections_heading'); ?></h2>

        <div class="row g-4">

          <?php
          $collections = get_terms([
            'taxonomy' => 'collection',
            'hide_empty' => false,
            'orderby' => 'id',
            'order' => 'ASC',
          ]);

          if (!empty($collections) && !is_wp_error($collections)):
            foreach ($collections as $term):
              $term_id = $term->term_id;
              $term_link = get_term_link($term);
              $term_name = $term->name;
              $term_desc = $term->description;
              $term_count = $term->count;

              $term_id_prefixed = 'collection_' . $term_id;
              $collection_image = get_field('collection_image', $term_id_prefixed);


              $image_alt = ($collection_image && isset($collection_image['alt']))
                ? esc_attr($collection_image['alt'])
                : esc_attr($term_name);
              ?>

              <div class="col-md-4">
                <a href="<?php echo esc_url($term_link); ?>" class="text-decoration-none text-dark">
                  <div class="collection-card p-4 d-flex flex-column justify-content-between h-100">
                    <img src="<?php echo esc_url($collection_image['url']); ?>" alt="<?php echo $image_alt; ?>" width="50"
                      class="mb-3" />
                    <div>
                      <h5 class="fw-semibold mb-1"><?php echo esc_html($term_name); ?></h5>
                      <p class="text-muted mb-1"><?php echo esc_html($term_desc); ?></p>
                      <small class="text-secondary">
                        <?php echo esc_html($term_count); ?>         <?php echo ($term_count == 1) ? 'video' : 'videos'; ?>
                      </small>
                    </div>
                  </div>
                </a>
              </div>

              <?php
            endforeach;
          endif;
          ?>

        </div>
      </div>
    </section>
  <?php endwhile; ?>
<?php endif; ?>



<!-- Learn More Section -->
<?php if (have_rows('learn_more')): ?>
  <?php while (have_rows('learn_more')):
    the_row(); ?>
    <section class="learn-more-section py-5">
      <div class="container">
        <div class="row">
          <div class="col">
            <h2 class="section-title"><?php the_sub_field('learn_more_heading'); ?></h2>
            <p class="section-subtitle"><?php the_sub_field('learn_more_sub-heading'); ?></p>

            <div class="topics-grid d-flex flex-wrap gap-2 mt-4">
              <?php
              $video_categories = get_terms([
                'taxonomy' => 'video-category', // replace with your actual taxonomy name
                'hide_empty' => false,
                'orderby' => 'id',
                'order' => 'ASC',
              ]);

              $count = 0;

              if (!empty($video_categories) && !is_wp_error($video_categories)) {
                foreach ($video_categories as $term) {
                  if ($count < 8) {
                    echo '<a href="' . esc_url(get_term_link($term)) . '" class="topic-button btn btn-outline-secondary">'
                      . esc_html($term->name) . '</a>';
                  }
                  $count++;
                }

                // Show "Explore More Topics" if more than 8 categories
                if ($count > 8) {
                  echo '<a href="http://sapaad.local/video-category/" class="topic-button btn btn-outline-primary">+ Explore More Topics</a>';
                }
              } else {
                echo '<p class="text-muted">No categories found.</p>';
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php endwhile; ?>
<?php endif; ?>


<!-- Popular Topics Section -->
<?php if (have_rows('popular_topics')): ?>
  <?php while (have_rows('popular_topics')):
    the_row(); ?>
    <div class="container py-5">
      <h2 class="section-title"><?php the_sub_field('popular_topics_heading'); ?></h2>
      <p class="section-subtitle"><?php the_sub_field('popular_topics_sub-heading'); ?></p>

      <div class="popular-carousel row g-4">
        <?php
        $popular_videos = new WP_Query([
          'post_type' => 'video',
          'posts_per_page' => -1,
          'meta_query' => [
            [
              'key' => 'popular_topic',
              'value' => 'Yes',
              'compare' => '='
            ]
          ]
        ]);

        if ($popular_videos->have_posts()):
          while ($popular_videos->have_posts()):
            $popular_videos->the_post();

            $video_thumbnail = get_field('video_thumbnail');
            $video_url = get_field('video_url');
            $video_code = get_field('video_code');
            $yt_url = get_field('youtube_url');
            $embed_url = '';

            if (strpos($yt_url, 'watch?v=') !== false) {
              parse_str(parse_url($yt_url, PHP_URL_QUERY), $params);
              $video_id = $params['v'] ?? '';
              $embed_url = 'https://www.youtube.com/embed/' . $video_id;
            } elseif (strpos($yt_url, 'youtu.be/') !== false) {
              $video_id = basename($yt_url);
              $embed_url = 'https://www.youtube.com/embed/' . $video_id;
            }
            ?>
            <div class="col-md-4">
              <div class="card video-card p-3 border-0 h-100">
                <div class="video-thumb-wrapper position-relative mb-3">

                  <?php $thumbnail = get_field('thumbnail'); ?>
                  <?php if ($thumbnail): ?>
                    <img class="img-fluid" src="<?php echo esc_url($thumbnail['url']); ?>"
                      alt="<?php echo esc_attr($thumbnail['alt']); ?>" />
                  <?php endif; ?>
                  <div class="overlay position-absolute top-0 start-0 w-100 h-100"></div>
                  <div class="play-trigger position-absolute top-50 start-50 translate-middle" data-bs-toggle="modal"
                    data-bs-target="#videoModal" data-video="<?php echo esc_url($embed_url); ?>">
                    <svg width="60" height="60" viewBox="0 0 100 100">
                      <circle cx="50" cy="50" r="48" fill="rgba(0,0,0,0.5)" />
                      <polygon points="40,30 70,50 40,70" fill="#fff" />
                    </svg>
                  </div>
                </div>
                <h5 class="fw-semibold"><?php the_title(); ?></h5>
                <div class="d-flex align-items-center text-muted mt-2">
                  <span><?php the_field('duration'); ?></span>
                </div>
              </div>
            </div>
            <?php
          endwhile;
          wp_reset_postdata();
        else:
          echo '<p>No popular videos found.</p>';
        endif;
        ?>
      </div>
    </div>
  <?php endwhile; ?>
<?php endif; ?>

<!-- Video Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-black border-0">
      <div class="modal-body p-0 position-relative">
        <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
          data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="ratio ratio-16x9">
          <iframe id="videoIframe" class="w-100 h-100" src="" frameborder="0" allow="autoplay; encrypted-media"
            allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</div>


<?php get_footer() ?>