<div id="comments">

    <h3><?php get_comments_number(); ?> comments</h3>
    <?php if (have_comments()): ?>

        <ol class="commentlist">
            <?php wp_list_comments(
                [
                    'callback' => 'newThemeComment',
                    'end-callback' => 'newThemeCommentEnd',
                ]
            ); ?>

        </ol>

    <?php else: ?>
        <h3>Leave a Comment</h3>
    <?php endif; ?>


<div class="respond">

    <?php comment_form(); ?>

</div>
</div>

