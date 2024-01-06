<!doctype html>
<html lang="vi">
<head>
    <title>Trang chủ - <?php echo get_bloginfo('name'); ?></title>
    <?php include 'head.php'; ?>
</head>
<body class="animsition">
<?php get_header(); ?>

<div class="container">
    <?php get_template_part('template-parts/include/cart'); ?>
</div>

<?php get_footer(); ?>
</body>
</html>

