<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title('') ?></title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="format-detection" content="telephone=yes">
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
	<style>
		.form-body-profile-img.img-1 {
			background-image: url(<?php the_field('form_profile_image','option'); ?>);
		}
	</style>
</head>

<body>
	
	<?php get_template_part('template-parts/form-drawer'); ?>
	
	<header class="header">
		<div class="container">
			<div class="row align-items-md-center">
				<div class="col-5 col-md-3 col-xl-2">
                    <div class="header__logo-container">
						<?php
						if(get_field('header_logo','option')) :
							$header_logo = get_field('header_logo','option');
							// vars
							$header_logo_url = $header_logo['url'];
							$header_logo_alt = $header_logo['alt'];
							$header_logo_title = $header_logo['title'];
						?>
						<a href="<?php echo home_url(); ?>"><img
							src="<?php echo $header_logo_url; ?>"
							alt="<?php echo $header_logo_alt; ?>"
							title="<?php echo $header_logo_title; ?>"
							class="img-fluid header__logo header__logo-m--<?php the_field('header_logo_mobile_width','option'); ?> header__logo-d--<?php the_field('header_logo_desktop_width','option'); ?>"></a>
						<?php else : ?>
						<a href="<?php echo home_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-7 col-md-9 col-xl-10 d-flex justify-content-between justify-content-sm-end gap-sm-4 align-items-sm-end align-items-md-center">
					<?php if(!is_page_template( 'page-templates/thank-you.php' )) : ?>
					<p class="header__pricing d-none d-sm-inline-block"><a href="#pricing-section">See Pricing</a></p>
					<div class="header__form-click d-md-inline-block">
	                    <div class="form-click">
	                        <p class="button solid yellow small mb-0 d-md-none"><a>Start Here!</a></p>
	                        <p class="button solid yellow mb-0 d-none d-md-inline-block"><a>Start Here!</a></p>
	                    </div>
                    </div>
                    <p class="small header__pricing d-sm-none"><a href="#pricing-section">See Pricing</a></p>
                    <?php endif; ?>
                </div>
			</div>
		</div>
	</header>