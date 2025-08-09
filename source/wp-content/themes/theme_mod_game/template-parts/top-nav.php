<div class="top-nav">
    <i class="fa fa-bars menu-mini" aria-hidden="true"></i>
    <div class="logo"><?php bloginfo('name'); ?></div>
    <div class="search-area">
        <input id="search-input" placeholder="Tìm kiếm"/>
        <i class="fa fa fa-search"></i>
    </div>
    <div class="user-area">
        <div class="not-login">
            <div id="login-btn">
                <div class="text">Đăng nhập</div>
            </div>
            <div id="registry-btn">
                <div class="text">Đăng ký</div>
            </div>
        </div>
        <div class="logined">
            <div class="user-mail">
                <i class="fa fa-envelope" aria-hidden="true" id="mail"></i>
                <div class="new-notification"></div>
            </div>
            <div class="user-notification">
                <i aria-hidden="true" class="fa fa-bell" id="notification"></i>
                <div class="new-notification"></div>
            </div>
            <div class="mini-avatar">
                <img id="mini-avatar" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/public/theme/assets/images/profile-header.jpg'); ?>" alt="Thông tin tài khoản"
                     loading='lazy'/>
            </div>
            <div class="mini-info">
                <div class="mimi-name">

                </div>
                <div class="kpoint-group">
                    <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/public/theme/assets/images/kpoint.webp'); ?>" alt="KPoint của bạn" loading='lazy'>
                    <span id="kpoint">999.999</span>
                </div>
            </div>
        </div>
    </div>
</div>