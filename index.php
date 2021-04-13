<?php get_header(); ?>

<div class="w3-row">
<!-- Blog entries -->
  <div class="w3-col l8 s12">
    <?php while (have_posts()): the_post(); ?>
    <!-- Blog entry -->
    <div class="w3-card-4 w3-margin w3-white">
      <img src="<?php the_post_thumbnail_url(); ?>" alt="Nature" style="width:100%;">
      <div class="w3-container">
        <h3><b><?php the_title(); ?></b></h3>
        <h5><span class="w3-opacity"><?php the_date(); ?></span></h5>
      </div>

      <div class="w3-container">
        <div class="w3-justify"><?php the_excerpt(); ?></div>
        <div class="w3-row">
          <div class="w3-col m8 s12">
            <p><a href="<?php echo get_permalink() ?>"><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></button></a></p>
          </div>
          <div class="w3-col m4 w3-hide-small">
            <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-tag"><?php comments_number('0', '1', '%'); ?></span></span></p>
          </div>
        </div>
      </div>
    </div>

    <?php endwhile;  ?>

    <div class="w3-margin">
      <?php next_posts_link( '<div class="w3-button w3-padding-large w3-white w3-border w3-right"><b>NEXT »</b></div>' ); ?>
      <?php previous_posts_link( '<div class="w3-button w3-padding-large w3-white w3-border w3-left"><b>« PREVIOUS </b></div>' ); ?>
    </div>

  </div>

  <div class="w3-col l4" >
    <?php get_sidebar(); ?>
  </div>

</div>

<?php get_footer(); ?>

