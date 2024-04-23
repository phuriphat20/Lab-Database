<?php
include("odbc_connect.php");
$tb="employee";
echo "Display records : ";
$query="select * from $tb";
$result = odbc_exec($connect,$query);
if ($result){echo "OK<br>"; }else{echo "Error<br>";exit;}
echo "Total records : ".odbc_num_rows($result) ."<br>";
echo "Total fields : ".odbc_num_fields($result) ."<br>";
while ($row = odbc_fetch_array($result)) {
echo $row["Employee_ID"] . " " . $row["Name"] . "<br>" ;
}
odbc_close($connect);
?>