<?php 
	
	include 'conn.php';
	
	$sql = $link->prepare("DELETE  FROM 2fa WHERE user_id=?"); 

	$sql->bind_param("i", $_GET["id"]); 
	$sql->execute();
	$sql->close(); 
	$link->close();
	echo "<script>alert('Record Successfully deleted');
            window.location.href = '2fad.php'</script>";
	
?>