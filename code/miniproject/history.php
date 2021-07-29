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
CGPA UPDATE</p></center><br/>
<body>
<form method="post">
ROLL NUMBER:<input type="text" name="rollno" placeholder="rollno"></br></br></br>
SEM :<input type="text" name="sem" placeholder="sem"></br></br></br>
CGPA :<input type="text" name="cgpa" placeholder="cgpa"></br></br>
<center><input type="submit" value="submit"name="submit"></center>
</center>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
require'c.php';
$rollno=$_POST['rollno'];
$sem=$_POST['sem'];
$cgpa=$_POST['cgpa'];
$sql1="UPDATE report SET sem$sem='$cgpa' WHERE rollno='$rollno'";
echo $sql1;
mysqli_query($con,$sql1);
}
?>