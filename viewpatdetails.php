<?php
include("includes/header.php");
include("includes/conn.php");
	  $resultpat = mysql_query("SELECT * FROM patient where pat_id='$_SESSION[pat_id]'");
           	$rowpat = mysql_fetch_array($resultpat)
?>
    
     <div id="templatemo_main">
      <div id="sidebar" class="float_l">
        <div class="sidebar_box">
          <?php
		  include("sidebar.php");
				patienthome();
		  ?>
            </div>
   		</div>
      <div id="content" class="faq float_r">
          <table width="690" border="0">
            <tr bgcolor="#FFFFCC">
              <td colspan="4" align="center">Profile</td>
            </tr>
            <tr>
              <td width="96" bgcolor="#FFFFCC">Name:</td>
              <td width="197"><?php echo $rowpat[pat_name]; ?></td>
              <td width="80" bgcolor="#FFFFCC">Email-ID:</td>
              <td width="299"><form id="form1" name="form1" method="post" action="">
                <label for="name"></label>
                <?php echo $rowpat[email_id]; ?>
              </form></td>
            </tr>
            <tr>
              <td bgcolor="#FFFFCC">Date Of Birth:</td>
              <td><?php echo $rowpat[dob]; ?></td>
              <td bgcolor="#FFFFCC">Gender:</td>
              <td><?php echo $rowpat[gender]; ?></td>
            </tr>
            <tr>
              <td bgcolor="#FFFFCC">Address:</td>
              <td><?php echo $rowpat[address]; ?></td>
              <td bgcolor="#FFFFCC">Contact:</td>
              <td><?php echo $rowpat[contact]; ?></td>
            </tr>
          </table>
          <br />

          <table width="688" border="0">
            <tr bgcolor="#FFFFCC">
              <td colspan="6" align="center">Appointment Details</td>
            </tr>
            <tr bgcolor="#FFFFCC">
              <td width="126">Appointment ID</td>
              <td width="99">Branch Name</td>
              <td width="121">Doctor Name</td>
              <td width="115">Date</td>
              <td width="122">Time</td>
              <td width="79">Status</td>
            </tr>
              <?php
			  $result = mysql_query("SELECT * FROM appointment where pat_id='$_SESSION[pat_id]'");
			  
           	while($row = mysql_fetch_array($result))
  {
	  $result1 = mysql_query("SELECT * FROM branch where branch_id='$row[branch_id]'");
			  $row1 = mysql_fetch_array($result1);
  echo "<tr>";
  echo "<td><a href='viewpatdetails.php?appid=$row[app_id]&patid=$_SESSION[pat_id]'>" . $row['app_id'] . "</a></td>";
  echo "<td>" . $row1['branch_name'] . "</td>";
  echo "<td>" . $row['doc_id'] . "</td>";
  echo "<td>" . $row['app_date'] . "</td>";
  echo "<td>" . $row['app_time'] . "</td>";
  echo "<td>" . $row['status'] . "</td>";

  echo "</tr>";
  }
  
?>
          </table>
          <br />
   
<?php
$restt = mysql_query("SELECT * FROM test where app_id='$_GET[appid]'");
$arrrec = mysql_fetch_array($restt);
$sph = unserialize($arrrec[sph]);
$cyl  = unserialize($arrrec[cyl]);
$axis  = unserialize($arrrec[axis]);	
?>
        <table width="688" border="0">
            <tr  bgcolor="#FFFFCC">
              <td colspan="4" align="center">Test Results</td>
            </tr>
            <tr>
              <td width="96" bgcolor="#FFFFCC">Test ID:</td>		
              <td width="161"><?php 
			 $testid = $arrrec[test_id];
			  echo $arrrec[test_id]; 
			  ?></td>
              <td width="114" bgcolor="#FFFFCC">Appointment ID:</td>
              <td width="299"><?php echo $arrrec[app_id]; ?></td>
            </tr>
            <tr bgcolor="#FFFFCC">
              <td colspan="2" align="center"><strong>Left  Eye </strong></td>
              <td colspan="2" align="center"><strong>Right Eye  </strong></td>
            </tr>
            <tr bgcolor="#FFFFCC">
              <td bgcolor="#FFFFCC">SPH: </td>
              <td><?php echo $sph[0]; ?></td>
              <td bgcolor="#FFFFCC">SPH:</td>
              <td><?php echo $sph[1]; ?></td>
            </tr>
            <tr bgcolor="#FFFFCC">
              <td bgcolor="#FFFFCC">CYL: </td>
              <td><?php echo $cyl[0]; ?></td>
              <td bgcolor="#FFFFCC">CYL:</td>
              <td><?php echo $cyl[1]; ?></td>
            </tr>
            <tr bgcolor="#FFFFCC">
              <td bgcolor="#FFFFCC">Axis:</td>
              <td><?php echo $axis[0]; ?></td>
              <td bgcolor="#FFFFCC">Axis:</td>
              <td><?php echo $axis[1]; ?></td>
            </tr>
            <tr>
              <td height="34" colspan="2" bgcolor="#FFFFCC">Remarks:</td>
              <td colspan="2"><?php echo $arrrec[remarks]; ?></td>
            </tr>
            <tr>
              <td colspan="2" bgcolor="#FFFFCC">Specs Requirement:</td>
              <td colspan="2"><?php echo $arrrec[specs_req]; ?></td>
            </tr>
        </table>
        <br />
        <table width="689" height="162" border="0">
          <tr bgcolor="#FFFFCC">
            <td colspan="6" align="center">Prescription</td>
          </tr>
       
          <tr bgcolor="#FFFFCC">
            <td width="117">Test ID</td>
            <td width="170">Number Of Days</td>
            <td width="194">Medicine Names</td>
            <td width="69">Mg</td>
            <td width="117">Dosage</td>
          <tr>
            <?php
$respat = mysql_query("SELECT * FROM appointment where pat_id='$_SESSION[pat_id]'");
$recpat = mysql_fetch_array($respat);

$restest = mysql_query("SELECT * FROM test where app_id='$arrrec[app_id]'");
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
          <tr><td bgcolor="#FFFFCC">Remarks:</td>
            <td colspan="5"><?php echo $retpres['remarks'];?></td></tr>
<?php
$respat = mysql_query("SELECT * FROM appointment where pat_id='$_GET[pat_id]'");
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
</table>
        <p>&nbsp;</p>
        <table width="688" border="0">
          <tr bgcolor="#FFFFCC">
            <td colspan="7" align="center">Purchase Details</td>
          </tr>
          <tr bgcolor="#FFFFCC">
            <td width="73">Order ID</td>
            <td width="100">Admin Name</td>
            <td width="70">Test ID</td>
            <td width="157">Product Name</td>
            <td width="93">Order date</td>
            <td width="63">Total Amount</td>
            <td width="84">Dispatch Date</td>
          </tr>
<?php
$res1 = mysql_query("SELECT * FROM order where test_id='$arrrec[test_id]'");
while($row = mysql_fetch_array($res1))
  {
  echo "<tr>";
  echo "<td>" . $row['order_id'] . "</td>";
  echo "<td>" . $row['admin_id'] . "</td>";
  echo "<td>" . $row['test_id'] . "</td>";
  echo "<td>" . $row['product_id'] . "</td>";
  echo "<td>" . $row['order_date'] . "</td>";
  echo "<td>" . $row['total'] . "</td>";

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