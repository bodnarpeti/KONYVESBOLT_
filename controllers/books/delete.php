<?php
	if(!empty($_POST)) {
		require_once "../../db/config.php";
		$query = oci_parse($conn, "DELETE FROM KONYV WHERE konyvid='" . $_POST["id"] . "'");
		$result = oci_execute($query, OCI_DEFAULT);  
		if($result)  
		{  
			oci_commit($conn); //*** Commit Transaction ***// 
			echo "Data Deleted Successfully.";
		}
		else{
			echo "Error.";
		}

		header("location:../../books.php?deleted=1");
	}
?>