<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ahmadi
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="mainView">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

				// the_post_navigation(
				// 	array(
				// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'ahmadi' ) . '</span> <span class="nav-title">%title</span>',
				// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'ahmadi' ) . '</span> <span class="nav-title">%title</span>',
				// 	)
				// );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
			<div class="morePostBlog singleBox mainView">
				<div class="generalHeading">
					<h2>بیشتر بخوانید</h2>
				</div>
				<div class="archiveParent">
					<?php
					$getLatestPostsArgs = array(
						'post_type'=>'post',
						'posts_per_page'=>3
					);
					$getLatestPostsQuery = new WP_Query($getLatestPostsArgs);
					while($getLatestPostsQuery->have_posts()): $getLatestPostsQuery->the_post();
						get_template_part('template-parts/content' , 'archive');
					endwhile;
					wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
