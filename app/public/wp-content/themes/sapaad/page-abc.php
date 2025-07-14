<?php
/* Template Name: Academy */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Academy Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Slick JS -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <style>

    .academy-hero {
  background-color: #f8f9fa; /* optional: subtle light background */
  position: relative;
}

.academy-hero h1 {
  font-size: 2.5rem;
  color: #212529;
}

.academy-hero h5 {
  font-weight: 600;
  color: #28a745; /* Bootstrap green */
}

.academy-hero p {
  font-size: 1rem;
  color: #555;
}

.academy-hero .form-control {
  border-radius: 50px;
  padding: 0.75rem 1.25rem;
}

.academy-hero .btn-success {
  border-radius: 50px;
  padding: 0.75rem 1.5rem;
}



    body {
      font-family: Arial, sans-serif;
    }

    .collection-card {
  background: #fff;
  border-radius: 16px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.collection-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
}

.collection-card img {
  width: 120px; /* Increased icon size */
  height: 120px;
  object-fit: contain;
  display: block;
  margin: 0 auto 1rem auto; /* Centers icon */
}

.learn-more-section {
  background-color: #f8f9fa;
  padding: 60px 0;
}

.section-title {
  font-size: 2rem;
  font-weight: 600;
}

.section-subtitle {
  font-size: 1.2rem;
  color: #666;
}

.topics-grid {
  display: flex;
  flex-wrap: wrap;
  gap: 12px;
}

.topic-button {
  padding: 20px 35px;
  border: 1px solid #ced4da;
  background-color: #fff;
  border-radius: 8px;
  font-size: 0.95rem;
  color: #343a40;
  cursor: pointer;
  transition: all 0.2s ease-in-out;
  /* margin-right: 20px; */
}

.topic-button:hover {
  background-color: #e9ecef;
  border-color: #adb5bd;
}


 .video-card {
      background: #fff;
      box-shadow: 0 2px 12px rgba(0, 0, 0, 0.05);
      transition: transform 0.3s, box-shadow 0.3s;
      border-radius: 16px;
    }

    .video-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    }

    .video-thumb-wrapper {
      position: relative;
      overflow: hidden;
      border-radius: 12px;
    }

    .video-thumb-wrapper img {
      width: 100%;
      height: auto;
      display: block;
      object-fit: cover;
    }

    .overlay {
      background: rgba(0, 0, 0, 0.2);
    }

    .play-trigger {
      cursor: pointer;
    }

    .play-trigger svg {
      filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.3));
    }

    @media (max-width: 576px) {
      .play-trigger svg {
        width: 50px;
        height: 50px;
      }
    }

    .slick-slide {
      padding: 10px;
    }

    .slick-prev:before,
    .slick-next:before {
      color: #333;
      font-size: 24px;
    }

    .slick-dots li button:before {
      font-size: 12px;
      color: #999;
    }

    .slick-dots li.slick-active button:before {
      color: #333;
    }

    @media (max-width: 768px) {
      .hero-left-img,
      .hero-right-img {
        display: none;
      }
    }
  </style>
</head>
<body>

<!-- Hero Section -->
<section class="container-fluid academy-hero py-5">
  <div class="row justify-content-between align-items-center">
    <!-- Left Image -->
    <div class="col-md-4 d-none d-md-block">
      <img class="img-fluid" src="https://www.sapaad.com/wp-content/uploads/2023/03/hero-left-min-1-1.webp" alt="Left Image">
    </div>

    <!-- Center Content -->
    <div class="col-md-4 text-center px-3">
      <h5 class="text-success mb-3">MASTERCLASS FOR RESTAURANTS</h5>
      <h1 class="fw-bold mb-3">Sapaad Academy</h1>
      <p class="mb-4">
        Search from our library of practical training videos and master your knowledge of Sapaad POS. We cover many topics – from Menu and Inventory Management, Partner Integrations, to setting up your own online ordering business.
      </p>

      <!-- Search Bar (Simplified) -->
      <form class="d-flex justify-content-center mt-4" role="search">
        <input class="form-control form-control-lg me-2 w-75" type="search" placeholder="Search here..." aria-label="Search">
        <button class="btn btn-success" type="submit">Search</button>
      </form>

      <!-- Mobile image -->
      <div class="d-block d-md-none mt-4">
        <img class="img-fluid" src="https://www.sapaad.com/wp-content/uploads/2023/03/academy-mobile-min-1-1-1.webp" alt="Mobile Hero Image">
      </div>
    </div>

    <!-- Right Image -->
    <div class="col-md-4 d-none d-md-block">
      <img class="img-fluid" src="https://www.sapaad.com/wp-content/uploads/2023/03/hero-right-min-1-1.webp" alt="Right Image">
    </div>
  </div>
</section>


