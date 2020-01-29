<?php get_header();?>

<!-- Main -->
<div class="header-section parallax--bg" style="background-image: url(<?php the_field('header-image'); ?>);">
  <div class="header-section-info parallax--test"><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><div><?php the_content(); ?></div><?php endwhile; endif; ?>
	  <a href="" role="button" class="btn btn-dark-bg-color-pri">Schedule Walk</a>
	  <a href="#contact" role="button" class="btn btn-dark-bg-color-sec">Contact Us Now</a></div>
</div>
<div class="middle-section" id="about">
  <div class="flex-services parallax--test">
    <div class="flex-services-box" id="flex-services-box-1">
      <a href="http://dogsofnorthtexas.com/index.php/services/" style="text-decoration:none;color:inherit">
        <img class="images-services" src="<?php the_field('service-icon-one'); ?>" alt="service_icon_one" width="75px" height="75px">
        <h4><?php the_field('service-one-heading'); ?></h4>
        <p class="services-no-text"><?php the_field('service-one'); ?></p>
		<button type="button" class="btn button-edit-small btn-light-bg-color">Learn More</button>
      </a>
    </div>
    <div class="flex-services-box" id="flex-services-box-2">
      <a href="http://dogsofnorthtexas.com/index.php/services/" style="text-decoration:none;color:inherit">
        <img class="images-services" src="<?php the_field('service-icon-two'); ?>" alt="service_icon_two" width="75px" height="75px">
        <h4><?php the_field('service-two-heading'); ?></h4>
        <p class="services-no-text"><?php the_field('service-two'); ?></p>
		<button type="button" class="btn button-edit-small btn-light-bg-color">Learn More</button>
      </a>
    </div>
    <div class="flex-services-box" id="flex-services-box-3">
      <a href="http://dogsofnorthtexas.com/index.php/services/" style="text-decoration:none;color:inherit">
        <img class="images-services" src="<?php the_field('service-icon-three'); ?>" alt="service_icon_three" width="75px" height="75px">
        <h4><?php the_field('service-three-heading'); ?></h4>
        <p class="services-no-text"><?php the_field('service-three'); ?></p>
		<button type="button" class="btn button-edit-small btn-light-bg-color">Learn More</button>
      </a>
    </div>
    <div class="flex-services-box" id="flex-services-box-4">
      <a href="http://dogsofnorthtexas.com/index.php/services/" style="text-decoration:none;color:inherit">
        <img class="images-services" src="<?php the_field('service-icon-four'); ?>" alt="service_icon_four" width="75px" height="75px">
        <h4><?php the_field('service-four-heading'); ?></h4>
        <p class="services-no-text"><?php the_field('service-four'); ?></p>
		<button type="button" class="btn button-edit-small btn-light-bg-color">Learn More</button>
      </a>
    </div>
  </div>
	<div class="about-snippet">
		<div class="about-info">
			<h6><?php the_field('small-heading-text'); ?></h6>
			<h3><?php the_field('large-heading-text'); ?></h3>
			<div class="title-line-sub"></div>
			<p><?php the_field('info-text'); ?></p>
			<div class="counters">
				<div class="ind-counter">
		  			<img src="https://image.flaticon.com/icons/svg/672/672634.svg" alt="">
		  			<h6>5000+ Walks</h6>
	    		</div>
	    		<div class="ind-counter">
		  			<img src="https://image.flaticon.com/icons/svg/1049/1049390.svg" alt="">
		  			<h6>150+ Happy Pups</h6>
	    		</div>
	    		<div class="ind-counter">
		 			 <img src="https://image.flaticon.com/icons/svg/143/143515.svg" alt="">
		 			 <h6>5-Star Rating</h6>
	    		</div>
				<div class="ind-counter">
				  <img src="https://image.flaticon.com/icons/svg/55/55182.svg" alt="">
				  <h6>10,000+ Miles</h6>
				</div>
	 		</div>
		</div>
		<div class="about-images">
			<div id="abt-img-one" class="about-images-ind" style="background-image: url(<?php the_field('home-about-img-top-right'); ?>)"></div>
			<div id="abt-img-two" class="about-images-ind" style="background-image: url(<?php the_field('home-about-img-bottom-right'); ?>)"></div>
			<div id="abt-img-three" class="about-images-ind" style="background-image: url(<?php the_field('home-about-img-left'); ?>)"></div>
		</div>
	</div>
	
  </div>
