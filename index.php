<pre>
<?php

$con = mysqli_connect("localhost","esu","esu1234","mysqls");
$sql = "select * from Students";

$result = mysqli_query($con,$sql);
//print_r($result);

 //$row = mysqli_fetch_assoc($result);
while ( $row= mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<br> NAME |"."LASTNAME <br> ".$row['NAME']." |". $row ['LASTNAME'];
    //echo " lastname - ".$row['LASTNAME']."<br>";
};
//print_r($row1);
//print_r($row);
//echo "<br> NAME - ".$row['NAME']."<br>"; // gamoaqvs konkretuli "FIELD" romelsac avirchevt


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