<!-- Collections Section -->
<section class="collections-section py-5 bg-body-tertiary">
  <div class="container">
    <h2 class="mb-4 fw-bold">Collections</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="collection-card p-4 d-flex flex-column justify-content-between">
          <img src="<?php echo get_template_directory_uri(); ?>/images/star.png" alt="What's New" width="50" class="mb-3" />
          <div>
            <h5 class="fw-semibold mb-1">What’s New</h5>
            <p class="text-muted mb-1">Boost your operations with latest features</p>
            <small class="text-secondary">3 topics</small>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="collection-card p-4 d-flex flex-column justify-content-between">
          <img src="<?php echo get_template_directory_uri(); ?>/images/box.png" alt="Get Started" width="50" class="mb-3" />
          <div>
            <h5 class="fw-semibold mb-1">Get Started</h5>
            <p class="text-muted mb-1">Your essential guide to Sapaad</p>
            <small class="text-secondary">4 topics</small>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="collection-card p-4 d-flex flex-column justify-content-between">
          <img src="<?php echo get_template_directory_uri(); ?>/images/compass.png" alt="Deep-Dive" width="50" class="mb-3" />
          <div>
            <h5 class="fw-semibold mb-1">Deep-Dive</h5>
            <p class="text-muted mb-1">Explore advanced techniques</p>
            <small class="text-secondary">4 topics</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Learn More Section -->
<section class="learn-more-section py-5">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 class="section-title">Learn More</h2>
        <p class="section-subtitle">Discover what POS can do for you</p>

        <div class="topics-grid d-flex flex-wrap gap-2 mt-4">
          <button class="topic-button btn btn-outline-secondary">Account & Menu Setup</button>
          <button class="topic-button btn btn-outline-secondary">Customer Engagement</button>
          <button class="topic-button btn btn-outline-secondary">Delivery Management</button>
          <button class="topic-button btn btn-outline-secondary">LIVE Business Dashboard</button>
          <button class="topic-button btn btn-outline-secondary">Ordering Systems</button>
          <button class="topic-button btn btn-outline-secondary">Partner Integration</button>
          <button class="topic-button btn btn-outline-secondary">Payments</button>
          <button class="topic-button btn btn-outline-secondary">Restaurant Inventory</button>
          <button class="topic-button btn btn-outline-primary">+ Explore More Topics</button>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- Popular Topics Section -->
