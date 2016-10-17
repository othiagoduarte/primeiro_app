<?php 

$Host	= "m7wltxurw8d2n21q.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$Username = "ihj9mzw3pfbb32o1";
$Password = "xsopcit1hvr3r6yq";
$Port =	3306;
$db = "sfn5si6huyqqshuv";

mysqli_connect($Host, $Username, $Password, $db) or die(mysqli_error());
echo "Connected to MySQL<br/>";
echo "Ola mundo";