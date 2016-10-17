<?php 

$Host	= "m7wltxurw8d2n21q.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$Username = "ihj9mzw3pfbb32o1";
$Password = "xsopcit1hvr3r6yq";
$Port =	3306;

mysqli_connect($Host, $Username, $Password, "mysql") or die(mysqli_error());
echo "Connected to MySQL<br/>";