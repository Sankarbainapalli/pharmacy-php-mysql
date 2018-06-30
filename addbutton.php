
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





<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	<title></title>
</head>
<body>





<?php
include('include/connection.php');
$query=" SELECT * FROM registration_tb ";
$result=mysqli_query($con,$query);
?>
      <h2 class="text-center">Medicine sale</h2>
<div class="container ">
	 <div class="form-group col-md-4">
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
 <div class="form-group col-md-4">
            <label for="exampleFormControlSelect1">Medicine name</label>

            <select  type="text" class="form-control" id="exampleFormControlSelect1" name="medicinename">
<?php
            while($res=mysqli_fetch_assoc($result)) {

              echo "<option>".$res['category']."</option>";

                    }
?>
                           
          </select>
          </div>



        

            <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Select Quantity</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter totalquatity" name="quantity"  >
          <!--   <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
        </div>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
 $(document).ready(function(){
 $("#add-button").click(function() {
 $('#mydiv').append('          <?php
include('include/connection.php');

// $name=$_POST['category'];

$query=" SELECT * FROM add_medicine2 ";
$result=mysqli_query($con,$query);
?>
<div class="row" id="dynamic_field" id="mydiv"><div class="form-group col-md-4"> <label for="exampleFormControlSelect1">Medicine name</label> <select  type="text" class="form-control" id="exampleFormControlSelect1" name="medicinename"><?php
            while($res=mysqli_fetch_assoc($result)) {

              echo "<option>".$res['category']."</option>";

                    }
?>
      </select> </div><div class="form-group col-md-4"> <label for="exampleInputEmail1">Select Quantity</label><input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter totalquatity" name="quantity"  >  </div></div>  <button class="btn btn-danger"><a href="delete.php?id=<?php echo $res['id'];?>"></a>delete</button>');}); });</script> 


<div data-role="page">
 
 <button id="add-button" class="btn btn-info" >Add medicine</button> <br /><br>

 <div id="mydiv" data-role="content"> 
 <!-- <button data-role="button" data-inline="true" data-mini="true" name="save">Calculate</button>  -->
     <input type="submit" class="btn btn-success " name="save" value="calculate total price" />
 </div>

</div>



<!--    //calculation -->


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
              <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Total Price</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter price" name="price" value="<?php if(isset($total)) 
            echo  $total ?> " >
       
          </div>

 
          
        
       

          
       
         
          <button type="submit" class="btn btn-primary col-md-4" name="submit">Submit</button>
        </form>

      </div>    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</body>
</html>


