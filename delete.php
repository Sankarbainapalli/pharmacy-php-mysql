<?php 

include("include/connection.php");

$id=$_GET['id'];

$query=" DELETE FROM add_medicine2 WHERE id=$id ";

$result=mysqli_query($con,$query);
header('location:managemedicines.php');

?>