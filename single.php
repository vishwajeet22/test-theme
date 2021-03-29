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
    <div class="w3-container w3-col l1 m12 s12 w3-hide-small w3-hide-medium">
      <div class="w3-bar-block w3-xlarge w3-center w3-text-theme w3-margin w3-margin-top">
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-facebook"></i></a>
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
        <a href="#" class="w3-button"><i class="fa fa-facebook"></i></a>
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
          <img src="https://www.w3schools.com//w3images/avatar_g.jpg" style="width:100%">
          <div class="w3-container w3-white">
              <h4><b>My Name</b></h4>
              <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of lorem ipsum and mauris neque quam blog. I want to share my world with you.</p>
          </div>
      </div>
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <!-- Post Sidebar Ad Unit -->
      <ins class="adsbygoogle"
          style="display:block"
          data-ad-client="ca-pub-6711992340157945"
          data-ad-slot="3499478269"
          data-ad-format="auto"
          data-full-width-responsive="true"></ins>
      <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>
    </div>

<?php get_footer(); ?>
