<?php
$db = "employee";
$dsn = "mydb";
$uname = "root";
$passwd = "123456";
if (($connect = odbc_connect( $dsn, $uname, $passwd))==0){
exit("Could not connect to MySQL, ODBC error = " . odbc_error());
}
else{
echo "Connect OK";
}
?>