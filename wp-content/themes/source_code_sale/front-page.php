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


$products = new WP_Query([
    'post_type' => 'product',
    'posts_per_page' => 12
]);
$products = $products->get_posts();

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
        <?php foreach ($products as $product): ?>
            <?php
                $product = wc_get_product( $product->ID );
            ?>

            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
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
            </div>
        <?php endforeach; ?>
    </div>
</div>


<?php get_footer(); ?>
</body>
</html>