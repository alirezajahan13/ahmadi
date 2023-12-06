<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<div class="shopPageSectionUp mainView">
	<div class="generalHeading highMargined">
        <h1>پیشنهاد شگفت انگیز ما</h1>
    </div>
	<div class="shopPageBanners">
		<a href="#"><img src="<?php echo get_template_directory_uri();?>/img/banner1.png" alt="تخفیفات"></a>
		<a href="#"><img src="<?php echo get_template_directory_uri();?>/img/Group 23.png" alt="تخفیفات"></a>
	</div>
</div>
<div class="generalCatParent">
    <div class="generalCat mainView">      
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php
                $categories = get_terms(array(
                    'taxonomy'   => 'product_cat',
                    'hide_empty' => true,
                    'exclude'    => array('15')
                ));

                foreach ($categories as $category) {
                    $category_image = get_field('category_mb_icon_img', 'product_cat_' . $category->term_id);

                    $active_class = is_category_active($category->term_id) ? 'activeCat' : '';

                    echo '<div class="categoriesCardParent swiper-slide ' . $active_class . '" data-category-id="' . $category->term_id . '">';
                    echo '<a class="categoriesCard whiteBg" href="' . get_category_link($category->term_id) . '">';
                    if ($category_image) {
                        echo '<img src="' . esc_url($category_image['url']) . '" alt="' . esc_attr($category->name) . '">';
                    }
                    echo '</a>';
                    echo '<span>';
                    echo $category->name;
                    echo '</span>';
                    echo '</div>';
                }
                function is_category_active($category_id) {

                    $current_category = get_queried_object();

                    return ($current_category instanceof WP_Term && $current_category->term_id == $category_id);
                }
                ?>
            </div>
        </div>
    </div>
</div>
<div class="headerShopPage mainView">
	<header class="woocommerce-products-header">
		<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
			<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
		<?php endif; ?>

		<?php
		/**
		 * Hook: woocommerce_archive_description.
		 *
		 * @hooked woocommerce_taxonomy_archive_description - 10
		 * @hooked woocommerce_product_archive_description - 10
		 */
		do_action( 'woocommerce_archive_description' );
		?>
	</header>
</div>

<div class="archiveProducts mainView">
<?php
	if ( woocommerce_product_loop() ) {

		/**
		 * Hook: woocommerce_before_shop_loop.
		 *
		 * @hooked woocommerce_output_all_notices - 10
		 * @hooked woocommerce_result_count - 20
		 * @hooked woocommerce_catalog_ordering - 30
		 */
		do_action( 'woocommerce_before_shop_loop' );

		woocommerce_product_loop_start();

		if ( wc_get_loop_prop( 'total' ) ) {
			while ( have_posts() ) {
				the_post();

				/**
				 * Hook: woocommerce_shop_loop.
				 */
				do_action( 'woocommerce_shop_loop' );

				wc_get_template_part( 'content', 'product' );
			}
		}

		woocommerce_product_loop_end();

		/**
		 * Hook: woocommerce_after_shop_loop.
		 *
		 * @hooked woocommerce_pagination - 10
		 */
		do_action( 'woocommerce_after_shop_loop' );
	} else {
		/**
		 * Hook: woocommerce_no_products_found.
		 *
		 * @hooked wc_no_products_found - 10
		 */
		do_action( 'woocommerce_no_products_found' );
	}


	/**
	 * Hook: woocommerce_after_main_content.
	 *
	 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
	 */
	do_action( 'woocommerce_after_main_content' );
?>
</div>
<?php
/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
//do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );