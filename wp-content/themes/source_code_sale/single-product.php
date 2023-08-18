<?php
    global $post;
    $product = wc_get_product($post->ID);
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
    <a href="<?php echo $product->add_to_cart_url(); ?>">Abvc</a>
</div>

<?php get_footer(); ?>
</body>
</html>

