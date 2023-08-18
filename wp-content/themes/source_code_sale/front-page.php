<?php
$itemPerPage = 8;
$page = isset($_GET['cpage']) ? abs((int)$_GET['cpage']) : 1;
$offset = ($page * $itemPerPage) - $itemPerPage;
$query = new WP_Query(array(
    'post_type' => 'product',
    'post_status' => 'publish',
    'orderby' => array(
        'post_date' => 'DESC',
    ),
    'posts_per_page' => $itemPerPage,
    'offset' => $offset,
));

$paginate = null;
$listProduct = $query->get_posts();
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
    <title>Trang chủ - <?php echo get_bloginfo('name'); ?></title>
    <?php include 'head.php'; ?>
</head>
<body class="animsition">
<?php get_header(); ?>

<div class="container m-t-150">
    <div class="row isotope-grid">
        <?php foreach ($listProduct as $product): ?>
            <?php
                $product = wc_get_product( $product->ID );
            ?>

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <a href="<?php echo $product->get_permalink(); ?>">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <?php echo $product->get_image(); ?>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="<?php echo $product->get_permalink(); ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    <?php echo $product->get_title(); ?>
                                </a>

                                <span class="stext-105 cl3">
                               <?php echo $product->get_price_html() ?>
                            </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>


    <?php if ($total > $itemPerPage && !empty($paginate)): ?>
        <div class="flex-l-m flex-w w-full p-t-10 m-lr--7">
            <?php foreach ($paginate as $item): ?>
                <?php if (str_contains($item, 'aria-current="page"')): ?>
                    <span class="flex-c-m how-pagination1 trans-04 m-all-7 active-pagination1">
                        <?php echo $item; ?>
                    </span>
                <?php else: ?>
                    <span class="flex-c-m how-pagination1 trans-04 m-all-7">
                        <?php echo $item; ?>
                    </span>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>


<?php get_footer(); ?>
</body>
</html>