	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-6 col-md-2">
					<div class="footer__item">
						<div class="footer__logo-container">
							<?php
							if(get_field('footer_logo','option')) :
								$footer_logo = get_field('footer_logo','option');
								// vars
								$footer_logo_url = $footer_logo['url'];
								$footer_logo_alt = $footer_logo['alt'];
								$footer_logo_title = $footer_logo['title'];
							?>
							<a href="<?php echo home_url(); ?>"><img
								src="<?php echo $footer_logo_url; ?>"
								alt="<?php echo $footer_logo_alt; ?>"
								title="<?php echo $footer_logo_title; ?>"
								class="img-fluid footer__logo footer__logo-m--<?php the_field('footer_logo_mobile_width','option'); ?> footer__logo-d--<?php the_field('footer_logo_desktop_width','option'); ?>"></a>
							<?php else : ?>
							<a href="<?php echo home_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 offset-md-4">
					<div class="footer__item">
						<div class="footer__text">
							<p><?php the_field('footer_text','option'); ?></p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-12 col-md-6 text-left">
					<div class="footer__item footer__item--s2">
						<!-- <div class="footer__terms-menu">
							<?php wp_nav_menu( array( 'theme_location' => 'terms-menu' ) ); ?>
						</div> -->
						<div class="footer__copy">
							<p>Copyright &copy; <?php echo date('Y'); ?> | <?php echo get_bloginfo( 'name' ); ?> | All Rights Reserved</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 text-left text-md-right">
					<div class="footer__item footer__item--end footer__item--s2">
						<div class="footer__credit">
							<p>Powered By <a href="https://www.atomcreativemedia.com/" target="_blank">Atom Creative Media</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
    <?php wp_footer(); ?>
</body>
</html>