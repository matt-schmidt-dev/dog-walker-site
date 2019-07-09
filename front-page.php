<?php get_header();?>

<!-- Main -->
<div class="header-section parallax--bg" style="background-image: url(<?php the_field('header-image'); ?>)">
  <div class="header-section-info"><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><div><?php the_content(); ?></div><?php endwhile; endif; ?>
	  <button type="button" class="btn btn-outline-light">Schedule Walk</button>
	  <button type="button" class="btn btn-outline-light">Contact Us Now</button></div>
</div>
<div class="middle-section">
  <div class="flex-services">
    <div class="flex-services-box" id="flex-services-box-1">
      <a href="https://www.youtube.com/user/GreenSlugg" style="text-decoration:none;color:inherit">
        <img class="images-services" src="<?php the_field('service-icon-one'); ?>" alt="service_icon_one" width="75px" height="75px">
        <h4><?php the_field('service-one-heading'); ?></h4>
        <p class="services-no-text"><?php the_field('service-one'); ?></p>
		<button type="button" class="btn btn-outline-dark button-edit-small">Learn More</button>
      </a>
    </div>
    <div class="flex-services-box" id="flex-services-box-2">
      <a href="https://www.amazon.com/G.S.-Muse/e/B074DPZ8PZ/ref=dp_byline_cont_ebooks_1" style="text-decoration:none;color:inherit">
        <img class="images-services" src="<?php the_field('service-icon-two'); ?>" alt="service_icon_two" width="75px" height="75px">
        <h4><?php the_field('service-two-heading'); ?></h4>
        <p class="services-no-text"><?php the_field('service-two'); ?></p>
		<button type="button" class="btn btn-outline-dark button-edit-small">Learn More</button>
      </a>
    </div>
    <div class="flex-services-box" id="flex-services-box-3">
      <a href="https://medium.com/@greenslugg" style="text-decoration:none;color:inherit">
        <img class="images-services" src="<?php the_field('service-icon-three'); ?>" alt="service_icon_three" width="75px" height="75px">
        <h4><?php the_field('service-three-heading'); ?></h4>
        <p class="services-no-text"><?php the_field('service-three'); ?></p>
		<button type="button" class="btn btn-outline-dark button-edit-small">Learn More</button>
      </a>
    </div>
    <div class="flex-services-box" id="flex-services-box-4">
      <a href="" style="text-decoration:none;color:inherit">
        <img class="images-services" src="<?php the_field('service-icon-four'); ?>" alt="service_icon_four" width="75px" height="75px">
        <h4><?php the_field('service-four-heading'); ?></h4>
        <p class="services-no-text"><?php the_field('service-four'); ?></p>
		<button type="button" class="btn btn-outline-dark button-edit-small">Learn More</button>
      </a>
    </div>
  </div>
	<div class="about-snippet">
		<div class="about-info">
			<h6>MEET YOUR DALLAS AREA DOG WALKERS...</h6>
			<h3>MATT & SYDNEY SCHMIDT</h3>
			<div class="title-line-sub"></div>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
		</div>
		<div class="about-images">
			<div id="abt-img-one" class="about-images-ind"></div>
			<div id="abt-img-two" class="about-images-ind"></div>
			<div id="abt-img-three" class="about-images-ind"></div>
		</div>
	</div>

	<!--<div class="counters">
		<div class="ind-counter">
		  <img src="http://dogsofnorthtexas.com/wp-content/uploads/2019/07/man-on-his-knees-to-cuddle-his-dog.png" alt="">
		  <h5>Over 5000 Walks</h5>
	    </div>
	    <div class="ind-counter">
		  <img src="http://dogsofnorthtexas.com/wp-content/uploads/2019/07/man-on-his-knees-to-cuddle-his-dog.png" alt="">
		  <h5>150+ Happy Pups</h5>
	    </div>
	    <div class="ind-counter">
		  <img src="http://dogsofnorthtexas.com/wp-content/uploads/2019/07/man-on-his-knees-to-cuddle-his-dog.png" alt="">
		  <h5>5-Star Rating</h5>
	    </div>
	    <div class="ind-counter">
		  <img src="http://dogsofnorthtexas.com/wp-content/uploads/2019/07/man-on-his-knees-to-cuddle-his-dog.png" alt="">
		  <h5>10,000 Miles Walked</h5>
	    </div>
	  </div>-->

  </div>
