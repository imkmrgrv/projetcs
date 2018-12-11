 <?php
 $con=mysql_connect("localhost","root","technology");
 if(!con)
 {
	 die('Error'.mysql_error());
 }
 mysql_select_db("optomate", $con);

 ?>