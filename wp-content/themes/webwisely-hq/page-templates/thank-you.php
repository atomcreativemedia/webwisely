<?php get_header();
/* Template Name: Thank You */ ?>
	<?php
		if (isset($_GET["fname"])) { $fname = $_GET["fname"]; } else { $fname = ''; };
		if (isset($_GET["lname"])) { $lname = $_GET["lname"]; } else { $lname = ''; };
		if (isset($_GET["email"])) { $email = $_GET["email"]; } else { $email = ''; };
		if (isset($_GET["phone"])) { $phone = $_GET["phone"]; } else { $phone = ''; };
		if (isset($_GET["bname"])) { $bname = $_GET["bname"]; } else { $bname = ''; };
		if (isset($_GET["bnat"])) { $bnat = $_GET["bnat"]; } else { $bnat = ''; };
		if (isset($_GET["burl"])) { $burl = $_GET["burl"]; } else { $burl = ''; };
	?>
	<main class="page thank-you-page">
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
						<div class="col-12 col-md-6">
							<div class="section-hero__content">
								<h1 class="section-hero__heading">Thanks for your enquiry, <?= $fname; ?>!</h1>
								<h6 class="section-hero__subheading">A confirmation email has been sent to <a href="mailto:<?= $email; ?>" target="_blank"><?= $email; ?></a> - please check your inbox!</h6>
								<p class="section-hero__text">We will be in touch with you shortly to discuss your WebWisely website and get things cooking!</p>
								<p class="section-hero__text">In the meantime, if you have any questions please don't hesitate to get in touch by emailing <a href="mailto:hello@webwisely.co.uk">hello@webwisely.co.uk</a>, or calling <a href="tel:01759207107">01759 207 107</a>.</p>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="section-hero__featured-image">
								<img src="<?php the_field('featured_image'); ?>" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		</section>
	</main>
<?php get_footer(); ?>