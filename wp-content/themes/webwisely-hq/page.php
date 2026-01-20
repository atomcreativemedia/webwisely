<?php get_header(); ?>
	<main class="page">
		<?php
		if(get_field('hero_section_id')) {
		    $hero_section_id = get_field('hero_section_id');
		} else {
		    $hero_section_id = 'hero-section';
		} ?>
		<section class="section-hero bg-img" style="background-image:url(<?php the_field('background_image'); ?>);" id="<?php echo($hero_section_id); ?>">
			<div class="section-hero__overlay">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="section-hero__content">
								<h1 class="section-hero__heading"><?php the_field('hero_heading'); ?></h1>
								<h6 class="section-hero__subheading"><?php the_field('hero_subheading'); ?></h6>
								<?php if( have_rows('usps') ) : ?>
								<ul class="section-hero__list fa-ul">
									<?php while( have_rows('usps') ) : the_row(); ?>
									<li class="section-hero__list-item"><span class="fa-li"><i class="fal fa-check"></i></span><?php the_sub_field('usp'); ?></li>
									<?php endwhile; ?>
								</ul>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<?php if(get_field('display_about_section')) :
		if(get_field('about_section_id')) {
		    $about_section_id = get_field('about_section_id');
		} else {
		    $about_section_id = 'about-section';
		} ?>
		<section class="section-about" id="<?php echo($about_section_id); ?>">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8">
						<article class="section-about__article">
							<div class="section-about__article-img bg-img" style="background-image:url(<?php the_field('about_profile_image'); ?>);"></div>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<?php the_content(); ?>
							<?php endwhile; endif; ?>
							<?php if(get_field('show_article_button')) : ?>
							<p class="button solid green"><a href="<?php the_field('about_button_destination'); ?>"><?php the_field('article_button_label'); ?></a></p>
							<?php endif; ?>
						</article>
					</div>
				</div>
			</div>
		</section>
		<?php endif; ?>
		
		<?php if(get_field('display_featured_section')) :
		if(get_field('featured_section_id')) {
		    $featured_section_id = get_field('featured_section_id');
		} else {
		    $featured_section_id = 'featured-section';
		} ?>
		<section class="section-featured bg-img" style="background-image:url(<?php the_field('featured_section_background_image'); ?>);" id="<?php echo($featured_section_id); ?>">
			<div class="section-featured__overlay">
				<div class="container">
					<div class="row justify-content-center justify-content-md-end">
						<div class="col-10 col-md-6 text-right">
							<div class="section-featured__content">
								<?php the_field('featured_content'); ?>
								<?php if(get_field('show_featured_section_button')) : ?>
								<p class="button solid green"><a href="<?php the_field('featured_section_button_destination'); ?>"><?php the_field('featured_section_button_label'); ?></a></p>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php endif; ?>
		
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
				<div class="row">
					<?php while( have_rows('usps_section_usps') ) : the_row(); ?>
					<div class="col-md-4 text-center section-usps__usp">
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
						<!-- <p class="button solid green"><a class="form-click">Learn More - Watch my Video</a></p> -->
						<p class="button solid green"><a class="form-click">Start Here</a></p>
					</div>
				</div>
			</div>
		</section>
		<?php endif; ?>
	</main>
<?php get_footer(); ?>