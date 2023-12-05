<?php
/**
* Template part for displaying posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package ahmadi
*/
?>

<a href="<?php echo esc_url(get_permalink()) ?>" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true" id="post-<?php the_ID(); ?>" <?php post_class('highRadius mediumMargined whiteBg'); ?>>
	<div class="archiveCardImg"><?php the_post_thumbnail() ?></div>
	<header class="entry-header">
		<?php if ( is_home() && ! is_front_page() ){ ?>
			<h2 class="entry-title"><?php echo get_the_title() ?></h2>
		<?php } else{ ?>
			<h3 class="entry-title"><?php echo get_the_title() ?></h3>
		<?php } ?>
	</header><!-- .entry-header -->
	<?php the_excerpt(); ?>
	<div class="archivePostFooter">
		<span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M12 7v5l2.5 1.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" stroke="#ef9038" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg><?php echo get_the_date() ?></span>
		<span><svg width="18" height="18" fill="#ef9038" viewBox="0 0 45.972 45.972" xmlns="http://www.w3.org/2000/svg"><path data-name="16.Pen" d="M45.972 3.995a.975.975 0 0 1-.281.715.968.968 0 0 1-.144.095l-2.69 2.69.69.69a.919.919 0 0 1 .144.1 1.049 1.049 0 0 1 0 1.429.919.919 0 0 1-.144.1L11.833 41.52a.99.99 0 0 1-.523.481l-9.8 3.844a1.016 1.016 0 0 1-.181.071l-.012.005h-.024a1.049 1.049 0 0 1-.286.049.937.937 0 0 1-.283-.041c-.02-.006-.039 0-.06-.009s-.013-.01-.021-.013a.94.94 0 0 1-.24-.141.885.885 0 0 1-.113-.086.884.884 0 0 1-.086-.113.952.952 0 0 1-.141-.24.239.239 0 0 1-.013-.021c-.007-.02 0-.04-.009-.061A.985.985 0 0 1 0 44.964a1.1 1.1 0 0 1 .045-.287v-.023l.006-.013a1.043 1.043 0 0 1 .07-.181l3.851-9.8a1 1 0 0 1 .482-.523l27.76-27.761a2.045 2.045 0 0 0-3.485-.754L25.472 8.87l-6.83 6.84a.977.977 0 0 1-1.381-1.381L27.31 4.281c.017-.017.038-.022.056-.037a3.954 3.954 0 0 1 6.288.693l2.518-2.513a.959.959 0 0 1 .1-.143 1.05 1.05 0 0 1 1.43 0 .959.959 0 0 1 .1.143l.69.69 2.69-2.69a.959.959 0 0 1 .1-.143 1.05 1.05 0 0 1 1.43 0 .959.959 0 0 1 .1.143l2.762 2.762a.968.968 0 0 1 .144.095.983.983 0 0 1 .254.714ZM2.847 43.125l6.376-2.5-3.875-3.877ZM36.972 4.376 6.357 34.995l4.615 4.619L41.595 8.995Zm5-2-2.115 2.119 1.615 1.619 2.119-2.119Z" fill-rule="evenodd"/></svg><?php echo get_the_author() ?></span>
	</div>
</a><!-- #post-<?php the_ID(); ?> -->