<div class="bottom-section">
  <div class="support-heading">
    <h3><?php the_field('middle-section-heading'); ?></h3>
    <p><?php the_field('middle-section-text-area'); ?></p>
	  <div class="pup-grid">
		  <div class="pup-grid-item pgi-one" style="background-image: url(<?php the_field('mid-sect-grid-img-one'); ?>)">  
		  </div>
		  <div class="pup-grid-item pgi-two" style="background-image: url(<?php the_field('mid-sect-grid-img-two'); ?>)">  
		  </div>
		  <div class="pup-grid-item pgi-three" style="background-image: url(<?php the_field('mid-sect-grid-img-three'); ?>)">  
		  </div>
		  <div class="pup-grid-item pgi-four" style="background-image: url(<?php the_field('mid-sect-grid-img-four'); ?>)">  
		  </div>
		  <div class="pup-grid-item pgi-five" style="background-image: url(<?php the_field('mid-sect-grid-img-five'); ?>)">  
		  </div>
		  <div class="pup-grid-item pgi-six" style="background-image: url(<?php the_field('mid-sect-grid-img-six'); ?>)">  
		  </div>
		  <div class="pup-grid-item pgi-seven" style="background-image: url(<?php the_field('mid-sect-grid-img-seven'); ?>)">  
		  </div>
		  <div class="pup-grid-item pgi-eight" style="background-image: url(<?php the_field('mid-sect-grid-img-eight'); ?>)">  
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
		<p>"Matthew is awesome! I highly recommend him. He can handle my two chocolate labs like a charm!"</p>
		<img class="test-img" src="<?php the_field('testimonial-icon-one'); ?>" alt="">
		<h6>Sarah Paxton</h6>
	</div>
	<div class="testimonial test-two">
		<p>"Matt was right on time.... Oli was handled well...home safe and I know he can jump and bark unexpectedly."</p>
		<img class="test-img" src="<?php the_field('testimonial-icon-two'); ?>" alt="">
		<h6>Tiffany T.</h6>
	</div>
	<div class="testimonial test-three">
		<p>"Amazing! He made sure my pups got plenly of exercise and sent video updates that were so adorable!"</p>
		<img class="test-img" src="<?php the_field('testimonial-icon-three'); ?>" alt="">
		<h6>Michelle S.</h6>
	</div>
  </div>
</div>
</div>
<div id="contact" class="lower-bottom-section">
  <div class="call-to-action">
	<h2>Call now to schedule a meetup or first walk!</h2>
	<button href="dogsofnorthtexas.com" type="button" class="btn btn-dark-bg-color-sec"><img src="https://dogsofnorthtexas.com/wp-content/uploads/2019/07/phone-receiver.png" alt="phone-icon">Call Us Now</button>
  </div>
  <div class="contact-section">
    <h3><?php the_field('bottom-section-heading'); ?></h3>
    <p><?php the_field('bottom-section-text-area'); ?></p>
	  <form id="name-form" class="contact-form cf-one" action="https://formspree.io/dogsofnorthtexas@gmail.com" method="POST">
        <input class="name" type="text" name="Name" placeholder="Name" size="50" required>
        <input class="email" type="email" name="Email" placeholder="Email" size="50" required>
		<textarea class="message" name="Message" placeholder="Message" cols="50" rows="10"></textarea>
        <input class="submit btn btn-dark-bg-color-sec" type="submit" value="SUBMIT">
      </form>
      <form id="name-form-mobile" class="contact-form cf-two" action="https://formspree.io/greenslugg@email.com" method="POST">
        <input class="name-mobile" type="text" name="Name" placeholder="Name" size="35" required>
        <input class="email-mobile" type="email" name="Email" placeholder="Email" size="35" required>
		<textarea class="message-mobile" name="Message" placeholder="Message" cols="35" rows="10"></textarea>
        <input class="submit-mobile btn btn-dark-bg-color-sec" type="submit" value="SUBMIT">
      </form>
  </div>
</div>

<?php get_footer();?>
