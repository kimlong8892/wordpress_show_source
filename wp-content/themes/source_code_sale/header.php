<?php
$logo = get_field('logo', 'options');
$listMenuMain = getAllMenuLevels('main-menu');
$a = 1;
?>
<header>
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <!-- Topbar -->
        <div class="top-bar">
            <div class="content-topbar flex-sb-m h-full container">
                <div class="left-top-bar">
                    <?php echo get_bloginfo('description', 'display'); ?>
                </div>

                <div class="right-top-bar flex-w h-full">
                    <a href="#" class="flex-c-m trans-04 p-lr-25">
                        Help &amp; FAQs
                    </a>
                </div>
            </div>
        </div>

        <div class="wrap-menu-desktop" style="top: 40px;">
            <nav class="limiter-menu-desktop container">

                <!-- Logo desktop -->
                <a href="<?php echo get_site_url(); ?>" class="logo">
                    <img src="<?php echo $logo['url'] ?? ''; ?>" alt="<?php echo $logo['alt'] ?? ''; ?>">
                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                        <?php foreach ($listMenuMain as $menu): ?>
                            <?php if (empty($menu->child_items)): ?>
                                <li>
                                    <a href="<?php echo $menu->url; ?>"><?php echo $menu->title; ?></a>
                                </li>
                            <?php else: ?>
                                <li>
                                    <a href="<?php echo $menu->url; ?>"><?php echo $menu->title; ?></a>
                                    <?php get_template_part('template-parts/menu/list_child', null, [
                                        'listChild' => $menu->child_items,
                                    ]); ?>
                                </li>
                            <?php endif; ?>

                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Icon header -->
                <div class="wrap-icon-header flex-w flex-r-m">
                    <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                        <i class="zmdi zmdi-search"></i>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <div class="logo-mobile">
            <a href="index.html"><img src="<?php echo $logo['url'] ?? ''; ?>"
                                      alt="<?php echo $logo['alt'] ?? ''; ?>"></a>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m m-r-15">
            <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                <i class="zmdi zmdi-search"></i>
            </div>
        </div>

        <!-- Button show menu -->
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="menu-mobile">
        <ul class="topbar-mobile">
            <li>
                <div class="left-top-bar">
                    <?php echo get_bloginfo('name'); ?>
                </div>
            </li>

            <li>
                <div class="right-top-bar flex-w h-full">
                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        Help &amp; FAQs
                    </a>
                </div>
            </li>
        </ul>

        <ul class="main-menu-m">
            <?php foreach ($listMenuMain as $menu): ?>
                <?php if (empty($menu->child_items)): ?>
                    <li>
                        <a href="<?php echo $menu->url; ?>"><?php echo $menu->title; ?></a>
                    </li>
                <?php else: ?>
                    <li>
                        <a href="<?php echo $menu->url; ?>"><?php echo $menu->title; ?></a>
                        <?php get_template_part('template-parts/menu/list_child', null, [
                            'listChild' => $menu->child_items,
                            'mobileClass' => 'm'
                        ]); ?>
                    </li>
                <?php endif; ?>

            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Modal Search -->
    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <div class="container-search-header">
            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                <img src="<?php echo getPublicFile('theme/images/icons/icon-close2.png'); ?>" alt="CLOSE">
            </button>

            <form class="wrap-search-header flex-w p-l-15">
                <button class="flex-c-m trans-04">
                    <i class="zmdi zmdi-search"></i>
                </button>
                <input class="plh3" type="text" name="search" placeholder="Search...">
            </form>
        </div>
    </div>
</header>
<div class="m-t-150">

</div>