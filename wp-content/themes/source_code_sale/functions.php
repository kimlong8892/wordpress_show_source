<?php
    // functions helper
    include 'helpers/functions.php';


    // remove role
    remove_role('subscriber');
    remove_role('editor');
    remove_role('contributor');
    remove_role('author');

    // add new role
    add_role('user', 'User');

    // add menu
    function addCustomMenu() {
        register_nav_menus([
                'main-menu' => __('Main menu'),
            ]);
    }
    add_action('init', 'addCustomMenu');

add_theme_support('post-thumbnails');
add_post_type_support( 'post', 'thumbnail' );

function prefix_modify_nav_menu_args( $args ) {
    return array_merge( $args, array(
        'walker' => new WP_Bootstrap_Navwalker(),
    ) );
}
add_filter( 'wp_nav_menu_args', 'prefix_modify_nav_menu_args' );

add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}

if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
    // file does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // file exists... require it.
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

function register_my_session(){

}

add_action('init', function () {
    $currentUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $currentUrl = explode('?', $currentUrl);
    $currentUrl = $currentUrl[0] ?? null;

    if (get_site_url() . '/login' === $currentUrl) {
        if (is_user_logged_in()) {
            wp_redirect(get_site_url());
        }

        include get_template_directory() . '/custom_template/login.php';
        exit();
    }

    if (get_site_url() . '/login-post' === $currentUrl) {
        $email = $_POST['email'] ?? null;
        $password = $_POST['password'] ?? null;
        $isWrongEmailOrPassword = null;

        if (!empty($email) && !empty($password)) {
            $user = get_user_by('email', $email);

            if (!empty($user)) {
                $successPassword = wp_check_password($password, $user->data->user_pass, $user->ID);

                if (!$successPassword) {
                    $isWrongEmailOrPassword = false;
                } else {
                    wp_signon([
                        'user_login'    => $email,
                        'user_password' => $password,
                        'remember'      => $_POST['rememberme'] ?? false
                    ]);
                    wp_redirect(get_site_url());
                }
            } else {
                $isWrongEmailOrPassword = true;
            }
        } else {
            wp_redirect(get_site_url() . '/login?error=' . __('Email or password empty') . '&email=' . $email);
        }

        if ($isWrongEmailOrPassword === false) {
            wp_redirect(get_site_url() . '/login?error=' . __('Email or password wrong') . '&email=' . $email);
        }

        exit();
    }

    if (get_site_url() . '/register' === $currentUrl) {
        if (is_user_logged_in()) {
            wp_redirect(get_site_url());
        }

        include get_template_directory() . '/custom_template/register.php';
        exit();
    }

    if (get_site_url() . '/register-post' === $currentUrl) {
        $email = $_POST['email'] ?? null;
        $password = $_POST['password'] ?? null;
        $rePassword = $_POST['re_password'] ?? null;

        if (!empty($email) && !empty($password) && !empty($rePassword)) {
            if ($password != $rePassword) {
                wp_redirect(get_site_url() . '/register?error=' . __('Password not equal re password') . '&email=' . $email);
                exit();
            }

            $userByEmail = get_user_by('email', $email);

            if (!empty($userByEmail)) {
                wp_redirect(get_site_url() . '/register?error=' . __('Email exists in system') . '&email=' . $email);
            } else {
                wp_insert_user([
                    'user_login' => $email,
                    'user_email' => $email,
                    'nickname' => $email,
                    'user_pass' => $password,
                    'role' => 'user'
                ]);
                wp_signon([
                    'user_login'    => $email,
                    'user_password' => $password,
                ]);
                wp_redirect(get_site_url());
            }
        } else {
            wp_redirect(get_site_url() . '/register?error=' . __('Info empty') . '&email=' . $email);
        }

        exit();
    }

    if (get_site_url() . '/logout' === $currentUrl) {
        if (is_user_logged_in()) {
            wp_logout();
            wp_redirect(get_site_url() . '/login');
            exit();
        }
    }
});