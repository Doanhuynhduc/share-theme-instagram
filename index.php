
<?php get_header(); ?>
<div id="content">
    <div class="blog_tin_tuc">
        <div class="container">
            <div class="content-blog-box">
                <div class="row">
                    <?php 
                        $args = array(
                            'post_status' => 'publish', 
                            'post_type' => 'post', 
                        );
                    ?>
                    <?php $getposts = new WP_query($args); ?>
                    <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                    <?php get_template_part( 'template-parts/content' ); ?>
                    <?php endwhile; wp_reset_postdata(); ?>

                </div>
            </div>
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