<?php

$name=$_POST['p_name'];

echo $name;

$con=mysqli_connect("localhost","root","","snake");

$sql="INSERT INTO tab (n) VALUES ('$name')";

$result=mysqli_query($con,$sql);

?>
