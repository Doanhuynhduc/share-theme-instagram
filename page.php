<?php get_header(); ?>
<div id="content">
    <div class="blog_tin_tuc">
        <div class="container">
            <?php
             if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
            ?>
             <?php the_content(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>