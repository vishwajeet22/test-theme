<?php

//Declare Vars
$comment_send = 'Send';
$comment_reply = 'Leave a Message';
$comment_reply_to = 'Reply';
 
$comment_author = 'Name';
$comment_email = 'E-Mail';
$comment_body = 'Comment';
$comment_url = 'Website';
$comment_cookies_1 = ' By commenting you accept the';
$comment_cookies_2 = ' Privacy Policy';
 
$comment_before = 'Registration isn\'t required.';
 
$comment_cancel = 'Cancel Reply';
 
//Array
$comments_args = array(
    //Define Fields
    'fields' => array(
        //Author field
        'author' => '<label class="w3-text-theme">Author</label><input id="author" name="author" class="w3-input w3-border" aria-required="true" placeholder="' . $comment_author .'"></input>',
        //Email Field
        'email' => '<label class="w3-text-theme">E-Mail</label><input id="email" name="email" class="w3-input w3-border" placeholder="' . $comment_email .'"></input>',
        //URL Field
        //'url' => '<p class="comment-form-url"><br /><input id="url" name="url" placeholder="' . $comment_url .'"></input></p>',
        //Cookies
        'cookies' => '<input class="w3-check" type="checkbox" required>' . $comment_cookies_1 . '<a href="' . get_privacy_policy_url() . '">' . $comment_cookies_2 . '</a>',
    ),
    // Change the title of send button
    'label_submit' => __( $comment_send ),
    // Change the title of the reply section
    'title_reply' => __( $comment_reply ),
    // Change the title of the reply section
    'title_reply_to' => __( $comment_reply_to ),
    //Cancel Reply Text
    'cancel_reply_link' => __( $comment_cancel ),
    // Redefine your own textarea (the comment body).
    'comment_field' => '<label class="comment-form-comment w3-text-theme">Comment</label><textarea id="comment" name="comment" class="w3-input w3-border" aria-required="true" placeholder="' . $comment_body .'" style="resize: none"></textarea>',
    //Message Before Comment
    'comment_notes_before' => __( $comment_before),
    // Remove "Text or HTML to be displayed after the set of comment fields".
    'comment_notes_after' => '',
    //Submit Button ID
    'id_submit' => __( 'comment-submit' ),
    'class_submit' => 'w3-button w3-theme w3-padding'
);

?>


<hr/>
<div id="comments" class="w3-container w3-row">
 
    <?php if ( have_comments() ) : ?>
    <div class="w3-col l6 m12 s12">
        <div class="w3-container w3-margin-top">
            <div class="commentlist">
                <?php wp_list_comments( 'type=comment&callback=mytheme_comment&style=div&avatar_size=96' ); ?>
            </div>
            <!-- .comment-list -->
        </div>
 
        <?php
            // Are there comments to navigate through?
            if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        ?>
        <nav class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'twentythirteen' ); ?></h1>
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentythirteen' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentythirteen' ) ); ?></div>
        </nav><!-- .comment-navigation -->
        <?php endif; // Check for comment navigation ?>
 
        <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php _e( 'Comments are closed.' , 'twentythirteen' ); ?></p>
        <?php endif; ?>
    
    </div>

    <?php endif; // have_comments() ?>

    <div class="w3-col s12 m12 l6">
        <div class="w3-card w3-padding">
            <?php comment_form($comments_args); ?>
        </div>
    </div>
 
</div><!-- #comments -->