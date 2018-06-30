<?php
include("include/session.php");
?>

<?php 

?>

<?php include('include/header.php');?>
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
        <li class="breadcrumb-item active">Medicine Sale</li>
      </ol>
      <!-- <SCRIPT LANGUAGE="JavaScript"> 
if (window.print) {
document.write('<form><input type=button name=print value="Print table"onClick="window.print()"></form>');
}
</script> -->
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Medicine sale </div>
 
        <div class="card-body">
        <!-- <p><button class="btn">Print table</button></p> -->
        
          <div class="table-responsive">
          
            <table class="table table-bordered" id="dataTable">
            <p><button class="btn">Print Invoice</button></p>
           
              <thead>
                <tr class='text-center'>
                  <th scope="col">ID</th>
                   <th scope="col">patientname</th>
                  <th scope="col">MedicineName</th>


               <!--    <th>Quantity</th> -->
                 <!--   <th scope="col">Price</th> -->
                  <th scope="col">Totalprice</th>
                 
               <!--    <th>Invoice</th> -->
             
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
   include("include/connection.php");
$query=" SELECT * FROM medicine_sale ORDER BY id ASC ";
$result=mysqli_query($con,$query);

while($res=mysqli_fetch_assoc($result)) {

  ?>

 

    <tr class="text-center">
<!--   <th  scope="row"><?php echo $res['id']?></th>
    <td><?php echo $res['patientname']?></td>
  <td><?php echo $res['medicinename']?></td>
  <td><?php echo $res['price']?></td>
  <td><?php echo $res['totalprice']?></td> -->

    <th  scope="row"><?php echo $res['id']?></th>
    <th  scope="row"><?php echo $res['patientname']?></td>
  <th  scope="row">

                           
                            <table class="table">
  <thead>
    <tr>

      <th scope="col">Medicine Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    <tr>
  
      <td><?php echo $res['medicinename']?></td>
      <td><?php echo $res['quantity']?></td>
      <td><?php echo $res['price']?></td>
    </tr>
    
  </tbody>
</table>
</th>


<!--   <th  scope="row"><?php echo $res['price']?></td> -->
  <th  scope="row"><?php echo $res['totalprice']?></td>


 <!--   <td><button class='btn btn-danger'><a href='delete.php?id=<?php echo $res['id'];?>' class='text-white'>Invoice</a></button></td> -->

</tr>
<?php
}

?>
  





      
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
     </script>
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
   <?php include('include/footer.php'); ?>