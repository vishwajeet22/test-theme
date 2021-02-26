<?php get_header(); ?>

<?php the_post(); ?>
    <!-- Blog entry -->
    <div class="w3-card-4 w3-margin w3-white">
      <img src="https://www.w3schools.com/w3images/woods.jpg" alt="Nature" style="width:100%">
      <div class="w3-container">
        <h3><b><?php the_title(); ?></b></h3>
        <h5>Title description, <span class="w3-opacity">April 7, 2014</span></h5>
      </div>

      <div class="w3-container">
        <div class="w3-row">
          <div class="w3-col m8 s12">
            <p><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></button></p>
          </div>
          <div class="w3-col m4 w3-hide-small">
            <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-tag">0</span></span></p>
          </div>
        </div>
      </div>
    </div>

    <div class="w3-row">
    <div class="w3-container w3-col l1"></div>
    <div class="w3-container w3-col l11"><?php the_content(); ?></div>
    </div>

<?php get_footer(); ?>

