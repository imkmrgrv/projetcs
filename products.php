<?php
include("includes/header.php");
include("includes/conn.php");
if(isset($_POST[type]))
{
$results = mysql_query("select * from products where product_type='$_POST[type]'");	
}
else
{
$results = mysql_query("select * from products");	
}
?>
    
    <div id="templatemo_main">
   		<div id="sidebar" class="float_l">
        	<div class="sidebar_box"><span class="bottom"></span>
            	<?php
				include("sidebar.php");
				products();
				?>
            </div>
   		</div>
       <div id="templatemo_main">
   		<div id="sidebar" class="float_l">
        	<?php
			include("cssidebar.php");
			?>
            
   		</div>
        <div id="content" class="float_r">
        	<h1>New Products</h1>
            <?php

			$i=0;
			while($ros = mysql_fetch_array($results))
			{
				if($ros['image']=="")
				{
				$img = "upload/noimage.jpg";
				}	
				else
				{
				$img = "upload/".$ros[image];	
				}
	
				if($i==0)
				{	
				?>
            <div class="product_box"><a href="productdetail.php?proid=<?php echo $ros["prod_id"]; ?>&testids=<?php echo $_GET[testids]; ?>">
            <a href="productdetail.php?proid=<?php echo $ros["prod_id"]; ?>&testids=<?php echo $_GET[testids]; ?>">
            <a href="productdetail.php?proid=<?php echo $ros["prod_id"]; ?>&testids=<?php echo $_GET[testids]; ?>">
            <a href="productdetail.php?proid=<?php echo $ros["prod_id"]; ?>&testids=<?php echo $_GET[testids]; ?>">
            <img src="<?php echo $img; ?>" alt="Image 02" height="150" width="200"/></a></a></a></a>
              <h3><?php echo "Name: ". $ros["name"]; ?></h3>
                <p class="product_price">Rs. <?php echo $ros["cost"]; ?></p>
             <?php
			 if($_SESSION["logtype"]=='Administrator')
			 {
			 ?>
                <a href="shoppingcart.php?proid=<?php echo $ros["prod_id"]; ?>&testids=<?php echo $_GET[testids]; ?>" class="add_to_card">Order</a>
                 <?php
			 }
			 ?>
                <a href="productdetail.php?proid=<?php echo $ros["prod_id"]; ?>&testids=<?php echo $_GET[testids]; ?>" class="detail">Product Detail</a>
            </div>       
            <?php
			$i=1;
				}
				else if($i==1)
				{
				?>
            <div class="product_box">
           	  <a href="productdetail.php?proid=<?php echo $ros["prod_id"]; ?>"><img src="<?php echo $img; ?>" alt="Image 02" height="150" width="200"/></a>
                <h3>Name : <?php echo $ros["name"]; ?></h3>
                <p class="product_price">Rs. <?php echo $ros["cost"]; ?></p>
                   <?php
			 if($_SESSION["logtype"]=='Administrator')
			 {
			 ?>
              <a href="shoppingcart.php?proid=<?php echo $ros["prod_id"]; ?>&testids=<?php echo $_GET[testids]; ?>" class="add_to_card">Order</a>
              <?php
			 }
			 ?>
              <a href="productdetail.php?proid=<?php echo $ros["prod_id"]; ?>&testids=<?php echo $_GET[testids]; ?>" class="detail">Product Detail</a>
            </div> 
            <?php
			$i=2;
				}
				else if($i==2)
				{
				?>       	
            <div class="product_box no_margin_right">
      <a href="productdetail.php?proid=<?php echo $ros["prod_id"]; ?>"><img src="<?php echo $img; ?>" alt="Image 02" height="150" width="200"/></a>
                <h3>Name : <?php echo $ros["name"]; ?></h3>
                <p class="product_price">Rs. <?php echo $ros["cost"]; ?></p>       <?php
			 if($_SESSION["logtype"]=='Administrator')
			 {
			 ?>
              <a href="shoppingcart.php?proid=<?php echo $ros["prod_id"]; ?>" class="add_to_card">Order</a>
              <?php
			 }
			  ?>
              
              <a href="productdetail.php?proid=<?php echo $ros["prod_id"]; ?>" class="detail">Product Detail</a>
            </div> 
            <?php
			$i=0;
				}
				?>    
            	<?php
			}
			?>
      </div> 
        <div class="cleaner"></div>
    </div>
    <?php
include("includes/footer.php");
?>