<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
table,tr,td {
    border: 3px solid black;
}
</style>
</head>

<body>
<?php
$sn = "DESKTOP-E6QBQ94\SQLEXPRESS";
$sd = array("UID"=>"sa","PWD"=>"asd123456","Database"=>"faraz");
$con = sqlsrv_connect($sn,$sd);
if($con){
$qu = "select COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = 'php'";
$quu = "select * from php";
$stt = sqlsrv_query($con,$quu);
$st = sqlsrv_query($con,$qu);
$col = sqlsrv_num_fields($st);
$coll = sqlsrv_num_fields($stt);

echo "<table>";
echo "<tr>";
while($ro = sqlsrv_fetch($st)){
echo "<td>";
for($i=0;$i<$col;$i++){
echo sqlsrv_get_field($st,$i) . " ";
}
echo "</td>";
}
echo "</tr>";

while($roo = sqlsrv_fetch($stt)){
echo "<tr>";
for($i=0;$i<$coll;$i++){
echo "<td>";
echo sqlsrv_get_field($stt,$i) . " ";
echo "</td>";
}
echo "</tr>";
}

echo "</table>";
}
?>
</body>
</html>
