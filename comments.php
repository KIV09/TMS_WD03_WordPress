<div class="comments-wrap">

	<div id="comments">

		<h3><?= get_comments_number(); ?></h3>

        <?php if (have_comments()): ?>

            <!-- START commentlist -->
            <ol class="commentlist">
                <?php wp_list_comments(
                        [
                            'callback' => 'newThemeComment',
                            'end-callback' => 'newThemeCommentEnd',
                        ]
                ); ?>

            </ol>
            <!-- END commentlist -->

        <?php else: ?>
            Оставь комментарий!
        <?php endif; ?>

	</div> <!-- end comments -->

	<div class="comment-respond">

        <?php comment_form(); ?>

	</div> <!-- end comment-respond -->

</div> <!-- end comments-wrap -->