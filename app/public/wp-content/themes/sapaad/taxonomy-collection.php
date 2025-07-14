<?php get_header(); ?>

<div class="container py-5">
  <?php
    $term = get_queried_object();
    $term_name = $term->name;
    $term_description = term_description($term->term_id, $term->taxonomy);
  ?>

  <h2 class="section-title"><?php echo esc_html($term_name); ?></h2>

  <div class="row g-4 mt-4">
    <?php
      $args = array(
        'post_type' => 'video',
        'tax_query' => array(
          array(
            'taxonomy' => 'collection',
            'field'    => 'slug',
            'terms'    => $term->slug,
          ),
        ),
        'posts_per_page' => -1,
      );
      $query = new WP_Query($args);

      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();

          // ACF fields
          $video_link = get_field('youtube_url'); // updated field
          $video_thumb = get_field('thumbnail');
          $video_time = get_field('duration');
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
            <?php if ($video_thumb): ?>
              <img class="img-fluid" src="<?php echo esc_url($video_thumb['url']); ?>" alt="<?php echo esc_attr($video_thumb['alt']); ?>">
            <?php endif; ?>

            <div class="overlay position-absolute top-0 start-0 w-100 h-100"></div>

            <?php if ($video_link): ?>
              <div class="play-trigger position-absolute top-50 start-50 translate-middle"
                  data-bs-toggle="modal"
                  data-bs-target="#videoModal"
                  data-video="<?php echo esc_url($embed_url); ?>">
                <svg width="60" height="60" viewBox="0 0 100 100">
                  <circle cx="50" cy="50" r="48" fill="rgba(0,0,0,0.5)" />
                  <polygon points="40,30 70,50 40,70" fill="#fff"/>
                </svg>
              </div>
            <?php endif; ?>
          </div>

          <h5 class="fw-semibold"><?php the_title(); ?></h5>

          <div class="d-flex align-items-center text-muted mt-2">
            <?php if ($video_time): ?>
              <span><?php the_field( 'duration' ); ?></span>
            <?php endif; ?>
          
          </div>
        </div>
      </div>
    <?php
        endwhile;
        wp_reset_postdata();
      else :
    ?>
      <p>No videos found for this collection.</p>
    <?php endif; ?>
  </div>
</div>


<!-- Video Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-black border-0">
      <div class="modal-body p-0 position-relative">
        <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="ratio ratio-16x9">
          <iframe id="videoIframe" class="w-100 h-100" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
