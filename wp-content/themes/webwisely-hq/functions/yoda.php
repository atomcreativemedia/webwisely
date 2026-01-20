<?php
/*********
Hide the admin bar when logged in
*********/
add_filter('show_admin_bar', '__return_false');


/*********
Get the page number
*********/
function get_page_number() {
    if ( get_query_var('paged') ) {
        print ' | ' . __( 'Page ' , 'hbd-theme') . get_query_var('paged');
    }
} // end get_page_number


/*********
Add featured images to pages & posts.
*********/
add_theme_support( 'post-thumbnails' );


/*********
Create function to get a post's slug
*********/
function the_slug($echo=true){
    $slug = basename(get_permalink());
    do_action('before_slug', $slug);
    $slug = apply_filters('slug_filter', $slug);
    if( $echo ) echo $slug;
    do_action('after_slug', $slug);
    return $slug;
}


/*********
Changing excerpt length on queried posts
*********/
function new_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');


/*********
Changing the excerpt's 'more tag'
*********/
function new_excerpt_more($more) {
    return ' <a class="moretag" href="'. get_permalink($post->ID) . '">[...]</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


/*********
Post Pagination
*********/
if ( ! function_exists( 'post_pagination' ) ) :
   function post_pagination() {
     global $my_query;
     $pager = 999999999; // need an unlikely integer

        echo paginate_links( array(
             'base' => str_replace( $pager, '%#%', esc_url( get_pagenum_link( $pager ) ) ),
             'format' => '?paged=%#%',
             'current' => max( 1, get_query_var('paged') ),
             'total' => $my_query->max_num_pages
        ) );
   }
endif;

/*********
Shortcode for responsive video embedding
*********/
function fusion_video_embed_shortcode($atts) {
    
    $video_attributes = shortcode_atts(
        array (
            'source' => '#',
            'title' => ''
        ), $atts );
    
    $output = '
        <div class="fusion-video-wrapper">
            <iframe width="640" height="360" src="' . esc_url( $video_attributes['source'] ) . '" title="' . esc_url( $video_attributes['title'] ) . '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    ';
    
    return $output;
}
add_shortcode( 'fusion-video', 'fusion_video_embed_shortcode' );
?>