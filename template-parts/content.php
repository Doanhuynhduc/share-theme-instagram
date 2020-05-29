<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
    <div class="item-product">
        <div class="thumb">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail($image_size); ?>
                <div class="overlay"></div></a>
            <ul class="thong_ke_baiviet">
                <li class="thong_ke_web">
                    <span class="thong_ke_sl">333</span> bình luận
                </li>
                <li class="thong_ke_web">
                    <span class="thong_ke_sl"><?php echo getpostviews($post->ID) ?></span> lượt xem
                </li>
            </ul>
        </div>
        <div class="info-blog">
            <h4><a href="<?php the_permalink() ?>"> <?php the_title(); ?> </a></h4>
            <div class="cate">
                <span class="cat">
                    <?php foreach((get_the_category()) as $category) { 
                                        echo $category->cat_name . ' '; 
										}?>
                </span> |
                <span class="date_public"><?php echo get_the_date( get_option('date_format') ); ?></span>
            </div>
            <p class="the_blog_excerpt ">
                <?php 
                                    $ex_content  = get_the_excerpt();
                                    $the_excerpt = catchuoi_tuybien( $ex_content, 24 );
									echo $the_excerpt;
									?>
            </p>
        </div>
    </div>
</div>