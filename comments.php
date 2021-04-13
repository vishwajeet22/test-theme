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
        <div class="w3-card w3-padding"><?php comment_form(); ?></div>
    </div>
 
</div><!-- #comments -->