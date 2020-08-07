<?php 
	/** DELETE post**/
	if(isset($_GET["services-delete"])){
		$id_perumahan = $_GET["services-delete"];
		mysqli_query($conn, "DELETE FROM perumahan WHERE id_perumahan ='$id_perumahan' ");
		header("location:index.php?services");
	}
?>