<?php
/**
 * Plugin Name: Long dev custom plugin
 * Description: Long dev custom plugin
 * Version: 1.0
 * Author: Nguyen Kim Long
 **/

use GuzzleHttp\Exception\GuzzleException;

include 'functions.php';

/*
* =================== START THEME CONFIGS PAGE ===================
*/
if(function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'Configs',
        'menu_title' => 'Configs',
        'menu_slug' => '',
        'position' => 1,
        'icon_url' => false
    ]);
}
/*
* =================== END THEME CONFIGS PAGE ===================
*/

/*
* =================== START THEME HOME PAGE ===================
*/
if(function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'HomeConfig',
        'menu_title' => 'HomeConfig',
        'menu_slug' => '',
        'position' => 1,
        'icon_url' => false
    ]);
}
/*
* =================== END THEME HOME PAGE ===================
*/


if (!function_exists('getApi')) {
    function getApi($url, $params = [], $headers = []) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url . http_build_query($params),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => $headers,
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return json_decode($response, true);
    }
}

function custom_plugin_register_settings(): void {
}
add_action('admin_init', 'custom_plugin_register_settings');

function custom_plugin_register_options_page(): void {
    add_options_page('Custom plugin (longdev)', 'Custom plugin (longdev)', 'manage_options', 'custom_plugin', 'custom_plugin_options_page');
}
add_action('admin_menu', 'custom_plugin_register_options_page');

function custom_plugin_options_page(): void {
    include 'option_html.php';
}

// Add filter to respond with next and previous post in post response.
add_filter( 'rest_prepare_post', function( $response, $post, $request ) {
    if (!empty($_GET['next_and_previous']) && $_GET['next_and_previous'] == 1) {
        $response->data['next'] = get_adjacent_post(false,'',false ) ?? null;
        $response->data['previous'] = get_adjacent_post();

        if (!empty($response->data['next']->ID)) {
            $response->data['next']->post_image = wp_get_attachment_url( get_post_thumbnail_id($response->data['next']->ID));
        }

        if (!empty($response->data['previous']->ID)) {
            $response->data['previous']->post_image = wp_get_attachment_url( get_post_thumbnail_id($response->data['previous']->ID));
        }
    }

    if (!empty($_GET['acf_field']) && $_GET['acf_field'] == 1) {
        $response->data['acf_field'] = get_fields($post->ID);
    }

    $response->data['image'] = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
    $response->data['title'] = get_the_title($post);

    return $response;
}, 10, 3 );

add_action('init', function () {
    $pathUrl = $_SERVER['REQUEST_URI'] ?? null;
    $pathUrl = explode('?', $pathUrl)[0] ?? null;

    if ($pathUrl == '/custom-api/wp-json/acf/v2/config') {
        $configs = get_fields('options');

        foreach ($configs as $config) {
            if (!empty($config) && is_array($config) && !empty($config[0]) && $config[0] instanceof WP_Post) {
                foreach ($config as $post) {
                    $post->post_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));;
                }
            }
        }

        header('Content-type: application/json');
        echo json_encode($configs);
        exit();
    }

    if ($pathUrl == '/custom-api/wp-json/posts') {
        $itemPerPage = $_GET['per_page'] ?? 6;
        $page = $_GET['page'] ?? 1;
        $offset = ($page * $itemPerPage) - $itemPerPage;
        $query = new WP_Query(array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'orderby' => array(
                'ID' => 'ASC',
            ),
            'posts_per_page' => $itemPerPage,
            'offset' => $offset,
        ));

        $listPost = $query->get_posts();
        $listPostData = [];

        foreach ($listPost as $key => $value) {
            $listPostData[] = [
                'id' => $value->ID,
                'title' => get_the_title($value),
                'image' => getImageByPostId($value->ID)
            ];
        }

        $responseData = [
            'data' => $listPostData,
            'total' => $query->found_posts,
            'page' => $page,
            'per_page' => (int)$itemPerPage
        ];

        header('Content-type: application/json');
        echo json_encode($responseData);
        exit();
    }

    if ($pathUrl == '/custom-api/wp-json/post/detail') {
        header('Content-type: application/json');

        $id = $_GET['id'] ?? null;

        if (empty($id)) {
            echo json_encode(['mgs' => 'id empty']);
            exit();
        }

        $post = get_post($id);

        $postData = [
            'id' => $post->ID,
            'title' => get_the_title($post),
            'image' => getImageByPostId($post->ID),
            'content' => get_the_content('', '', $post)
        ];

        echo json_encode($postData);
        exit();
    }

    if ($pathUrl == '/custom-api/wp-json/post/edit') {
        header('Content-type: application/json');
        $id = $_POST['id'] ?? null;

        if (empty($id)) {
            echo json_encode(['mgs' => 'id empty']);
            exit();
        }

        $post = get_post($id);
        $title = $_POST['title'] ?? null;

        if (!empty($title)) {
            $post->post_title = $title;
        }

        wp_update_post($post);

        echo json_encode(['mgs' => 'success', 'success' => true]);
        exit();
    }

    if ($pathUrl == '/custom-api/wp-json/user/create') {
        header('Content-type: application/json');
        $userName = $_POST['user_name'];
        $userEmail = $_POST['user_email'];
        $userPassword = $_POST['user_password'];

        if (!empty($userName) && !empty($userEmail)) {
            wp_insert_user([
                'user_login' => $userName,
                'user_email' => $userEmail,
                'first_name' => $userName,
                'last_name' => $userName,
                'display_name' => $userName,
                'user_pass' => $userPassword,
                'role' => 'user'
            ]);

            echo json_encode([
                'mgs' => 'success',
                'success' => true,
                'data' => get_user_by('email', $userEmail)
            ]);
            exit();
        }

        echo json_encode([
            'success' => false,
            'mgs' => 'empty name or email or password',
        ]);
        exit();
    }
});