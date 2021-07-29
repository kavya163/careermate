<?php
if(isset($_POST['submit']))
{
	
	require'c.php';
$rollno=$_POST['rollno'];
$sem=(string)$_POST['sem'];
$semup='sem'.'$sem';
$sql1 = "UPDATE account($semup,cgpa) VALUES ('$sem','$cgpa') where rollno=$rollno";
mysqli_query($con,$sql1);
echo "updated successfully";
}
?>
<html>
<body>
<form method="post">
ROLL NUMBER:<input type="text" name="rollno" placeholder="sem">
SEM :<input type="text" name="sem" placeholder="sem">
   ALL CLEAR :
  <input type="radio"  name="yesno" id="yescheck" onclick="yesnoCheck()"/> Yes
   <input type="radio" name="yesno" id="nocheck" onclick="yesnoCheck()"/> NO
<div id="ifYes" style="visibility:hidden">
CGPA :<input type="text" name="cgpa" placeholder="cgpa"/>

</div>
<div id="ifNo" style="visibility:hidden">
NO OF ARRERS:<input type="text" name="arrers" placeholder=" noa"/>

</div>
<input type="submit" value="submit"name="submit"/>


<script>

function yesnoCheck() {

    if (document.getElementById("yescheck").checked) {
        document.getElementById("ifYes").style.visibility ="visible";
        document.getElementById("ifNo").style.visibility ="hidden";

    } else {
        document.getElementById("ifNo").style.visibility ="visible";
        document.getElementById("ifYes").style.visibility ="hidden";

    }
}
</script>


</body>
</html>
