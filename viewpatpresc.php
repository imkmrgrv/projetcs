<?php
session_start();
include("includes/header.php");
include("includes/conn.php");
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
        <p>&nbsp;</p>
        <table width="701" border="0">
          <tr>
            <td colspan="6" align="center"><strong>Prescription</strong></td>
          </tr>
          <tr>
            <td width="65">Test ID</td>
            <td width="95">No Of Days</td>
            <td width="132">Medicine Names</td>
            <td width="39">Mg</td>
            <td width="71">Dosage</td>
            <td width="273">&nbsp;</td>
          </tr>
         
           <?php
$respat = mysql_query("SELECT * FROM appointment where pat_id='$_SESSION[pat_id]'");
$recpat = mysql_fetch_array($respat);

$restest = mysql_query("SELECT * FROM test where app_id='$recpat[app_id]'");
$rettest = mysql_fetch_array($restest);

			  $res = mysql_query("SELECT * FROM prescription where test_id='$rettest[test_id]'");
			  
			  $retpres = mysql_fetch_array($res);
			  $nod= unserialize($retpres[no_of_days]);
			  $medname = unserialize($retpres[medicines]);
			  $mg = unserialize($retpres[mg]);
			  $dosage = unserialize($retpres[dosage]);
			  echo "<td>" . $retpres['test_id'] . "</td>";
     for($k=0; $k<count($nod); $k++)
  {
	  for($j=1;$j<=$k;$j++)
	  {
		  echo "<td>"  .    "</td>";
	  }
  echo "<td>" . $nod[$k] . "</td>";
  echo "<td>" . $medname[$k] . "</td>";
  echo "<td>" . $mg[$k] . "</td>";
  echo "<td>" . $dosage[$k] . "</td>";
  
 
  echo "</tr>";
  }
  
?>
 <tr>
            <td>Remarks:</td>
            <td colspan="5"><?php echo $retpres['remarks'];?></td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </div> 
        <div class="cleaner"></div>
    </div> 
    <?php
include("includes/footer.php");
?>