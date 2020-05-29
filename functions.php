<?php
function my_custom_wc_theme_support() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}

add_action( 'after_setup_theme', 'my_custom_wc_theme_support' );


function initTheme(){
    //change editor
    add_filter('use_block_editor_for_post', '__return_false');
    //create menu
    register_nav_menu('header-top-menu',__( 'Menu top' ));
    register_nav_menu('header-main-menu',__( 'Menu chính' ));
    register_nav_menu('footer-menu',__( 'Menu footer' ));
    //create sidebar
    if (function_exists('register_sidebar')){
        register_sidebar(array(
        'name'=> 'Single Blog',
        'id' => 'sidebar',
    ));
    }
    
    /*
    * Thêm chức năng post thumbnail
    */
    add_theme_support( 'post-thumbnails' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    add_theme_support( 'title-tag' );

    /*
    * Thêm chức năng post format
    */
    add_theme_support( 'post-formats',
    array(
    'image',
    'video',
    'gallery',
    'quote',
    'link'
    )
    ); 
    //cat chuoi
    function catchuoi_tuybien($string,$sochu){
        $cut=explode(" ",trim($string));
        for($i=0; $i<=$sochu; $i++){$stringall=$stringall.$cut[$i].' ';}
        if($cut[$sochu+1]==true){$cham='...';}
        return $stringall.$cham;
    }

    //xu li view
    function setpostview($postID){
        $count_key ='views';
        $count = get_post_meta($postID, $count_key, true);
        if($count == ''){
            $count = 0;
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
        } else {
            $count++;
            update_post_meta($postID, $count_key, $count);
        }
    }
    function getpostviews($postID){
        $count_key ='views';
        $count = get_post_meta($postID, $count_key, true);
        if($count == ''){
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
            return "0";
        }
        return $count;
    }

    add_filter('manage_posts_columns', 'posts_column_views');
    add_action('manage_posts_custom_column', 'posts_custom_column_views',5,2);
    function posts_column_views($defaults){
        $defaults['post_views'] = __('Views');
        return $defaults;
    }
    function posts_custom_column_views($column_name, $id){
        if($column_name === 'post_views'){
            echo getPostViews(get_the_ID());
        }
    }

    function getTotalview(){
    $args = array(
            'post_status' => 'publish',
            'post_type' => 'post',
        );
    $getposts = new WP_query($args); 
    global $wp_query; $wp_query->in_the_loop = true;
    $total_view = array();
    while ($getposts->have_posts()) : $getposts->the_post();
    $view = getPostViews(get_the_ID());
    $total_view[] = $view;
    endwhile; wp_reset_postdata(); 
    $total_views = array_sum($total_view);
    return $total_views;
    }

    //create page default
    add_action( 'after_switch_theme', 'create_page_on_theme_activation' );

    function create_page_on_theme_activation(){

        // Set the title, template, etc
        $new_page_title     = __('Bài viết nổi bật','huynhduc'); // Page's title
        $new_page_content   = '';                           // Content goes here
        $new_page_template  = 'bai-viet-noi-bat.php';       // The template to use for the page
        $page_check = get_page_by_title($new_page_title);   // Check if the page already exists
        // Store the above data in an array
        $new_page = array(
                'post_type'     => 'page', 
                'post_title'    => $new_page_title,
                'post_content'  => $new_page_content,
                'post_status'   => 'publish',
                'post_author'   => 1,
                'post_name'     => 'about-us'
        );
        // If the page doesn't already exist, create it
        if(!isset($page_check->ID)){
            $new_page_id = wp_insert_post($new_page);
            if(!empty($new_page_template)){
                update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
            }
        }
    }
  
}
add_action('init', 'initTheme');

if ( ! function_exists( 'post_pagination' ) ) :
    function post_pagination() {
      global $wp_query;
      $pager = 999999999; // need an unlikely integer
  
         echo paginate_links( array(
              'base' => str_replace( $pager, '%#%', esc_url( get_pagenum_link( $pager ) ) ),
              'format' => '?paged=%#%',
              'prev_text'    => __('«'),
			'next_text'    => __('»'),
              'current' => max( 1, get_query_var('paged') ),
              'total' => $wp_query->max_num_pages
         ) );
    }
 endif;


 //xu li ajax search
add_action('wp_ajax_Post_filters', 'Post_filters');
add_action('wp_ajax_nopriv_Post_filters', 'Post_filters');
function Post_filters() {
    if(isset($_POST['data'])){
        $data = $_POST['data']; // nhận dữ liệu từ client
        echo '<ul>';
        $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=10&s='.$data);
        global $wp_query; $wp_query->in_the_loop = true;
        while ($getposts->have_posts()) : $getposts->the_post();
            echo '<li><a target="_blank" href="'.get_the_permalink().'">'.get_the_title().'</a></li>'; 
        endwhile; wp_reset_postdata();
        echo '</ul>';
        die(); 
    }
}