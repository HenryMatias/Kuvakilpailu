
jQuery(document).ready(function($){
    $('.your-class').slick({
      arrows: false,
      dots: true,
      infinite: false,
      speed: 500,
      slidesToShow: 4,
      slidesToScroll: 4,
      rows: 2,
      responsive: [
        {
        breakpoint: 1320,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          rows: 3,
          }
        },
        {
          breakpoint: 630,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            rows: 2,
            }
          },
      ]
    });
    
});