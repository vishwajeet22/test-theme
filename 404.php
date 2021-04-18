<?php get_header(); ?>

<div class="w3-row">
<!-- Blog entries -->
  <div class="w3-col l8 s12">
    
    <div class="w3-card-4 w3-margin w3-white">
      <img src="<?php echo get_template_directory_uri(); ?>/res/404.jpg" alt="Not Found" loading="lazy" style="width:100%;">
      <div class="w3-container">
        <h3><b>Something went wrong</b></h3>
        <h5 class="w3-text-theme">Perhaps, the page you are looking for could not be found</h5>
      </div>

      <div class="w3-container">
        <div class="w3-justify w3-padding">
          If you think this is a technical error, please write to us through contact us page. 
          You can also try a generic search below.
          <div class="w3-section w3-center">
            <a href="about"><div class="w3-btn w3-padding-large w3-white w3-border"><b>Getting Started</b></div></a>
            <a href="contact"><div class="w3-btn w3-padding-large w3-white w3-border"><b>Contact Us</b></div></a>
          </div>
        </div>
        <div class="w3-row w3-padding-64"> 
          <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" >
            <label class="w3-text-theme">Search Query</label>
            <div class="w3-col s11 l11 m11"><input class="w3-input w3-border" type="text" name="s" id="s" placeholder="Click the search icon to search"></div>
            <div class="w3-col s1 m1 l1">
            <button type="submit" name="submit" id="searchsubmit" class="w3-button w3-white w3-hover-white" >
              <i class="fa fa-search w3-xlarge w3-text-theme"></i>
            </button>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>

  <div class="w3-col l4" >
    <?php get_sidebar(); ?>
  </div>

</div>

<?php get_footer(); ?>

