<?php 
    ob_start();
    session_start();
    if(!isset($_SESSION['admin_id'])) header ("location:login.php");
    include "../includes/config.php";

?>

<!DOCTYPE html>
<html lang="en">
<?php include("include/head.php") ?>
<body>
     <body id="page-top">
        <?php include("include/header.php") ?>
        <div id="page-wrapper">
            <?php
            if (isset($_GET["administrator"])) include("page/administrator/index.php");
            else if (isset($_GET["administrator-delete"])) include("page/administrator/delete.php");
            else if (isset($_GET["administrator-update"])) include("page/administrator/update.php");
            else if (isset($_GET["services"])) include("page/blog/services.php");
            else if (isset($_GET["alamat"])) include("page/blog/alamat.php");
            else if (isset($_GET["alamat-update"])) include("page/blog/alamat-update.php");
            else if (isset($_GET["alamat-delete"])) include("page/blog/alamat-delete.php");
            else if (isset($_GET["services-update"])) include("page/blog/services-update.php");
            else if (isset($_GET["services-delete"])) include("page/blog/services-delete.php");
            else if (isset($_GET["about"])) include("page/blog/about.php");
            else if (isset($_GET["about-update"])) include("page/blog/about-update.php");
            else if (isset($_GET["about-delete"])) include("page/blog/about-delete.php");
            else include("page/home/index.php");
            ?>
        </div>
    </div>
    <?php include("include/footer.php") ?>
</body>
</html>
<?php 
    mysqli_close($conn);
    ob_end_flush();

?>