<div class="bottom-section">
  <div class="support-heading">
    <h3><?php the_field('middle-section-heading'); ?></h3>
    <p><?php the_field('middle-section-text-area'); ?></p>
	  <div class="pup-grid">
		  <div class="pup-grid-item pgi-one">
		  </div>
		  <div class="pup-grid-item pgi-two">
		  </div>
		  <div class="pup-grid-item pgi-three">
		  </div>
		  <div class="pup-grid-item pgi-four">
		  </div>
		  <div class="pup-grid-item pgi-five">
		  </div>
		  <div class="pup-grid-item pgi-six">
		  </div>
		  <div class="pup-grid-item pgi-seven">
		  </div>
		  <div class="pup-grid-item pgi-eight">
		  </div>
	  </div>
  </div>
<div class="testimonial-section-wrapper">
	<div class="head-des-test">
		<h3>
			Client Testimonials
		</h3>
		<p>
			Don't take our word for it. Here's what our clients have to say.
		</p>
	</div>
	<div class="testimonial-section">
	<div class="testimonial test-one">
		<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation."</p>
		<img class="test-img" src="http://dogsofnorthtexas.com/wp-content/uploads/2019/07/img_6781-e1562466566876.jpg" alt="">
		<h6>Sarah Paxton</h6>
	</div>
	<div class="testimonial test-two">
		<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation."</p>
		<img class="test-img" src="http://dogsofnorthtexas.com/wp-content/uploads/2019/07/img_6781-e1562466566876.jpg" alt="">
		<h6>John Doe</h6>
	</div>
	<div class="testimonial test-three">
		<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation."</p>
		<img class="test-img" src="http://dogsofnorthtexas.com/wp-content/uploads/2019/07/img_6781-e1562466566876.jpg" alt="">
		<h6>Jane Doe</h6>
	</div>
  </div>
</div>
</div>
<div id="contact" class="lower-bottom-section">
  <div class="call-to-action">
	<h2>Call now to schedule a meetup or first walk!</h2>
	<button href="dogsofnorthtexas.com" type="button" class="btn btn-outline-light"><img src="http://dogsofnorthtexas.com/wp-content/uploads/2019/07/phone-receiver.png" alt="phone-icon">Call Us Now</button>
  </div>
  <div class="contact-section">
    <h3><?php the_field('bottom-section-heading'); ?></h3>
    <p><?php the_field('bottom-section-text-area'); ?></p>
	  <form id="name-form" class="contact-form cf-one" action="https://formspree.io/dogsofnorthtexas@gmail.com" method="POST">
        <input class="name" type="text" name="Name" placeholder="Name" size="50" required>
        <input class="email" type="email" name="Email" placeholder="Email" size="50" required>
		<textarea class="message" name="Message" placeholder="Message" cols="50" rows="10"></textarea>
        <input class="submit btn btn-outline-light" type="submit" value="SUBMIT">
      </form>
      <form id="name-form-mobile" class="contact-form cf-two" action="https://formspree.io/greenslugg@email.com" method="POST">
        <input class="name-mobile" type="text" name="Name" placeholder="Name" size="35" required>
        <input class="email-mobile" type="email" name="Email" placeholder="Email" size="35" required>
		<textarea class="message-mobile" name="Message" placeholder="Message" cols="35" rows="10"></textarea>
        <input class="submit-mobile btn btn-outline-light" type="submit" value="SUBMIT">
      </form>
  </div>
</div>

<?php get_footer();?>
