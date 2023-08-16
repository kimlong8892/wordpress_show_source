<?php
    $configTypePage = 'page';
    $currentCategory = get_queried_object();
    $query = new WP_Query(array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'orderby' => array(
            'post_date' => 'DESC',
        ),
        'posts_per_page' => -1,
    ));
    $listPost = $query->get_posts();
?>

<!doctype html>
<html lang="vi">
<head>
    <?php include 'head.php'; ?>
</head>
<body>
<?php get_header(); ?>

<div class="container">
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
</div>

<?php get_footer(); ?>
</body>
</html>