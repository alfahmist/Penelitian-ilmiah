<!doctype html>
<html lang="en">
  <?php include "includes/head.php"; ?>
  <body>

    <?php 
  ob_start(); //menangani error header
  session_start();
  include "includes/config.php";
?>

    <!-- Menu -->
    <?php include "includes/menu.php";?>
              <!-- content -->
      <?php
                if (isset($_GET["home"])) {include "includes/content-home.php";}
                else if (isset($_GET["about"])) {include "includes/content-about.php";}
                else if (isset($_GET["bangun"])) {include "includes/content-bangun.php";}
                else if (isset($_GET["desain"])) {include "includes/content-design.php";}
                 else if (isset($_GET["renovasi"])) {include "includes/content-renovasi.php";}
                else if (isset($_GET["contact"])) {include "includes/content-contact.php";}
                else {include "includes/content-home.php";}
              ?>
    
    <?php include "includes/footer.php"; ?>

    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script type="text/javascript" src="js/menu.js"></script>

   
    
    <script type="text/javascript" src="<?php 
    
      if (isset($_GET["home"])) {echo "js/script.js";}
      else if (isset($_GET["about"])) {echo "js/about.js";}
      else {echo "js/script.js";} ?>">
    </script>
   
    <script>
     baguetteBox.run('.tz-gallery');
    </script>
  <!--   <script src="js/carousel.js"></script> -->
  
    <script type="text/javascript" src="js/maps.js"></script>
    <script type="text/javascript" async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWXF_lIN2sO3T_FTPXXnWTvyeoEo-C_e4&callback=initMap"></script>
  </body>
</html>

<?php 
mysqli_close($conn);
ob_end_flush(); //penutup 

?>