<div class="container py-5">
  <h2 class="section-title">Popular Topics</h2>
    <p class="section-subtitle">Discover what POS can do for you</p>
  <div class="popular-carousel">
    
    <!-- Slide Item -->
    <div class="card video-card p-3 border-0">
      <div class="video-thumb-wrapper position-relative mb-3">
        <img class="img-fluid" src="https://www.sapaad.com/wp-content/uploads/2024/02/05-Managing-QR-ordering-and-Group-Dining-in-Sapaad-Direct-min.jpg" alt="Managing QR ordering">
        <div class="overlay position-absolute top-0 start-0 w-100 h-100"></div>
        <div class="play-trigger position-absolute top-50 start-50 translate-middle"
             data-bs-toggle="modal" data-bs-target="#videoModal"
             data-video="https://www.youtube.com/embed/EywAkXGrHjA">
          <svg width="60" height="60" viewBox="0 0 100 100">
            <circle cx="50" cy="50" r="48" fill="rgba(0,0,0,0.5)" />
            <polygon points="40,30 70,50 40,70" fill="#fff"/>
          </svg>
        </div>
      </div>
      <h5 class="fw-semibold">Managing QR Ordering and Group Dining in Sapaad Direct</h5>
      <div class="d-flex align-items-center text-muted mt-2">
        <span>4:25</span><span class="mx-2">|</span><span>SD009</span>
      </div>
    </div>

    <div class="card video-card p-3 border-0">
      <div class="video-thumb-wrapper position-relative mb-3">
        <img class="img-fluid" src="https://www.sapaad.com/wp-content/uploads/2024/02/05-Managing-QR-ordering-and-Group-Dining-in-Sapaad-Direct-min.jpg" alt="Managing QR ordering">
        <div class="overlay position-absolute top-0 start-0 w-100 h-100"></div>
        <div class="play-trigger position-absolute top-50 start-50 translate-middle"
             data-bs-toggle="modal" data-bs-target="#videoModal"
             data-video="https://www.youtube.com/embed/EywAkXGrHjA">
          <svg width="60" height="60" viewBox="0 0 100 100">
            <circle cx="50" cy="50" r="48" fill="rgba(0,0,0,0.5)" />
            <polygon points="40,30 70,50 40,70" fill="#fff"/>
          </svg>
        </div>
      </div>
      <h5 class="fw-semibold">Managing QR Ordering and Group Dining in Sapaad Direct</h5>
      <div class="d-flex align-items-center text-muted mt-2">
        <span>4:25</span><span class="mx-2">|</span><span>SD009</span>
      </div>
    </div>

    <div class="container card video-card p-3 border-0">
      <div class="video-thumb-wrapper position-relative mb-3">
        <img class="img-fluid" src="https://www.sapaad.com/wp-content/uploads/2024/02/05-Managing-QR-ordering-and-Group-Dining-in-Sapaad-Direct-min.jpg" alt="Managing QR ordering">
        <div class="overlay position-absolute top-0 start-0 w-100 h-100"></div>
        <div class="play-trigger position-absolute top-50 start-50 translate-middle"
             data-bs-toggle="modal" data-bs-target="#videoModal"
             data-video="https://www.youtube.com/embed/EywAkXGrHjA">
          <svg width="60" height="60" viewBox="0 0 100 100">
            <circle cx="50" cy="50" r="48" fill="rgba(0,0,0,0.5)" />
            <polygon points="40,30 70,50 40,70" fill="#fff"/>
          </svg>
        </div>
      </div>
      <h5 class="fw-semibold">Managing QR Ordering and Group Dining in Sapaad Direct</h5>
      <div class="d-flex align-items-center text-muted mt-2">
        <span>4:25</span><span class="mx-2">|</span><span>SD009</span>
      </div>
    </div>

    <div class="card video-card p-3 border-0">
      <div class="video-thumb-wrapper position-relative mb-3">
        <img class="img-fluid" src="https://www.sapaad.com/wp-content/uploads/2024/02/05-Managing-QR-ordering-and-Group-Dining-in-Sapaad-Direct-min.jpg" alt="Managing QR ordering">
        <div class="overlay position-absolute top-0 start-0 w-100 h-100"></div>
        <div class="play-trigger position-absolute top-50 start-50 translate-middle"
             data-bs-toggle="modal" data-bs-target="#videoModal"
             data-video="https://www.youtube.com/embed/EywAkXGrHjA">
          <svg width="60" height="60" viewBox="0 0 100 100">
            <circle cx="50" cy="50" r="48" fill="rgba(0,0,0,0.5)" />
            <polygon points="40,30 70,50 40,70" fill="#fff"/>
          </svg>
        </div>
      </div>
      <h5 class="fw-semibold">Managing QR Ordering and Group Dining in Sapaad Direct</h5>
      <div class="d-flex align-items-center text-muted mt-2">
        <span>4:25</span><span class="mx-2">|</span><span>SD009</span>
      </div>
    </div>


    <div class="card video-card p-3 border-0">
      <div class="video-thumb-wrapper position-relative mb-3">
        <img class="img-fluid" src="https://www.sapaad.com/wp-content/uploads/2024/02/05-Managing-QR-ordering-and-Group-Dining-in-Sapaad-Direct-min.jpg" alt="Managing QR ordering">
        <div class="overlay position-absolute top-0 start-0 w-100 h-100"></div>
        <div class="play-trigger position-absolute top-50 start-50 translate-middle"
             data-bs-toggle="modal" data-bs-target="#videoModal"
             data-video="https://www.youtube.com/embed/EywAkXGrHjA">
          <svg width="60" height="60" viewBox="0 0 100 100">
            <circle cx="50" cy="50" r="48" fill="rgba(0,0,0,0.5)" />
            <polygon points="40,30 70,50 40,70" fill="#fff"/>
          </svg>
        </div>
      </div>
      <h5 class="fw-semibold">Managing QR Ordering and Group Dining in Sapaad Direct</h5>
      <div class="d-flex align-items-center text-muted mt-2">
        <span>4:25</span><span class="mx-2">|</span><span>SD009</span>
      </div>
    </div>

    <div class="card video-card p-3 border-0">
      <div class="video-thumb-wrapper position-relative mb-3">
        <img class="img-fluid" src="https://www.sapaad.com/wp-content/uploads/2024/02/05-Managing-QR-ordering-and-Group-Dining-in-Sapaad-Direct-min.jpg" alt="Managing QR ordering">
        <div class="overlay position-absolute top-0 start-0 w-100 h-100"></div>
        <div class="play-trigger position-absolute top-50 start-50 translate-middle"
             data-bs-toggle="modal" data-bs-target="#videoModal"
             data-video="https://www.youtube.com/embed/EywAkXGrHjA">
          <svg width="60" height="60" viewBox="0 0 100 100">
            <circle cx="50" cy="50" r="48" fill="rgba(0,0,0,0.5)" />
            <polygon points="40,30 70,50 40,70" fill="#fff"/>
          </svg>
        </div>
      </div>
      <h5 class="fw-semibold">Managing QR Ordering and Group Dining in Sapaad Direct</h5>
      <div class="d-flex align-items-center text-muted mt-2">
        <span>4:25</span><span class="mx-2">|</span><span>SD009</span>
      </div>
    </div>

    <!-- Duplicate for more cards -->
    <!-- Copy the entire .card block to make more slides -->
    <!-- You can also generate these dynamically via a loop -->

  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
  $(document).ready(function () {
    $('.popular-carousel').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: true,
      dots: true,
      responsive: [
        {
          breakpoint: 992,
          settings: { slidesToShow: 2 }
        },
        {
          breakpoint: 768,
          settings: { slidesToShow: 1 }
        }
      ]
    });

    // Play video on modal open
    $('.play-trigger').on('click', function () {
      const videoUrl = $(this).data('video') + '?autoplay=1';
      $('#videoIframe').attr('src', videoUrl);
    });

    // Stop video on modal close
    $('#videoModal').on('hidden.bs.modal', function () {
      $('#videoIframe').attr('src', '');
    });
  });
</script>
</body>
</html>


