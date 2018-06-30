
<!-- 
       dynamic input fields -->
<!-- 
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
<div class="row" id="dynamic_field" id="mydiv"><div class="form-group col-md-6"> <label for="exampleFormControlSelect1">Medicine name</label> <select  type="text" class="form-control" id="exampleFormControlSelect1" name="medicinename"><?php
            while($res=mysqli_fetch_assoc($result)) {

              echo "<option>".$res['category']."</option>";

                    }
?>
      </select> </div><div class="form-group col-md-6"> <label for="exampleInputEmail1">Select Quantity</label><input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter totalquatity" name="quantity"  >  </div></div>  <button class="btn btn-danger"><a href="delete.php?id=<?php echo $res['id'];?>"></a>delete</button>');}); });</script> 

<div data-role="page">
 
 <button id="add-button"  >Add medicine</button> 

 <div id="mydiv" data-role="content"> 
  <button data-role="button" data-inline="true" data-mini="true" name="save">Calculate</button>  
     <input type="submit" class="btn btn-success " name="save[]" value="calculate total price" />
 </div>

</div> -->

    <!--    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
 $(document).ready(function(){
 $("#add-button").click(function() {
 $('#mydiv').append('<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter totalquatity" name="quantity"  >');
 }); 
 });
</script> 

<div data-role="page">
 
 <button id="add-button" data-role="button" data-inline="true" data-mini="true" >Add</button> 

 <div id="mydiv" data-role="content"> 
 <button data-role="button" data-inline="true" data-mini="true" >First button</button> 
 </div>

</div> -->


<!-- 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
 $(document).ready(function(){
 $("#add-button").click(function() {
 $('#mydiv').append('<button data-role="button" data-inline="true" data-mini="true" data-theme="b">Another button</button>');
 }); 
 });
</script> 

<div data-role="page">
 
 <button id="add-button" data-role="button" data-inline="true" data-mini="true" >Add</button> 

 <div id="mydiv" data-role="content"> 
 <button data-role="button" data-inline="true" data-mini="true" >First button</button> 
 </div>

</div> -->


<!-- <script>
 $(document).ready(function(){
 $("#add-button").click(function() {
 $('#mydiv').append('<div class="form-group col-md-6"><select  type="text" class="form-control" id="exampleFormControlSelect1" name="medicinename"><?php
            while($res=mysqli_fetch_assoc($result)) {

              echo "<option>".$res['category']."</option>";

                    }
?>
              </select> </div><div class="form-group col-md-6"><label for="exampleInputEmail1">Select Quantity</label><input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter totalquatity" name="quantity"  ></div>');
 }); 
 });
</script>  -->

<!-- 
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<input id='+i+' type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"addmedicinesale.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      });  
 });  
 </script>     -->