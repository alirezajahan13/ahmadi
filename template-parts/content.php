<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ahmadi
 */

?>
<div class="generalSinglePostStyle singleBox mediumMargined">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header generalHeading  highMargined centeredText">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>
			<?php endif; ?>
		</header><!-- .entry-header -->
		<div class="archivePostFooter mediumPadding">
			<div class="postDate">
				<span class="centerFooter">تاریخ انتشار:</span>
				<span><?php echo get_the_date() ?></span>
			</div>
			<div class="postAuthor">
				<span class="centerFooter">نویسنده:</span>
				<span><?php echo get_the_author() ?></span>
			</div>
			<div class="commentsCount">
				<span class="centerFooter">تعداد نظرات:</span>
				<span><?php comments_number( '0', '1', '%' ); ?></span>
			</div>
		</div>

		<div class="singlePostCard">

		<?php ahmadi_post_thumbnail(); ?>

		<div class="entry-content">
			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'ahmadi' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);

			// wp_link_pages(
			// 	array(
			// 		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ahmadi' ),
			// 		'after'  => '</div>',
			// 	)
			// );
			?>
		</div><!-- .entry-content -->
		</div>

		<!-- <footer class="entry-footer">
			<?php //ahmadi_entry_footer(); ?>
		</footer>.entry-footer -->
	</article><!-- #post-<?php the_ID(); ?> -->
</div>