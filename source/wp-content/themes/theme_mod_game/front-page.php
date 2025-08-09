<!DOCTYPE html>
<html lang=vi>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title id="page-title">TaigameKP - Tải Game Offline Hay Cho PC Miễn Phí (Khiphach v2.0)</title>
        <meta property="og:title" content="TaigameKP - Tải Game Offline Hay Cho PC Miễn Phí (Khiphach v2.0)"/>
        <meta property="og:description"
              content="Trang tải game offline cho pc với đầy đủ các thể loại bắn súng, nhập vai, kinh dị... Link tải nhanh có hướng dẫn chi tiết và nhiều tiện ích hỗ trợ khác cho anh em đây"/>
        <meta property="og:image" content="/images/logo.png"/>
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="https://taigamekp.com/"/>
        <meta name="description"
              content="Trang tải game offline cho pc với đầy đủ các thể loại bắn súng, nhập vai, kinh dị... Link tải nhanh có hướng dẫn chi tiết và nhiều tiện ích hỗ trợ khác cho anh em đây"/>
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="TaigameKP - Tải Game Offline Hay Cho PC Miễn Phí (Khiphach v2.0)"/>
        <meta name="twitter:description"
              content="Trang tải game offline cho pc với đầy đủ các thể loại bắn súng, nhập vai, kinh dị... Link tải nhanh có hướng dẫn chi tiết và nhiều tiện ích hỗ trợ khác cho anh em đây"/>
        <meta name="twitter:image" content="/images/logo.png"/>
        <meta name="twitter:type" content="website"/>
        <meta name="twitter:url" content="https://taigamekp.com/"/>
        <link rel="canonical" href="https://taigamekp.com/"/>
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
        <meta charset="UTF-8"/>
        <meta property="og:locale" content="vi_VN">
        <meta property="og:site_name" content="TaigameKP">
        <link rel="icon" type="image/ico" href="https://taigamekp.com/images/kpfavicon.ico"/>
        <script src="<?php echo getPublicFile('asset/js/jquery-3.6.1.min.js') ?>" crossorigin="anonymous"
                type="3386c33fa00f7b94b57fab00-text/javascript"></script>
        <script src="<?php echo getPublicFile('asset/js/jquery.cookie.min.js') ?>" crossorigin="anonymous"
                referrerpolicy="no-referrer"
                type="3386c33fa00f7b94b57fab00-text/javascript"></script>
        <script defer src="<?php echo getPublicFile('asset/js/sweetalert.min.js') ?>"
                type="3386c33fa00f7b94b57fab00-text/javascript"></script>
        <script defer src="<?php echo getPublicFile('asset/js/sweetalert2.min.js') ?>"
                type="3386c33fa00f7b94b57fab00-text/javascript"></script>
        <!--    <link href="--><?php //echo getPublicFile('asset/css/font-awesome.min.css') ?><!--" rel="stylesheet">-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
        <style>
            html,
            body {
                margin: 0px;
                background-color: #1b1c1e;
                color: #FFFFFF;
                font-family: 'Inter';
                font-size: 16px;
            }

            p {
                margin-top: 0px;
                margin-bottom: 0.5em;
            }

            /* Hide scrollbar for Chrome, Safari and Opera */
            body::-webkit-scrollbar {
                display: none;
            }

            .top-nav {
                display: flex;
                align-items: center;
                position: relative;
                width: 100%;
                height: 70px;
                left: 0px;
                top: 0px;
                background: #272a31;
                justify-content: center;
            }

            .logo {
                width: 190px;
                height: 46px;
                background: url("https://taigamekp.com/images/logo.webp");
                background-size: 190px 46px;
                flex: none;
                order: 0;
                flex-grow: 0;
                margin-left: 25px;
                cursor: pointer;
            }

            .search-area {
                display: flex;
                align-items: center;
                width: 593px;
                height: 38px;
                background: #ffffff;
                border-radius: 12px;
                flex: none;
                order: 1;
                flex-grow: 0;
                margin-left: auto;
            }

            .search-area i {
                width: 24px;
                height: 24px;
                color: #4F4F4F;
                padding-right: 17px;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            #search-input {
                border: none;
                width: 100%;
                outline: none;
                padding-left: 16px;
                border-radius: 12px;
            }

            .user-area {
                display: flex;
                flex-direction: row;
                align-items: center;
                padding: 0px;
                gap: 8px;
                flex: none;
                order: 2;
                flex-grow: 0;
                margin-left: auto;
                padding-right: 45px;
            }

            .user-area .text {
                font-family: "Inter";
                font-style: normal;
                font-size: 14px;
                line-height: 20px;
                display: flex;
                align-items: center;
                color: #ffab2d;
                flex: none;
                order: 0;
                flex-grow: 0;
            }

            #login-btn,
            #registry-btn {
                box-sizing: border-box;
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
                padding: 10px;
                gap: 10px;
                width: 108px;
                height: 39px;
                border: 1px solid #ffab2d;
                border-radius: 12px;
                flex: none;
                order: 0;
                cursor: pointer;
            }

            #login-btn {
                margin-left: 15px;
            }

            #registry-btn {
                background: #D12142;
                border: none;
            }

            #registry-btn .text {
                color: #FFFFFF;
            }

            .page-container {
                position: absolute;
                height: calc(100% - 70px);
                left: 292px;
                top: 70px;
                background: #1B1C1E;
                width: calc(100% - 335px);
                overflow: scroll;
            }

            .page-container::-webkit-scrollbar {
                display: none;
            }

            .page-container {
                -ms-overflow-style: none;
                scrollbar-width: none;
            }

            .announcements {
                display: flex;
                flex-direction: row;
                align-items: center;
                gap: 10px;
                height: 45px;
                margin-top: 8px;
                background: #272A31;
                box-shadow: 0px 0px 8px rgb(0 0 0 / 80%);
                border-radius: 6px;
            }

            .announcements-icon {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 10px;
                gap: 10px;
                width: 44px;
                height: 44px;
                flex: none;
                order: 0;
                flex-grow: 0;
                color: #EA2B4D;
            }

            .marquee {
                width: calc(100% - 137px);
                color: #FFAB2D;
            }

            .slider {
                margin-top: 8px;
                width: 100%;
                height: 628px;
                background: linear-gradient(360deg, rgb(2 2 2 / 88%) 47.28%, rgb(0 0 0 / 0%) 100.36%);
                border-radius: 6px;
                flex: none;
                order: 0;
                flex-grow: 0;
                z-index: 0;
            }

            .splide,
            .splide__track,
            .splide__list {
                height: 100%;
            }

            .splide__slide {
                background-size: cover;
            }

            .slide-info {
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                align-items: flex-start;
                padding: 25px 50px;
                gap: 16px;
                position: absolute;
                flex: none;
                order: 1;
                flex-grow: 0;
                z-index: 1;
                bottom: 0;
                background: linear-gradient(360deg, rgb(2 2 2 / 88%) 47.28%, rgb(0 0 0 / 0%) 100.36%);
            }

            .slide-info-name {
                width: 792px;
                font-family: 'Inter';
                font-style: normal;
                font-weight: 700;
                font-size: 48px;
                line-height: 58px;
                color: #FFFEFE;
                flex: none;
                order: 0;
                flex-grow: 0;
            }

            .slide-info-desc {
                height: 52px;
                font-weight: 500;
                font-size: 18px;
                line-height: 141.69%;
                color: #FFFFFF;
                flex: none;
                order: 1;
                flex-grow: 0;
                margin-block-start: 0;
                margin-block-end: 0;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                overflow: hidden;
                text-overflow: ellipsis;
            }

            .left-menu-item-active span {
                color: #FFAB2D !important;
            }

            .slide-info-btn {
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
                gap: 10px;
                width: 178px;
                height: 52px;
                background: #D12142;
                border-radius: 12px;
                flex: none;
                order: 2;
                flex-grow: 0;
                color: #FFFFFF;
                margin-top: 17px;
                text-decoration: none;
            }

            .game-update {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                padding: 0px;
                gap: 16px;
                width: 100%;
                margin-top: 23px;
            }

            .game-update-header {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
                padding: 0px;
                gap: 120px;
                width: 100%;
                height: 40px;
                flex: none;
                order: 0;
                flex-grow: 0;
            }

            .game-update-header-left {
                display: flex;
                flex-direction: row;
                align-items: center;
                padding: 0px;
                gap: 8px;
                width: 209px;
                height: 40px;
                flex: none;
                order: 0;
                flex-grow: 0;
                font-family: "Inter";
                color: #ffffff;
            }

            .game-update-header-right {
                font-size: 14px;
                text-transform: uppercase;
                color: #FFAB2D;
            }

            .game-update-container {
                display: grid;
                padding: 0px;
                gap: 16px;
                width: 100%;
                grid-template-columns: repeat(4, 1fr);
            }

            .game-thumbnail02 {
                display: flex;
                flex-direction: column;
                padding: 0px 0px 16px;
                gap: 12px;
                background: #272A31;
                border-radius: 12px;
                flex: none;
                flex-grow: 0;
                cursor: pointer;
            }

            .game-thumbnail-first {
                grid-column-start: 1;
                grid-column-end: 3;
                grid-row-end: 3;
                grid-row-start: 1;
            }

            .game-thumbnail02-image {
                width: 100%;
                height: 200px;
                border-radius: 6px 6px 0px 0px;
                flex: none;
                align-self: stretch;
                flex-grow: 0;
                position: relative;
                overflow: hidden;
            }

            .game-thumbnail-first .game-thumbnail02-image {
                height: 529px;
            }

            .game-thumbnail02-image img {
                position: absolute;
                top: 0;
                bottom: 0;
                right: 0;
                left: 0;
                background-position: center center;
                background-repeat: no-repeat;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                -webkit-transition: all .5s;
                -moz-transition: all .5s;
                -o-transition: all .5s;
                transition: all .5s;
            }

            .game-thumbnail02-types {
                display: flex;
                flex-direction: row;
                align-items: flex-start;
                padding: 0px 16px;
                gap: 8px;
                height: 26px;
                flex: none;
                align-self: stretch;
                flex-grow: 0;
            }

            .game-thumbnail-type-update {
                color: #FFFFFF !important;
                background: #006629 !important;
            }

            .game-thumbnail02-desc-info {
                padding-left: 16px !important;
                font-size: 14px !important;
            }

            .game-thumbnail02-title {
                padding-left: 16px !important;
                font-size: 16px !important;
            }

            .game-thumbnail-first .game-thumbnail02-title {
                font-size: 20px !important;
            }

            .top-game {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                padding: 0px;
                gap: 16px;
                width: 100%;
                flex: none;
                flex-grow: 0;
                margin-top: 40px;
            }

            .top-game-header {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
                padding: 0px;
                gap: 120px;
                width: 100%;
                height: 40px;
                flex: none;
                flex-grow: 0;
            }

            .top-game-header-left {
                display: flex;
                flex-direction: row;
                align-items: center;
                padding: 0px;
                gap: 8px;
                height: 40px;
                flex: none;
                flex-grow: 0;
                font-family: "Inter";
                color: #ffffff;
            }

            .top-game-header-right {
                display: flex;
                flex-direction: row;
                align-items: flex-start;
                padding: 0px;
                gap: 6px;
                height: 40px;
                flex: none;
                flex-grow: 0;
            }

            .top-game-type {
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
                padding: 10px;
                gap: 10px;
                font-weight: 500;
                line-height: 20px;
                text-transform: capitalize;
                color: #FFFFFF;
            }

            .top-game-type-active {
                color: #FFAB2D;
            }

            .top-game-container {
                padding: 0px;
                gap: 16px;
                width: 100%;
                display: grid;
                grid-template-columns: repeat(4, 1fr);
            }

            .container-footer {
                height: 20px;
            }

            .avatar img {
                width: 126px;
                border-radius: 63px;
                height: 126px;
                object-fit: cover;
            }

            .game-thumbnail-desc-info span span {
                color: #FFFEFE;
            }

            .field-title {
                font-size: 14px;
            }

            .user-pop-up {
                position: absolute;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                background: #000000cc;
                justify-content: center;
                align-items: center;
                z-index: 10;
            }

            img {
                -webkit-user-drag: none;
                -khtml-user-drag: none;
                -moz-user-drag: none;
                -o-user-drag: none;
                user-drag: none;
            }

            .ajax-loading {
                position: absolute;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                z-index: 90000;
                background: #000000cc;
                display: none;
                justify-content: center;
                align-items: center;
            }

            .pop-up,
            .pop-up-media {
                position: absolute;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                z-index: 10;
                background: #000000cc;
                display: none;
                justify-content: center;
                align-items: center;
            }

            .pop-up-media {
                background: black;
            }

            .not-login {
                display: flex;
                gap: inherit;
            }

            .logined {
                display: none;
                gap: inherit;
                justify-content: center;
                align-items: center;
            }

            .mini-avatar {
                border-radius: 50%;
                overflow: hidden;
                justify-content: center;
                align-items: center;
                display: flex;
                cursor: pointer;
            }

            .notification-list {
                position: absolute;
                right: 43px;
                top: 70px;
                width: 350px;
                background: #2e3442;
                border-radius: 5px;
                z-index: 10;
                padding: 20px;
                display: none;
                flex-direction: column;
                gap: 20px;
            }

            .menu-mini {
                display: none;
            }

            .container-cover {
                position: absolute;
                top: 0;
                left: 0;
                right: -10px;
                bottom: 0;
                background: black;
                opacity: 0.7;
                display: none;
            }

            .user-icon-login {
                font-size: 30px;
                margin-left: auto;
                margin-right: 15px;
                display: none;
            }

            .my-account-avatar {
                width: 40px;
                height: 40px;
                margin-right: 10px;
                margin-left: auto;
                display: none;
            }

            a.game-a-tag {
                text-decoration: auto;
                overflow: hidden;
            }

            .grecaptcha-badge {
                display: none !important;
            }

            .game-thumbnail02-image img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .splide__slide img {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

        </style>
        <link rel="stylesheet" href="<?php echo getPublicFile('asset/css/main.css') ?>"/>
        <link rel="stylesheet" href="<?php echo getPublicFile('asset/css/games.css') ?>"/>
        <link rel="stylesheet" href="<?php echo getPublicFile('asset/css/top-member.css') ?>"/>
        <link rel="stylesheet" href="<?php echo getPublicFile('asset/css/left-menu.css') ?>"/>
        <link rel="stylesheet" href="<?php echo getPublicFile('asset/css/splide.min.css') ?>"/>
        <link rel="stylesheet" href="<?php echo getPublicFile('asset/css/new-game.css') ?>"/>
        <link rel="stylesheet" href="<?php echo getPublicFile('asset/css/game.css') ?>"/>
        <link rel="stylesheet" href="<?php echo getPublicFile('asset/css/account.css') ?>"/>
        <link rel="stylesheet" href="<?php echo getPublicFile('asset/css/breakpoint.css') ?>"/>
        <script defer src="<?php echo getPublicFile('asset/js/splide.min.js') ?>"></script>
        <script defer src="<?php echo getPublicFile('asset/js/main.js') ?>"></script>
        <script defer src="<?php echo getPublicFile('asset/js/left-menu.js') ?>"></script>
    </head>

    <body>
        <div class="top-nav">
            <i class="fa fa-bars menu-mini" aria-hidden="true"></i>
            <div class="logo"></div>
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
                        <img id="mini-avatar" src="https://taigamekp.com//images/avatar.webp" alt="Thông tin tài khoản"
                             loading='lazy'/>
                    </div>
                    <div class="mini-info">
                        <div class="mimi-name">

                        </div>
                        <div class="kpoint-group">
                            <img src="https://taigamekp.com//images/kpoint.webp" alt="KPoint của bạn" loading='lazy'>
                            <span id="kpoint">999.999</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="left-menu">
            <?php
                $menu_name = 'left-menu';
                $locations = get_nav_menu_locations();

                if (isset($locations[$menu_name])) {
                    $menu = wp_get_nav_menu_object($locations[$menu_name]);
                    $menu_items = wp_get_nav_menu_items($menu->term_id);

                    $menu_tree = [];

                    foreach ($menu_items as $item) {
                        if ($item->menu_item_parent == 0) {
                            $menu_tree[$item->ID] = [
                                'item' => $item,
                                'children' => []
                            ];
                        } else {
                            $menu_tree[$item->menu_item_parent]['children'][] = $item;
                        }
                    }
                    ?>

                    <div class="left-menu-items">
                        <?php foreach ($menu_tree as $parent): ?>
                            <a class="left-menu-item" href="<?php echo esc_url($parent['item']->url); ?>">
                                <div class="left-menu-item-icon">
                                    <i class="fa fa-gamepad"></i>
                                </div>
                                <div class="left-menu-item-text">
                                    <span><?php echo esc_html($parent['item']->title); ?></span>
                                </div>
                                <?php if (!empty($parent['children'])): ?>
                                    <div class="left-menu-item-more">
                                        <i class="fa fa-chevron-up" aria-hidden="true"></i>
                                    </div>
                                <?php endif; ?>
                            </a>

                            <?php if (!empty($parent['children'])): ?>
                                <div class="left-menu-items left-menu-item-child">
                                    <?php foreach ($parent['children'] as $child): ?>
                                        <a class="left-menu-item" href="<?php echo esc_url($child->url); ?>">
                                            <div class="left-menu-item-icon"></div>
                                            <h2 class="left-menu-item-text">
                                                <span><?php echo esc_html($child->title); ?></span>
                                            </h2>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <?php
                }
            ?>
            <div class="left-menu-social">
                <a class="left-menu-social-item" id="fb-link" href="https://www.facebook.com/taigamekp/" target="_blank"
                   rel="noopener" aria-label="FB Khí Phách">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <div class="left-menu-social-item">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </div>
                <div class="left-menu-social-item">
                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </div>
            </div>
            <div class="left-menu-footer">
                <span>© <?php echo date('Y'); ?> By KimLong</span>
            </div>
        </div>

        <div class="page-container">
            <script type="3386c33fa00f7b94b57fab00-text/javascript">
                $(document).ready(function() {
                    $(".left-menu-item").removeClass("left-menu-item-active");
                                var gameOffMenu = $(".left-menu-items").find("[value='/']");
                                $(gameOffMenu).addClass("left-menu-item-active");
                    $(this).scrollTop(0);
                    var splide = new Splide(".splide");
                    splide.mount();
                    var mouseDownOnMember = false;
                    var xPosMouseDown = 0;
                    var xCategoryLeft = 0;
                    openGame(".new-game-post");
                    openGame(".game-thumbnail02");
                    categoryClick();
                    $(".top-members-container").on("mousedown", function(e) {
                        mouseDownOnMember = true;
                        xPosMouseDown = e.clientX;
                        xCategoryLeft = $(this).scrollLeft();
                    });
                    $(".top-members-container").on("mouseup", function() {
                        mouseDownOnMember = false;
                    });
                    $(".top-members-container").on("mousemove", function(e) {
                        if (mouseDownOnMember) {
                            var distance = e.clientX - xPosMouseDown;
                            $(this).scrollLeft(xCategoryLeft - distance);
                        }
                    });
                    $(".top-members-container").on("mouseleave", function() {
                        mouseDownOnMember = false;
                    });

                    $(".top-game-type").on("click", function() {
                        $(".top-game-type").removeClass("top-game-type-active");
                        $(this).addClass("top-game-type-active");
                        var categoryId = $(this).attr('data-id');
                        ajLoadTopGame(categoryId);
                    });

                    $("#all-new-game").on("click", function() {
                        chooseOfflineMenu();
                        window.history.pushState("", "", "/game-offline");
                        showGames();
                    });

                    $("#all-update-game").on("click", function() {
                        chooseOfflineMenu();
                        window.history.pushState("", "", "/game-offline?type=updated");
                        showGames();
                    });
                });

                function ajLoadTopGame(categories = '') {
                    $(".top-game-container").html('');
                    var size = 12;
                    if (isResoution(1366) || isResoution(1440) || isResoution(1280)) {
                        size = 9;
                    }
                    if (isResoution(2560)) {
                        size = 12;
                    }
                    if (isMobile()) {
                        size = 5;
                    }
                    $.ajax({
                        url: apiHost + "/game/search?isHot=true&size=" + size + "&categories=" + categories,
                        type: "get",
                        contentType: "application/json",
                        success: function(msg) {
                            i = 1;
                            msg.content.forEach(game => {
                                $(".top-game-container").append(
                                    "<a class='game-a-tag' href='/" + game.url + "'>" +
                                    "<div url='" + game.url + "' data-id='" + game.id + "' class='game-thumbnail02'>" +
                                    "    <div class='game-thumbnail02-image'>" +
                                    "        <img src='/images" + generateThumbnailUrl(game.coverImage) + "' loading='lazy' alt='Tải "+game.title+" Full Cho PC'></img>" +
                                    "    </div>" +
                                    "    <div class='game-thumbnail02-types'>" + (game.updated ? "<div class='game-thumbnail-type game-thumbnail-type-update'>Update</div>" : "") +
                                    getCategories(game, game.updated ? 1 : 2) +
                                    "    </div>" +
                                    "    <h3 class='game-thumbnail-title game-thumbnail02-title'>" +
                                    game.title +
                                    "    </h3>" +
                                    "    <div class='game-thumbnail-desc-info game-thumbnail02-desc-info'>" +
                                    "        <span>By <span>" + game.updatedBy + "</span></span><span>" + new Date(game.updatedAt).toShortFormat() + "</span>" +
                                    "    </div>" +
                                    "</div></a>"
                                );
                                i++;
                            });
                            openGame(".game-thumbnail02");
                            categoryClick();
                        }
                    });
                }
            </script>
            <div class="slider">
                <div class="splide" role="group" aria-label="Splide Basic HTML Example">
                    <div class="splide__track">
                        <div class="splide__list" id="slide-data">
                            <div class='splide__slide'>
                                <div class='slide-info'>
                                    <div class='slide-info-name'>FINAL FANTASY XVI</div>
                                    <p class='slide-info-desc'>Final Fantasy XVI là phần mới nhất trong loạt game nhập vai huyền
                                        thoại của Square Enix, đưa người chơi vào thế giới Valisthea—một lục địa nơi các vương
                                        quốc tranh giành quyền kiểm soát những tinh thể phép thuật khổng lồ. Người chơi theo
                                        chân Clive Rosfield, một chiến binh mang trong mình bi kịch và sứ mệnh bảo vệ em trai
                                        Joshua, người được chọn làm vật chủ của Phoenix, một trong những Eikon hùng mạnh. </p>
                                    <a class='slide-info-btn' href='https://taigamekp.com/final-fantasy-xvi'>
                                        <span>Xem thêm</span> </a></div>
                                <img class='banner-img' fetchpriority='high'
                                     src='https://taigamekp.com//images/media/x1280/FINAL-FANTASY-XVI-COMPLETE-EDITION.webp'>
                            </div>
                            <div class='splide__slide'>
                                <div class='slide-info'>
                                    <div class='slide-info-name'>FINAL FANTASY VII REBIRTH</div>
                                    <p class='slide-info-desc'>Final Fantasy VII Rebirth là phần thứ hai trong bộ ba game làm
                                        lại từ Final Fantasy VII, tiếp nối câu chuyện sau Remake. Trò chơi đưa Cloud và đồng đội
                                        rời khỏi Midgar, bước vào một thế giới rộng lớn với những vùng đất mới, bí ẩn chưa được
                                        khám phá và những kẻ thù đáng gờm. Với hệ thống chiến đấu cải tiến, đồ họa đỉnh cao và
                                        câu chuyện được mở rộng đầy bất ngờ, Rebirth hứa hẹn mang đến một trải nghiệm nhập vai
                                        hoành tráng, vừa quen thuộc vừa đầy mới mẻ cho cả fan cũ lẫn người chơi mới. </p>
                                    <a class='slide-info-btn' href='https://taigamekp.com/final-fantasy-vii-rebirth'> <span>Xem thêm</span>
                                    </a></div>
                                <img class='banner-img' fetchpriority='high'
                                     src='https://taigamekp.com//images/media/x1280/final-fantasy-vii-rebirth-copertina-HD-scaled_1.webp'>
                            </div>
                            <div class='splide__slide'>
                                <div class='slide-info'>
                                    <div class='slide-info-name'>Elden Ring Shadow of the Erdtree Edition</div>
                                    <p class='slide-info-desc'>Trong Elden Ring, người chơi sẽ bước vào một thế giới mở rộng đầy
                                        bí ẩn và nguy hiểm. Hành trình của bạn sẽ đưa bạn qua các vùng đất đa dạng, từ đồng cỏ
                                        tràn ngập ánh nắng mặt trời cho đến những vùng đất tăm tối và ma quái. Bạn sẽ khám phá
                                        các thành phố hoang tàn, ngọn núi cao chọc trời, và hang động chứa đựng những bí mật cổ
                                        xưa. Tải em game này về để chiến rồi cho ad xin ít comment bên dưới nhé! </p>        <a
                                            class='slide-info-btn' href='https://taigamekp.com/elden-ring'>
                                        <span>Xem thêm</span> </a></div>
                                <img class='banner-img' fetchpriority='high'
                                     src='https://taigamekp.com//images/media/x1280/tai-elden-ring-shadow-of-the-erdtree-full.webp'>
                            </div>
                            <div class='splide__slide'>
                                <div class='slide-info'>
                                    <div class='slide-info-name'>Metaphor: ReFantazio</div>
                                    <p class='slide-info-desc'>Metaphor: ReFantazio là một tựa game nhập vai phiêu lưu mới đầy
                                        sáng tạo từ đội ngũ phát triển đứng sau loạt game Persona. Lấy bối cảnh trong một thế
                                        giới giả tưởng huyền bí và rộng lớn, trò chơi đưa người chơi vào một hành trình đầy thử
                                        thách để khám phá những bí ẩn cổ xưa, đối đầu với quái vật và các thế lực siêu
                                        nhiên. </p>        <a class='slide-info-btn'
                                                              href='https://taigamekp.com/metaphor-refantazio'>
                                        <span>Xem thêm</span> </a></div>
                                <img class='banner-img' fetchpriority='high'
                                     src='https://taigamekp.com//images/media/x1280/tai-metaphor-full.webp'>
                            </div>
                            <div class='splide__slide'>
                                <div class='slide-info'>
                                    <div class='slide-info-name'>God of War Ragnarok</div>
                                    <p class='slide-info-desc'>God of War Ragnarok là phần tiếp theo của loạt game hành động
                                        phiêu lưu nổi tiếng, tiếp tục hành trình của Kratos và con trai Atreus trong thế giới
                                        thần thoại Bắc Âu. Lần này, họ đối mặt với lời tiên tri về ngày tận thế – Ragnarök.
                                        Trong hành trình này, Kratos phải đối diện với những thử thách khốc liệt từ các vị thần
                                        Bắc Âu như Thor và Freya, đồng thời đối mặt với chính mối quan hệ phức tạp giữa ông và
                                        Atreus </p>        <a class='slide-info-btn'
                                                              href='https://taigamekp.com/god-of-war-ragnarok'>
                                        <span>Xem thêm</span> </a></div>
                                <img class='banner-img' fetchpriority='high'
                                     src='https://taigamekp.com//images/media/x1280/god-of-war-ragnarok.webp'>
                            </div>
                            <div class='splide__slide'>
                                <div class='slide-info'>
                                    <div class='slide-info-name'>SILENT HILL 2 Remake</div>
                                    <p class='slide-info-desc'>SILENT HILL 2 Remake là phiên bản làm lại của tựa game kinh dị
                                        tâm lý cổ điển Silent Hill 2, mang đến đồ họa và âm thanh hiện đại hơn, nhưng vẫn giữ
                                        nguyên bầu không khí u ám, đáng sợ vốn đã trở thành thương hiệu của loạt game. Người
                                        chơi vào vai James Sunderland, một người đàn ông nhận được bức thư bí ẩn từ người vợ đã
                                        mất của mình, yêu cầu anh đến thị trấn Silent Hill. </p>        <a
                                            class='slide-info-btn' href='https://taigamekp.com/silent-hill-2-remake'> <span>Xem thêm</span>
                                    </a></div>
                                <img class='banner-img' fetchpriority='high'
                                     src='https://taigamekp.com//images/media/x1280/tai-game-silent-hill-2-remake.webp'>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-members">
                <div class="top-members-header">
                    <div class="top-members-header-left">
                        <img src="https://taigamekp.com//images/medal-star.webp" alt="Top Khí Phách member" width="30"
                             height="30">
                        <span>TOP MEMBERS</span>
                    </div>
                    <div class="top-members-header-right more-more">
                        <span>XEM TẤT CẢ</span>
                    </div>
                </div>
                <div class="top-members-container" id="top-members-container">
                    <div class='top-members-container-item'>
                        <div class='top-members-item-image'>
                            <div class='avatar'><img
                                        src='https://taigamekp.com//images/avatar/x126/ef1e4f5363d81316cdc5f71ad8a1d34b_1.jpg'
                                        loading='lazy' alt='Khí Phách'/></div>
                            <div class='top-members-item-name'>
                                <div class='first-line'>Khí Phách</div>
                                <div class='second-line'>khiphach</div>
                            </div>
                            <div class='member-summary-point'>
                                <div class='member-summary-point-type'><span>Đã mở</span> <span>Điểm</span></div>
                                <div class='member-summary-point-data'><span class='first-line'>14 Game</span> <span
                                            class='second-line'>1099</span></div>
                            </div>
                            <img class='member-top-badge' src='https://taigamekp.com//images/top1.webp'
                                 alt='Top 1 Khí Phách member'/></div>
                    </div>
                    <div class='top-members-container-item'>
                        <div class='top-members-item-image'>
                            <div class='avatar'><img src='https://taigamekp.com//images/avatar/x126/gifmaker_me.gif'
                                                     loading='lazy' alt='NDHK'/></div>
                            <div class='top-members-item-name'>
                                <div class='first-line'>NDHK</div>
                                <div class='second-line'>ndhk93</div>
                            </div>
                            <div class='member-summary-point'>
                                <div class='member-summary-point-type'><span>Đã mở</span> <span>Điểm</span></div>
                                <div class='member-summary-point-data'><span class='first-line'>146 Game</span> <span
                                            class='second-line'>752</span></div>
                            </div>
                            <img class='member-top-badge' src='https://taigamekp.com//images/top2.webp'
                                 alt='Top 2 Khí Phách member'/></div>
                    </div>
                    <div class='top-members-container-item'>
                        <div class='top-members-item-image'>
                            <div class='avatar'><img src='https://taigamekp.com//images/avatar.webp' loading='lazy'
                                                     alt='Noblood'/></div>
                            <div class='top-members-item-name'>
                                <div class='first-line'>Noblood</div>
                                <div class='second-line'>kuphu1991</div>
                            </div>
                            <div class='member-summary-point'>
                                <div class='member-summary-point-type'><span>Đã mở</span> <span>Điểm</span></div>
                                <div class='member-summary-point-data'><span class='first-line'>61 Game</span> <span
                                            class='second-line'>502</span></div>
                            </div>
                            <img class='member-top-badge' src='https://taigamekp.com//images/top3.webp'
                                 alt='Top 3 Khí Phách member'/></div>
                    </div>
                    <div class='top-members-container-item'>
                        <div class='top-members-item-image'>
                            <div class='avatar'><img src='https://taigamekp.com//images/avatar.webp' loading='lazy'
                                                     alt='PhuThu'/></div>
                            <div class='top-members-item-name'>
                                <div class='first-line'>PhuThu</div>
                                <div class='second-line'>LiLongThu</div>
                            </div>
                            <div class='member-summary-point'>
                                <div class='member-summary-point-type'><span>Đã mở</span> <span>Điểm</span></div>
                                <div class='member-summary-point-data'><span class='first-line'>13 Game</span> <span
                                            class='second-line'>446</span></div>
                            </div>
                        </div>
                    </div>
                    <div class='top-members-container-item'>
                        <div class='top-members-item-image'>
                            <div class='avatar'><img src='https://taigamekp.com//images/avatar.webp' loading='lazy'
                                                     alt='vulinh'/></div>
                            <div class='top-members-item-name'>
                                <div class='first-line'>vulinh</div>
                                <div class='second-line'>doanvulinh</div>
                            </div>
                            <div class='member-summary-point'>
                                <div class='member-summary-point-type'><span>Đã mở</span> <span>Điểm</span></div>
                                <div class='member-summary-point-data'><span class='first-line'>1 Game</span> <span
                                            class='second-line'>392</span></div>
                            </div>
                        </div>
                    </div>
                    <div class='top-members-container-item'>
                        <div class='top-members-item-image'>
                            <div class='avatar'><img src='https://taigamekp.com//images/avatar.webp' loading='lazy'
                                                     alt='Linh Phung'/></div>
                            <div class='top-members-item-name'>
                                <div class='first-line'>Linh Phung</div>
                                <div class='second-line'>PhungLinh888</div>
                            </div>
                            <div class='member-summary-point'>
                                <div class='member-summary-point-type'><span>Đã mở</span> <span>Điểm</span></div>
                                <div class='member-summary-point-data'><span class='first-line'>14 Game</span> <span
                                            class='second-line'>378</span></div>
                            </div>
                        </div>
                    </div>
                    <div class='top-members-container-item'>
                        <div class='top-members-item-image'>
                            <div class='avatar'><img
                                        src='https://taigamekp.com//images/avatar/x126/455683266_538222025297160_4724760219857435499_n_1.jpg'
                                        loading='lazy' alt='Cha Eun Long'/></div>
                            <div class='top-members-item-name'>
                                <div class='first-line'>Cha Eun Long</div>
                                <div class='second-line'>kwonjilong</div>
                            </div>
                            <div class='member-summary-point'>
                                <div class='member-summary-point-type'><span>Đã mở</span> <span>Điểm</span></div>
                                <div class='member-summary-point-data'><span class='first-line'>4 Game</span> <span
                                            class='second-line'>368</span></div>
                            </div>
                        </div>
                    </div>
                    <div class='top-members-container-item'>
                        <div class='top-members-item-image'>
                            <div class='avatar'><img src='https://taigamekp.com//images/avatar.webp' loading='lazy'
                                                     alt='YoungBoiii'/></div>
                            <div class='top-members-item-name'>
                                <div class='first-line'>YoungBoiii</div>
                                <div class='second-line'>nhaan</div>
                            </div>
                            <div class='member-summary-point'>
                                <div class='member-summary-point-type'><span>Đã mở</span> <span>Điểm</span></div>
                                <div class='member-summary-point-data'><span class='first-line'>47 Game</span> <span
                                            class='second-line'>364</span></div>
                            </div>
                        </div>
                    </div>
                    <div class='top-members-container-item'>
                        <div class='top-members-item-image'>
                            <div class='avatar'><img src='https://taigamekp.com//images/avatar.webp' loading='lazy'
                                                     alt='hoai an'/></div>
                            <div class='top-members-item-name'>
                                <div class='first-line'>hoai an</div>
                                <div class='second-line'>anhoai1996</div>
                            </div>
                            <div class='member-summary-point'>
                                <div class='member-summary-point-type'><span>Đã mở</span> <span>Điểm</span></div>
                                <div class='member-summary-point-data'><span class='first-line'>2 Game</span> <span
                                            class='second-line'>364</span></div>
                            </div>
                        </div>
                    </div>
                    <div class='top-members-container-item'>
                        <div class='top-members-item-image'>
                            <div class='avatar'><img src='https://taigamekp.com//images/avatar.webp' loading='lazy'
                                                     alt='Chris Nguyen'/></div>
                            <div class='top-members-item-name'>
                                <div class='first-line'>Chris Nguyen</div>
                                <div class='second-line'>chriznguyen264</div>
                            </div>
                            <div class='member-summary-point'>
                                <div class='member-summary-point-type'><span>Đã mở</span> <span>Điểm</span></div>
                                <div class='member-summary-point-data'><span class='first-line'>4 Game</span> <span
                                            class='second-line'>358</span></div>
                            </div>
                        </div>
                    </div>
                    <div class='top-members-container-item'>
                        <div class='top-members-item-image'>
                            <div class='avatar'><img src='https://taigamekp.com//images/avatar.webp' loading='lazy'
                                                     alt='danhbdh'/></div>
                            <div class='top-members-item-name'>
                                <div class='first-line'>danhbdh</div>
                                <div class='second-line'>hongdanhkg1991</div>
                            </div>
                            <div class='member-summary-point'>
                                <div class='member-summary-point-type'><span>Đã mở</span> <span>Điểm</span></div>
                                <div class='member-summary-point-data'><span class='first-line'>7 Game</span> <span
                                            class='second-line'>354</span></div>
                            </div>
                        </div>
                    </div>
                    <div class='top-members-container-item'>
                        <div class='top-members-item-image'>
                            <div class='avatar'><img src='https://taigamekp.com//images/avatar.webp' loading='lazy'
                                                     alt='Tran Quan'/></div>
                            <div class='top-members-item-name'>
                                <div class='first-line'>Tran Quan</div>
                                <div class='second-line'>thinhhoang2551995</div>
                            </div>
                            <div class='member-summary-point'>
                                <div class='member-summary-point-type'><span>Đã mở</span> <span>Điểm</span></div>
                                <div class='member-summary-point-data'><span class='first-line'>33 Game</span> <span
                                            class='second-line'>340</span></div>
                            </div>
                        </div>
                    </div>
                    <div class='top-members-container-item'>
                        <div class='top-members-item-image'>
                            <div class='avatar'><img src='https://taigamekp.com//images/avatar/x126/kuntaduy.jpg' loading='lazy'
                                                     alt='death law'/></div>
                            <div class='top-members-item-name'>
                                <div class='first-line'>death law</div>
                                <div class='second-line'>kuntaduy</div>
                            </div>
                            <div class='member-summary-point'>
                                <div class='member-summary-point-type'><span>Đã mở</span> <span>Điểm</span></div>
                                <div class='member-summary-point-data'><span class='first-line'>53 Game</span> <span
                                            class='second-line'>336</span></div>
                            </div>
                        </div>
                    </div>
                    <div class='top-members-container-item'>
                        <div class='top-members-item-image'>
                            <div class='avatar'><img src='https://taigamekp.com//images/avatar.webp' loading='lazy'
                                                     alt='le nhat quyet'/></div>
                            <div class='top-members-item-name'>
                                <div class='first-line'>le nhat quyet</div>
                                <div class='second-line'>lenhatquyet</div>
                            </div>
                            <div class='member-summary-point'>
                                <div class='member-summary-point-type'><span>Đã mở</span> <span>Điểm</span></div>
                                <div class='member-summary-point-data'><span class='first-line'>35 Game</span> <span
                                            class='second-line'>310</span></div>
                            </div>
                        </div>
                    </div>
                    <div class='top-members-container-item'>
                        <div class='top-members-item-image'>
                            <div class='avatar'><img src='https://taigamekp.com//images/avatar.webp' loading='lazy'
                                                     alt='anhit'/></div>
                            <div class='top-members-item-name'>
                                <div class='first-line'>anhit</div>
                                <div class='second-line'>anhit</div>
                            </div>
                            <div class='member-summary-point'>
                                <div class='member-summary-point-type'><span>Đã mở</span> <span>Điểm</span></div>
                                <div class='member-summary-point-data'><span class='first-line'>89 Game</span> <span
                                            class='second-line'>309</span></div>
                            </div>
                        </div>
                    </div>
                    <div class='top-members-container-item'>
                        <div class='top-members-item-image'>
                            <div class='avatar'><img src='https://taigamekp.com//images/avatar.webp' loading='lazy'
                                                     alt='Lvp6688'/></div>
                            <div class='top-members-item-name'>
                                <div class='first-line'>Lvp6688</div>
                                <div class='second-line'>Lvp09</div>
                            </div>
                            <div class='member-summary-point'>
                                <div class='member-summary-point-type'><span>Đã mở</span> <span>Điểm</span></div>
                                <div class='member-summary-point-data'><span class='first-line'>2 Game</span> <span
                                            class='second-line'>304</span></div>
                            </div>
                        </div>
                    </div>
                    <div class='top-members-container-item'>
                        <div class='top-members-item-image'>
                            <div class='avatar'><img src='https://taigamekp.com//images/avatar.webp' loading='lazy' alt='hung'/>
                            </div>
                            <div class='top-members-item-name'>
                                <div class='first-line'>hung</div>
                                <div class='second-line'>dohung123</div>
                            </div>
                            <div class='member-summary-point'>
                                <div class='member-summary-point-type'><span>Đã mở</span> <span>Điểm</span></div>
                                <div class='member-summary-point-data'><span class='first-line'>29 Game</span> <span
                                            class='second-line'>268</span></div>
                            </div>
                        </div>
                    </div>
                    <div class='top-members-container-item'>
                        <div class='top-members-item-image'>
                            <div class='avatar'><img src='https://taigamekp.com//images/avatar.webp' loading='lazy'
                                                     alt='ammattang'/></div>
                            <div class='top-members-item-name'>
                                <div class='first-line'>ammattang</div>
                                <div class='second-line'>lamobro</div>
                            </div>
                            <div class='member-summary-point'>
                                <div class='member-summary-point-type'><span>Đã mở</span> <span>Điểm</span></div>
                                <div class='member-summary-point-data'><span class='first-line'>70 Game</span> <span
                                            class='second-line'>260</span></div>
                            </div>
                        </div>
                    </div>
                    <div class='top-members-container-item'>
                        <div class='top-members-item-image'>
                            <div class='avatar'><img src='https://taigamekp.com//images/avatar.webp' loading='lazy'
                                                     alt='Chánh lê'/></div>
                            <div class='top-members-item-name'>
                                <div class='first-line'>Chánh lê</div>
                                <div class='second-line'>chanhle89vn</div>
                            </div>
                            <div class='member-summary-point'>
                                <div class='member-summary-point-type'><span>Đã mở</span> <span>Điểm</span></div>
                                <div class='member-summary-point-data'><span class='first-line'>5 Game</span> <span
                                            class='second-line'>260</span></div>
                            </div>
                        </div>
                    </div>
                    <div class='top-members-container-item'>
                        <div class='top-members-item-image'>
                            <div class='avatar'><img src='https://taigamekp.com//images/avatar/x126/levistrong.jpg'
                                                     loading='lazy' alt='Levistrong'/></div>
                            <div class='top-members-item-name'>
                                <div class='first-line'>Levistrong</div>
                                <div class='second-line'>levistrong</div>
                            </div>
                            <div class='member-summary-point'>
                                <div class='member-summary-point-type'><span>Đã mở</span> <span>Điểm</span></div>
                                <div class='member-summary-point-data'><span class='first-line'>79 Game</span> <span
                                            class='second-line'>258</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="new-game">
                <div class="new-game-header">
                    <div class="new-game-header-left">
                        <img src="https://taigamekp.com//images/union.webp" alt="Game offline mới" width="30" height="23">
                        <span>GAME MỚI</span>
                    </div>
                    <div class="new-game-header-right  more-more" id="all-new-game">
                        <span>XEM TẤT CẢ</span>
                    </div>
                </div>
                <div class="new-game-container">
                    <a class='game-a-tag new-game-post-first' href='https://taigamekp.com//wuchang-fallen-feathers'>
                        <div url='wuchang-fallen-feathers' data-id='819' class='new-game-post new-game-post-first'>
                            <div class='game-thumbnail-background'
                                 style='background-image: url("https://taigamekp.com/images/media/tai-wuchang-fallen-feathers-full.JPG");'></div>
                            <div class='game-thumbnail-info'>
                                <div class='game-thumbnail-types'>
                                    <div class='game-thumbnail-type' data-id='16' url='the-gioi-mo'>Thế Giới Mở</div>
                                    <div class='game-thumbnail-type' data-id='23' url='chat-chem'>Chặt Chém</div>
                                    <div class='game-thumbnail-type' data-id='3' url='nhap-vai'>Nhập Vai</div>
                                </div>
                                <h3 class='game-thumbnail-title game-thumbnail-title-first'>WUCHANG: Fallen Feathers </h3>
                                <div class='game-thumbnail-desc'><p class='game-thumbnail-desc-content'>WUCHANG: Fallen Feathers
                                        l&agrave; tựa game nhập vai h&agrave;nh động linh hồn (soulslike) đầy thử th&aacute;ch,
                                        lấy bối cảnh cuối thời Minh hỗn loạn. Người chơi sẽ h&oacute;a th&acirc;n th&agrave;nh
                                        Bạch Ng&ocirc; Thường, một nữ hải tặc mất tr&iacute; nhớ, phải chiến đấu để sinh tồn v&agrave;
                                        t&igrave;m ra sự thật về qu&aacute; khứ của m&igrave;nh. Bị ảnh hưởng bởi một dịch bệnh
                                        b&iacute; ẩn biến con người th&agrave;nh qu&aacute;i vật, bạn phải th&ocirc;ng thạo hệ
                                        thống chiến đấu đa dạng. Kh&aacute;m ph&aacute; v&ugrave;ng đất Thục cổ đại đầy nguy
                                        hiểm v&agrave; đưa ra những lựa chọn định h&igrave;nh n&ecirc;n số phận của bạn. Tr&ograve;
                                        chơi hứa hẹn một cuộc phi&ecirc;u lưu đen tối với nhiều kết th&uacute;c kh&aacute;c
                                        nhau. </p>
                                    <div class='game-thumbnail-desc-info'>
                                        <span>By <span>khiphach</span></span><span>25-Jul-2025</span></div>
                                </div>
                            </div>
                        </div>
                    </a><a class='game-a-tag' href='https://taigamekp.com//edens-zero'>
                        <div url='edens-zero' data-id='818' class='new-game-post'>
                            <div class='game-thumbnail-background'
                                 style='background-image: url(https://taigamekp.com/images/media/x450/tai-edens-zero-full-cho-pc.webp);'></div>
                            <div class='game-thumbnail-info'>
                                <div class='game-thumbnail-types'>
                                    <div class='game-thumbnail-type' data-id='18' url='anime'>Anime</div>
                                    <div class='game-thumbnail-type' data-id='3' url='nhap-vai'>Nhập Vai</div>
                                    <div class='game-thumbnail-type' data-id='6' url='hanh-dong'>Hành Động</div>
                                </div>
                                <h3 class='game-thumbnail-title game-thumbnail-title-first'>EDENS ZERO </h3>
                                <div class='game-thumbnail-desc'>
                                    <div class='game-thumbnail-desc-info'>
                                        <span>By <span>khiphach</span></span><span>19-Jul-2025</span></div>
                                </div>
                            </div>
                        </div>
                    </a><a class='game-a-tag' href='https://taigamekp.com//dragon-ball-z-kakarot'>
                        <div url='dragon-ball-z-kakarot' data-id='330' class='new-game-post'>
                            <div class='game-thumbnail-background'
                                 style='background-image: url(https://taigamekp.com/images/media/x450/tai-dragonball-z-kakarot-daima-full-cho-pc.webp);'></div>
                            <div class='game-thumbnail-info'>
                                <div class='game-thumbnail-types'>
                                    <div class='game-thumbnail-type game-thumbnail-type-update'>Update</div>
                                    <div class='game-thumbnail-type' data-id='6' url='hanh-dong'>Hành Động</div>
                                    <div class='game-thumbnail-type' data-id='3' url='nhap-vai'>Nhập Vai</div>
                                </div>
                                <h3 class='game-thumbnail-title game-thumbnail-title-first'>DRAGON BALL Z: KAKAROT DAIMA -
                                    Adventure Through The Demon Realm PART 1 </h3>
                                <div class='game-thumbnail-desc'>
                                    <div class='game-thumbnail-desc-info'>
                                        <span>By <span>khiphach</span></span><span>19-Jul-2025</span></div>
                                </div>
                            </div>
                        </div>
                    </a><a class='game-a-tag' href='https://taigamekp.com//shadow-labyrinth'>
                        <div url='shadow-labyrinth' data-id='817' class='new-game-post'>
                            <div class='game-thumbnail-background'
                                 style='background-image: url(https://taigamekp.com/images/media/x450/tai-shadow-labyrinth-full-cho-pc.webp);'></div>
                            <div class='game-thumbnail-info'>
                                <div class='game-thumbnail-types'>
                                    <div class='game-thumbnail-type' data-id='6' url='hanh-dong'>Hành Động</div>
                                    <div class='game-thumbnail-type' data-id='4' url='phieu-luu'>Phiêu Lưu</div>
                                    <div class='game-thumbnail-type' data-id='5' url='game-2d'>Game 2D</div>
                                </div>
                                <h3 class='game-thumbnail-title game-thumbnail-title-first'>Shadow Labyrinth </h3>
                                <div class='game-thumbnail-desc'>
                                    <div class='game-thumbnail-desc-info'>
                                        <span>By <span>khiphach</span></span><span>18-Jul-2025</span></div>
                                </div>
                            </div>
                        </div>
                    </a><a class='game-a-tag' href='https://taigamekp.com//kunitsu-gami-path-of-the-goddess'>
                        <div url='kunitsu-gami-path-of-the-goddess' data-id='816' class='new-game-post'>
                            <div class='game-thumbnail-background'
                                 style='background-image: url(https://taigamekp.com/images/media/x450/tai-kunitsu-gami-path-of-the-goddess-full-cho-pc-thumbnail.webp);'></div>
                            <div class='game-thumbnail-info'>
                                <div class='game-thumbnail-types'>
                                    <div class='game-thumbnail-type' data-id='6' url='hanh-dong'>Hành Động</div>
                                    <div class='game-thumbnail-type' data-id='12' url='chien-thuat'>Chiến Thuật</div>
                                    <div class='game-thumbnail-type' data-id='23' url='chat-chem'>Chặt Chém</div>
                                </div>
                                <h3 class='game-thumbnail-title game-thumbnail-title-first'>Kunitsu-Gami: Path of the
                                    Goddess </h3>
                                <div class='game-thumbnail-desc'>
                                    <div class='game-thumbnail-desc-info'>
                                        <span>By <span>khiphach</span></span><span>18-Jul-2025</span></div>
                                </div>
                            </div>
                        </div>
                    </a><a class='game-a-tag' href='https://taigamekp.com//the-elder-scrolls-iv-oblivion-remastered'>
                        <div url='the-elder-scrolls-iv-oblivion-remastered' data-id='815' class='new-game-post'>
                            <div class='game-thumbnail-background'
                                 style='background-image: url(https://taigamekp.com/images/media/x450/tai-the-elder-scrolls-iv-full-cho-pc-remastered.webp);'></div>
                            <div class='game-thumbnail-info'>
                                <div class='game-thumbnail-types'>
                                    <div class='game-thumbnail-type' data-id='3' url='nhap-vai'>Nhập Vai</div>
                                    <div class='game-thumbnail-type' data-id='16' url='the-gioi-mo'>Thế Giới Mở</div>
                                    <div class='game-thumbnail-type' data-id='4' url='phieu-luu'>Phiêu Lưu</div>
                                </div>
                                <h3 class='game-thumbnail-title game-thumbnail-title-first'>The Elder Scrolls IV: Oblivion
                                    Remastered </h3>
                                <div class='game-thumbnail-desc'>
                                    <div class='game-thumbnail-desc-info'>
                                        <span>By <span>khiphach</span></span><span>17-Jul-2025</span></div>
                                </div>
                            </div>
                        </div>
                    </a><a class='game-a-tag' href='https://taigamekp.com//call-of-duty-modern-warfare-ii'>
                        <div url='call-of-duty-modern-warfare-ii' data-id='814' class='new-game-post'>
                            <div class='game-thumbnail-background'
                                 style='background-image: url(https://taigamekp.com/images/media/x450/tai-call-of-duty-modern-warfare-ii-full-cho-pc-thumbnail.webp);'></div>
                            <div class='game-thumbnail-info'>
                                <div class='game-thumbnail-types'>
                                    <div class='game-thumbnail-type' data-id='6' url='hanh-dong'>Hành Động</div>
                                    <div class='game-thumbnail-type' data-id='1' url='ban-sung'>Bắn Súng</div>
                                    <div class='game-thumbnail-type' data-id='9' url='chien-tranh'>Chiến Tranh</div>
                                </div>
                                <h3 class='game-thumbnail-title game-thumbnail-title-first'>Call of Duty: Modern Warfare
                                    II </h3>
                                <div class='game-thumbnail-desc'>
                                    <div class='game-thumbnail-desc-info'>
                                        <span>By <span>khiphach</span></span><span>16-Jul-2025</span></div>
                                </div>
                            </div>
                        </div>
                    </a><a class='game-a-tag' href='https://taigamekp.com//no-rest-for-the-wicked'>
                        <div url='no-rest-for-the-wicked' data-id='610' class='new-game-post'>
                            <div class='game-thumbnail-background'
                                 style='background-image: url(https://taigamekp.com/images/media/x450/tai-no-rest-for-the-wicked-full-cho-pc-thumbnail.webp);'></div>
                            <div class='game-thumbnail-info'>
                                <div class='game-thumbnail-types'>
                                    <div class='game-thumbnail-type game-thumbnail-type-update'>Update</div>
                                    <div class='game-thumbnail-type' data-id='6' url='hanh-dong'>Hành Động</div>
                                    <div class='game-thumbnail-type' data-id='3' url='nhap-vai'>Nhập Vai</div>
                                </div>
                                <h3 class='game-thumbnail-title game-thumbnail-title-first'>No Rest for the Wicked The
                                    Breach </h3>
                                <div class='game-thumbnail-desc'>
                                    <div class='game-thumbnail-desc-info'>
                                        <span>By <span>khiphach</span></span><span>09-May-2025</span></div>
                                </div>
                            </div>
                        </div>
                    </a><a class='game-a-tag' href='https://taigamekp.com//the-last-of-us-part-ii-remastered'>
                        <div url='the-last-of-us-part-ii-remastered' data-id='813' class='new-game-post'>
                            <div class='game-thumbnail-background'
                                 style='background-image: url(https://taigamekp.com/images/media/x450/tai-the-last-of-us-part-2-full-cho-pc.webp);'></div>
                            <div class='game-thumbnail-info'>
                                <div class='game-thumbnail-types'>
                                    <div class='game-thumbnail-type' data-id='3' url='nhap-vai'>Nhập Vai</div>
                                    <div class='game-thumbnail-type' data-id='6' url='hanh-dong'>Hành Động</div>
                                    <div class='game-thumbnail-type' data-id='17' url='sinh-ton'>Sinh Tồn</div>
                                </div>
                                <h3 class='game-thumbnail-title game-thumbnail-title-first'>The Last of Us Part II
                                    Remastered </h3>
                                <div class='game-thumbnail-desc'>
                                    <div class='game-thumbnail-desc-info'>
                                        <span>By <span>khiphach</span></span><span>09-May-2025</span></div>
                                </div>
                            </div>
                        </div>
                    </a><a class='game-a-tag' href='https://taigamekp.com//rise-of-the-ronin'>
                        <div url='rise-of-the-ronin' data-id='812' class='new-game-post'>
                            <div class='game-thumbnail-background'
                                 style='background-image: url(https://taigamekp.com/images/media/x450/tai-rise-of-the-ronin-full-cho-pc.webp);'></div>
                            <div class='game-thumbnail-info'>
                                <div class='game-thumbnail-types'>
                                    <div class='game-thumbnail-type' data-id='3' url='nhap-vai'>Nhập Vai</div>
                                    <div class='game-thumbnail-type' data-id='16' url='the-gioi-mo'>Thế Giới Mở</div>
                                    <div class='game-thumbnail-type' data-id='6' url='hanh-dong'>Hành Động</div>
                                </div>
                                <h3 class='game-thumbnail-title game-thumbnail-title-first'>Rise of the Ronin </h3>
                                <div class='game-thumbnail-desc'>
                                    <div class='game-thumbnail-desc-info'>
                                        <span>By <span>khiphach</span></span><span>08-May-2025</span></div>
                                </div>
                            </div>
                        </div>
                    </a><a class='game-a-tag' href='https://taigamekp.com//back-fade'>
                        <div url='back-fade' data-id='811' class='new-game-post'>
                            <div class='game-thumbnail-background'
                                 style='background-image: url(https://taigamekp.com/images/media/x450/tai-back-fade-full.webp);'></div>
                            <div class='game-thumbnail-info'>
                                <div class='game-thumbnail-types'>
                                    <div class='game-thumbnail-type' data-id='8' url='kinh-di'>Kinh Dị</div>
                                    <div class='game-thumbnail-type' data-id='15' url='giai-do'>Giải Đố</div>
                                    <div class='game-thumbnail-type' data-id='13' url='mo-phong'>Mô Phỏng</div>
                                </div>
                                <h3 class='game-thumbnail-title game-thumbnail-title-first'>Back: Fade </h3>
                                <div class='game-thumbnail-desc'>
                                    <div class='game-thumbnail-desc-info'>
                                        <span>By <span>khiphach</span></span><span>08-May-2025</span></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="game-update">
                <div class="game-update-header">
                    <div class="game-update-header-left">
                        <img src="https://taigamekp.com//images/game-update-icon.webp" alt="Game offline có update" width="30"
                             height="30">
                        <span>GAME UPDATE</span>
                    </div>
                    <div class="game-update-header-right  more-more" id="all-update-game">
                        <span>XEM TẤT CẢ</span>
                    </div>
                </div>
                <div class="game-update-container">
                    <a class='game-a-tag game-thumbnail-first' href='https://taigamekp.com//dragon-ball-z-kakarot'>
                        <div url='dragon-ball-z-kakarot' data-id='330' class='game-thumbnail02 game-thumbnail-first'>
                            <div class='game-thumbnail02-image'><img
                                        src='https://taigamekp.com//images/media/x450/tai-dragonball-z-kakarot-daima-full.webp'
                                        loading='lazy'
                                        alt='Tải DRAGON BALL Z: KAKAROT DAIMA - Adventure Through The Demon Realm PART 1 Full Cho PC'></img>
                            </div>
                            <div class='game-thumbnail02-types'>
                                <div class='game-thumbnail-type game-thumbnail-type-update'>Update</div>
                                <div class='game-thumbnail-type' data-id='6' url='hanh-dong'>Hành Động</div>
                                <div class='game-thumbnail-type' data-id='3' url='nhap-vai'>Nhập Vai</div>
                            </div>
                            <h3 class='game-thumbnail-title game-thumbnail02-title'>DRAGON BALL Z: KAKAROT DAIMA - Adventure
                                Through The Demon Realm PART 1 </h3>
                            <div class='game-thumbnail-desc-info game-thumbnail02-desc-info'>
                                <span>By <span>khiphach</span></span><span>19-Jul-2025</span></div>
                        </div>
                    </a><a class='game-a-tag' href='https://taigamekp.com//no-rest-for-the-wicked'>
                        <div url='no-rest-for-the-wicked' data-id='610' class='game-thumbnail02'>
                            <div class='game-thumbnail02-image'><img
                                        src='https://taigamekp.com//images/media/x450/tai-no-rest-for-the-wicked-the-breach-full.webp'
                                        loading='lazy' alt='Tải No Rest for the Wicked The Breach Full Cho PC'></img></div>
                            <div class='game-thumbnail02-types'>
                                <div class='game-thumbnail-type game-thumbnail-type-update'>Update</div>
                                <div class='game-thumbnail-type' data-id='6' url='hanh-dong'>Hành Động</div>
                                <div class='game-thumbnail-type' data-id='3' url='nhap-vai'>Nhập Vai</div>
                            </div>
                            <h3 class='game-thumbnail-title game-thumbnail02-title'>No Rest for the Wicked The Breach </h3>
                            <div class='game-thumbnail-desc-info game-thumbnail02-desc-info'>
                                <span>By <span>khiphach</span></span><span>09-May-2025</span></div>
                        </div>
                    </a><a class='game-a-tag' href='https://taigamekp.com//v-rising'>
                        <div url='v-rising' data-id='638' class='game-thumbnail02'>
                            <div class='game-thumbnail02-image'><img
                                        src='https://taigamekp.com//images/media/x450/tai-v-rising-invaders-of-oakveil-full.webp'
                                        loading='lazy' alt='Tải V Rising Việt Hóa Invaders of Oakveil Full Cho PC'></img></div>
                            <div class='game-thumbnail02-types'>
                                <div class='game-thumbnail-type game-thumbnail-type-update'>Update</div>
                                <div class='game-thumbnail-type' data-id='17' url='sinh-ton'>Sinh Tồn</div>
                                <div class='game-thumbnail-type' data-id='16' url='the-gioi-mo'>Thế Giới Mở</div>
                            </div>
                            <h3 class='game-thumbnail-title game-thumbnail02-title'>V Rising Việt Hóa Invaders of Oakveil </h3>
                            <div class='game-thumbnail-desc-info game-thumbnail02-desc-info'>
                                <span>By <span>khiphach</span></span><span>06-May-2025</span></div>
                        </div>
                    </a><a class='game-a-tag' href='https://taigamekp.com//wartales'>
                        <div url='wartales' data-id='81' class='game-thumbnail02'>
                            <div class='game-thumbnail02-image'><img
                                        src='https://taigamekp.com//images/media/x450/tai-wartales-the-beast-hunt-full-cho-pc.webp'
                                        loading='lazy' alt='Tải Wartales The Beast Hunt Full Cho PC'></img></div>
                            <div class='game-thumbnail02-types'>
                                <div class='game-thumbnail-type game-thumbnail-type-update'>Update</div>
                                <div class='game-thumbnail-type' data-id='3' url='nhap-vai'>Nhập Vai</div>
                                <div class='game-thumbnail-type' data-id='16' url='the-gioi-mo'>Thế Giới Mở</div>
                            </div>
                            <h3 class='game-thumbnail-title game-thumbnail02-title'>Wartales The Beast Hunt </h3>
                            <div class='game-thumbnail-desc-info game-thumbnail02-desc-info'>
                                <span>By <span>khiphach</span></span><span>06-May-2025</span></div>
                        </div>
                    </a><a class='game-a-tag' href='https://taigamekp.com//age-of-mythology-retold'>
                        <div url='age-of-mythology-retold' data-id='717' class='game-thumbnail02'>
                            <div class='game-thumbnail02-image'><img
                                        src='https://taigamekp.com//images/media/x450/tai-age-of-mythology-retold-full-cho-pc-cover.webp'
                                        loading='lazy' alt='Tải Age of Mythology: Retold Immortal Pillars Full Cho PC'></img>
                            </div>
                            <div class='game-thumbnail02-types'>
                                <div class='game-thumbnail-type game-thumbnail-type-update'>Update</div>
                                <div class='game-thumbnail-type' data-id='12' url='chien-thuat'>Chiến Thuật</div>
                                <div class='game-thumbnail-type' data-id='9' url='chien-tranh'>Chiến Tranh</div>
                            </div>
                            <h3 class='game-thumbnail-title game-thumbnail02-title'>Age of Mythology: Retold Immortal
                                Pillars </h3>
                            <div class='game-thumbnail-desc-info game-thumbnail02-desc-info'>
                                <span>By <span>khiphach</span></span><span>05-Mar-2025</span></div>
                        </div>
                    </a><a class='game-a-tag' href='https://taigamekp.com//hearts-of-iron-iv'>
                        <div url='hearts-of-iron-iv' data-id='429' class='game-thumbnail02'>
                            <div class='game-thumbnail02-image'><img
                                        src='https://taigamekp.com//images/media/x450/tai-hearts-of-iron-4-full.webp'
                                        loading='lazy' alt='Tải Hearts of Iron IV Graveyard of Empires Full Cho PC'></img></div>
                            <div class='game-thumbnail02-types'>
                                <div class='game-thumbnail-type game-thumbnail-type-update'>Update</div>
                                <div class='game-thumbnail-type' data-id='12' url='chien-thuat'>Chiến Thuật</div>
                                <div class='game-thumbnail-type' data-id='9' url='chien-tranh'>Chiến Tranh</div>
                            </div>
                            <h3 class='game-thumbnail-title game-thumbnail02-title'>Hearts of Iron IV Graveyard of Empires </h3>
                            <div class='game-thumbnail-desc-info game-thumbnail02-desc-info'>
                                <span>By <span>khiphach</span></span><span>05-Mar-2025</span></div>
                        </div>
                    </a><a class='game-a-tag' href='https://taigamekp.com//arma-reforger'>
                        <div url='arma-reforger' data-id='668' class='game-thumbnail02'>
                            <div class='game-thumbnail02-image'><img
                                        src='https://taigamekp.com//images/media/x450/tai-arma-reforger-full-cho-pc-cover.webp'
                                        loading='lazy' alt='Tải Arma Reforger Full Cho PC'></img></div>
                            <div class='game-thumbnail02-types'>
                                <div class='game-thumbnail-type game-thumbnail-type-update'>Update</div>
                                <div class='game-thumbnail-type' data-id='6' url='hanh-dong'>Hành Động</div>
                                <div class='game-thumbnail-type' data-id='13' url='mo-phong'>Mô Phỏng</div>
                            </div>
                            <h3 class='game-thumbnail-title game-thumbnail02-title'>Arma Reforger </h3>
                            <div class='game-thumbnail-desc-info game-thumbnail02-desc-info'>
                                <span>By <span>khiphach</span></span><span>04-Mar-2025</span></div>
                        </div>
                    </a><a class='game-a-tag' href='https://taigamekp.com//efootball-pes-2021'>
                        <div url='efootball-pes-2021' data-id='24' class='game-thumbnail02'>
                            <div class='game-thumbnail02-image'><img
                                        src='https://taigamekp.com//images/media/x450/tai-pes-2021-patch-2024-full.webp'
                                        loading='lazy' alt='Tải eFootball PES 2021 Full Cho PC'></img></div>
                            <div class='game-thumbnail02-types'>
                                <div class='game-thumbnail-type game-thumbnail-type-update'>Update</div>
                                <div class='game-thumbnail-type' data-id='10' url='the-thao'>Thể Thao</div>
                            </div>
                            <h3 class='game-thumbnail-title game-thumbnail02-title'>eFootball PES 2021 </h3>
                            <div class='game-thumbnail-desc-info game-thumbnail02-desc-info'>
                                <span>By <span>khiphach</span></span><span>03-Mar-2025</span></div>
                        </div>
                    </a><a class='game-a-tag' href='https://taigamekp.com//blazblue-entropy-effect'>
                        <div url='blazblue-entropy-effect' data-id='497' class='game-thumbnail02'>
                            <div class='game-thumbnail02-image'><img
                                        src='https://taigamekp.com//images/media/x450/tai-blazblue-entropy-effect-full-cho-pc-cover.webp'
                                        loading='lazy' alt='Tải BlazBlue Entropy Effect Full Cho PC'></img></div>
                            <div class='game-thumbnail02-types'>
                                <div class='game-thumbnail-type game-thumbnail-type-update'>Update</div>
                                <div class='game-thumbnail-type' data-id='23' url='chat-chem'>Chặt Chém</div>
                                <div class='game-thumbnail-type' data-id='5' url='game-2d'>Game 2D</div>
                            </div>
                            <h3 class='game-thumbnail-title game-thumbnail02-title'>BlazBlue Entropy Effect </h3>
                            <div class='game-thumbnail-desc-info game-thumbnail02-desc-info'>
                                <span>By <span>khiphach</span></span><span>02-Mar-2025</span></div>
                        </div>
                    </a><a class='game-a-tag' href='https://taigamekp.com//spiritfall'>
                        <div url='spiritfall' data-id='739' class='game-thumbnail02'>
                            <div class='game-thumbnail02-image'><img
                                        src='https://taigamekp.com//images/media/x450/tai-spiritfall-full-cho-pc-cover.webp'
                                        loading='lazy' alt='Tải Spiritfall Full Cho PC'></img></div>
                            <div class='game-thumbnail02-types'>
                                <div class='game-thumbnail-type game-thumbnail-type-update'>Update</div>
                                <div class='game-thumbnail-type' data-id='3' url='nhap-vai'>Nhập Vai</div>
                                <div class='game-thumbnail-type' data-id='5' url='game-2d'>Game 2D</div>
                            </div>
                            <h3 class='game-thumbnail-title game-thumbnail02-title'>Spiritfall </h3>
                            <div class='game-thumbnail-desc-info game-thumbnail02-desc-info'>
                                <span>By <span>khiphach</span></span><span>02-Mar-2025</span></div>
                        </div>
                    </a><a class='game-a-tag' href='https://taigamekp.com//nine-sols'>
                        <div url='nine-sols' data-id='686' class='game-thumbnail02'>
                            <div class='game-thumbnail02-image'><img
                                        src='https://taigamekp.com//images/media/x450/tai-nine-sols-full-cho-pc-cover.webp'
                                        loading='lazy' alt='Tải Nine Sols Battle Memories Full Cho PC'></img></div>
                            <div class='game-thumbnail02-types'>
                                <div class='game-thumbnail-type game-thumbnail-type-update'>Update</div>
                                <div class='game-thumbnail-type' data-id='3' url='nhap-vai'>Nhập Vai</div>
                                <div class='game-thumbnail-type' data-id='4' url='phieu-luu'>Phiêu Lưu</div>
                            </div>
                            <h3 class='game-thumbnail-title game-thumbnail02-title'>Nine Sols Battle Memories </h3>
                            <div class='game-thumbnail-desc-info game-thumbnail02-desc-info'>
                                <span>By <span>khiphach</span></span><span>02-Mar-2025</span></div>
                        </div>
                    </a><a class='game-a-tag' href='https://taigamekp.com//god-of-weapons'>
                        <div url='god-of-weapons' data-id='472' class='game-thumbnail02'>
                            <div class='game-thumbnail02-image'><img
                                        src='https://taigamekp.com//images/media/x450/tai-god-of-weapons-full-cho-pc-cover.webp'
                                        loading='lazy' alt='Tải God Of Weapons Full Cho PC'></img></div>
                            <div class='game-thumbnail02-types'>
                                <div class='game-thumbnail-type game-thumbnail-type-update'>Update</div>
                                <div class='game-thumbnail-type' data-id='3' url='nhap-vai'>Nhập Vai</div>
                                <div class='game-thumbnail-type' data-id='17' url='sinh-ton'>Sinh Tồn</div>
                            </div>
                            <h3 class='game-thumbnail-title game-thumbnail02-title'>God Of Weapons </h3>
                            <div class='game-thumbnail-desc-info game-thumbnail02-desc-info'>
                                <span>By <span>khiphach</span></span><span>02-Mar-2025</span></div>
                        </div>
                    </a><a class='game-a-tag' href='https://taigamekp.com//deep-rock-galactic'>
                        <div url='deep-rock-galactic' data-id='213' class='game-thumbnail02'>
                            <div class='game-thumbnail02-image'><img
                                        src='https://taigamekp.com//images/media/x450/tai-deep-rock-galactic-full.webp'
                                        loading='lazy' alt='Tải Deep Rock Galactic Full Cho PC'></img></div>
                            <div class='game-thumbnail02-types'>
                                <div class='game-thumbnail-type game-thumbnail-type-update'>Update</div>
                                <div class='game-thumbnail-type' data-id='1' url='ban-sung'>Bắn Súng</div>
                                <div class='game-thumbnail-type' data-id='3' url='nhap-vai'>Nhập Vai</div>
                            </div>
                            <h3 class='game-thumbnail-title game-thumbnail02-title'>Deep Rock Galactic </h3>
                            <div class='game-thumbnail-desc-info game-thumbnail02-desc-info'>
                                <span>By <span>khiphach</span></span><span>02-Mar-2025</span></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="top-game">
                <div class="top-game-header">
                    <div class="top-game-header-left">
                        <img src="https://taigamekp.com//images/top-game.webp" alt="Game hot Khí Phách" width="35px"
                             height="35px"/>
                        <span>TOP GAME</span>
                    </div>
                    <div class="top-game-header-right">
                        <div class="top-game-type top-game-type-active" data-id=''>Tất cả</div>
                        <div class="top-game-type" data-id='3'>Nhập vai</div>
                        <div class="top-game-type" data-id='8'>Kinh dị</div>
                        <div class="top-game-type" data-id='1'>Bắn súng</div>
                        <div class="top-game-type" data-id='2'>Đối kháng</div>
                        <div class="top-game-type" data-id='12'>Chiến thuật</div>
                        <div class="top-game-type" data-id='11'>Đua xe</div>
                        <div class="top-game-type" data-id='10'>Thể thao</div>
                        <div class="top-game-type" data-id='15'>Giải đố</div>
                        <div class="top-game-type" data-id='14'>Xây dựng</div>
                    </div>
                </div>
                <div class="top-game-container">
                    <a class='game-a-tag' href='https://taigamekp.com//wuchang-fallen-feathers'>
                        <div url='wuchang-fallen-feathers' data-id='819' class='game-thumbnail02'>
                            <div class='game-thumbnail02-image'><img
                                        src='https://taigamekp.com//images/media/x450/tai-wuchang-fallen-feathers-full.webp'
                                        loading='lazy' alt='Tải WUCHANG: Fallen Feathers Full Cho PC'></img></div>
                            <div class='game-thumbnail02-types'>
                                <div class='game-thumbnail-type' data-id='16' url='the-gioi-mo'>Thế Giới Mở</div>
                                <div class='game-thumbnail-type' data-id='23' url='chat-chem'>Chặt Chém</div>
                                <div class='game-thumbnail-type' data-id='3' url='nhap-vai'>Nhập Vai</div>
                            </div>
                            <h3 class='game-thumbnail-title game-thumbnail02-title'>WUCHANG: Fallen Feathers </h3>
                            <div class='game-thumbnail-desc-info game-thumbnail02-desc-info'>
                                <span>By <span>khiphach</span></span><span>25-Jul-2025</span></div>
                        </div>
                    </a><a class='game-a-tag' href='https://taigamekp.com//dragon-ball-z-kakarot'>
                        <div url='dragon-ball-z-kakarot' data-id='330' class='game-thumbnail02'>
                            <div class='game-thumbnail02-image'><img
                                        src='https://taigamekp.com//images/media/x450/tai-dragonball-z-kakarot-daima-full.webp'
                                        loading='lazy'
                                        alt='Tải DRAGON BALL Z: KAKAROT DAIMA - Adventure Through The Demon Realm PART 1 Full Cho PC'></img>
                            </div>
                            <div class='game-thumbnail02-types'>
                                <div class='game-thumbnail-type game-thumbnail-type-update'>Update</div>
                                <div class='game-thumbnail-type' data-id='6' url='hanh-dong'>Hành Động</div>
                                <div class='game-thumbnail-type' data-id='3' url='nhap-vai'>Nhập Vai</div>
                            </div>
                            <h3 class='game-thumbnail-title game-thumbnail02-title'>DRAGON BALL Z: KAKAROT DAIMA - Adventure
                                Through The Demon Realm PART 1 </h3>
                            <div class='game-thumbnail-desc-info game-thumbnail02-desc-info'>
                                <span>By <span>khiphach</span></span><span>19-Jul-2025</span></div>
                        </div>
                    </a><a class='game-a-tag' href='https://taigamekp.com//kunitsu-gami-path-of-the-goddess'>
                        <div url='kunitsu-gami-path-of-the-goddess' data-id='816' class='game-thumbnail02'>
                            <div class='game-thumbnail02-image'><img
                                        src='https://taigamekp.com//images/media/x450/tai-kunitsu-gami-path-of-the-goddess-full.webp'
                                        loading='lazy' alt='Tải Kunitsu-Gami: Path of the Goddess Full Cho PC'></img></div>
                            <div class='game-thumbnail02-types'>
                                <div class='game-thumbnail-type' data-id='6' url='hanh-dong'>Hành Động</div>
                                <div class='game-thumbnail-type' data-id='12' url='chien-thuat'>Chiến Thuật</div>
                                <div class='game-thumbnail-type' data-id='23' url='chat-chem'>Chặt Chém</div>
                            </div>
                            <h3 class='game-thumbnail-title game-thumbnail02-title'>Kunitsu-Gami: Path of the Goddess </h3>
                            <div class='game-thumbnail-desc-info game-thumbnail02-desc-info'>
                                <span>By <span>khiphach</span></span><span>18-Jul-2025</span></div>
                        </div>
                    </a><a class='game-a-tag' href='https://taigamekp.com//the-elder-scrolls-iv-oblivion-remastered'>
                        <div url='the-elder-scrolls-iv-oblivion-remastered' data-id='815' class='game-thumbnail02'>
                            <div class='game-thumbnail02-image'><img
                                        src='https://taigamekp.com//images/media/x450/tai-the-elder-scrolls-4-oblivion-full.webp'
                                        loading='lazy' alt='Tải The Elder Scrolls IV: Oblivion Remastered Full Cho PC'></img>
                            </div>
                            <div class='game-thumbnail02-types'>
                                <div class='game-thumbnail-type' data-id='3' url='nhap-vai'>Nhập Vai</div>
                                <div class='game-thumbnail-type' data-id='16' url='the-gioi-mo'>Thế Giới Mở</div>
                                <div class='game-thumbnail-type' data-id='4' url='phieu-luu'>Phiêu Lưu</div>
                            </div>
                            <h3 class='game-thumbnail-title game-thumbnail02-title'>The Elder Scrolls IV: Oblivion
                                Remastered </h3>
                            <div class='game-thumbnail-desc-info game-thumbnail02-desc-info'>
                                <span>By <span>khiphach</span></span><span>17-Jul-2025</span></div>
                        </div>
                    </a><a class='game-a-tag' href='https://taigamekp.com//call-of-duty-modern-warfare-ii'>
                        <div url='call-of-duty-modern-warfare-ii' data-id='814' class='game-thumbnail02'>
                            <div class='game-thumbnail02-image'><img
                                        src='https://taigamekp.com//images/media/x450/tai-call-of-duty-modern-warfare-ii-full-cho-pc-cover.webp'
                                        loading='lazy' alt='Tải Call of Duty: Modern Warfare II Full Cho PC'></img></div>
                            <div class='game-thumbnail02-types'>
                                <div class='game-thumbnail-type' data-id='6' url='hanh-dong'>Hành Động</div>
                                <div class='game-thumbnail-type' data-id='1' url='ban-sung'>Bắn Súng</div>
                                <div class='game-thumbnail-type' data-id='9' url='chien-tranh'>Chiến Tranh</div>
                            </div>
                            <h3 class='game-thumbnail-title game-thumbnail02-title'>Call of Duty: Modern Warfare II </h3>
                            <div class='game-thumbnail-desc-info game-thumbnail02-desc-info'>
                                <span>By <span>khiphach</span></span><span>16-Jul-2025</span></div>
                        </div>
                    </a><a class='game-a-tag' href='https://taigamekp.com//no-rest-for-the-wicked'>
                        <div url='no-rest-for-the-wicked' data-id='610' class='game-thumbnail02'>
                            <div class='game-thumbnail02-image'><img
                                        src='https://taigamekp.com//images/media/x450/tai-no-rest-for-the-wicked-the-breach-full.webp'
                                        loading='lazy' alt='Tải No Rest for the Wicked The Breach Full Cho PC'></img></div>
                            <div class='game-thumbnail02-types'>
                                <div class='game-thumbnail-type game-thumbnail-type-update'>Update</div>
                                <div class='game-thumbnail-type' data-id='6' url='hanh-dong'>Hành Động</div>
                                <div class='game-thumbnail-type' data-id='3' url='nhap-vai'>Nhập Vai</div>
                            </div>
                            <h3 class='game-thumbnail-title game-thumbnail02-title'>No Rest for the Wicked The Breach </h3>
                            <div class='game-thumbnail-desc-info game-thumbnail02-desc-info'>
                                <span>By <span>khiphach</span></span><span>09-May-2025</span></div>
                        </div>
                    </a><a class='game-a-tag' href='https://taigamekp.com//the-last-of-us-part-ii-remastered'>
                        <div url='the-last-of-us-part-ii-remastered' data-id='813' class='game-thumbnail02'>
                            <div class='game-thumbnail02-image'><img
                                        src='https://taigamekp.com//images/media/x450/tai-the-last-of-us-part-2-full.webp'
                                        loading='lazy' alt='Tải The Last of Us Part II Remastered Full Cho PC'></img></div>
                            <div class='game-thumbnail02-types'>
                                <div class='game-thumbnail-type' data-id='3' url='nhap-vai'>Nhập Vai</div>
                                <div class='game-thumbnail-type' data-id='6' url='hanh-dong'>Hành Động</div>
                                <div class='game-thumbnail-type' data-id='17' url='sinh-ton'>Sinh Tồn</div>
                            </div>
                            <h3 class='game-thumbnail-title game-thumbnail02-title'>The Last of Us Part II Remastered </h3>
                            <div class='game-thumbnail-desc-info game-thumbnail02-desc-info'>
                                <span>By <span>khiphach</span></span><span>09-May-2025</span></div>
                        </div>
                    </a><a class='game-a-tag' href='https://taigamekp.com//rise-of-the-ronin'>
                        <div url='rise-of-the-ronin' data-id='812' class='game-thumbnail02'>
                            <div class='game-thumbnail02-image'><img
                                        src='https://taigamekp.com//images/media/x450/tai-rise-of-the-ronin.webp' loading='lazy'
                                        alt='Tải Rise of the Ronin Full Cho PC'></img></div>
                            <div class='game-thumbnail02-types'>
                                <div class='game-thumbnail-type' data-id='3' url='nhap-vai'>Nhập Vai</div>
                                <div class='game-thumbnail-type' data-id='16' url='the-gioi-mo'>Thế Giới Mở</div>
                                <div class='game-thumbnail-type' data-id='6' url='hanh-dong'>Hành Động</div>
                            </div>
                            <h3 class='game-thumbnail-title game-thumbnail02-title'>Rise of the Ronin </h3>
                            <div class='game-thumbnail-desc-info game-thumbnail02-desc-info'>
                                <span>By <span>khiphach</span></span><span>08-May-2025</span></div>
                        </div>
                    </a><a class='game-a-tag' href='https://taigamekp.com//clair-obscur-expedition-33'>
                        <div url='clair-obscur-expedition-33' data-id='810' class='game-thumbnail02'>
                            <div class='game-thumbnail02-image'><img
                                        src='https://taigamekp.com//images/media/x450/tai-clair-obscur-expedition-33-full-cho-pc.webp'
                                        loading='lazy' alt='Tải Clair Obscur: Expedition 33 Full Cho PC'></img></div>
                            <div class='game-thumbnail02-types'>
                                <div class='game-thumbnail-type' data-id='3' url='nhap-vai'>Nhập Vai</div>
                                <div class='game-thumbnail-type' data-id='4' url='phieu-luu'>Phiêu Lưu</div>
                                <div class='game-thumbnail-type' data-id='6' url='hanh-dong'>Hành Động</div>
                            </div>
                            <h3 class='game-thumbnail-title game-thumbnail02-title'>Clair Obscur: Expedition 33 </h3>
                            <div class='game-thumbnail-desc-info game-thumbnail02-desc-info'>
                                <span>By <span>khiphach</span></span><span>08-May-2025</span></div>
                        </div>
                    </a><a class='game-a-tag' href='https://taigamekp.com//motogp-25'>
                        <div url='motogp-25' data-id='809' class='game-thumbnail02'>
                            <div class='game-thumbnail02-image'><img
                                        src='https://taigamekp.com//images/media/x450/tai-motogp-25-full-cho-pc.webp'
                                        loading='lazy' alt='Tải MotoGP 25 Full Cho PC'></img></div>
                            <div class='game-thumbnail02-types'>
                                <div class='game-thumbnail-type' data-id='11' url='dua-xe'>Đua Xe</div>
                                <div class='game-thumbnail-type' data-id='10' url='the-thao'>Thể Thao</div>
                                <div class='game-thumbnail-type' data-id='13' url='mo-phong'>Mô Phỏng</div>
                            </div>
                            <h3 class='game-thumbnail-title game-thumbnail02-title'>MotoGP 25 </h3>
                            <div class='game-thumbnail-desc-info game-thumbnail02-desc-info'>
                                <span>By <span>khiphach</span></span><span>06-May-2025</span></div>
                        </div>
                    </a><a class='game-a-tag' href='https://taigamekp.com//v-rising'>
                        <div url='v-rising' data-id='638' class='game-thumbnail02'>
                            <div class='game-thumbnail02-image'><img
                                        src='https://taigamekp.com//images/media/x450/tai-v-rising-invaders-of-oakveil-full.webp'
                                        loading='lazy' alt='Tải V Rising Việt Hóa Invaders of Oakveil Full Cho PC'></img></div>
                            <div class='game-thumbnail02-types'>
                                <div class='game-thumbnail-type game-thumbnail-type-update'>Update</div>
                                <div class='game-thumbnail-type' data-id='17' url='sinh-ton'>Sinh Tồn</div>
                                <div class='game-thumbnail-type' data-id='16' url='the-gioi-mo'>Thế Giới Mở</div>
                            </div>
                            <h3 class='game-thumbnail-title game-thumbnail02-title'>V Rising Việt Hóa Invaders of Oakveil </h3>
                            <div class='game-thumbnail-desc-info game-thumbnail02-desc-info'>
                                <span>By <span>khiphach</span></span><span>06-May-2025</span></div>
                        </div>
                    </a><a class='game-a-tag' href='https://taigamekp.com//wartales'>
                        <div url='wartales' data-id='81' class='game-thumbnail02'>
                            <div class='game-thumbnail02-image'><img
                                        src='https://taigamekp.com//images/media/x450/tai-wartales-the-beast-hunt-full-cho-pc.webp'
                                        loading='lazy' alt='Tải Wartales The Beast Hunt Full Cho PC'></img></div>
                            <div class='game-thumbnail02-types'>
                                <div class='game-thumbnail-type game-thumbnail-type-update'>Update</div>
                                <div class='game-thumbnail-type' data-id='3' url='nhap-vai'>Nhập Vai</div>
                                <div class='game-thumbnail-type' data-id='16' url='the-gioi-mo'>Thế Giới Mở</div>
                            </div>
                            <h3 class='game-thumbnail-title game-thumbnail02-title'>Wartales The Beast Hunt </h3>
                            <div class='game-thumbnail-desc-info game-thumbnail02-desc-info'>
                                <span>By <span>khiphach</span></span><span>06-May-2025</span></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="container-footer">
            </div>
            <div class="container-cover"></div>
        </div>

        <script src="<?php echo getPublicFile('asset/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') ?>" data-cf-settings="3386c33fa00f7b94b57fab00-|49" defer></script>
    </body>
</html>