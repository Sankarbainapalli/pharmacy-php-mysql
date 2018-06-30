<?php
include("include/session.php");
?>




<?php 
require("include/connection.php");
$query=" SELECT * 
FROM add_medicine2
ORDER BY id ASC ";
$result=mysqli_query($con,$query);
?>

<?php include('include/header.php') ?>
<!-- onload="window.print()" -->
  <!-- Navigation-->
  <?php
  include ("include/navbar.php");
  ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Manage Medicine</li>
      </ol>
      <!-- <SCRIPT LANGUAGE="JavaScript"> 
if (window.print) {
document.write('<form><input type=button name=print value="Print table"onClick="window.print()"></form>');
}
</script> -->
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Medicine Table</div>
 
        <div class="card-body">
        <!-- <p><button class="btn">Print table</button></p> -->
        
          <div class="table-responsive">
          
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" cellpadding="0">
            <p><button class="btn">Print table</button></p>
           
              <thead>
                <tr class="text-center">
                  <th>ID</th>
                  <th>Name</th>
                  <th>Medicine Category</th>
                  <th>Price</th>
                  <th>Total Quantity</th>
                  <th>Description</th>
                    <th>Totalprice</th>
                  <th>Delete</th>
               <th>Update</th>
                </tr>
              </thead>
              <!-- <tfoot>
                <tr>
                <th>id</th>
                <th>Name</th>
                  <th>Mobilenumber</th>
                  <th>gender</th>
                  <th>fathername</th>
                  <th>DOB</th>
                  <th>Doctorname</th>
                  
                </tr>
              </tfoot> -->
              <tbody>
              <?php 

while($res=mysqli_fetch_assoc($result)) {
  ?>

	<tr class="text-center">
	<td><?php echo $res['id']?></td>
  <td><?php echo $res['name']?></td>
  <td><?php echo $res['category']?></td>
  <td><?php echo $res['price']?></td>
  <td><?php echo $res['totalquantity']?></td>
  <td><?php echo $res['description']?></td>
  <td><?php echo $res['price'] * $res['totalquantity']?></td>
   <td><button class='btn btn-danger'><a href='delete.php?id=<?php echo $res['id'];?>' class='text-white'>delete</a></button></td>
     <td><button class='btn btn-primary'><a href='update.php?id=<?php echo $res['id'];?>' class='text-white'>update</a></button></td>
 


  <!-- echo "<td>".$res['name']."</td>";
  echo "<td>".$res['category']."</td>";
  echo "<td>".$res['price']."</td>";
  echo "<td>".$res['totalquantity']."</td>";
  echo "<td>".$res['description']."</td>";
    echo "<td>".$res['price']*$res['totalquantity']."</td>";
      echo ""; -->

</tr>


<?php
}


 	?>





  <!--     
        <script src="jquery.min.js"></script>
     <script>
     $('.btn').click(function(){
       var printme = document.getElementById('dataTable');
       var wme = window.open("","","");
       wme.document.write(printme.outerHTML);
       wme.document.close();
       wme.focus();
       wme.print();
       wme.close();
     })
     </script> -->
   <!-- <button onclick="javascript:window.print();">print</button> -->
                
              </tbody>
            </table>
          </div>
        </div>
        <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
      </div>
    </div>







    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
   <?php include('include/footer.php') ?>