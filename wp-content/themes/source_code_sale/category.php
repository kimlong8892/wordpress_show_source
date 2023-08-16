<?php
    $configTypePage = 'page';
    $currentCategory = get_queried_object();
    $categoryId = $currentCategory->term_id;
    $itemPerPage = get_field('per_page', 'options')['category'] ?? getPerPageDefault();
    $page = isset($_GET[$configTypePage]) ? abs((int)$_GET[$configTypePage]) : 1;
    $offset = ($page * $itemPerPage) - $itemPerPage;

    $query = new WP_Query(array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'orderby' => array(
            'post_date' => 'DESC',
        ),
        'posts_per_page' => $itemPerPage,
        'offset' => $offset,
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field'    => 'id',
                'terms'    => $categoryId,
            ),
        ),
    ));

    $paginate = null;
    $listPost = $query->get_posts();
    $total = $query->found_posts;

    if ($total > $itemPerPage) {
        $paginate = paginate_links(array(
            'base' => add_query_arg($configTypePage, '%#%'),
            'format' => '',
            'total' => ceil($total / $itemPerPage),
            'current' => $page,
            'type' => 'array',
            'prev_text'    => getPreviousIcon(),
            'next_text'    => getNextIcon(),
            'add_fragment' => '',
        ));
    }
?>
<!doctype html>
<html lang="vi">
<head>
    <?php include 'head.php'; ?>
</head>
<body>
    <?php get_header(); ?>
    <div class="container p-3">
        <?php get_template_part('template-parts/include/breadcrumb_render', null, [
            'list_breadcrumb' => [
                [
                    'is_current' => true,
                    'title' => $currentCategory->name
                ]
            ]
        ]); ?>

        <div class="row">
            <?php foreach ($listPost as $item): ?>
                <div class="col-md-3 mt-4">
                    <a href="<?= get_permalink($item->ID); ?>" class="text-decoration-none text-dark">
                        <div class="card shadow-lg">
                            <?php
                                $listCategory = get_the_category($item->ID);
                                $image = getFeaturedImage($item);
                                $contentShort = limitText($item->post_content, 20);
                            ?>

                            <img class="card-img-top" src="<?= $image['url'] ?? ''; ?>" alt="<?= $image['alt'] ?? ''; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= get_the_title($item->ID); ?></h5>

                                <?php if (!empty($contentShort)): ?>
                                    <p class="card-text"><?= $contentShort . '...'; ?></p>
                                <?php endif; ?>

                                <?php foreach ($listCategory as $category): ?>
                                    <span class="badge bg-info text-dark"><?= $category->name; ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

        <?php get_template_part('template-parts/include/paginate_render', null, [
            'total' => $total,
            'itemPerPage' => $itemPerPage,
            'paginate' => $paginate
        ]); ?>
    </div>
    <?php get_footer(); ?>
</body>
</html>