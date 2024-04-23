<?php
$db = "employee";
$host = "127.0.0.1:3306";
$uname = "root";
$passwd = "123456";
if (!$connect=mysqli_connect($host,$uname,$passwd,$db)){
echo "Could not connect to MySQL";
exit;
}
else{
echo "Connect OK<br>";
}
?>