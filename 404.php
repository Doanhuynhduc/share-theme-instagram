<?php get_header(); ?>
<div id="content">
    <div class="blog_tin_tuc">
        <div class="container">
            <div class="row">
            <div class="content-blog-box">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <?php
                        _e('<h2>404 NOT FOUND</h2>');
                        _e('<p>The article you were looking for was not found, but maybe try looking again!</p>');
 
                        get_search_form();
 
                        _e('<h3>Content categories</h3>');
                        echo '<div class="404-catlist">';
                        wp_list_categories( array( 'title_li' => '' ) );
                        echo '</div>';
 
                        _e('<h3>Tag Cloud</h3>');
                        wp_tag_cloud();
                ?>
                </div>
            </div>
            </div>
            
        </div>
    </div>
</div>
<?php get_footer(); ?>