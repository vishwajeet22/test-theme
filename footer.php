</div>

<!-- Footer -->
<footer class="w3-container w3-theme w3-padding-32 w3-margin-top">
  <p>&COPY;&nbsp;<?php bloginfo( 'name' ); echo ', '.date("Y");?></p>
</footer>

<?php wp_footer() ?>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>