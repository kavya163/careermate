<?php
if(isset($_POST['submit']))
{
	require'c.php';
$rollno=$_POST['rollno'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$dept=$_POST['dept'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$nationality=$_POST['nationality'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$contactno=$_POST['contactno'];
$email=$_POST['email'];
$sem1=$_POST['sem1'];
$sem2=$_POST['sem2'];
$sem3=$_POST['sem3'];
$sem4=$_POST['sem4'];
$sem5=$_POST['sem5'];
$sem6=$_POST['sem6'];
$sem7=$_POST['sem7'];
$sem8=$_POST['sem8'];
$cgpa=$_POST['cgpa'];
$hoa=$_POST['hoa'];
$ca=$_POST['ca'];
$aoi=$_POST['aoi'];

$sql1 = "INSERT INTO report(rollno,name,gender,dept,dob,address,nationality,fname,mname,contactno,email,sem1,sem2,sem3,sem4,sem5,sem6,sem7,sem8,cgpa,hoa,ca,aoi) VALUES ('$rollno','$name','$gender','$dept','$dob','$address','$nationality','$fname','$mname','$contactno','$email','$sem1','$sem2','$sem3','$sem4','$sem5','$sem6','$sem7','$sem8','$cgpa','$hoa','$ca','$aoi')";
mysqli_query($con,$sql1);
}
?>
<html>
<head>
<style>
body {
  background-image: url("123.jpg");
   color: red;
   font-size: 30px;
}
</style>
</head>
<body>
<fieldset>
<center><p style="color:blue;font-size:30px;">
STUDENT DETAILS</p></center><br/>
<form method="POST"><table align="center"><tr>

<th><center>Roll No :</th><td><input type="text" name="rollno" placeholder="your rollno"></center><br/></td></tr>
<tr><th><center>Name :</th><td><input type="text" name="name" placeholder="your name"></center><br/></td></tr>
<tr><th><center>Gender:<input type="radio" name="gender" value="male" checked> Male<br>
  <tr><th><center><input type="radio" name="gender" value="female"> Female<br>
<tr><th><center>Dept :</th><td><select name="dept">
  <option value="aero">AERO</option>
  <option value="bme">BME</option>
  <option value="cse">CSE</option>
  <option value="ece">ECE</option>
  <option value="eee">EEE</option>
  <option value="eie">EIE</option>
  <option value="it">IT</option>
  <option value="civil">Civil</option>
  <option value="mech">Mech</option>
  <tr><th><center>Date Of Birth:</th><td> <input type="date" name="dob" placeholder="your dob"></center><br/></td></tr>
<tr><th><center>Address :</th><td><input type="text" name="address" placeholder="address"></center><br/></td></tr>
<tr><th><center>Nationality :</th><td><input type="text" name="nationality" placeholder="nationality"></center><br/></td></tr>
<tr><th><center>Father's Name :</th><td><input type="text" name="fname" placeholder="father's name "></center><br/></td></tr>
<tr><th><center>Mother's Name :</th><td><input type="text" name="mname" placeholder="mother's name"></center><br/></td></tr>
<tr><th><center>Contactno :</th><td><input type="text" name="contactno" placeholder="contactno"></center><br/></td></tr>
<tr><th><center>Email :</th><td><input type="text" name="email" placeholder="email id"></center><br/></td></tr>
<tr><th><center>Sem1 :</th><td><input type="text" name="sem1" placeholder="sem1"></center><br/></td></tr>
<tr><th><center>Sem2 :</th><td><input type="text" name="sem2" placeholder="sem2"></center><br/></td></tr>
<tr><th><center>Sem3 :</th><td><input type="text" name="sem3" placeholder="sem3"></center><br/></td></tr>
<tr><th><center>Sem4 :</th><td><input type="text" name="sem4" placeholder="sem4"></center><br/></td></tr>
<tr><th><center>Sem5 :</th><td><input type="text" name="sem5" placeholder="sem5"></center><br/></td></tr>
<tr><th><center>Sem6 :</th><td><input type="text" name="sem6" placeholder="sem6"></center><br/></td></tr>
<tr><th><center>Sem7 :</th><td><input type="text" name="sem7" placeholder="sem7"></center><br/></td></tr>
<tr><th><center>Sem8 :</th><td><input type="text" name="sem8" placeholder="sem8"></center><br/></td></tr>
<tr><th><center>CGPA:</th><td><input type="text" name="cgpa" placeholder="cgpa"></center><br/></td></tr>
<tr><th><center>History Of Arrers:</th><td><input type="text" name="hoa" placeholder="hoa"></center><br/></td></tr>
<tr><th><center>Current Arrers:</th><td><input type="text" name="ca" placeholder="ca"></center><br/></td></tr>
<tr><th><center>Area Of Interest:</th><td><input type="text" name="aoi" placeholder="aoi"></center><br/></td></tr>

<tr ><th rowspan="2"><center><input type="submit" value="submit"name="submit"></center><br/></th></tr></table>

</form>
</fieldset>
</body>
</head>
</html>