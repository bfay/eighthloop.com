<?php
// Spark

global $spark_options;

?>
<div id="comments">
<div class="sixteen columns">

<?php if (post_password_required()) { ?>
	<?php echo do_shortcode('[separator class="add-bottom"]'); ?>
    <p class="nocomments"><?php _e('This post is password protected. Enter the password to view any comments.', 'spark'); ?></p>
    
	<?php return; } ?>

<?php if (have_comments()) : ?>
	<?php echo do_shortcode('[separator class="add-bottom"]'); ?>
    <h5 class="add-bottom"><?php comments_number(__('No Comments', 'spark'), __('1 Comment', 'spark'), __('% Comments', 'spark')); ?> <?php _e('for','spark'); ?> "<?php the_title(); ?>"</h5>

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
    <div class="navigation">
        <div class="previous"><?php previous_comments_link(__( '&#8249; Older comments','spark' )); ?></div><!-- end of .previous -->
        <div class="next"><?php next_comments_link(__( 'Newer comments &#8250;','spark', 0 )); ?></div><!-- end of .next -->
    </div><!-- end of.navigation -->
    <?php endif; ?>

    <ol class="commentlist">
        <?php wp_list_comments('avatar_size=60&type=comment'); ?>
    </ol>
    
    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
    <div class="navigation">
        <div class="previous"><?php previous_comments_link(__( '&#8249; Older comments','spark' )); ?></div><!-- end of .previous -->
        <div class="next"><?php next_comments_link(__( 'Newer comments &#8250;','spark', 0 )); ?></div><!-- end of .next -->
    </div><!-- end of.navigation -->
    <?php endif; ?>

<?php else : ?>

<?php endif; ?>

<?php
if (!empty($comments_by_type['pings'])) : // let's seperate pings/trackbacks from comments
    $count = count($comments_by_type['pings']);
    ($count !== 1) ? $txt = __('Pings&#47;Trackbacks','spark') : $txt = __('Pings&#47;Trackbacks','spark');
?>

	<?php // echo do_shortcode('[separator class="add-bottom"]'); ?>
    <h5 id="pings" class="add-bottom"><?php echo $count . " " . $txt; ?> <?php _e('for','spark'); ?> "<?php the_title(); ?>"</h5>

    <ol class="commentlist">
        <?php wp_list_comments('type=pings&max_depth=<em>'); ?>
    </ol>


<?php endif; ?>

<?php if (comments_open()) : ?>

    <?php
    $fields = array(
        'author' => '<p class="comment-form-author">' . '<label for="author">' . __('Name','spark') . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
        '<input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30" /></p>',
        'email' => '<p class="comment-form-email"><label for="email">' . __('E-mail','spark') . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
        '<input id="email" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) . '" size="30" /></p>',
        'url' => '<p class="comment-form-url"><label for="url">' . __('Website','spark') . '</label>' .
        '<input id="url" name="url" type="text" value="' . esc_attr($commenter['comment_author_url']) . '" size="30" /></p>',
    );

    $defaults = array('fields' => apply_filters('comment_form_default_fields', $fields));

	comment_form($defaults);
    ?>


    <?php endif; ?>

</div><!-- .columns -->
</div>