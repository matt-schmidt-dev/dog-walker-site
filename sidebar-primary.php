<div id="primary" class="sidebar">

	<div class="primary-sidebar-email">
		<h5>
			SUBSCRIBE!
		</h5>
		<P>
			Subscribe to our email list for a chance to win a week's worth of credit for dog walking services and get exclusive discounts for our shop.
		</P>
		<form id="e-form-primary-sidebar" action="https://formspree.io/matts0809@gmail.com" method="POST">
			<input class="e-name sidebar-email-form" type="text" name="Name" placeholder="Name" size="40" required>
        	<input class="e-email sidebar-email-form" type="email" name="Email" placeholder="Email" size="40" required>
        	<input class="e-submit sidebar-email-form" type="submit" value="SUBMIT">
		</form>
	</div>

    <?php do_action( 'before_sidebar' ); ?>
    <?php if ( ! dynamic_sidebar( 'primary-sidebar' ) ) : ?>
	<?php endif; ?>

	<!-- <div class="primary-top">
		<h3 class="sidebar-widget-title">Latests Posts</h3>

<?php $i = 1; if ( have_posts() ) : while ( have_posts() && $i < 5) : the_post(); ?>

		<div class="primary-inner">
				<a class="posts-titles-sidebar-a" href="<?php the_permalink() ;?>">
					<h5 class="posts-titles-sidebar"><?php the_title(); ?></h5>
				</a>
			<div class="author-date-span-sidebar">
				<p class="p-posts-margin-sidebar" id="author-name"><?php the_author_link(); ?></p>
				<p class="vertical-line-sidebar">|</p>
				<p class="p-posts-margin-sidebar" id="date-stamp"><?php the_date(); ?></p>
			</div>

		</div>
		<hr>

<?php $i++; endwhile; endif; ?>

</div> -->

	<?php do_action( 'before_sidebar' ); ?>
    <?php if ( ! dynamic_sidebar( 'primary-sidebar-two' ) ) : ?>
	<?php endif; ?>

        <!--<aside id="archives" class="widget">
            <h3 class="sidebar-widget-title"><?php _e( 'Archives', 'shape' ); ?></h3>
            <ul>
                <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
            </ul>
        </aside>-->
</div>
