<?php 

    echo $id=$_POST['id'];
   echo $name=$_POST['name'];

  echo $category=$_POST['category'];
   $price=$_POST['price'];
   $totalquantity=$_POST['totalquantity'];
   $description=$_POST['description'];



 include('include/connection.php');

 echo $sql=mysqli_query($con," UPDATE `add_medicine2` SET `id`='$id',`name`='$name',`category`='$category',`price`='$price',`totalquantity`='$totalquantity',`description`='$description' WHERE id='$id' ")or die(mysql_error());;

// if($sql=='1'){
//   echo '<script>alert("updated successfull")</script>';
// // echo '<script>window.location= "dashboard.php"</script>';
// }else{
// // echo '<script>window.location= "addmedicine2.php"</script>';
//   echo "error";
// }

  





?>
