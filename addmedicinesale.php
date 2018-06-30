
<?php 

if(isset($_POST['submit'])){

 $medicinename=$_POST['medicinename'];

   $quantity=$_POST['quantity'];
    // $quantity2=$_POST['quantity'];
   $price=$_POST['price'];
   $totalprice=$_POST['price'];
   $patientname=$_POST['patientname'];



 include('include/connection.php');

  $sql=mysqli_query($con," INSERT INTO `medicine_sale`(`medicinename`, `quantity`, `price`, `totalprice`, `patientname`) VALUES ('$medicinename','$quantity','$price','$totalprice','$patientname') ");

  // echo '<script>alert("insert data")</script>';
  echo '<script>window.location= "medicinesales.php"</script>';

  
}



?>



<?php
include('include/connection.php');
$query=" SELECT * FROM registration_tb ";
$result=mysqli_query($con,$query);
?>






<?php include('include/header.php');?>
<?php include('include/navbar.php');?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->

      <div class="card card-register mx-auto mt-5">
      <div class=" card-header" style="text-align: center;">Add Medicine</div>
      <div class="card-body">
       
        </form>  
        <form  action="addmedicinesale.php" method="POST" id="add_name" >
 


  <div class="form-group col-md-12">
            <label for="exampleFormControlSelect1">Patient name</label>

            <select  type="text" class="form-control" id="exampleFormControlSelect1" name="patientname">
<?php
            while($res=mysqli_fetch_assoc($result)) {


echo "<option>".$res['name']."</option>";
}
?>
            </select>
          </div>


          <?php
include('include/connection.php');

// $name=$_POST['category'];

$query=" SELECT * FROM add_medicine2 ";
$result=mysqli_query($con,$query);
?>
<div class="row" id="dynamic_field" id="mydiv">
 <div class="form-group col-md-6">
            <label for="exampleFormControlSelect1">Medicine name</label>

            <select  type="text" class="form-control" id="exampleFormControlSelect1" name="medicinename">
<?php
            while($res=mysqli_fetch_assoc($result)) {

              echo "<option>".$res['category']."</option>";

                    }
?>
                           
          </select>
          </div>

            <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Select Quantity</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter totalquatity" name="quantity"  >
          <!--   <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
        </div>

<div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-4">
          <input type="submit" class="btn btn-success " name="save" value="calculate total price" />
        </div>
          <div class="col-md-4">
           <input type="submit" class="btn btn-info " id="add-button"  name="add" value="+Add medicine" /><br><br>
         </div>
          <div class="col-md-2"></div>
       </div>





       <?php 

if(isset($_POST['add'])){ 

?>

<?php
include("include/connection.php");



$query=" SELECT * 
FROM add_medicine2 ";
$result=mysqli_query($con,$query);
?>

<div class="row">

 <div class="form-group col-md-4">
          
            <select  type="text" class="form-control" id="exampleFormControlSelect1" name="medicinename">
?>
<?php 
             while($res=mysqli_fetch_assoc($result)) {
              ?>

  <option><?php echo $res["category"]?></option>;
      <?php
 }
?>  
</select>
          </div>

      <div class="form-group col-md-4">
       
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter totalquatity" name="quantity"  >
      
         </div>
<div class="col-md-3">
          <button class='btn btn-danger'><a href='delete.php?id=<?php echo $res['id'];?>'></a>delete</button>

        </div>
        </div>    


<?php
}


?>

<!-- //secondoptions -->


   <!--        Calculation -->
        <?php 


if(isset($_POST['save'])){
 
  $totalquantity=$_POST['quantity'];

   $totalquantity2=$_POST['quantity'];



 include('include/connection.php');

$query=" SELECT * FROM add_medicine2 ";
$result=mysqli_query($con,$query);
  
             while($res=mysqli_fetch_assoc($result)) {

// echo "<option>".$res['category']."</option>";

$category=$res['category'];

}

$query=" SELECT * FROM add_medicine2 WHERE category='$category' ";
$result=mysqli_query($con,$query);
  
    // echo $totalquantity;

if($totalquantity==true){
            while($res=mysqli_fetch_assoc($result)) {

// echo "<tr>";
// echo "<p>".$res['price']* $totalquantity."<p>";
  
  $total=$res['price']* $totalquantity;

  // $totaldata= $res['price']*$totalquantity2;


// echo $total;

}
}


}
?>
              <div class="form-group col-md-12">
            <label for="exampleInputEmail1">Total Price</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter price" name="price" value="<?php if(isset($total)) 
            echo  $total ?> " >
       
          </div>

           
          
        
       

          
       
         
          <button type="submit" class="btn btn-primary col-md-12" name="submit">Submit</button>
        </form>


  
     
      </div>
    </div>


<?php include('include/footer.php');?>