<div class="info_website">
    <img class="img_inf" src="<?php bloginfo('stylesheet_directory'); ?>/images/feedPhoto.jpg" alt="">
    <div class="name_inf">
        <span class="name_inf1">Wordpress_de_et</span>
        <span class="name_inf2">
            Học wordpress dễ ẹt
        </span>
    </div>
</div>
<div class="widget">
    <div>
        <h3><span>Chuyên mục</span></h3>
        <div class="widget-content w-category">
            <ul>
            <?php
            $args = array(
               'type'      => 'post',
               'child_of'  => 0,
               'parent'    => ''
            );
            $categories = get_categories( $args );
            foreach ( $categories as $category ) { ?>
                <li><i class="fa fa-angle-right"></i> <a href="<?php echo $category->slug;?>" title="Wordpress cơ bản"><?php echo $category->name . " " . "(" .$category->count. ")"; ?></a></li>
            <?php } ?>
            </ul>
        </div>
    </div>
</div>
<div class="widget">
    <div>
        <h3><span>Bài viết mới nhất</span></h3>
        <div class="widget-content w-news">
            <ul>
            <?php 
               $args = array(
                  'post_status' => 'publish',
                  'showposts' => 5,
               );
            ?>
            <?php $getposts = new WP_query($args); ?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
               <li><a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?>
                    <h4> <?php the_title(); ?></h4> <span>
                       <?php echo getpostviews($post->ID) ?> lượt
                        xem</span>
                        </a>
                    <div class="clear"></div>
                </li>
            <?php endwhile; wp_reset_postdata(); ?>
            </ul>
        </div>
    </div>
</div>