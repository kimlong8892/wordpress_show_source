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
                <a class="left-menu-item <?php echo (trailingslashit($parent['item']->url) === trailingslashit(home_url(add_query_arg([], $wp->request)))) ? 'left-menu-item-active' : ''; ?>" href="<?php echo esc_url($parent['item']->url); ?>">
                    <div class="left-menu-item-icon">
                        <i class="fa fa-gamepad"></i>
                    </div>
                    <div class="left-menu-item-text">
                        <span><?php echo esc_html($parent['item']->title); ?></span>
                    </div>
                </a>

                <?php if (!empty($parent['children'])): ?>
                    <div class="left-menu-items left-menu-item-child">
                        <?php foreach ($parent['children'] as $child): ?>
                            <a class="left-menu-item <?php echo (trailingslashit($child->url) === trailingslashit(home_url(add_query_arg([], $wp->request)))) ? 'left-menu-item-active' : ''; ?>" href="<?php echo esc_url($child->url); ?>">
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
    <div class="left-menu-footer">
        <span>© <?php echo date('Y'); ?> By KimLong</span>
    </div>
</div>
