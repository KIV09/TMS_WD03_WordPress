<div id="comments">

    <h3> <?php get_comments_number(); ?> Comments</h3>

    <?php if (have_comments()): ?>
        <!-- commentlist -->
        <ol class="commentlist">

            <?php wp_list_comments(
                [
                    'callback' => 'newThemeComment',
                    'end-callback' => 'newThemeCommentEnd',
                ]
            ); ?>

        </ol> <!-- Commentlist End -->

    <?php else: ?>
        оставь первый комментарий!
    <?php endif; ?>

    <!-- respond -->
    <div class="respond">

        <?php comment_form();?>

    </div> <!-- Respond End -->

</div>  <!-- Comments End -->