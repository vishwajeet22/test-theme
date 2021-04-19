<?php get_header(); ?>

<div class="w3-row">
<!-- Blog entries -->
  <div class="w3-col l8 s12">
    
    <div class="w3-card-4 w3-margin w3-white">
      <img src="<?php echo get_template_directory_uri(); ?>/res/contact.jpg" alt="Not Found" loading="lazy" style="width:100%;">

      <div class="w3-container">
        <div class="w3-justify w3-padding">

          <?php
          if (have_posts()):
            while (have_posts()) : the_post();
              the_content();
            endwhile;
          endif;
          ?>

        </div>
      </div>
    </div>

  </div>

  <div class="w3-col l4" >
    <?php get_sidebar(); ?>
  </div>

</div>

<?php get_footer(); ?>
