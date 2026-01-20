<?php get_header(); ?>
	<main class="frontpage">
		<?php
		if(get_field('hero_section_id')) {
		    $hero_section_id = get_field('hero_section_id');
		} else {
		    $hero_section_id = 'hero-section';
		} ?>
		<section class="section-hero bg-img" style="background-image:url(<?php the_field('background_image'); ?>);" id="<?php echo($hero_section_id); ?>">
			<div class="section-hero__overlay">
				<div class="container">
					<div class="row justify-content-center align-items-center gy-5">
						<div class="col-8 col-lg-6">
							<div class="section-hero__featured-image">
								<img src="<?php the_field('featured_image'); ?>" alt="" class="img-fluid">
								<div class="full-page-mockup bg-img"></div>
							</div>
						</div>
						<div class="col-11 col-lg-6">
							<div class="section-hero__content">
								<h1 class="section-hero__heading"><?php the_field('hero_heading'); ?></h1>
								<h6 class="section-hero__subheading"><?php the_field('hero_subheading'); ?></h6>
								<?php if( have_rows('usps') ) : ?>
								<ul class="section-hero__list fa-ul">
									<?php while( have_rows('usps') ) : the_row(); ?>
									<li class="section-hero__list-item"><span class="fa-li"><i class="fa-slab fa-regular fa-check"></i></span><?php the_sub_field('usp'); ?></li>
									<?php endwhile; ?>
								</ul>
								<?php endif; ?>
								<p class="button bigbutton solid yellow "><a class="form-click">Start My Website <i class="fa-sharp fa-solid fa-arrow-up-right"></i></a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<?php if(get_field('display_main_article')) :
		if(get_field('main_article_section_id')) {
		    $main_article_section_id = get_field('main_article_section_id');
		} else {
		    $main_article_section_id = 'main-article';
		} ?>
		<section class="section-main-article" id="<?php echo($main_article_section_id); ?>">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-10 col-lg-6 col-xl-5 mb-3 mb-lg-0">
						<div class="section-main-article__content">
							<?php the_content(); ?>
							<p class="button solid pink d-none d-lg-inline-block"><a class="form-click">Get Started!</a></p>
						</div>
					</div>
					<div class="col-9 col-md-8 col-lg-6 d-block d-lg-none">
						<div class="section-main-article__featured-image">
							<img src="<?php the_field('featured_image'); ?>" alt="" class="img-fluid">
							<div class="full-page-mockup bg-img"></div>
							<p class="button bigbutton solid pink"><a class="form-click">Get Started!</a></p>
						</div>
					</div>
					<div class="col-lg-6 col-xl-7 d-none d-lg-block">
						<div class="section-main-article__promotional-image">
							<img src="<?php the_field('promotional_image'); ?>" alt="" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php endif; ?>
		
		<section class="section-promotional-image bg-img d-lg-none" style="background-image:url('<?php the_field('promotional_image'); ?>');"></section>
		
		<?php if(get_field('display_usps_section')) :
		if(get_field('usps_section_id')) {
		    $usps_section_id = get_field('usps_section_id');
		} else {
		    $usps_section_id = 'usps-section';
		} ?>
		<section class="section-usps" id="<?php echo($usps_section_id); ?>">
			<div class="container">
				<?php if(get_field('usps_section_introduction')) : ?>
				<div class="row">
					<div class="col text-center">
						<div class="section-usps__content">
							<?php the_field('usps_section_introduction'); ?>
						</div>
					</div>
				</div>
				<?php endif; ?>
				
				<?php if( have_rows('usps_section_usps') ) : ?>
				<div class="row justify-content-center">
					<?php while( have_rows('usps_section_usps') ) : the_row(); ?>
					<div class="col-11 col-sm-10 col-md-8 col-lg-4 text-center section-usps__usp">
						<div class="section-usps__usp-icon">
							<?php the_sub_field('usp_icon'); ?>
						</div>
						<div class="section-usps__usp-content">
							<?php the_sub_field('usp_content'); ?>
						</div>
					</div>
					<?php endwhile; ?>
				</div>
				<?php endif; ?>
				
				<div class="row">
					<div class="col text-center">
						<p class="button solid pink"><a class="form-click">Start Here</a></p>
					</div>
				</div>
			</div>
		</section>
		<?php endif; ?>
		
		
		<?php if(get_field('display_pricing_section')) :
		if(get_field('pricing_section_id')) {
		    $pricing_section_id = get_field('pricing_section_id');
		} else {
		    $pricing_section_id = 'pricing-section';
		} ?>
		<section class="section-pricing" id="<?php echo($pricing_section_id); ?>">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6">
						<div class="section-pricing__content">
							<?php the_field('pricing_section_introduction'); ?>
							<p class="button bigbutton solid pink"><a class="form-click">Start Here</a></p>
						</div>
					</div>
					<div class="col-12 col-md-6 p-5 px-md-3 py-md-0">
						<div class="section-pricing__features">
							<h2>Here's What You Get</h2>
							<h5><strong>For <?php the_field('monthly_cost'); ?> a month...</strong></h5>
							<?php if( have_rows('features') ) : ?>
							<?php while( have_rows('features') ) : the_row(); ?>
							<p class="section-pricing__single-feature"><?php the_sub_field('feature'); ?></p>
							<?php endwhile; ?>
							<?php endif; ?>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php endif; ?>
		
		<?php if(get_field('display_testimonials_section')) :
		if(get_field('testimonials_section_id')) {
		    $testimonials_section_id = get_field('testimonials_section_id');
		} else {
		    $testimonials_section_id = 'testimonials-section';
		} ?>
		<section class="section-testimonials" id="<?php echo($testimonials_section_id); ?>">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-10">
						<div class="section-testimonials__content">
							<?php the_field('testimonials_section_introduction'); ?>
						</div>
					</div>
					<div class="col-10 col-lg-8 col-xl-10">
						<div class="section-testimonials__quote">
							<i class="fa-sharp fa-solid fa-quote-left"></i>
						</div>
						<?php if( have_rows('testimonials') ) : ?>
						<div class="section-testimonials__testimonials testimonials-slider">
							<?php while( have_rows('testimonials') ) : the_row(); ?>
							<div class="section-testimonials__testimonial">
								<?php the_sub_field('testimonial'); ?>
							</div>
							<?php endwhile; ?>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
		<?php endif; ?>
		
		
		<?php if(get_field('display_faqs_section')) :
		if(get_field('faqs_section_id')) {
		    $faqs_section_id = get_field('faqs_section_id');
		} else {
		    $faqs_section_id = 'faqs-section';
		} ?>
		<section class="section-faqs" id="<?php echo($faqs_section_id); ?>">
			<div class="container">
				
				<?php if(get_field('faqs_section_introduction')) : ?>
				<div class="row justify-content-center">
					<div class="col-10 text-center mb-5">
						<div class="section-faqs__content">
							<?php the_field('faqs_section_introduction'); ?>
						</div>
					</div>
				</div>
				<?php endif; ?>
				
				<?php if( have_rows('faqs') ) : ?>
				<div class="row justify-content-center">
					<div class="col-10 col-md-8 mb-5">
						<div class="section-faqs__faq-accordion accordion accordion-flush" id="accordionFlush">
							<?php $i = 1; while( have_rows('faqs') ) : the_row(); ?>
							<div class="section-faqs__faq accordion-item">
								<h4 class="section-faqs__faq-q accordion-header" id="flush-heading-<?= $i; ?>">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-<?= $i; ?>" aria-expanded="false" aria-controls="flush-collapse-<?= $i; ?>"><?php the_sub_field('question'); ?></button></h4>
								<div class="section-faqs__faq-a accordion-collapse collapse" id="flush-collapse-<?= $i; ?>" aria-labelledby="flush-heading-<?= $i; ?>" data-bs-parent="#accordionFlush">
									<div class="accordion-body">
										<p><?php the_sub_field('answer'); ?></p>
									</div>
								</div>
							</div>
							<?php $i++; endwhile; ?>
						</div>
					</div>
				</div>
				<?php endif; ?>
				
				<div class="row">
					<div class="col text-center">
						<p class="button solid pink"><a class="form-click">Get Started</a></p>
					</div>
				</div>
			</div>
		</section>
		<?php endif; ?>
	</main>
<?php get_footer(); ?>