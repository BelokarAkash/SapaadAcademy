
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
