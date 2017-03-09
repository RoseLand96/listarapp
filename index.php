<?php
$db_host = "am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
     $db_name = "bsm8pb5jxwugomgp";
     $db_user = "m28gpkqsebvtknx8";
     $db_password = "f8ei6nyfcmeatgj5";
    
     $connection = mysqli_connect($db_host, $db_user, $db_password) or die("Connection Error: " . mysqli_error());
    
mysqli_select_db($connection,$db_name) or die("Error al seleccionar la base de datos:".mysqli_error());
    @mysqli_query("SET NAMES 'utf8'");

$sql_query = "SELECT * FROM productos;";
$result = mysqli_query($connection,$sql_query);
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
?>