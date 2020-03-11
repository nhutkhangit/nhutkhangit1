<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

$con = mysqli_connect("nhutkhangitxyz.c1luaigmpfqw.ap-southeast-1.rds.amazonaws.com","root","nhutkhangitxyz","nhutkhangitxyz_db");

// Check connection
if ($con) {
  echo 'ok';
}else {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>