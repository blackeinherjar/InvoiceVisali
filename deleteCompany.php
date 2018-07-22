<?php 

require "connection.php";

$id = $_GET['id'];


$sql = "DELETE FROM `company` WHERE id='$id'";

if (mysqli_query($conn,$sql)) 
{
		header( "refresh:0; url= ViewCompany.php" );	
		echo '<script language="javascript">';
		echo 'alert("Delete Successful")';
		echo '</script>';
			
}
else
{
		header( "refresh:0; url= ViewCompany.php" );
		echo '<script language="javascript">';
		echo 'alert("Delete Failed,please try again")';			
		echo '</script>';
}

?>