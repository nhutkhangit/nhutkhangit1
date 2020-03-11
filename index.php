<?php

$con = mysqli_connect("nhutkhangitxyz.c1luaigmpfqw.ap-southeast-1.rds.amazonaws.com","root","nhutkhangitxyz","nhutkhangitxyz_db");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else {
  echo 'ok';
}

?>