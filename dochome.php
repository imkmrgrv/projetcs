<?php
session_start();
include("includes/header.php");
include("includes/conn.php");
$dt = date("Y-m-d");
	
?>
    <div id="templatemo_main">
   		<div id="sidebar" class="float_l">
        	<div class="sidebar_box"><span class="bottom"></span>
            <?php
			include("sidebar.php");
			doctorhome();
			?>
            </div>
   		</div>
        <div id="content" class="float_r">
   
  <table width="689" border="1">
<tr bgcolor="#FFFFFF"> 
  <td width="88" height="42">Appointment No.</td>
                <td width="142">Doctor Name</td>
                <td width="176">Patient Name</td>
                <td width="168">Appointment Date/ Time</td>
                <td width="81">Status</td>
          </tr>
<?php
$result = mysql_query("SELECT * FROM appointment WHERE app_date='$dt' AND branch_id='$_SESSION[branch_id]'");
  while($row = mysql_fetch_array($result))
  {	
  $retpat =mysql_query("SELECT * FROM patient WHERE pat_id= '$row[pat_id]'");
  $patrec = mysql_fetch_array($retpat);
	$retdoc =mysql_query("SELECT * FROM doctor WHERE doc_id= '$row[doc_id]'");
  $docrec = mysql_fetch_array($retdoc);

  echo "<tr>";
  echo "<td>" . $row['app_id'] . "</td>";
  echo "<td>" . $docrec['doc_name'] . "</td>";
  echo "<td>" . $patrec['pat_name'] . "</td>";
  echo "<td>" . $row['app_date']. " ". $row['app_time'] . "</td>";
   echo "<td>";

   if($row['status'] == "pending")
   {
	   echo "Pending | <br> <a href='test.php?appid=$row[app_id]'>Update</a>";
   }
   else
   {
	   	$rettests =mysql_query("SELECT * FROM test WHERE app_id= '$row[app_id]'");
  $rectests = mysql_fetch_array($rettests);
  
	   echo "Done | <a href='products.php?appid=$row[app_id]&patid=$row[pat_id]&testids=$rectests[test_id]'>Order specs</a>";
   }
  
 echo "  </td>";
  echo "</tr>";
  }
?>
          </table>
          
      </div>
  </div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    <?php
include("includes/footer.php");
?>