<!-- Comments
           ================================================== -->
<div id="comments">

    <h5><?php comments_number(); ?></h5>

    <?php if (have_comments()): ?>
    <!-- commentlist -->
    <ol class="commentlist">
        <?php wp_list_comments([
            'callback' => 'dzComment',
            'end-callback' => 'dzCommentEnd',
        ]); ?>

    </ol> <!-- Commentlist End -->
    <?php else: ?>
        ОСТАВЬ КОМЕНТ ПАДЛА!
    <?php endif; ?>

    <!-- respond -->
    <div class="respond">
        <?php comment_form(); ?>
    </div> <!-- Respond End -->

</div>  <!-- Comments End -->