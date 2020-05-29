<?php get_header(); ?>
<?php setpostview($post->ID) ?>
<div id="content">
    <div class="single-page">
        <div class="container">
            <?php
            if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
            }
            ?>
            <div class="content-single-box">
                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                        <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <div class="content_single_page_left">
                            <h1 class="entry-title"> <?php the_title();?> </h1>
                            <div class="post-info">
                                <span
                                    class="date published time"><?php echo get_the_date( get_option('date_format') ); ?></span>
                                bởi
                                <span class="author">
                                    <span class="fn">
                                        <?php echo get_the_author(); ?>
                                    </span>
                                </span>
                            </div>
                            <div class="entry-content">
                                <p>
                                    <?php the_excerpt();
                                ?> </p>
                                <div class="quang_cao"></div>
                                <h2 class="img_sg">
                                    <?php the_post_thumbnail(); ?>
                                </h2>
                                <div class="content_single_page">
                                    <?php the_content(); ?>
                                </div>
                                <?php if(has_tag()){ ?>
                                <div class="tags">
                                    <span><i class="fa fa-tags"></i> Từ khóa: </span>
                                    <?php 
                                       foreach(get_the_tags($post->ID) as $tag)
                                       {
                                           echo '<a href="' . get_tag_link($tag->term_id) . '" class="tag-sg" >' . $tag->name . " " .'</a>';
                                       }
                                        ?>
                                </div>
                                <?php } ?>
                                <div class="comment">
                                    <div class="fb-comments" data-href="<?php the_permalink() ?>" data-numposts="10" data-width="820"></div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile;?>
                        <?php endif; ?>




                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <div class="sidebar">
                            <?php get_sidebar() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>