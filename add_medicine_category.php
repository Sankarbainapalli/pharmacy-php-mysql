<?php 

if(isset($_POST['submit'])){

	 $name=$_POST['name'];

	$description=$_POST['description'];

	include('include/connection.php');

$sql=mysqli_query($con," INSERT INTO add_medicine ( name, description ) 
VALUES ('$name','$description') ");
if($sql==true){

	  echo '<script>alert("success")</script>';
echo '<script>window.location= "show_medicine.php"</script>';
}else{
	// echo 'not success';
	echo '<script>window.location= "add_medicine_category.php"</script>';
}

	


}else{
	echo 'not submit any value';
}



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
        <form  action="add_medicine_category.php" method="POST">
         
          <div class="form-group col-md-12">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" name="name" required>
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