<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

$protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') 
                === FALSE ? 'http' : 'https';
$host     = $_SERVER['HTTP_HOST'];
$script   = $_SERVER['SCRIPT_NAME'];
$params   = $_SERVER['QUERY_STRING'];
$currentUrl = $protocol . '://' . $host . $script . '?' . $params;
			

			function doctorhome()
				{
					// Doctors home
					//dochome.php
					//updatedoctor.php
					///chngpswrd.php
				?>
                        	<h3>Menu</h3>   
                <div class="content"> 
                	<ul class="sidebar_list">
                        <li><a href="updatedoctor.php">Update Profile</a></li>
                        <li><a href="chngpswrd.php">Change Password</a></li>         
                    </ul>
                </div>
              <?php
				}
				
			function adminhome()
				{
				?>
             	<h3>Menu</h3>   
                <div class="content"> 
                	<ul class="sidebar_list">
                        <li><a href="updateadmin.php">Update Profile</a></li>
                         <li><a href="chngpswrd.php">Change Password</a></li>
                        
                    </ul>
                </div>
              <?php
				}
				function guesthome()
				{
				?>
                        	<h3>Menu</h3>   
                <div class="content"> 
                	<ul class="sidebar_list">
                        <li><a href="patienthome.php">Home</a></li>
                        <li><a href="updatepatient.php">Update Profile</a></li>
                        <li><a href="chngpswrd.php">Change Password</a></li>
                        <li><a href="">View Appointment Details</a></li>
                        <li><a href="#">View Test Results</a></li>
                        <li><a href="#">View Prescription Details</a></li>
                     
                    </ul>
                </div>
              <?php
			}			
				function patientsidebar()
				{
				?>
                        	<h3>Menu</h3>   
                <div class="content"> 
                	<ul class="sidebar_list">
                     <li><a href="viewpatient.php">Patient accounts</a></li>
                     <li><a href="viewappointment.php">View Appointment Details</a></li>
                      
                    </ul>
                </div>
              <?php
				}	
				
				function doctorsidebar()
				{
				?>
				<h3>Menu</h3>   
                <div class="content"> 
                	<ul class="sidebar_list">
                        <li><a href="adddoctors.php">Add Doctor</a></li>
                        <li><a href="addpatient.php">Add Patient</a></li>
                        <li><a href="viewappointment.php">View Appointment Details</a></li>
                        <li><a href="chngpswrd.php">Change Password</a></li>
                        
                        <li><a href="#">View Bill Details</a></li>
                     <li><a href="#">View purchase details</a></li>
                    </ul>
                </div>
                 <?php
				}
			
                function maintenancesidebar()
				{
				?>
				<h3>Menu</h3>   
                <div class="content"> 
                	<ul class="sidebar_list">
                        <li><a href="addbranch.php">Add Branch</a></li>
                        <li><a href="addnewadmin.php">Add Admin</a></li>
                        <li><a href="adddoctors.php">Add Doctor</a></li>
                        <li><a href="addpatient.php">Add Patient</a></li>
                        <li><a href="addproduct.php">Add Product</a></li>
                    </ul>
                </div>
                 <?php
				}
	
	  		function docssidebar()
				{
				?>
				<h3>Menu</h3>   
                <div class="content"> 
                	<ul class="sidebar_list">
                        <li><a href="viewdoctor.php">View doctor</a></li>
                        <li><a href="adddoctors.php?docside=1">Add doctor</a></li>
                    </ul>
                </div>
                 <?php
				}
				//products sidebar code
        function products($prost){

				?>
				<h3>Product Type</h3>   
                <div class="content"> 
                	<ul class="sidebar_list">
                      <li><a href="products.php?proid=0">All products</a></li>
                    <?php
					
                    if($prost==1)
					{
						?>
                        	
                             <li><a href="products.php?proid=<?php echo $ros["prod_id"]; ?>&testids=<?php echo $_GET[testids]; ?>&type=Frames">Frames</a></li>
                        <li><a href="products.php?proid=<?php echo $ros["prod_id"]; ?>&testids=<?php echo $_GET[testids]; ?>&type=Lens">Lens</a></li>
                        <li><a href="products.php?proid=<?php echo $ros["prod_id"]; ?>&testids=<?php echo $_GET[testids]; ?>&type=Contact Lens">Contact Lens</a></li>                        
   
                        <?php
					}
					else
					{
					?>
                        <li><a href="<?php echo $currentUrl; ?>?proid=<?php echo $ros["prod_id"]; ?>&testids=<?php echo $_GET[testids]; ?>&type=Frames">Frames</a></li>
                        <li><a href="<?php echo $currentUrl; ?>?proid=<?php echo $ros["prod_id"]; ?>&testids=<?php echo $_GET[testids]; ?>&type=Lens">Lens</a></li>
                        <li><a href="<?php echo $currentUrl; ?>?proid=<?php echo $ros["prod_id"]; ?>&testids=<?php echo $_GET[testids]; ?>&type=Contact Lens">Contact Lens</a></li>                        
                  <?php
					}
					?>
                  </ul>
                </div>
                 <?php
				}

				
                function inventorysidebar()
				{
				?>
				<h3>Product type</h3>   
                <div class="content"> 
                	<ul class="sidebar_list">
                        <li><a href="inventory.php">Products Inventory</a></li>
                        <li><a href="salesinventory.php">Sales Information</a></li>
                  </ul>
                </div>
                 <?php
				}
  				function patientrecords()
				{
				?>
				<h3>Petient records</h3>   
                <div class="content"> 
                	<ul class="sidebar_list">
                        <li><a href="viewpatient.php">View patient</a></li>
                        <li><a href="addpatient.php">Add patient</a></li>
                        <li><a href="viewappointment.php">View appointments</a></li>
                  </ul>
                </div>
                 <?php
				}
			