<?php
ini_set('display_errors', true);
error_reporting(E_ALL);

require ("../include/lib.php"); 
// conection to base de datos
require ('../include/connectiondb.php'); 


$sql = 'SELECT * FROM menuitems ORDER BY ITEM NAME';


$result = mysqli_query($con, $sql);

while mysqli_fetch() {

  $show ='';

}
 
mysql_close($conn);
?>	

	
	