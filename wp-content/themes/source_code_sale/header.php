<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand text-uppercase" href="<?= get_site_url(); ?>"><?= get_bloginfo(); ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'depth' => 3,
                    'container' => 'ul',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'bs-example-navbar-collapse-1',
                    'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    'walker' => new WP_Bootstrap_Navwalker(),
                ));
            ?>

            <?php if (is_user_logged_in()): ?>
                <span class="m-1">
                    <span><?= __('Hello') ?>,&nbsp;</span>
                    <?= wp_get_current_user()->display_name; ?>
                </span>
                <a href="<?= get_site_url() . '/logout'; ?>" class="btn btn-primary m-1">
                    <i class="fa fa-sign-out"></i>
                    <?= __('Logout') ?>
                </a>
            <?php else: ?>
                <a href="<?= get_site_url() . '/login' ?>" class="btn btn-primary m-1">
                    <i class="fa fa-user-circle"></i>
                    <?= __('Login') ?>
                </a>
                <a href="<?= get_site_url() . '/register' ?>" class="btn btn-info m-1">
                    <i class="fa fa-plus-circle"></i>
                    <?= __('Register') ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</nav>