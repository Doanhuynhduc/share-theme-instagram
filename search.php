<?php get_header(); ?>
<div id="content">
    <?php get_template_part('header-content');?>
    <div class="blog_tin_tuc">
        <div class="container">
            <p id="breadcrumbs">
                <span>
                    <span class="breadcrumb_last" aria-current="page">
                        <?php
                        $search_query = new WP_Query( 's='.$s.'&showposts=-1&post_type=post' );
                        $search_keyword = wp_specialchars( $s, 1);
                        $search_count = $search_query->post_count;
                        //var_dump( $search_query );
                        printf( __('Tìm kiếm từ khóa: <strong>%1$s</strong>. Đã tìm thấy <strong>%2$s</strong> chủ đề cho bạn.'), $search_keyword, $search_count );
                ?>
                    </span>
                </span></p>
            <div class="content-blog-box">
                <div class="row">
                    <?php if (have_posts()) :?>
                    <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/content'); ?>
                    <?php endwhile; ?>
                    <?php else: ?>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h4><?php _e( 'Xin lỗi! Không tìm thấy cái gì để hiển thị cả :(' , 'huynhduc' ); ?>
                        </h4>
                    </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>