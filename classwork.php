<pre>
<?php

$con = mysqli_connect("localhost","esu","esu1234","DB_DATA");
$sql = "select * from  MY_Data where ID = 7 ";

$result = mysqli_query($con,$sql);
// $row= mysqli_fetch_array($result, MYSQLI_ASSOC);
$row = mysqli_fetch_assoc($result);
print_r($row);
?>
</pre>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>index page</title>
</head>
<body>
</body>
</html>


