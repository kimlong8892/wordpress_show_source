<?php
/**
 * Theme header
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <link rel="icon" href="<?php echo esc_url(get_site_icon_url()); ?>" />

    <!-- Base styles -->
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" />
    <link rel="stylesheet" href="<?php echo esc_url(getPublicFile('lib/bootstrap5/css/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo esc_url(getPublicFile('asset/css/font-awesome.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo esc_url(getPublicFile('css/base.css')); ?>" />
    <link rel="stylesheet" href="<?php echo esc_url(getPublicFile('css/comment.css')); ?>" />

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
            background: url("<?php echo esc_url(get_site_icon_url() ?: get_stylesheet_directory_uri() . '/public/theme/assets/images/logo.png'); ?>");
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
<body <?php body_class(); ?>>
    <header class="py-3 border-bottom bg-dark text-white">
        <div class="container d-flex flex-wrap justify-content-between align-items-center">
            <a class="navbar-brand text-white text-decoration-none" href="<?php echo esc_url(home_url('/')); ?>">
                <?php bloginfo('name'); ?>
            </a>
            <?php if (function_exists('wp_nav_menu')): ?>
                <nav>
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'left-menu',
                        'container'      => false,
                        'menu_class'     => 'nav',
                        'fallback_cb'    => false,
                        'depth'          => 2,
                        'link_before'    => '<span class="nav-link px-2 text-white">',
                        'link_after'     => '</span>',
                    ]);
                    ?>
                </nav>
            <?php endif; ?>
        </div>
    </header>
    <main class="py-4">
        <div class="container">
<?php // Main content starts in templates ?>


