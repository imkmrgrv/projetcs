<?php
session_start();
if(!isset($_SESSION["admin_id"]))
{
	header("Location: index.php");	
}
include("includes/header.php");
include("includes/conn.php");
if(isset($_POST['token']) && $_POST['token'] == $_SESSION['token'])
{
		if(isset($_POST[add]))
		{
			$sql="INSERT INTO branch (branch_name, description) VALUES ('$_POST[bname]','$_POST[description]')";
			
			if (!mysql_query($sql,$con))
			{
			  die('Error: ' . mysql_error());
			}
			
			if(mysql_affected_rows() == 1 )
			{
				$rcsucc =  "<b><font color='#006600'>Branch record added successfully..</font></b>";
			}
		}
	unset($_SESSION['token']);
}

$new_token = md5(time() . rand(0,100));
$_SESSION['token'] = $new_token;

if(isset($_POST[update]))
{
	$sql="Update branch set branch_name='$_POST[bname]', description='$_POST[description]' where branch_id='$_POST[branchid]'";

	if (!mysql_query($sql,$con))	
  	{
  		die('Error: ' . mysql_error());
  	}
	
	$rcsucc = "<font color='#006600'>Branch record updated successfully..</font></b>";

}

$result = mysql_query("SELECT * FROM branch");

?>

<font color="#FF0000">        
    <div id="templatemo_main">
   		<div id="sidebar" class="float_l">
        	<div class="sidebar_box"><span class="bottom"></span>
           	<?php
			include("sidebar.php");
			
			if($_SESSION["logtype"]=='Administrator')
			{
				inventorysidebar();
			}
			?>
            
            </div>
   		</div>
        
        <div id="content" class="float_r">
     
        <div id="content_main">
        <script type="application/javascript" >
function validation()
{
	if(document.adbranch.bname.value == "")
	{
		alert("Enter the Branch Name.");
		document.adbranch.bname.focus();
		return false;
	}
	
	if(document.adbranch.description.value == "")
	{
		alert("Enter the Branch Description.");
		document.adbranch.description.focus();
		return false;
	}
}
</script>
        
          <form id="adbranch" name="adbranch" method="post" action="" onsubmit="return validation()">
            <h1>Inventory</h1>
            
            <p>
              <label for="fname" class="left"> </label>
              <label for="patname">Search Branch</label>
              <select name="group" id="group">
                <option value="">Select</option>
                <?php
				$resultbranch = mysql_query("SELECT * FROM  branch");
                	while($row = mysql_fetch_array($resultbranch))
  				{
    	    		if($_POST[group] == $row[branch_id])
					{
			        echo "<option value='$row[branch_id]' selected >$row[branch_name]</option>";
					}
					else
					{
					 echo "<option value='$row[branch_id]'>$row[branch_name]</option>";
					}
              	}
              ?>
              </select>
              <input name="search" type="submit" id="search" value="Search" />
            </p>
            <table width="678" border="1">
              <tr>
                <td width="215"><strong>Product information</strong></td>
                <td width="167"><strong>Image</strong></td>
                <td width="84"><strong>Color</strong></td>
                <td width="70"><strong>Cost</strong></td>
                <td width="108"><strong>Quantity info</strong></td>               
              </tr>
              <?php
			  $resultbranch = mysql_query("SELECT * FROM  products where branch_id='$_POST[group]'");
               	
 //	image	color	cost	quantity						
           	while($row = mysql_fetch_array($resultbranch))
  			{
								   
		$resultbranch1 = mysql_query("SELECT * FROM  orders where prod_id='$row[prod_id]'");
		$pqty = mysql_num_rows($resultbranch1);
  				echo "<tr>";
				echo "<td>  Product ID:  $row[prod_id]<br>
							Product name: $row[name] <br>
							Product type: $row[product_type] <br>
						    Sub type : $row[sub_type]
				</td>";
				echo "<td align='center'> <img src='upload/$row[image]' width='150' height='100'></td>";	
				echo "<td>" ;
				?>
                
				<table bgcolor="<?php echo $row[color]; ?>" width="20" height="20" align="center"> 
                <tr>
                <td></td>
                </tr>
                </table>
                
				<?php
				echo  "</td>";
				echo "<td>" . $row[cost] . "</td>";
				echo "<td> ";
				echo "Quantity :". $row[quantity]. "<hr>" ;
				echo "Sold :". $pqty."<hr>"  ;
				echo "Total : ".$totqty = $row[quantity] - $pqty ;
	         	 echo "</td></tr>";
  			}
  			?>
            </table>

            <p>
            <center>
            </center>
            </p>
       	  </form>
          	<p>&nbsp;
            <script>
function printpage()
  {
  window.print()
  }
</script>


<input type="button" value="Print this page" onclick="printpage()">
            </p>
        </div>
       <div class="cleaner"></div>
	</div> 
    <div class="cleaner"></div>
    </div> 
<?php
include("includes/footer.php");
?>