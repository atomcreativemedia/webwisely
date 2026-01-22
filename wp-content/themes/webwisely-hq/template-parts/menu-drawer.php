<?php
	$primary_contact_number	= get_field('primary_contact_number','option');
	$primary_email_address 	= get_field('primary_email_address','option');
?>
<section class="menu-drawer">
	<div class="menu-drawer__layer-1">
		<div class="container h-100">
			<div class="row h-100">
				<div class="col">
					<div class="menu-drawer__main-container">
						<div class="menu-drawer__header">
							<div class="row align-items-center justify-content-between">
								<div class="col-7 col-sm-5">
									<div class="menu-drawer__logo-container">
										<?php
										if(get_field('menu_logo','option')) :
											$image = get_field('menu_logo','option');
											// vars
											$image_url = $image['url'];
											$image_alt = $image['alt'];
											$image_title = $image['title'];
										?>
										<a href="#hero-section"><img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" title="<?php echo $image_title; ?>" class="menu-drawer__logo img-fluid"></a>
										<?php endif; ?>
									</div>
								</div>
								<div class="col-auto">
									<div class="menu-drawer__close close-menu">
										<span class="menu-click"><i class="fa-slab fa-regular fa-xmark"></i></span>
									</div>
								</div>
							</div>
						</div>
						<div class="menu-drawer__body">
							<div class="row">
								<div class="col">
									<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
								</div>
							</div>
						</div>
						<div class="menu-drawer__footer">
							<div class="row justify-content-center">
								<div class="col-10">
									<div class="menu-drawer__footer-item">
										<?php
										$social_media_profiles = get_field('social_media_profiles_rp','option');
										if( $social_media_profiles ) {
										    echo '<p class="socials">';
										    foreach( $social_media_profiles as $social_media_profile ) {
										        $link = $social_media_profile['social_media_profiles_rp_profile_link'];
										        $icon = $social_media_profile['social_media_profiles_rp_profile_icon'];
										        echo '<a href="'.esc_url($link).'" target="_blank">'.wp_kses_post($icon).'</a>';
										    }
										    echo '</p>';
										}
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>