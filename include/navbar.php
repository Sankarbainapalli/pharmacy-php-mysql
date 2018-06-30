<!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="dashboard.php">Pharmacy Management System</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="dashboard.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
     <!--    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Medicine Category">
          <a class="nav-link" href="Medicinecategory.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Medicine Category</span>
          </a>
        </li> -->
      

         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages1" data-parent="#exampleAccordion">
           <!-- <i class="fa fa-fw fa-file"></i> -->
     
           <i class="fa fa-hospital-o" aria-hidden="true"></i>
            <span class="nav-link-text">Medicine Category</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages1">

             <li>
              <a href="add_medicine_category.php">Add medicine Category</a>
            </li>
            <li>
              <a href="show_medicine.php">Show Medicine</a>
            </li> 
        
          </ul> 
        </li>


          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
           <!-- <i class="fa fa-fw fa-file"></i> -->
     
           <i class="fa fa-medkit" aria-hidden="true"></i>
            <span class="nav-link-text"> Manage Medicine</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">

                <li>
              <a href="addmedicine2.php">Add Medicine</a>
            </li>

             <li>
              <a href="managemedicines.php">Manage Medicines</a>
            </li>
        <!--       <li>
              <a href="addmedicinesale.php">Add Medicine Sale</a>
            </li> 
            <li>
              <a href="medicinesales.php">Medicine Sales</a>
            </li>  -->
        
          </ul> 
        </li>


         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages2" data-parent="#exampleAccordion">
           <!-- <i class="fa fa-fw fa-file"></i> -->
     
           <i class="fa fa-medkit" aria-hidden="true"></i>
            <span class="nav-link-text">Medicine Sale</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages2">

              <!--   <li>
              <a href="addmedicine2.php">Add Medicine</a>
            </li>

             <li>
              <a href="managemedicines.php">Manage Medicines</a>
            </li> -->
              <li>
              <a href="addmedicinesale.php">Add Medicine Sale</a>
            </li> 
            <li>
              <a href="medicinesales.php">Medicine Sales</a>
            </li> 
        
          </ul> 
        </li>



        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Medicine Category">
          <a class="nav-link" href="logout.php">
            <i class="fa fa-user"></i>
            <span class="nav-link-text">Logout</span>
          </a>
        </li>
        <li></li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
       <ul class="navbar-nav ml-auto">
     

      <!--   <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li> -->
      </ul>
    </div>
  </nav>