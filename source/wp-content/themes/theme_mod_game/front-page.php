<!DOCTYPE html>
<html lang=vi>
    <?php include 'head.php' ?>

    <body>
        <?php include 'template-parts/top-nav.php' ?>
        <?php include 'template-parts/left-menu.php' ?>

        <div class="page-container">
            <script type="3386c33fa00f7b94b57fab00-text/javascript">
                $(document).ready(function() {
                    $(".left-menu-item").removeClass("left-menu-item-active");
                                var gameOffMenu = $(".left-menu-items").find("[value='/']");
                                $(gameOffMenu).addClass("left-menu-item-active");
                    $(this).scrollTop(0);
                    var splide = new Splide(".splide");
                    splide.mount();
                    var mouseDownOnMember = false;
                    var xPosMouseDown = 0;
                    var xCategoryLeft = 0;
                    openGame(".new-game-post");
                    openGame(".game-thumbnail02");
                    categoryClick();
                    $(".top-members-container").on("mousedown", function(e) {
                        mouseDownOnMember = true;
                        xPosMouseDown = e.clientX;
                        xCategoryLeft = $(this).scrollLeft();
                    });
                    $(".top-members-container").on("mouseup", function() {
                        mouseDownOnMember = false;
                    });
                    $(".top-members-container").on("mousemove", function(e) {
                        if (mouseDownOnMember) {
                            var distance = e.clientX - xPosMouseDown;
                            $(this).scrollLeft(xCategoryLeft - distance);
                        }
                    });
                    $(".top-members-container").on("mouseleave", function() {
                        mouseDownOnMember = false;
                    });

                    $(".top-game-type").on("click", function() {
                        $(".top-game-type").removeClass("top-game-type-active");
                        $(this).addClass("top-game-type-active");
                        var categoryId = $(this).attr('data-id');
                        ajLoadTopGame(categoryId);
                    });

                    $("#all-new-game").on("click", function() {
                        chooseOfflineMenu();
                        window.history.pushState("", "", "/game-offline");
                        showGames();
                    });

                    $("#all-update-game").on("click", function() {
                        chooseOfflineMenu();
                        window.history.pushState("", "", "/game-offline?type=updated");
                        showGames();
                    });
                });

                function ajLoadTopGame(categories = '') {
                    $(".top-game-container").html('');
                    var size = 12;
                    if (isResoution(1366) || isResoution(1440) || isResoution(1280)) {
                        size = 9;
                    }
                    if (isResoution(2560)) {
                        size = 12;
                    }
                    if (isMobile()) {
                        size = 5;
                    }
                    $.ajax({
                        url: apiHost + "/game/search?isHot=true&size=" + size + "&categories=" + categories,
                        type: "get",
                        contentType: "application/json",
                        success: function(msg) {
                            i = 1;
                            msg.content.forEach(game => {
                                $(".top-game-container").append(
                                    "<a class='game-a-tag' href='/" + game.url + "'>" +
                                    "<div url='" + game.url + "' data-id='" + game.id + "' class='game-thumbnail02'>" +
                                    "    <div class='game-thumbnail02-image'>" +
                                    "        <img src='/images" + generateThumbnailUrl(game.coverImage) + "' loading='lazy' alt='Tải "+game.title+" Full Cho PC'></img>" +
                                    "    </div>" +
                                    "    <div class='game-thumbnail02-types'>" + (game.updated ? "<div class='game-thumbnail-type game-thumbnail-type-update'>Update</div>" : "") +
                                    getCategories(game, game.updated ? 1 : 2) +
                                    "    </div>" +
                                    "    <h3 class='game-thumbnail-title game-thumbnail02-title'>" +
                                    game.title +
                                    "    </h3>" +
                                    "    <div class='game-thumbnail-desc-info game-thumbnail02-desc-info'>" +
                                    "        <span>By <span>" + game.updatedBy + "</span></span><span>" + new Date(game.updatedAt).toShortFormat() + "</span>" +
                                    "    </div>" +
                                    "</div></a>"
                                );
                                i++;
                            });
                            openGame(".game-thumbnail02");
                            categoryClick();
                        }
                    });
                }
            </script>
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