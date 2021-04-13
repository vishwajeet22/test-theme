<?php get_header(); ?>

<?php the_post(); ?>
    <!-- Blog entry -->
    <div class="w3-card-4 w3-margin w3-white">
      <img src="https://www.w3schools.com/w3images/woods.jpg" alt="Nature" style="width:100%">
      <div class="w3-container">
        <h2><b><?php the_title(); ?></b></h2>
        <h4><span class="w3-opacity"><?php the_date(); ?></span></h4>
      </div>

    </div>

    <div class="w3-row">
    <div class="w3-container w3-col l1 m12 s12 w3-hide-small w3-hide-medium">
      <div class="w3-bar-block w3-xlarge w3-center w3-text-theme w3-margin w3-margin-top">
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>" class="w3-bar-item w3-button"><i class="fa fa-facebook"></i></a>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-instagram"></i></a>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-pinterest"></i></a>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-linkedin"></i></a>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-whatsapp"></i></a>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-twitter"></i></a>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      </div>
    </div>
    <div class="w3-container w3-col m12 s12 w3-hide-large">
      <div class="w3-bar w3-xlarge w3-text-theme w3-center">
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>" class="w3-button"><i class="fa fa-facebook"></i></a>
        <a href="#" class="w3-button"><i class="fa fa-instagram"></i></a>
        <a href="#" class="w3-button"><i class="fa fa-pinterest"></i></a>
        <a href="#" class="w3-button"><i class="fa fa-linkedin"></i></a>
        <a href="#" class="w3-button"><i class="fa fa-whatsapp"></i></a>
        <a href="#" class="w3-button"><i class="fa fa-twitter"></i></a>
        <a href="#" class="w3-button"><i class="fa fa-envelope"></i></a>
      </div>
    </div>
    <div class="w3-container w3-justify w3-col l9 m12 s12 w3-large"><?php the_content(); ?></div>

    <div class="w3-container w3-col l2 m12 s12">

      <div class="w3-card w3-margin w3-margin-top">
          <img src="<?php the_post_thumbnail_url(); ?>" style="width:100%">
          <div class="w3-container w3-white">
              <h4><b>My Name</b></h4>
              <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of lorem ipsum and mauris neque quam blog. I want to share my world with you.</p>
          </div>
      </div>
    </div>
    <!-- End of row -->
    </div>

    <div class="w3-container">
    <?php
    // If comments are open or we have at least one comment, load up the comment template.  
      if ( comments_open() || get_comments_number() ) :
          comments_template();
      endif;
    ?>
    </div>

<?php get_footer(); ?>
