<?php
include("odbc_connect.php");
$tb="employee";
echo "\nDisplay records : ";
$query="select * from $tb";
$result = odbc_exec($connect,$query);
if ($result){echo "OK<br>\n"; }else{echo "Error<br>\n";exit;}
echo "Total records : ".odbc_num_rows($result) ."<br>\n";
echo "Total fields : ".odbc_num_fields($result) ."<br>\n";
echo "<table border=1>\n" ;
echo "<tr>\n";
for($i=0;$i< odbc_num_fields($result);$i++){
    $field_name[$i] = odbc_field_name($result, $i+1);
    echo "<td>". $field_name[$i]. "</td>\n";
}
echo"</tr>\n" ;
while ($row = odbc_fetch_array($result)) {
echo"<tr>\n" ;
for($i=0;$i< odbc_num_fields($result);$i++){
echo "<td>". $row[$field_name[$i]] ."</td>\n";
}
echo"</tr>\n";
}

echo"</table>\n" ;
odbc_close($connect);
?>