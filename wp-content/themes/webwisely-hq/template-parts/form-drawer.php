<section id="form-container">
	<div class="layer-1 bg-img" style="background-image:url(<?php the_field('background_image'); ?>);">
		<div class="form-container-overlay">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="form-main-body">
							<div class="form-header">
								<div class="row align-items-center">
									<div class="col-5 col-md-3 col-xl-2">
										<div class="logo-container">
											<?php
											if(get_field('form_logo','option')) :
												$form_logo = get_field('form_logo','option');
												// vars
												$form_logo_url = $form_logo['url'];
												$form_logo_alt = $form_logo['alt'];
												$form_logo_title = $form_logo['title'];
											?>
											<a href="<?php echo home_url(); ?>"><img
												src="<?php echo $form_logo_url; ?>"
												alt="<?php echo $form_logo_alt; ?>"
												title="<?php echo $form_logo_title; ?>"
												class="img-fluid form__logo form__logo-m--<?php the_field('form_logo_mobile_width','option'); ?> form__logo-d--<?php the_field('form_logo_desktop_width','option'); ?>"></a>
											<?php else : ?>
											<a href="<?php echo home_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
											<?php endif; ?>
										</div>
									</div>
									<div class="col-7 col-md-9 col-xl-10 text-end">
										<div class="close-form">
											<span class="form-click"><i class="fal fa-times"></i></span>
										</div>
									</div>
								</div>
							</div>
							<div class="form-body">
								<div class="row justify-content-center">
									<div class="col-md-6">
										<div class="the-form">
											<!-- <div class="form-body-profile-img bg-img" style="background-image:url(<?php the_field('form_profile_image','option'); ?>);"></div> -->
											<?php if(get_field('enquiry_form','option')) {
												$form = get_field('enquiry_form','option');
												gravity_form($form['id'], false, false, true, '', true);
											} ?>
										</div>
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