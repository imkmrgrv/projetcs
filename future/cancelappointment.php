<?php
session_start();
include("includes/header.php");
include("includes/conn.php");
?>

<script type="text/JavaScript">
function confirmDelete()
{
	var agree=confirm("Are you sure you want to delete??");
	if(agree)
	return true;
	else
	return false;
}
</script>
<?php
mysql_query("DELETE FROM appointment where app_id='$_GET[canid]'");
if(mysql_affected_rows()==1)
{
	$deli =1;
	$delq = "Appointment record deleted successfully...";
}

$resultpat = mysql_query("SELECT * FROM patient where pat_id='$_SESSION[pat_id]'");
$rowpat = mysql_fetch_array($resultpat);
?>
    
     <div id="templatemo_main">
   		<div id="sidebar" class="float_l">
        	<div class="sidebar_box"><span class="bottom"></span>
            	<?php
				include("sidebar.php");
				patienthome();
				?>
            </div>
   		</div>
      <div id="content" class="faq float_r">
  

        <table width="687" border="0">
            <tr bgcolor="#FFFFCC">
              <td colspan="6" align="center">Appointment Details
              <?php 
			  if($deli == 1)
			  {
			  echo "<br>".$delq;
			  }
			  ?>
              </td>
              </td>
            </tr>
            <tr bgcolor="#FFFFCC">
              <td width="126">Appointment ID</td>
              <td width="99">Branch Name</td>
              <td width="121">Doctor Name</td>
              <td width="115">Date</td>
              <td width="122">Time</td>
              <td width="78">Action</td>
            </tr>
            
<?php

$retapp = mysql_fetch_array($result);
			 
if(isset($_SESSION[pat_id]))
{
$result = mysql_query("SELECT * FROM appointment where pat_id='$_SESSION[pat_id]' AND status='pending'");	
}
else
{
$result = mysql_query("SELECT * FROM appointment");		  
}
while($row = mysql_fetch_array($result))
  {
	  $result1 = mysql_query("SELECT * FROM branch where branch_id='$row[branch_id]'");
			  $row1 = mysql_fetch_array($result1);
		$resdoctor= mysql_query("SELECT * from doctor where doc_id='$row[doc_id]'");
			  $retdoctor= mysql_fetch_array($resdoctor);	   
  echo "<tr>";
  echo "<td>" . $row['app_id'] . "</a></td>";
  echo "<td>" . $row1['branch_name'] . "</td>";
  echo "<td>" . $retdoctor['doc_name'] . "</td>";
  echo "<td>" . $row['app_date'] . "</td>";
  echo "<td>" . $row['app_time'] . "</td>";
  echo "<td> <a href='cancelappointment.php?canid=$row[app_id]' onClick='return confirmDelete();'>Cancel</a> </td>";
  echo "</tr>";
  }
  
?>
          </table>
 	</div> 
        <div class="cleaner"></div>
    </div> 
    <?php
include("includes/footer.php");
?>