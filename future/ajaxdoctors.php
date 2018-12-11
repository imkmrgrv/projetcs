<?php
$q=$_GET["q"];

include("includes/conn.php");

$sql="SELECT * FROM doctor WHERE branch_id = '".$q."'";

$result = mysql_query($sql);

echo "<select name='docname'>";

while($row = mysql_fetch_array($result))
  {
  echo "<option value='$row[doc_id]'>" . $row[doc_name] . "</option>";
  }
echo "</select>";

mysql_close($con);
?>