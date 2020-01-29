<?php get_header();?>
<div class="pages-main-container">
	<div class="pages-section">
		<div class="pages-info-main">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<h2 class="pages-h2">
				<?php the_title();?>
			</h2>

			<span class="pages-content-main">
				<?php the_content(); ?>
			</span>

			<?php endwhile; endif; ?>

		</div>

		<?php do_action( 'before_sidebar' ); ?>
    <?php if ( ! dynamic_sidebar( 'pages-widget-area' ) ) : ?>
	<?php endif; ?>

	</div>

	<?php get_sidebar('primary');?>

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
