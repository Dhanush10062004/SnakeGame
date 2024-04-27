<?php


if(isset($_POST['score']))

{

$score=$_POST['score'];

$con=mysqli_connect("localhost","root","","snake");

$sql1="SELECT n from tab ORDER BY sno DESC LIMIT 1";

$result=mysqli_query($con,$sql1);

$row=mysqli_fetch_assoc($result);

$name= $row['n'];

$sql="UPDATE tab SET s='$score' WHERE n='$name'";

$r=mysqli_query($con,$sql);

}

?>