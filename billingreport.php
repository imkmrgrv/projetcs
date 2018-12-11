<?php
include("includes/conn.php");
$restest=mysql_query("SELECT * from orders where order_id='$_GET[prodid]'");
$retest= mysql_fetch_array($restest);


$restest=mysql_query("SELECT * from test where test_id='$retest[2]'");
$retest= mysql_fetch_array($restest);

//echo mysql_num_rows($restest);
$resapp=mysql_query("SELECT * from appointment where app_id='$retest[1]'");
$retapp= mysql_fetch_array($resapp);

$respat=mysql_query("SELECT * from patient where pat_id='$retapp[2]'");
$retpat= mysql_fetch_array($respat);


?>
<html>
<head>
  <script>
function printpage()
  {
  window.print()
  }
</script>
</head>
<body onLoad="printpage()">
<table width="639" border="1">
  <tr>
    <th colspan="3" scope="row"><p>OPTOMATE</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></th>
  </tr>
  <tr>
    <th width="191" scope="row">Order No. <?php echo $_GET[prodid]?> </th>
    <td width="240">&nbsp;</td>
    <td width="186">Date: <?php echo date("Y-m-d"); ?></td>
  </tr>
  <tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th scope="row">To</th>
    <td colspan="2">&nbsp;<?php echo $retpat[pat_name]; ?></td>
  </tr>
  <tr>
    <th colspan="2" scope="row">Particulars</th>
    <td><strong>AMOUNT</strong></td>
  </tr>
  <?php
  $restest=mysql_query("SELECT * from orders where order_id='$_GET[prodid]'");
while($retest= mysql_fetch_array($restest))
{
	//$respr=mysql_query("SELECT * from products where prod_id='$retest[3]'");
	//$retpr= mysql_fetch_array($respr);
	
	  $restorders2 =  mysql_query("SELECT * FROM orders where test_id ='$retest[test_id]'");
			  		while($recrows2 = mysql_fetch_array($restorders2))
					{
						 $restorders3 =  mysql_query("SELECT * FROM products where prod_id ='$recrows2[prod_id]'");
			  				while($recrows3 = mysql_fetch_array($restorders3))
							{
								?>
                                <tr>
    							<th colspan="2" scope="row">&nbsp;<?php echo $recrows3[name];?></th>
    							<td>&nbsp;<?php echo $recrows3[cost];?></td>
  								</tr>
                                <?php
								
							//echo "&nbsp;".$recrows3[name]. "<br>";
							}
					}

?>
 
<?php
}
?>
 <tr>
    <th colspan="2" scope="row">Total</th>
    <td><strong><?php echo $_GET[balamt]; ?></strong></td>
  </tr>
</table>
          

</body>
</html>

   
