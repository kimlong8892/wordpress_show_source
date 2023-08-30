<?php
    global $post;

    $itemPerPage = 8;
    $page = isset($_GET['cpage']) ? abs((int)$_GET['cpage']) : 1;
    $offset = ($page * $itemPerPage) - $itemPerPage;
    $query = new WP_Query(array(
        'post_type' => 'posts',
        'post_status' => 'publish',
        'orderby' => array(
            'post_date' => 'DESC',
        ),
        'posts_per_page' => $itemPerPage,
        'offset' => $offset,
    ));

    $paginate = null;
    $listPost = $query->get_posts();
    $total = $query->found_posts;

    if ($total > $itemPerPage) {
        $paginate = paginate_links(array(
            'base' => add_query_arg('cpage', '%#%'),
            'format' => '',
            'total' => ceil($total / $itemPerPage),
            'current' => $page,
            'type' => 'array',
            'next_text' => '>',
            'prev_text' => '<'
        ));
    }

?>

<!doctype html>
<html lang="vi">
<head>
    <title><?php echo get_the_title($post); ?> - <?php echo get_bloginfo('name'); ?></title>
    <?php include 'head.php'; ?>
</head>
<body class="animsition">
<?php get_header(); ?>

<div class="container">


    <?php get_template_part('template-parts/include/paginate_render', null, [
        'total' => $total,
        'itemPerPage' => $itemPerPage,
        'paginate' => $paginate
    ]); ?>
</div>

<?php get_footer(); ?>
</body>
</html>