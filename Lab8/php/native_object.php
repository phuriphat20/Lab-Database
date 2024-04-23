<?php
include("native_connect.php");
$tb="employee";
echo "Display records : ";
$query="select * from $tb";
$result = mysqli_query($connect,$query);
if ($result){
echo "OK<br>";
}
else{
echo "Error<br>";
exit;
}
echo "Total records : ".mysqli_num_rows($result) ."<br>\n";
echo "Total fields : ".mysqli_num_fields($result) ."<br>\n";
while ($object = mysqli_fetch_object($result)) {
echo $object->Employee_ID . " " . $object->Name . "<br>";
}
mysqli_close($connect);
?>