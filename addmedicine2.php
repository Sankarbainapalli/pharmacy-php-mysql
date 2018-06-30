<?php 

if(isset($_POST['submit'])){

  echo  $name=$_POST['name'];

 echo  $category=$_POST['category'];
  echo $price=$_POST['price'];
  echo $totalquantity=$_POST['totalquantity'];
 echo  $description=$_POST['description'];



echo include('include/connection.php');

 echo $sql=mysqli_query($con," INSERT INTO add_medicine2 ( name, category, price, totalquantity, description ) 
VALUES ('$name', '$category', '$price', '$totalquantity', '$description') ");
if($sql==true){
  echo '<script>alert("success")</script>';
echo '<script>window.location= "dashboard.php"</script>';
}else{
echo '<script>window.location= "addmedicine2.php"</script>';
}

  


}else{
  echo 'not submit any value';
}



?>


<?php




// $con=mysqli_connect("localhost","root","");
// if(!$con){
//  echo "mysql can not connect";
// }
include('include/connection.php');
mysqli_select_db($con,"hms");

$query=" SELECT * 
FROM add_medicine ";
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
        <form  action="addmedicine2.php" method="POST">
         
          <div class="form-group col-md-12">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" name="name" required>
          <!--   <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>


  <div class="form-group col-md-12">
            <label for="exampleFormControlSelect1">Medicine category</label>
            <select  type="text" class="form-control" id="exampleFormControlSelect1" name="category">
<?php
            while($res=mysqli_fetch_assoc($result)) {

// echo "<tr>";
echo "<option>".$res['name']."</option>";
// echo "<td>".$res['name']."</td>";

// echo "<td>".$res['mobilenumber']."</td>";
// echo "<td>".$res['gender']."</td>";
//  echo "<td>".$res['fathername']."</td>";
//  echo "<td>".$res['amount']."</td>";
//  echo "<td>".$res['doctorname']."</td>";
//   echo "</tr>";


# code...
}
?>
                              <!-- <option >Mr Gupta</option>
                              <option >Mr Rajesh</option>
                             -->
            </select>
          </div>

            <div class="form-group col-md-12">
            <label for="exampleInputEmail1">Price</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter price" name="price" required>
          <!--   <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>

            <div class="form-group col-md-12">
            <label for="exampleInputEmail1">Total Quantity</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter totalquatity" name="totalquantity" required>
          <!--   <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>

          <div class="form-group col-md-12">
            <label for="exampleInputPassword1">Description</label>
            <textarea type="text" rows="5" class="form-control" id="exampleInputPassword1" placeholder="Description" name="description" required></textarea>
          </div>
        
       

          
       
         
          <button type="submit" class="btn btn-primary col-md-12" name="submit">Submit</button>
        </form>
  
     
      </div>
    </div>


<?php include('include/footer.php');?>