<?php
global $post;
$imagePost = getFeaturedImage($post);
$listCategory = get_the_category();


?>

<!doctype html>
<html lang="vi">
<head>
    <?php include 'head.php'; ?>
    <link rel="stylesheet" href="<?= getPublicFile('css/comment.css'); ?>">
</head>
<body>
<?php get_header(); ?>

<div class="container p-3">
    <?php get_template_part('template-parts/include/breadcrumb_render', null, [
        'list_breadcrumb' => [
            [
                'is_current' => true,
                'title' => get_the_title($post)
            ]
        ]
    ]); ?>

    <div class="row">
        <div class="col-md-12">
            <article>
                <header class="mb-4">
                    <h1 class="fw-bolder mb-1"><?= get_the_title(); ?></h1>
                    <div class="text-muted fst-italic mb-2"><?= get_the_date(); ?></div>
                    <?php if (!empty($listCategory) && count($listCategory) > 0): ?>
                        <?php foreach ($listCategory as $item): ?>
                            <a class="badge bg-secondary text-decoration-none link-light"
                               href="<?= get_term_link($item); ?>"><?= $item->name; ?></a>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </header>
                <figure class="mb-4">
                    <img class="img-fluid rounded" src="<?= $imagePost['url'] ?? ''; ?>"
                         alt="<?= $imagePost['alt'] ?? ''; ?>" width="100%">
                </figure>
                <section class="mb-5 card p-2">
                    <?= get_the_content(); ?>
                </section>
            </article>
        </div>
    </div>



    <?php comments_template(); ?>

    <?php get_footer(); ?>
</body>
</html>