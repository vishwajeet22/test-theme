<?php
 
function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
 
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

function minimalistblogger_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'stayscribbler' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'stayscribbler' ),
		'before_widget' => '<div class="w3-card w3-margin widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="w3-container w3-padding">',
		'after_title'   => '</div>',
		) 
	);
}

function register_my_menus() {
	
	register_nav_menus(
	  array('primary-menu' => __( 'Primary Menu' ))
	);
}

add_action( 'init', 'register_my_menus' );

add_action( 'widgets_init', 'minimalistblogger_widgets_init' );

add_theme_support( 'post-thumbnails' );

function get_post_header_image() {
	return the_post_thumbnail_url();	
}

function mytheme_comment($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    }?>
    <<?php echo $tag; ?> <?php comment_class(''); ?> id="comment-<?php comment_ID() ?>">

		<div class="w3-col w3-panel s3 m3 l3" id="comment-avatar-<?php comment_ID() ?>">
			<div class="comment-author vcard">
				<img src="<?php echo get_template_directory_uri(); ?>/res/gravtar.jpg" alt="default_gravtar" loading="lazy" class="w3-right w3-circle w3-margin-right" style="width:50px">
			</div>
		</div>

		<div class="w3-col l9 m9 s9 w3-panel w3-justify" id="comment-content-<?php comment_ID() ?>">
			<div class="comment-meta commentmetadata">
				<?php printf( __( '<cite class="fn w3-text-theme">%s</cite>' ), get_comment_author() ); ?>
				<br/>
				<span class="w3-small"><?php
					/* translators: 1: date, 2: time */
					printf( 
						__('%1$s at %2$s'), 
						get_comment_date(),  
						get_comment_time() 
					); ?>
				</span>
				<br/>
				<?php 
					if ( $comment->comment_approved == '0' ) { ?>
						<em class="comment-awaiting-moderation w3-small w3-text-yellow"><?php _e( 'Your comment is awaiting moderation.' ); ?></em><br/><?php 
					} 
					edit_comment_link( __( '(Edit)' ), '  ', '' ); 
				?>
			</div>
			<?php comment_text(); ?>
			<?php 
                comment_reply_link( 
                    array_merge( 
                        $args, 
                        array( 
							'reply_text'=> '<div class="w3-button w3-padding w3-white w3-border"><b>Reply</b></div>',
                            'add_below' => $add_below, 
                            'depth'     => $depth, 
                            'max_depth' => $args['max_depth'] 
                        ) 
                    ) 
                ); 
			?>
		</div>
 
    <?php 
    if ( 'div' != $args['style'] ) : ?>
        </div><?php 
    endif;
}

function wpb_move_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
	return $fields;
}

add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom');

?>