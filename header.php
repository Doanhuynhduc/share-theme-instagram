<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/main.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/responsive.css">
</head>

<body <?php body_class();  ?>>
    <div id="wallpaper">
        <header>
            <div class="header_main">
                <div class="container">
                    <div class="row header_main_content">
                        <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <div class="logo">
                                <a href="<?php bloginfo('url') ?>"><img
                                        src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png"
                                        alt="<?php bloginfo('name'); ?>"></a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <div class="main-search">
                                <form action="<?php bloginfo('url'); ?>/" method="GET" role="form" id="searchform">
                                    <input type="text" autocomplete="off" class="form-control search-ajax" name="s"
                                        placeholder="Từ khóa">
                                    <button class="bt-search" type="submit">Tìm kiếm</button>
                                </form>
                                <div id="load-data"></div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <ul class="navigations_links">
                                <li class="navigation_list_item">
                                    <a href="<?php bloginfo('url')?>/bai-viet-noi-bat" class="navigation_link">
                                        <i class="fa fa-compass fa-lg"></i>
                                    </a>
                                </li>
                                <li class="navigation_list_item">
                                    <a href="<?php bloginfo('url')?>/bai-viet-xem-nhieu" class="navigation_link">
                                        <i class="fa fa-heart-o fa-lg"></i>
                                    </a>
                                </li>
                                <li class="navigation_list_item">
                                    <a href="<?php bloginfo('url')?>/bai-viet-da-xem" class="navigation_link">
                                        <i class="fa fa-user-o fa-lg"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
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
            <div class="clear"></div>
        </div>
    </div>
</div>
        </header>