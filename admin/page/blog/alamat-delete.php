<?php 
	/** DELETE post**/
	if(isset($_GET["alamat-delete"])){
		$id_alamat = $_GET["alamat-delete"];
		mysqli_query($conn, "DELETE FROM alamat WHERE id_alamat='$id_alamat' ");
		header("location:index.php?alamat");
	}
?>