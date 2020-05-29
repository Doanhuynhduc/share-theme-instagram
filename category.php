<?php get_header(); ?>
<div id="content">
    <div class="category-page">
        <div class="container">
            <?php
            if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
            }
            ?>
            <div class="content-category-page">
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