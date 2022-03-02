<?php if ( post_password_required() ) { return; } ?>
<div id="comments" class="comments-area mt-16">
    <?php if ( have_comments() ) { ?>
    <h4 class="comments-title text-xl">
        <?php comments_number(__('لا يوجد تعليقات', 'naffaj'), __('1 تعليق', 'naffaj'), '% ' . __('تعليقات', 'naffaj') ); ?>
    </h4>
    <span class="title-line"></span>
    <ol class="comment-list">
        <?php wp_list_comments( array( 'avatar_size' => 70, 'style' => 'ul', 'callback' => 'your_theme_slug_comments', 'type' => 'all', 'max_depth'  => 4,   ) ); ?>
    </ol>
    <?php the_comments_pagination( array( 'prev_text' => '<i class="fa fa-angle-left" aria-hidden="true"></i> <span class="screen-reader-text">' . __( 'السابق', 'naffaj') . '</span>', 'next_text' => '<span class="screen-reader-text">' . __( 'التالي', 'naffaj') . '</span> <i class="fa fa-angle-right" aria-hidden="true"></i>', ) ); ?>
    <?php } ?>
    <?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) { ?>
    <p class="no-comments"><?php _e( 'التعليقات مغلقة.', 'naffaj'); ?></p>
    <?php } ?>
    <?php comment_form(); ?>
</div>
