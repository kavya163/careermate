<?php
if(isset($_POST['submit']))
{
	
	require'c.php';
$companycode=$_POST['companycode'];
$companyname=$_POST['companyname'];
$hrname=$_POST['hrname'];
$contactno=$_POST['contactno'];
$dob=$_POST['dob'];
$nosp=$_POST['nosp'];
$internship=$_POST['internship'];
$packeage=$_POST['packeage'];


$sql1 = "INSERT INTO company(companycode,companyname,hrname,contactno,dob,nosp,internship,packeage) VALUES ($companycode,'$companyname','$hrname','$contactno','$dob','$nosp','$internship',$packeage)";

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
<center><p style="color:blue;font-size:30px;">COMPANY DETAILS</p></center><br/>
<form method="POST"><table align="center"><tr>
<th><center>Company Code :</th><td><input type="text" name="companycode" placeholder="companycode"></center><br/></td></tr>
<tr><th><center> Company Name :</th><td><input type="text" name="companyname" placeholder="companyname"></center><br/></td></tr
<tr><th><center>HR Name:</th><td><input type="text" name="hrname" placeholder="hr name"></center><br/></td></tr>
<tr><th><center>Contact No :</th><td><input type="text" name="contactno" placeholder="contactno"></center><br/></td></tr>
<tr><th><center>Date:</th><td><input type="date" name="dob" placeholder="company visit date"></center><br/></td></tr>
<tr><th><center>No.Of.Students Placed :</th><td><input type="text" name="nosp" placeholder="nosp "></center><br/></td></tr>
<tr><th><center>Internship :</th><td><input type="text" name="internship" placeholder="internship"></center><br/></td></tr>
<tr><th><center>Packeage :</th><td><input type="text" name="packeage" placeholder="packeage"</center><br/></td></tr>

<tr ><th rowspan="2"><center><input type="submit" value="submit"name="submit"></center><br/></th></tr></table>

</form>
</fieldset>
</body>
</head>




</html>