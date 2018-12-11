<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
include("includes/conn.php");

$q=$_GET["q"];
$appdate= date("Y-m-d", strtotime($q));


$sql="SELECT * FROM appointment WHERE app_date = '$appdate'";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
  {
$arr[] = $row[app_time];
  }
//echo print_r($arr);

$sttime =  strtotime(date("Y-m-d h:i:s"));

?>

<table width="644" border="0">
    <tr>
      <td width="186" height="102" align="center" valign="top"><p>
        <label>
          <input type="radio" name="apptime" value="5:00PM" id="RadioGroup1_0" 
           <?php
if($sttime > strtotime(date("Y-m-d 05:15:00")))
{
	echo "disabled";
}
		  foreach($arr as $value)
		 	{
			  	if($value == "05:00:00")
				{
			 	echo "disabled";
			 	break;
				}
		 	} 
		 ?> 
          />
          5:00PM</label>
        <br />
        <label>
          <input type="radio" name="apptime" value="5:15PM" id="RadioGroup1_1"  
           <?php 
if($sttime > strtotime(date("Y-m-d 05:30:00")))
{
	echo "disabled";
}
		  foreach($arr as $value)
		 {
			  if($value == "05:15:00")
			{
			 echo "disabled";
			 break;
			}
		 } 
		 ?> 
          />
          5:15PM</label>
        <br />
        <label>
          <input type="radio" name="apptime" value="5:30PM" id="RadioGroup1_2"  
           <?php 
if($sttime > strtotime(date("Y-m-d 05:45:00")))
{
	echo "disabled";
}
		   
		  foreach($arr as $value)
		 {
			  if($value == "05:30:00")
			{
			 echo "disabled";
			 break;
			}
		 } 
		 ?> 
          />
          5:30PM</label>
        <br />
        <label>
          <input type="radio" name="apptime" value="5:45PM" id="RadioGroup1_3"  
           <?php 
if($sttime > strtotime(date("Y-m-d 06:00:00")))
{
	echo "disabled";
}
		  foreach($arr as $value)
		 {
			  if($value == "05:45:00")
			{
			 echo "disabled";
			 break;
			}
		 } 
		 ?> 
          />
          5:45PM</label>
        <br />
      </p></td>
      <td height="102" colspan="2" align="center" valign="top"><label>
        <input type="radio" name="apptime" value="6:00PM" id="RadioGroup1_4"  
           <?php 
if($sttime > strtotime(date("Y-m-d 06:15:00")))
{
	echo "disabled";
}
		   
		  foreach($arr as $value)
		 {
			  if($value == "06:00:00")
			{
			 echo "disabled";
			 break;
			}
		 } 
		 ?> 
          />
        6:00PM</label>
        <br />
        <label>
          <input type="radio"  name="apptime" value="6:15PM" id="RadioGroup1_5"
          <?php 
if($sttime > strtotime(date("Y-m-d 06:30:00")))
{
	echo "disabled";
}
		  
		  foreach($arr as $value)
		 {
			 if($value == "06:15:00")
			{
			 echo "disabled";
			 break;
		 	}
		 } 
		 ?> 
          />
          6:15PM</label>
        <br />
        <label>
          <input type="radio" name="apptime" value="6:30PM" id="RadioGroup1_6"  
           <?php 
if($sttime > strtotime(date("Y-m-d 06:45:00")))
{
	echo "disabled";
}
		  foreach($arr as $value)
		 {
			  if($value == "06:30:00")
			{
			 echo "disabled";
			 break;
			}
		 } 
		 ?> 
          />
          6:30PM</label>
        <br />
        <label>
          <input type="radio" name="apptime" value="6:45PM" id="RadioGroup1_7"  
           <?php 
		if($sttime > strtotime(date("Y-m-d 07:00:00")))
		{
		echo "disabled";
		}
		  foreach($arr as $value)
		 {
			  if($value == "05:45:00")
			{
			 echo "disabled";
			 break;
			}
		 } 
		 ?> 
          />
          6:45PM</label></td>
      <td width="204" align="center" valign="top"><label>
        <input type="radio" name="apptime" value="7:00PM" id="RadioGroup1_8"  
           <?php 
		   if($sttime > strtotime(date("Y-m-d 07:15:00")))
			{
				echo "disabled";
			}
		  foreach($arr as $value)
		 {
			 
			  if($value == "07:00:00")
			{
			 echo "disabled";
			 break;
			}
		 } 
		 ?> 
          />
        7:00PM</label>
        <br />
        <label>
          <input type="radio" name="apptime" value="7:15PM" id="RadioGroup1_9"  
           <?php 
		    if($sttime > strtotime(date("Y-m-d 07:30:00")))
			{
				echo "disabled";
			}
		  foreach($arr as $value)
		 {
			  if($value == "07:15:00")
			{
			 echo "disabled";
			 break;
			}
		 } 
		 ?> 
          />
          7:15PM</label>
        <br />
        <label>
          <input type="radio" name="apptime" value="7:30PM" id="RadioGroup1_10"  
           <?php 
		    if($sttime > strtotime(date("Y-m-d 07:45:00")))
			{
				echo "disabled";
			}
		  foreach($arr as $value)
		 {
			  if($value == "07:30:00")
			{
			 echo "disabled";
			 break;
			}
		 } 
		 ?> 
          />
          7:30PM</label>
        <br />
        <label>
          <input type="radio" name="apptime" value="7:45PM" id="RadioGroup1_11"  
           <?php 
		    if($sttime > strtotime(date("Y-m-d 08:00:00")))
			{
				echo "disabled";
			}
		  foreach($arr as $value)
		 {
			  if($value == "07:45:00")
			{
			 echo "disabled";
			 break;
			}
		 } 
		 ?> />
          7:45PM</label></td>
    </tr>
</table>