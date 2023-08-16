<?php
    $listComment = $args['list_comment'] ?? null;
?>

<?php if (!empty($listComment) && count($listComment) > 0): ?>
    <ul class="comments">
        <?php foreach ($listComment as $item): ?>
            <li class="clearfix" id="comment-<?= $item->comment_ID; ?>">
                <img src="<?= get_avatar_url($item->user_id) ?>" class="avatar">
                <div class="post-comments">
                    <p class="meta">Dec 18, 2014 <a href="#"><?= $userComment->display_name ?? __('Anonymous'); ?></a>
                        says : <i class="pull-right">
                            <a href="#comment" class="reply-comment" data-id="<?= $item->comment_ID; ?>"><small>Reply</small></a></i></p>
                    <p><?= $item->comment_content; ?></p>
                </div>
                <?php
                $listComment = get_comments([
                    'parent' => $item->comment_ID
                ]);
                ?>

                <?php if (!empty($listComment) && count($listComment) > 0): ?>
                    <?php get_template_part('template-parts/comment/row', null, ['list_comment' => $listComment]); ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>