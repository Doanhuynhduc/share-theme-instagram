<?php get_header(); ?>
<div id="content">
    <?php get_template_part('header-content');?>
    <div class="blog_tin_tuc">
        <div class="container">
            <p id="breadcrumbs">
                <span><span>Tìm theo » 
                <span class="breadcrumb_last" aria-current="page">
                <?php
                           if ( is_tag() ) :
                                   printf( __('%1$s'), single_tag_title( '', false ) );
                           elseif ( is_category() ) :
                                   printf( __('%1$s'), single_cat_title( '', false ) );
                           elseif ( is_day() ) :
                                   printf( __('%1$s'), the_time('l, F j, Y') );
                           elseif ( is_month() ) :
                                   printf( __('%1$s'), the_time('F Y') );
                           elseif ( is_year() ) :
                                   printf( __('%1$s'), the_time('Y') );
                           endif;
                   ?>
                </span>
            </span></span></p>
            <div class="content-blog-box">
                <div class="row">
                    <?php if (have_posts()) :?>
                    <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/content'); ?>
                    <?php endwhile; ?>
                    <?php else: ?>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h4><?php _e( 'Xin lỗi! Chuyên mục này chưa có bài viết nào để hiển thị cả :(' , 'huynhduc' ); ?>
                        </h4>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php post_pagination(); ?>
            <div class="paganation">
                <ul class="pagination modal-1">
                    <li><a href="#" class="prev">&laquo</a></li>
                    <li><a href="#" class="active">1</a></li>
                    <li> <a href="#">2</a></li>
                    <li> <a href="#">3</a></li>
                    <li> <a href="#">4</a></li>
                    <li> <a href="#">5</a></li>
                    <li> <a href="#">6</a></li>
                    <li> <a href="#">7</a></li>
                    <li> <a href="#">8</a></li>
                    <li> <a href="#">9</a></li>
                    <li><a href="#" class="next">&raquo;</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>