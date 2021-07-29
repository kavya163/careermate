<?php
session_start();
?>
<html>
<head>
<style>
body {
  background-image: url("123.jpg");
  </style>
<body>
<center>
<center><p style="color:blue;font-size:30px;">
ARREARS UPDATE</p></center><br/>

<form method="post">
ROLL NUMBER:<input type="text" name="rollno" placeholder="rollno"></br></br>

History Of Arrears:<input type="text" name="hoa" placeholder="hoa"></br></br>
Current Arrears :<input type="text" name="ca" placeholder="ca"></br></br>

<center><input type="submit" value="submit"name="submit"></center>
</center>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
require'c.php';
$rollno=$_POST['rollno'];
$hoa=$_POST['hoa'];
$ca=$_POST['ca'];
$sql1="UPDATE report SET hoa='$hoa',ca='$ca' WHERE rollno='$rollno'";
echo $sql1;
mysqli_query($con,$sql1);
}
?>