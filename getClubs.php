<?php
$connection = mysqli_connect("localhost","root","");
mysqli_select_db($connection,"footballdb");
$result = mysqli_query($connection,"SELECT * FROM clubs"); //

$rs = array();
while($rs[] = mysqli_fetch_assoc($result)) {
}
mysqli_close($connection);
unset($rs[count($rs)-1]);  //removes a null value

print("{\"clubs\":"); //
print(json_encode($rs, JSON_NUMERIC_CHECK)); //
print("}"); //
?>