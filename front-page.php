<?php get_header();?>

<!-- Main -->
<div class="header-section" style="background-image: url(<?php the_field('header-image'); ?>)">
  <div class="header-section-info"><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><div class="front-page-heading-text"><?php the_content(); ?></div><?php endwhile; endif; ?>
	  <button type="button" class="btn btn-dark button-edit-small">Message Us</button>
	  <button type="button" class="btn btn-dark button-edit-small">Message Us</button></div>
  <div class="social-media-header">
    <a href="https://www.facebook.com/greenslugg.muse">
      <img class="social-media-icon-header" src="https://image.flaticon.com/icons/svg/145/145802.svg" alt="facebook">
    </a>
    <a href="https://twitter.com/GSMuse1">
      <img class="social-media-icon-header" src="https://image.flaticon.com/icons/svg/145/145812.svg" alt="twitter">
    </a>
    <a href="https://www.patreon.com/GreenSlugg">
      <img class="social-media-icon" src="https://image.flaticon.com/icons/svg/145/145805.svg" alt="instagram">
    </a>
    <a href="https://www.patreon.com/GreenSlugg">
      <img class="social-media-icon" src="http://matthewtravisblog.com/wp-content/uploads/2019/02/patreon-icon-transparent-inside.png" alt="instagram">
    </a>
  </div>
</div>
<div class="middle-section">
  <div class="flex-services">
    <div class="flex-services-box" id="flex-services-box-1">
      <a href="https://www.youtube.com/user/GreenSlugg" style="text-decoration:none;color:inherit">
        <img class="images-services" src="<?php the_field('service-icon-one'); ?>" alt="service_icon_one" width="75px" height="75px">
        <h4><?php the_field('service-one-heading'); ?></h4>
        <p class="services-no-text"><?php the_field('service-one'); ?></p>
      </a>
    </div>
    <div class="flex-services-box" id="flex-services-box-2">
      <a href="https://www.amazon.com/G.S.-Muse/e/B074DPZ8PZ/ref=dp_byline_cont_ebooks_1" style="text-decoration:none;color:inherit">
        <img class="images-services" src="<?php the_field('service-icon-two'); ?>" alt="service_icon_two" width="75px" height="75px">
        <h4><?php the_field('service-two-heading'); ?></h4>
        <p class="services-no-text"><?php the_field('service-two'); ?></p>
      </a>
    </div>
    <div class="flex-services-box" id="flex-services-box-3">
      <a href="https://medium.com/@greenslugg" style="text-decoration:none;color:inherit">
        <img class="images-services" src="<?php the_field('service-icon-three'); ?>" alt="service_icon_three" width="75px" height="75px">
        <h4><?php the_field('service-three-heading'); ?></h4>
        <p class="services-no-text"><?php the_field('service-three'); ?></p>
      </a>
    </div>
    <div class="flex-services-box" id="flex-services-box-4">
      <a href="" style="text-decoration:none;color:inherit">
        <img class="images-services" src="<?php the_field('service-icon-four'); ?>" alt="service_icon_four" width="75px" height="75px">
        <h4><?php the_field('service-four-heading'); ?></h4>
        <p class="services-no-text"><?php the_field('service-four'); ?></p>
      </a>
    </div>
  </div>
</div>
<div class="bottom-section">
  <div class="support-heading">
    <h3><?php the_field('middle-section-heading'); ?></h3>
    <p><?php the_field('middle-section-text-area'); ?></p>
	  <div class="patreon-paypal-box">
		  <a href="https://www.patreon.com/bePatron?u=10257815" data-patreon-widget-type="become-patron-button">Become a Patron!</a>
	  </div>
  </div>
</div>
<div class="lower-bottom-section">
  <div class="contact-section">
    <h3><?php the_field('bottom-section-heading'); ?></h3>
    <p><?php the_field('bottom-section-text-area'); ?></p>
    <button type="button" class="btn btn-dark">Message Us</button>
  </div>
</div>

<?php get_footer();?>
