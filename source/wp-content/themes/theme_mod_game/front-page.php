<!DOCTYPE html>
<html lang=vi>
    <?php include 'head.php' ?>

    <body>
        <?php include 'template-parts/top-nav.php' ?>
        <?php include 'template-parts/left-menu.php' ?>

        <div class="page-container">
            <div class="slider">
                <div class="splide" role="group" aria-label="Splide Basic HTML Example">
                    <div class="splide__track">
                        <div class="splide__list" id="slide-data">
                            <?php
                            $random_posts = new WP_Query([
                                'post_type'      => 'post',
                                'posts_per_page' => 5,
                                'orderby'        => 'rand',
                            ]);
                            if ($random_posts->have_posts()):
                                while ($random_posts->have_posts()): $random_posts->the_post();
                                    $img = function_exists('getFeaturedImage') ? getFeaturedImage(get_post()) : [
                                        'url' => get_the_post_thumbnail_url(get_post(), 'large'),
                                        'alt' => get_the_title(),
                                    ];
                            ?>
                                <div class='splide__slide'>
                                    <div class='slide-info'>
                                        <div class='slide-info-name'><?php the_title(); ?></div>
                                        <p class='slide-info-desc'><?php echo esc_html(wp_trim_words(get_the_excerpt() ?: wp_strip_all_tags(get_the_content()), 28)); ?></p>
                                        <a class='slide-info-btn' href='<?php the_permalink(); ?>'><span>Xem thêm</span></a>
                                    </div>
                                    <?php if (!empty($img['url'])): ?>
                                        <img class='banner-img' fetchpriority='high' src='<?php echo esc_url($img['url']); ?>' alt='<?php echo esc_attr($img['alt'] ?? get_the_title()); ?>'>
                                    <?php endif; ?>
                                </div>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="new-game">
                <div class="new-game-header">
                    <div class="new-game-header-left">
                        <img src="https://taigamekp.com//images/union.webp" alt="Game offline mới" width="30" height="23">
                        <span>GAME MỚI</span>
                    </div>
                    <div class="new-game-header-right  more-more" id="all-new-game">
                        <span>XEM TẤT CẢ</span>
                    </div>
                </div>
                <div class="new-game-container">
                    <?php
                    $new_posts = new WP_Query([
                        'post_type'      => 'post',
                        'posts_per_page' => 9,
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                    ]);
                    $index = 0;
                    if ($new_posts->have_posts()): while ($new_posts->have_posts()): $new_posts->the_post();
                        $img = function_exists('getFeaturedImage') ? getFeaturedImage(get_post()) : [
                            'url' => get_the_post_thumbnail_url(get_post(), 'large'),
                            'alt' => get_the_title(),
                        ];
                        $is_first = $index === 0;
                        $post_url_slug = basename(untrailingslashit(get_permalink()));
                    ?>
                        <a class='game-a-tag <?php echo $is_first ? "new-game-post-first" : ""; ?>' href='<?php the_permalink(); ?>'>
                            <div url='<?php echo esc_attr($post_url_slug); ?>' data-id='<?php the_ID(); ?>' class='new-game-post <?php echo $is_first ? "new-game-post-first" : ""; ?>'>
                                <div class='game-thumbnail-background' style='background-image: url(<?php echo json_encode(esc_url($img['url'] ?: get_stylesheet_directory_uri()."/public/images/no-image.png")); ?>);'></div>
                                <div class='game-thumbnail-info'>
                                    <div class='game-thumbnail-types'>
                                        <?php foreach (get_the_category() as $c): ?>
                                            <div class='game-thumbnail-type' data-id='<?php echo esc_attr($c->term_id); ?>' url='<?php echo esc_attr($c->slug); ?>'><?php echo esc_html($c->name); ?></div>
                                        <?php endforeach; ?>
                                    </div>
                                    <h3 class='game-thumbnail-title <?php echo $is_first ? "game-thumbnail-title-first" : ""; ?>'><?php the_title(); ?></h3>
                                    <div class='game-thumbnail-desc'>
                                        <div class='game-thumbnail-desc-info'>
                                            <span>By <span><?php the_author(); ?></span></span><span><?php echo esc_html(get_the_date('d-M-Y')); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php $index++; endwhile; wp_reset_postdata(); endif; ?>
                </div>
            </div>
            <div class="container-footer">
            </div>
            <div class="container-cover"></div>
        </div>
    </body>
</html>