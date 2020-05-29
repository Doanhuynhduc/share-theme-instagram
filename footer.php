<footer>
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="related_post">
                        <h4>Wordpress de et</h4>
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png"
                            alt="<?php bloginfo('name'); ?>">
                        <p>Chuyên trang hướng dẫn wordpress từ a đến z. Hướng dẫn wordpress cơ bản, hướng dẫn lập trình
                            theme. Chia sẻ khóa học wordpress miễn phí và có phí.</p>
                    </div>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="related_post">
                        <h4>Bài viết xem nhiều</h4>
                        <ul>
						<?php $args = array( 'post_status' => 'publish', 
								'post_type' => 'post',
								'order' => 'DESC', 
								'showposts' => 10, 
							);
						?>
                        <?php $getposts = new WP_query($args); ?>
                        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
							<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                        <?php endwhile; wp_reset_postdata(); ?>
                           
                        </ul>

                    </div>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="fb_content">
                        <h4>Theo dõi facebook</h4>
                        <iframe
                            src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FHinhduccdev&tabs=timeline&width=300px&height=200px&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=243947396976015"
                            width="300px" height="200px" style="border:none;overflow:hidden" scrolling="no"
                            frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright">
        <p>Copyright © 2020 - Design by Huynhducc</p>
    </div>
</footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    var timeout = null; // khai báo biến timeout
    $(".search-ajax").keyup(function(){ // bắt sự kiện khi gõ từ khóa tìm kiếm
        clearTimeout(timeout); // clear time out
        timeout = setTimeout(function (){
           call_ajax(); // gọi hàm ajax
        }, 300);
    });
    function call_ajax() { // khởi tạo hàm ajax
        var data = $('.search-ajax').val(); // get dữ liệu khi đang nhập từ khóa vào ô
        $.ajax({
            type: 'POST',
            async: true,
            url: '<?php echo admin_url('admin-ajax.php');?>',
            data: {
                'action' : 'Post_filters', 
                'data': data
            },
            beforeSend: function () {
            },
            success: function (data) {
                $('#load-data').css('display', 'block');
                $('#load-data').html(data); // show dữ liệu khi trả về
            }
        });
    }
</script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/libs/jquery-3.4.1.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0">
</script>
<?php wp_footer(); ?>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0">
</script>
</body>
</html>