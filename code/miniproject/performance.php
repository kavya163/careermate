<?php
if(isset($_POST['submit']))
{
	require'c.php';
$rollno=$_POST['rollno'];
$name=$_POST['name'];
$sem1=$_POST['sem1'];
$sem2=$_POST['sem2'];
$sem3=$_POST['sem3'];
$sem4=$_POST['sem4'];
$sem5=$_POST['sem5'];
$sem6=$_POST['sem6'];
$sem7=$_POST['sem7'];
$sem8=$_POST['sem8'];



$sql1 = "INSERT INTO performance(rollno,name,sem1,sem2,sem3,sem4,sem5,sem6,sem7,sem8) VALUES ('$rollno','$name','$sem1','$sem2','$sem3','$sem4','$sem5','$sem6','$sem7','$sem8')";
mysqli_query($con,$sql1);
}
?>
<html>
<head>
<body>
<fieldset>
<center><legend>ACADEMIC DETAILS</legend></center><br/>

</br>
<form method="POST"><table align="center"><tr>
<th><center>Roll No :</th><td><input type="text" name="rollno" placeholder="your rollno"></center><br/></td></tr>
<tr><th><center>Name :</th><td><input type="text" name="name" placeholder="your name"></center><br/></td></tr>

<tr><th><center>Sem1 :</th><td><input type="text" name="sem1" placeholder="sem1"></center><br/></td></tr>
<tr><th><center>Sem2 :</th><td><input type="text" name="sem2" placeholder="sem2"></center><br/></td></tr>
<tr><th><center>Sem3 :</th><td><input type="text" name="sem3" placeholder="sem3"></center><br/></td></tr>
<tr><th><center>Sem4 :</th><td><input type="text" name="sem4" placeholder="sem4"></center><br/></td></tr>
<tr><th><center>Sem5 :</th><td><input type="text" name="sem5" placeholder="sem5"></center><br/></td></tr>
<tr><th><center>Sem6 :</th><td><input type="text" name="sem6" placeholder="sem6"></center><br/></td></tr>
<tr><th><center>Sem7 :</th><td><input type="text" name="sem7" placeholder="sem7"></center><br/></td></tr>
<tr><th><center>Sem8 :</th><td><input type="text" name="sem8" placeholder="sem8"></center><br/></td></tr>
<tr><th><center>Backlock :</th><td><input type="text" name="backlock" placeholder="backlock"></center><br/></td></tr>
<tr><th><center>History of Arrers:</th><td><input type="text" name="hoa" placeholder="hoa"></center><br/></td></tr>

<tr ><th rowspan="2"><center><input type="submit" value="submit"name="submit"></center><br/></th></tr></table>

</form>
</fieldset>
</body>
</head>
</html>