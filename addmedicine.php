
<?php 

if(isset($_POST['medicine'])){

echo $medicinename=$_POST['medicinename'];

 echo  $quantity=$_POST['quantity'];
  echo $price=$_POST['price'];
  echo $totalprice=$_POST['price'];
 echo  $patientname=$_POST['patientname'];



echo include('include/connection.php');

 echo $sql=mysqli_query($con," INSERT INTO medicine_sale( medicinename, quantity, price, totalprice, patientname ) 
VALUES ('$medicinename', '$quantity', 'price', '$totalprice', '$patientname') ");
if($sql==true){


	  echo '<script>alert("success")</script>';
echo '<script>window.location= "managemedicines.php"</script>';
//   echo 'insert data';
 }else{
  echo 'not success';
}

  


}else{
  echo 'not submit any value';
}



?>