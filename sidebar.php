<div class="w3-card w3-margin w3-margin-top">
    <img src="<?php echo get_template_directory_uri(); ?>/res/coming-soon.jpg" style="width:100%">
    <div class="w3-container w3-white">
        <h4 class="w3-center"><b>New posts on <span class="w3-xlarge w3-text-theme">Jun 1, 21</span></b></h4>
        <p class="w3-justify">
            <span class="w3-xlarge">Hi</span>, We are constantly working to make available high quality blogs on productivity, positivity, motivation and learning on this website.
            In this journey, we are excited to announce upcoming post on "how to identify and deal with your comfort zone". we would be happy to address
            any queries around this topic in this blog, please use our contact page to let us know what you expect from this post. 
        </p>
    </div>
</div>
<hr>

<div class="w3-card w3-margin w3-margin-top">
    <div class="w3-container w3-padding w3-theme-l2">
      <h4>Popular Posts</h4>
    </div>
    <ul id="recent_posts" class="w3-ul w3-hoverable w3-white">
        <?php
        $recent_posts = wp_get_recent_posts(array(
            'numberposts' => 5, // Number of recent posts thumbnails to display
            'post_status' => 'publish' // Show only the published posts
        ));
        foreach( $recent_posts as $post_item ) : ?>
            <li class="w3-padding-16">
                <a href="<?php echo get_permalink($post_item['ID']) ?>" class="w3-button w3-block">
                <div class="w3-large w3-left">
                    <i class="fa fa-pencil w3-text-theme w3-margin-right"></i>
                    <?php $title_len = strlen($post_item['post_title']); ?>
                    <span class="<?php echo ($title_len >=40 ? "w3-small" : ""); ?>"><?php echo $post_item['post_title'] ?></span>
                </div>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</div><hr>

<!-- Categories -->
<div class="w3-card w3-margin w3-margin-top">
    <div class="w3-container w3-padding w3-theme-l2">
      <h4>Browse Categories</h4>
    </div>
    <ul id="browse_categories" class="w3-ul w3-hoverable w3-white">
        <?php
        $categories = get_categories( array(
            'orderby' => 'name',
            'order'   => 'ASC'
        ) );
        foreach( $categories as $category ) : ?>
            <li class="w3-padding-16">
                <a href="<?php echo get_category_link( $category->term_id ); ?>" class="w3-button w3-block">
                <div class="w3-large w3-left">
                    <?php echo $category->name ?>
                </div>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</div><hr>
