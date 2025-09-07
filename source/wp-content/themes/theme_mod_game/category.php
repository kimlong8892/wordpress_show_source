<!DOCTYPE html>
<html lang=vi>
<head>
    <?php include 'head.php' ?>
</head>

<body>
<?php include 'template-parts/top-nav.php' ?>
<?php include 'template-parts/left-menu.php' ?>

<div class="page-container">
    <div class="games-director">
        <a class="redirect" href="<?php echo esc_url(home_url('/')); ?>">Home</a><span>&gt;</span><span><?php single_cat_title(); ?></span>
    </div>

<!--    <div class="games-filters">-->
<!--        <div class="select" id="category" type="checkbox">-->
<!--            <div class="select-over">-->
<!--                <div class="selected" value="--><?php //echo esc_attr(get_queried_object()->slug ?? ''); ?><!--" data-id="--><?php //echo esc_attr(get_queried_object_id()); ?><!--">--><?php //single_cat_title(); ?><!--</div>-->
<!--                <i class="fa fa-chevron-down" aria-hidden="true"></i>-->
<!--            </div>-->
<!--            <div class="select-options" style="display:none;"></div>-->
<!--        </div>-->
<!--        <div class="select" id="ft-type">-->
<!--            <div class="select-over">-->
<!--                <div class="selected" value="all">Tất cả</div>-->
<!--                <i class="fa fa-chevron-down" aria-hidden="true"></i>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="select" id="ft-system">-->
<!--            <div class="select-over">-->
<!--                <div class="selected" value="all">Tất cả cấu hình</div>-->
<!--                <i class="fa fa-chevron-down" aria-hidden="true"></i>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="select" id="ft-storage">-->
<!--            <div class="select-over">-->
<!--                <div class="selected" value="all">Tất cả dung lượng</div>-->
<!--                <i class="fa fa-chevron-down" aria-hidden="true"></i>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="select" id="ft-player">-->
<!--            <div class="select-over">-->
<!--                <div class="selected" value="all">Single player</div>-->
<!--                <i class="fa fa-chevron-down" aria-hidden="true"></i>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="select" id="ft-gear">-->
<!--            <div class="select-over">-->
<!--                <div class="selected" value="all">Bàn phím + chuột</div>-->
<!--                <i class="fa fa-chevron-down" aria-hidden="true"></i>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="filter-btn">-->
<!--            <i class="fa fa-search" aria-hidden="true"></i>-->
<!--            <div>Tìm kiếm</div>-->
<!--        </div>-->
<!--    </div>-->

<!--    <div class="games-name-ft">-->
<!--        <div class="games-order">-->
<!--            <div>Sắp xếp theo:</div>-->
<!--            <div class="select">-->
<!--                <div class="select-over">-->
<!--                    <div class="selected">Mới nhất</div>-->
<!--                    <i class="fa fa-chevron-down" aria-hidden="true"></i>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

    <div class="games">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <?php $img = function_exists('getFeaturedImage') ? getFeaturedImage(get_post()) : ['url' => get_the_post_thumbnail_url(get_post(),'medium'), 'alt' => get_the_title()]; ?>
            <a class="game-a-tag" href="<?php the_permalink(); ?>">
                <div url="<?php echo esc_attr(basename(untrailingslashit(get_permalink()))); ?>" data-id="<?php the_ID(); ?>" class="game-thumbnail02">
                    <div class="game-thumbnail02-image">
                        <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt'] ?? get_the_title()); ?>" loading="lazy">
                    </div>
                    <div class="game-thumbnail02-types">
                        <?php $cats = get_the_category(); foreach ($cats as $c): ?>
                            <div class="game-thumbnail-type" data-id="<?php echo esc_attr($c->term_id); ?>" url="<?php echo esc_attr($c->slug); ?>">
                                <?php echo esc_html($c->name); ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <h3 class="game-thumbnail-title game-thumbnail02-title"><?php the_title(); ?></h3>
                    <div class="game-thumbnail-desc-info game-thumbnail02-desc-info">
                        <span>By <span><?php the_author(); ?></span></span><span><?php echo esc_html(get_the_date('j-M-Y')); ?></span>
                    </div>
                </div>
            </a>
        <?php endwhile; else: ?>
            <p>Chưa có bài trong chuyên mục này.</p>
        <?php endif; ?>
    </div>

    <?php
    global $wp_query;
    $max = (int)$wp_query->max_num_pages;
    $paged = max(1, get_query_var('paged'));
    if ($max > 1): ?>
        <div class="paging">
            <div class="page" data="previous">
                <?php if ($paged > 1): $prev_link = get_pagenum_link($paged - 1); ?>
                    <a href="<?php echo esc_url($prev_link); ?>" aria-label="Previous"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                <?php else: ?>
                    <i class="fa fa-chevron-left" aria-hidden="true" style="opacity:.5"></i>
                <?php endif; ?>
            </div>
            <div id="pages">
                <?php for ($i = 1; $i <= $max; $i++): ?>
                    <a class="page <?php echo $i === $paged ? 'page-active' : ''; ?>" href="<?php echo esc_url(get_pagenum_link($i)); ?>" data="<?php echo esc_attr($i); ?>"><?php echo esc_html($i); ?></a>
                <?php endfor; ?>
            </div>
            <div class="page" data="next">
                <?php if ($paged < $max): $next_link = get_pagenum_link($paged + 1); ?>
                    <a href="<?php echo esc_url($next_link); ?>" aria-label="Next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                <?php else: ?>
                    <i class="fa fa-chevron-right" aria-hidden="true" style="opacity:.5"></i>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="container-footer"></div>
    <div class="container-cover"></div>
</div>
</body>
</html>