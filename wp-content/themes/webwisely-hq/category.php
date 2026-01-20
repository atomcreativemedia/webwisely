<?php get_header(); ?>
<main>
	<h1><?php single_cat_title(); ?></h1>
	
	<section id="blog-posts" class="section">
		<div class="container">
			<?php
				while ( have_posts() ) : the_post();
				$pt_src = wp_get_attachment_image_src( get_post_thumbnail_id(  ), 'full' );
			?>
			<div class="row">
				<div class="blog-post">
					<div class="col-sm-4">
						<a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>">
							<img src="<?php echo $pt_src[0]; ?>" class="post-featured-image img-responsive" />
						</a>
					</div>
					<div class="col-sm-8">
						<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						<p class="post-author-date"><?php $date = get_the_date(); echo $date; ?></p>
						<?php
							$categories = get_the_category();
							$output = '';
							if ( ! empty( $categories ) ) {
								foreach( $categories as $category ) {
									$output .= '<a class="cat-link" href="' . esc_url( get_term_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>';
									}
								echo trim( $output );
							}
						?>
						<div class="the-excerpt">
							<?php the_excerpt(); ?>
						</div>
						<div class="read-more">
							<p class="button accent"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read More...</a></p>
						</div>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</section>
</main>
<?php get_footer(); ?>