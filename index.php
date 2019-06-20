<?php get_header();  ?>

<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri("/images/shukurmotors.jpg") ?>);"></div>
    <div class="page-banner__content container t-center c-white">
      <h1 class="headline headline--large">Welcome!</h1>
      <h2 class="headline headline--medium"></h2>
      <h3 class="headline headline--small"></h3>
      <a href="#" class="btn btn--large btn--blue">Find Your Car</a>
    </div>
  </div>

  <div class="full-width-split group">
    <div class="full-width-split__one">
      <div class="full-width-split__inner">
        <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>
        
        <div class="event-summary">
          <a class="event-summary__date t-center" href="#">
            <span class="event-summary__month">Mar</span>
            <span class="event-summary__day">25</span>  
          </a>
          <div class="event-summary__content">
            <h5 class="event-summary__title headline headline--tiny"><a href="#">Spring Sales event</a></h5>
            <p>Contain your excitement as we welcome the new cars of 2019. <a href="#" class="nu gray">Learn more</a></p>
          </div>
        </div>
        <div class="event-summary">
          <a class="event-summary__date t-center" href="#">
            <span class="event-summary__month">Apr</span>
            <span class="event-summary__day">02</span>  
          </a>
          <div class="event-summary__content">
            <h5 class="event-summary__title headline headline--tiny"><a href="#">Summer Meet & Greet</a></h5>
            <p> Meet your local car dealers for some coffee and live music <a href="#" class="nu gray">Learn more</a></p>
          </div>
        </div>
        
        <p class="t-center no-margin"><a href="#" class="btn btn--blue">View All Events</a></p>

      </div>
    </div>
    <div class="full-width-split__two">
      <div class="full-width-split__inner">
        <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>

        <div class="event-summary">
          <a class="event-summary__date event-summary__date--beige t-center" href="#">
            <span class="event-summary__month">Jan</span>
            <span class="event-summary__day">20</span>  
          </a>
          <div class="event-summary__content">
            <h5 class="event-summary__title headline headline--tiny"><a href="#">We Were Voted Best Car Dealership in GA</a></h5>
            <p>For the 100th year in a row we are voted #1. <a href="#" class="nu gray">Read more</a></p>
          </div>
        </div>
        <div class="event-summary">
          <a class="event-summary__date event-summary__date--beige t-center" href="#">
            <span class="event-summary__month">Feb</span>
            <span class="event-summary__day">04</span>  
          </a>
          <div class="event-summary__content">
            <h5 class="event-summary__title headline headline--tiny"><a href="#">Is it better to lease or buy?</a></h5>
            <p>Find the best decision for your family <a href="#" class="nu gray">Read more</a></p>
          </div>
        </div>
        
        <p class="t-center no-margin"><a href="#" class="btn btn--yellow">View All Blog Posts</a></p>
      </div>
    </div>
  </div>

  <div class="hero-slider">
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri("/images/customer1.jpg") ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">Rated Best in Customer Service</h2>
        <p class="t-center">5.0 rating on Google reviews</p>
        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri("images/customer2.jpg") ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">A wide range of affordable cars</h2>
        <p class="t-center">Find your perfect car</p>
        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri("images/customer3.jpg") ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">Small local business</h2>
        <p class="t-center">Dedicated to serving the Marietta area.</p>
        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
      </div>
    </div>
  </div>
</div>

<?php get_footer();
?>
