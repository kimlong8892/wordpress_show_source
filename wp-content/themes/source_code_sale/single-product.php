<?php
global $post;
$product = wc_get_product($post->ID);
$listImage = [wp_get_attachment_url($product->get_image_id())];

foreach ($product->get_gallery_image_ids() as $gallery_image_id) {
    $listImage[] = wp_get_attachment_url($gallery_image_id);
}

$listAttr = $product->get_attributes();

?>


<!doctype html>
<html lang="vi">
<head>
    <title>Trang chủ - <?php echo get_bloginfo('name'); ?></title>
    <?php include 'head.php'; ?>
</head>
<body class="animsition">
<?php get_header(); ?>

<!-- Product Detail -->
<section class="sec-product-detail bg0 p-t-65 p-b-60">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-7 p-b-30">
                <div class="p-l-25 p-r-30 p-lr-0-lg">
                    <div class="wrap-slick3 flex-sb flex-w">
                        <div class="wrap-slick3-dots"></div>
                        <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                        <div class="slick3 gallery-lb">
                            <?php foreach ($listImage as $image_url): ?>
                                <div class="item-slick3" data-thumb="<?php echo $image_url; ?>">
                                    <div class="wrap-pic-w pos-relative">
                                        <img src="<?php echo $image_url; ?>" alt="IMG-PRODUCT">

                                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04"
                                           href="<?php echo $image_url; ?>">
                                            <i class="fa fa-expand"></i>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-5 p-b-30">
                <div class="p-r-50 p-t-5 p-lr-0-lg">
                    <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                        <?php echo $product->get_name(); ?>
                    </h4>

                    <span class="mtext-106 cl2">
                        <?php echo $product->get_price_html(); ?>
                    </span>

                    <p class="stext-102 cl3 p-t-23">
                        <?php echo $product->get_short_description(); ?>
                    </p>

                    <!--  -->
                    <div class="p-t-33">
                        <form class="cart" action="<?php echo $product->add_to_cart_url(); ?>">

                            <?php foreach ($listAttr as $attr): ?>
                                <div class="flex-w flex-r-m p-b-10">
                                <div class="size-203 flex-c-m respon6">
                                    <?php echo wc_attribute_label($attr['name']); ?>
                                </div>

                                <div class="size-204 respon6-next">
                                    <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2" name="time">
                                            <option>-</option>

                                            <?php foreach ($attr->get_terms() as $option): ?>
                                                <option><?php echo $option->name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>

                            <div class="flex-w flex-r-m p-b-10">
                                <div class="size-204 flex-w flex-m respon6-next">
                                    <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                        <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-minus"></i>
                                        </div>

                                        <input class="mtext-104 cl3 txt-center num-product" type="number"
                                               name="num-product"
                                               value="1">

                                        <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-plus"></i>
                                        </div>
                                    </div>

                                    <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                                        Add to cart
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="bor10 m-t-50 p-t-43 p-b-40">
            <!-- Tab01 -->
            <div class="tab01">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item p-b-10">
                        <a class="nav-link active" data-toggle="tab" href="#description" role="tab">Mô tả</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-t-43">
                    <!-- - -->
                    <div class="tab-pane fade show active" id="description" role="tabpanel">
                        <div class="how-pos2 p-lr-15-md">
                            <p class="stext-102 cl6">
                                <?php echo $product->get_description(); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
</body>
</html>

