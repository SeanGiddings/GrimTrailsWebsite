<?php /* Template Name: blog*/ ?>

<?php get_header(); ?>

<?php
$stickies = get_option( 'sticky_posts' );
// Make sure we have stickies to avoid unexpected output
if ( $stickies ) {
    $args = [
        'post_type'           => 'post',
        'post__in'            => $stickies,
        'posts_per_page'      => 2,
        'ignore_sticky_posts' => 1
    ];
    $the_query = new WP_Query($args);

    if ( $the_query->have_posts() ) { 
        while ( $the_query->have_posts() ) { 
            $the_query->the_post();

            get_template_part('loop', 'feed-top-stories' );

        }    
        wp_reset_postdata();    
    }
}
?>

<div class="wrapper section-inner group">

	<div class="content left">
		
		<div class="posts">

			<?php
		
			$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

			$archive_title = get_the_archive_title();
			$archive_description = get_the_archive_description( '', '' );

			$archive_current_page_str = sprintf( __( 'Page %1$s of %2$s', 'hemingway' ), $paged, $wp_query->max_num_pages );

			$archive_subtitle = sprintf( __( 'Page %1$s of %2$s', 'hemingway' ), $paged, $wp_query->max_num_pages );

			if ( ( is_archive() || is_search() ) && 1 < $wp_query->max_num_pages ) {
				$archive_title .= ' <span>(' . $archive_current_page_str . ')</span>';
			} else if ( ! $archive_title && $paged != 1 ) {
				$archive_title = $archive_current_page_str;
			}

			if ( $archive_title || $archive_description ) : ?>

				<header class="archive-header">

					<?php if ( $archive_title ) : ?>
						<h1 class="archive-title"><?php echo wp_kses_post( $archive_title ); ?></h1>
					<?php endif; ?>

					<?php if ( $archive_description ) : ?>
						<div class="archive-description"><?php echo wpautop( wp_kses_post( $archive_description ) ); ?></div>
					<?php endif; ?>
					
				</header><!-- .archive-header -->

				<?php 
			endif;

			if ( have_posts() ) : 
			
				while ( have_posts() ) : the_post();
				
					get_template_part( 'content', get_post_format() );
					
				endwhile;
	
			elseif ( is_search() ) : ?>

				<div class="post">
				
					<div class="content-inner">
				
						<div class="post-content">
						
							<p><?php _e( 'No results. Try again, would you kindly?', 'hemingway' ); ?></p>
							
							<?php get_search_form(); ?>
						
						</div><!-- .post-content -->
					
					</div><!-- .content-inner -->
									
				</div><!-- .post -->
			
			<?php endif; ?>

		</div><!-- .posts -->
		
		<?php if ( $wp_query->max_num_pages > 1 ) : ?>
		
			<div class="post-nav archive-nav group">
						
				<?php echo get_next_posts_link( __( '&laquo; Older<span> posts</span>', 'hemingway' ) ); ?>
							
				<?php echo get_previous_posts_link( __( 'Newer<span> posts</span> &raquo;', 'hemingway' ) ); ?>
								
			</div><!-- .post-nav.archive-nav -->
		
		<?php endif; ?>
			
	</div><!-- .content.left -->
		
	<?php get_sidebar(); ?>
	
</div><!-- .wrapper -->
	              	        
<?php get_footer(); ?>