<?php
$hostname="localhost";
$dbuserid="pinkping";
$dbpasswd="12345";
$dbname="pinkping";


$mysqli = new mysqli($hostname, $dbuserid, $dbpasswd, $dbname);


if ($mysqli->connect_errno) {
    die('Connect Error: '.$mysqli->connect_error);
}else{
  echo "연결성공";
}


?>
ㅎ