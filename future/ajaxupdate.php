<?php
$q=$_GET["q"];

include("includes/conn.php");

$sql="UPDATE appointment SET status='Done' WHERE app_id = '".$q."'";

$result = mysql_query($sql);

echo "Done";
?>
