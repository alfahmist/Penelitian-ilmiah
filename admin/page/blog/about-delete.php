<?php 
	/** FUNGSI DELETE DATA**/
	if(isset($_GET["about-delete"])){
		$id_admin = $_GET["about-delete"];
		mysqli_query($conn,"DELETE FROM about WHERE id='$id_admin'");
		header("location:index.php?about");
	}

?>