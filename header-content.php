<div class="header_content">
    <div class="container">
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <div class="logo_content">
                    <a href="<?php bloginfo('url') ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <div class="info_content">
                    <div class="profile_title">
                        <h3 class="title_website">hoc_wordpress_de_et</h3>
                        <a href="edit-profile.html"> Xem fanpage facebook </a>
                        <i class="fa fa-cog fa-lg"></i>
                    </div>
                    <ul class="thong_ke_websites">
                        <li class="thong_ke_web">
                            <span class="thong_ke_sl">
							<?php 
								$args = array(
									'post_status' => 'publish',
									'post_type' => 'post',
								);
							$getposts = new WP_query($args); 
							global $wp_query; $wp_query->in_the_loop = true;
							$dem = 0;
							while ($getposts->have_posts()) : $getposts->the_post(); ?>
								<?php $dem++; ?>
							<?php endwhile; wp_reset_postdata(); ?>
							<?php echo $dem; ?>
                            </span> bài viết
                        </li>
                        <li class="thong_ke_web">
                            <span class="thong_ke_sl"><?php echo getTotalview() ?></span> lượt xem
                        </li>
                        <li class="thong_ke_web">
                            <span class="thong_ke_sl">36</span> phản hồi
                        </li>
                    </ul>
                    <p class="thong_tin_website">
                        <span class="thong_tin_website_name">
                            Học wordpress dễ ẹt
                        </span> </br>Website hướng dẫn wordpress từ a đến z. Hướng dẫn wordpress cơ bản, nâng cao, hướng
                        dẫn lập trình theme. Chia sẽ mọi kiến thức liên quan đến wordpress.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-menu-content">
    <div class="container">
        <div class="nav-menu">
            <?php wp_nav_menu( 
							array( 
								'theme_location' => 'header-main-menu', 
								'container' => 'false', 
								'menu_id' => 'header-main-menu', 
								'menu_class' => 'header-main-menu'
							) 
						); ?>
            <!-- <ul>
								<li class="current-menu-item"><a href="#">Trang chủ</a></li>
								<li><a href="#">Giới thiệu</a></li>
								<li>
									<a href="#">WP cơ bản</a>
								</li>
								<li><a href="#">WP nâng cao</a></li>
								<li><a href="#">Woocommerce</a></li>
								<li><a href="#">Công cụ hay</a></li>
							</ul> -->
            <div class="clear"></div>
        </div>
    </div>
</div>