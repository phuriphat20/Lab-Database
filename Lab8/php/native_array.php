<?php
include("native_connect.php");
$tb="employee";
echo "Display records : ";
$query="select * from $tb";
$result = mysqli_query($connect,$query);
if ($result){echo "OK<br>"; }else{echo "Error<br>";exit;}
echo "Total records : ".mysqli_num_rows($result) ."<br>";
echo "Total fields : ".mysqli_num_fields($result) ."<br>";
while ($row = mysqli_fetch_array($result)) {
echo $row["Employee_ID"] . " " . $row["Name"] . "<br>" ;
}
mysqli_close($connect);
?> // *** hash array, index of array is not a number. ***