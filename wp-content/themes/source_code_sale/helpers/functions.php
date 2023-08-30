<?php
if (!function_exists('getPublicFile')) {
    function getPublicFile($path) {
        return get_stylesheet_directory_uri() . '/public/' . $path;
    }
}

if (!function_exists('getCurrentUserRole')) {
    function getCurrentUserRole() {
        if( is_user_logged_in() ) {

            $user = wp_get_current_user();

            $roles = ( array ) $user->roles;

            if (!empty($roles) && is_array($roles)) {
                return $roles[0];
            }
        }

        return null;
    }
}

if (!function_exists('getMenuItemsParent')) {
    function getMenuItemsParent($menuName) {
        $locations = get_nav_menu_locations();
        $menu = wp_get_nav_menu_object($locations[$menuName]);

        $listMenuItem = (array)wp_get_nav_menu_items($menu->term_id, array('order' => 'DESC', 'menu_item_parent' => '0'));

        foreach ($listMenuItem as $key => $item) {
            if (!empty($item->menu_item_parent)) {
                unset($listMenuItem[$key]);
            }
        }

        return $listMenuItem;
    }
}

if (!function_exists('getMenuItemsByMenuId')) {
    function getMenuItemsByMenuId($menuName, $parentId) {
        $locations = get_nav_menu_locations();
        $menu = wp_get_nav_menu_object($locations[$menuName]);

        $listMenuItem = (array)wp_get_nav_menu_items($menu->term_id, array('order' => 'DESC', 'menu_item_parent' => '0'));

        foreach ($listMenuItem as $key => $item) {
            if (empty($item->menu_item_parent) || $item->menu_item_parent != $parentId) {
                unset($listMenuItem[$key]);
            }
        }

        return $listMenuItem;
    }
}

if (!function_exists('getFeaturedImage')) {
    function getFeaturedImage($postItem, $imageUrlDefault = null) {
        $imageUrl = get_the_post_thumbnail_url($postItem, 'full');
        $imageAlt = get_post_meta(attachment_url_to_postid($imageUrl), '_wp_attachment_image_alt', TRUE);

        if (empty($imageUrl)) {
            $imageUrl = $imageUrlDefault ?? get_stylesheet_directory_uri() . '/public/images/no-image.png';
        }

        return [
            'url' => $imageUrl,
            'alt' => $imageAlt
        ];
    }
}

if (!function_exists('limitText')) {
    function limitText($text, $limit) {
        if (str_word_count($text, 0) > $limit) {
            $words = str_word_count($text, 2);
            $pos   = array_keys($words);
            $text  = substr($text, 0, $pos[$limit]) . '...';
        }
        return $text;
    }
}

if (!function_exists('getPerPageDefault')) {
    function getPerPageDefault() {
        return 8;
    }
}

if (!function_exists('getPreviousIcon')) {
    function getPreviousIcon() {
        return '<i class="fa fa-arrow-left"></i>';
    }
}

if (!function_exists('getNextIcon')) {
    function getNextIcon() {
        return '<i class="fa fa-arrow-right"></i>';
    }
}

if (!function_exists('getMenuItemsRecursive')) {
    function getMenuItemsRecursive($items, $parentId = 0): array {
        $result = [];

        foreach ($items as $item) {
            if ($item->menu_item_parent == $parentId) {
                $childItems = getMenuItemsRecursive($items, $item->ID);
                if (!empty($childItems)) {
                    $item->child_items = $childItems;
                }
                $result[] = $item;
            }
        }

        return $result;
    }
}

if (!function_exists('getAllMenuLevels')) {
    function getAllMenuLevels($menuName): array {
        $menuLocations = get_nav_menu_locations();
        $menuId = $menuLocations[$menuName];
        $menuItems = wp_get_nav_menu_items($menuId);

        return getMenuItemsRecursive($menuItems);
    }

}