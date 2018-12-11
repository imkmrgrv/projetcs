<?php
session_start();
include("includes/header.php");
include("includes/conn.php");
	
$resapp = mysql_query("SELECT * FROM appointment where pat_id='$_SESSION[pat_id]'");
$retapp = mysql_fetch_array($resapp);
$restest= mysql_query("SELECT * FROM test where app_id='$retapp[app_id]'");
$retest = mysql_fetch_array($restest);
	
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
       <table width="432" border="0">
            <tr>
              <td colspan="2" align="center">Test Results</td>
            </tr>
            <tr>
            <?php
$restt = mysql_query("SELECT * FROM test where app_id='$retest[app_id]'");
$arrrec = mysql_fetch_array($restt);
$sph = unserialize($arrrec[sph]);
$cyl  = unserialize($arrrec[cyl]);
$axis  = unserialize($arrrec[axis]);	
?>
              <td width="164">Test ID:<?php echo $retest[test_id]; ?></td>
              <td width="258"> Appointment ID <?php echo $retest[app_id]; ?></td>
            </tr>
            <tr bgcolor="#FFFFCC">
              <td align="center">Left  Eye</td>
              <td align="center">Right Eye</td>
            </tr>
            <tr bgcolor="#FFFFCC">
              <td>SPH:<?php echo $sph[0]; ?></td>
              <td>SPH:<?php echo $sph[1]; ?></td>
            </tr>
            <tr bgcolor="#FFFFCC">
              <td>CYL:<?php echo $cyl[0]; ?></td>
              <td>CYL:<?php echo $cyl[1]; ?></td>
            </tr>
            <tr bgcolor="#FFFFCC">
              <td>Axis:<?php echo $axis[0]; ?></td>
              <td>Axis:<?php echo $axis[1]; ?></td>
            </tr>
            <tr>
              <td>Remarks:<?php echo $arrrec[remarks]; ?></td>
              <td>Specs Requirement:<?php echo $arrrec[specs_req]; ?></td>
            </tr>
          </table>
      </div> 
        <div class="cleaner"></div>
    </div> 
    <?php
include("includes/footer.php");
?>