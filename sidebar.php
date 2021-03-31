<div class="w3-card w3-margin w3-margin-top">
    <img src="https://www.w3schools.com//w3images/avatar_g.jpg" style="width:100%">
    <div class="w3-container w3-white">
        <h4><b>My Name</b></h4>
        <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of lorem ipsum and mauris neque quam blog. I want to share my world with you.</p>
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
                <a href="<?php echo get_permalink($post_item['ID']) ?>" class="w3-button">
                    <div class="w3-large"><i class="fa fa-pencil w3-text-theme w3-margin-right"></i>
                    <?php echo $post_item['post_title'] ?></div>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</div><hr>
