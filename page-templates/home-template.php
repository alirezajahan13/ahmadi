<?php
/*
Template Name: Home Template
*/
get_header();
?>

<div class="introSectionBack">
    <div class="introSection mainView">
        <img src="<?php echo get_template_directory_uri() ?>/img/Group-34.png" alt="تجهیزات-ایمنی-احمدی">
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
            <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> -->
        </div>
    </div>
</div>
<div class="newestProductsParent highMargined">
    <div class="newestProducts mainView">
        <div class="swiper productSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="fristBannersSwiper" src="<?php echo get_template_directory_uri() ?>/img/engineer-tools.png" alt="">
                </div>
                <?php 
                    $args = array(
                        'post_type'      => 'product',
                        'posts_per_page' => 8,
                    );

                    $loop = new WP_Query($args);

                    if ($loop->have_posts()) {
                        while ($loop->have_posts()) : $loop->the_post(); ?>
                            <div class="swiper-slide">
                                <?php wc_get_template_part('content', 'product'); ?>
                            </div>
                        <?php endwhile;
                    } else {
                        echo '<div class="swiper-slide">' . __( 'No products found' ) . '</div>';
                    }

                    wp_reset_postdata();
                ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
<div class="mostSalesProductsParent highMargined">
    <div class="mostSalesProducts mainView">
        <div class="swiper productSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="fristBannersSwiper" src="<?php echo get_template_directory_uri() ?>/img/engineer-tool.png" alt="">
                </div>
                <?php 
                    $args = array(
                        'post_type'      => 'product',
                        'posts_per_page' => 8,
                        'meta_key'       => 'total_sales',
                        'orderby'        => 'meta_value_num',
                        'order'          => 'DESC',
                    );

                    $loop = new WP_Query($args);

                    if ($loop->have_posts()) {
                        while ($loop->have_posts()) : $loop->the_post(); ?>
                            <div class="swiper-slide">
                                <?php wc_get_template_part('content', 'product'); ?>
                            </div>
                        <?php endwhile;
                    } else {
                        echo '<div class="swiper-slide">' . __('No products found') . '</div>';
                    }

                    wp_reset_postdata();
                ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
<div class="discountHomeBannersBack">
    <div class="discountHomeBanners mainView">
		<a href="#"><img src="<?php echo get_template_directory_uri();?>/img/Group 23.png" alt="تخفیفات"></a>
        <a href="#"><img src="<?php echo get_template_directory_uri();?>/img/Group-22.png" alt="تخفیفات"></a>
    </div>
</div>
<div class="brandSectionHomeBack highMargined">
    <div class="brandSectionHome mainView">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><a href="#" class="whiteBg"><img src="<?php echo get_template_directory_uri();?>/img/3M-logo.png" alt="برند"></a></div>
                <div class="swiper-slide"><a href="#" class="whiteBg"><img src="<?php echo get_template_directory_uri();?>/img/Petzl-Logo.png" alt="برند"></a></div>
                <div class="swiper-slide"><a href="#" class="whiteBg"><img src="<?php echo get_template_directory_uri();?>/img/Dräger_Logo.png" alt="برند"></a></div>
                <div class="swiper-slide"><a href="#" class="whiteBg"><img src="<?php echo get_template_directory_uri();?>/img/logo-spasciani.png" alt="برند"></a></div>
                <div class="swiper-slide"><a href="#" class="whiteBg"><img src="<?php echo get_template_directory_uri();?>/img/uni-t_aa-removebg.png" alt="برند"></a></div>
                <div class="swiper-slide"><a href="#" class="whiteBg"><img src="<?php echo get_template_directory_uri();?>/img/3M-logo.png" alt="برند"></a></div>
            </div>
        </div>    
    </div>
</div>
<div class="fireProductsParent highMargined">
    <div class="fireProducts mainView">
        <div class="swiper productSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="fristBannersSwiper" src="<?php echo get_template_directory_uri() ?>/img/firefighters.png" alt="">
                </div>
                <?php
                    $getProductsArgs = array(
                        'post_type'      => 'product',
                        'posts_per_page' => 8,
                        'tax_query'      => array(
                            array(
                                'taxonomy'=>'product_cat',
                                'terms'=>'40',
                                'field'=>'term_id',
                            ),
                        ),
                    );
                    
                    $getProductsQuery = new WP_Query($getProductsArgs);

                    while ($getProductsQuery->have_posts()) : $getProductsQuery->the_post();
                    ?>
                        <div class="swiper-slide">
                            <?php wc_get_template_part('content', 'product'); ?>
                        </div>
                    <?php
                    endwhile;

                    wp_reset_postdata();
                ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
<div class="heightProductsParent highMargined">
    <div class="heightProducts mainView">
        <div class="swiper productSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="fristBannersSwiper" src="<?php echo get_template_directory_uri() ?>/img/worker-1.png" alt="">
                </div>
                <?php
                $getProductsArgs = array(
                    'post_type'      => 'product',
                    'posts_per_page' => 8,
                    'tax_query'      => array(
                        array(
                            'taxonomy'=>'product_cat',
                            'terms'=>'43',
                            'field'=>'term_id',
                        ),
                    ),
                );

                $getProductsQuery = new WP_Query($getProductsArgs);

                while ($getProductsQuery->have_posts()) : $getProductsQuery->the_post();
                ?>
                    <div class="swiper-slide">
                        <?php wc_get_template_part('content', 'product'); ?>
                    </div>
                <?php
                endwhile;

                wp_reset_postdata();
                ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
<div class="bannerNumTwoHomeBack">
    <div class="bannerNumTwoHome mainView">
        <img src="<?php echo get_template_directory_uri();?>/img/banner-2.png" alt="">
    </div>
</div>
<div class="postBlogInHomeBack highMargined">
    <div class="postBlogInHome mainView">
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

<?php get_footer(); ?>