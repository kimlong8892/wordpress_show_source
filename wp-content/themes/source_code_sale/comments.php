<?php
    global $post;
    $listComment = get_comments([
        'post_id' => $post->ID,
        'parent' => 0
    ]);
?>

<?php if (!empty($listComment) && count($listComment) > 0): ?>
    <div class="row">
        <div class="col-md-12">
            <div class="blog-comment">
                <h3 class="text-success"><?= __('Comments'); ?></h3>
                <hr/>
                <?php get_template_part('template-parts/comment/row', null, ['list_comment' => $listComment]); ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php
    comment_form();
?>

<script>
    $(document).ready(function () {
        $(`#commentform textarea, #commentform input[type='text'], #commentform input[type='email']`).addClass('form-control');
        $(`#commentform input[type='submit']`).addClass('btn');
        $(`#commentform input[type='submit']`).addClass('btn-primary');

        $('.reply-comment').click(function () {
            let id = $(this).attr('data-id');
            $('#comment_parent').val(id);
        });
    });
</script>