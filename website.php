<!DOCTYPE>
<html>
<head>
<title>
scoreboard
</title>
<style>

body{
background-color:yellow;
}
table,td{
  border:2px solid;
  width:40%;
  border-collapse:collapse;
}
</style>
</head>

<body>
<center>

<h2> GCT IEEE STUDENT BRANCH - 81571 </h2>
<h3> SNAKE GAME SCOREBOARD </h3>

<table>
<tr>
      <td><center>PLAYER_NAME</center></td>
      <td><center>SCORE</center></td>
</tr>


<?php
$con=mysqli_connect("localhost","root","","snake");
$sq="SELECT * from tab ORDER BY s DESC";
$r=mysqli_query($con,$sq);
$result_check=mysqli_num_rows($r);
if($result_check>0)
{
while($row=mysqli_fetch_assoc($r))
{
echo "<tr>
          <td><center>" . $row['n'] . "</center></td>
          <td><center>" . $row['s'] . "</center></td>
      </tr>";
}
}
?>

</table>
</center>


</body>
</html>