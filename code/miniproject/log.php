<?php
session_start();
?>
<HTML>
<head>
<style>
body {
  background-image: url("123.jpg");
  </style>
<title>Login</title>

</head>
	
	
	<body>
	<center>
	<center><p style="color:blue;font-size:30px;">
STUDENT</p></center><br/>

		<form  action=" " method="post">
			<font size=6 color="black"><strong>Username: <input type="text" name="username"><br><br></strong>
			<font size=6 color="black"><strong>Password: <input type="password" name="password"><br><br>
			
			<font size=6 color="black"><input type="submit" name="reg_user" value="Log in">
			</center>
			
			
			
		</form>
		
		
	</body>


<?php

if (isset($_POST['reg_user'])) {


   
   if(empty($_POST['username']) || empty($_POST['password'])){
		echo "username or password invalid";
	}
   $con = mysqli_connect("localhost","root","");
   $db = mysqli_select_db($con,"manju");
   $user=$_POST['username'];
   $psw=$_POST['password'];  


$_SESSION["userid"] = $user;


   
   $query = mysqli_query($con,"SELECT * from signup WHERE password='$psw' AND username='$user'");       
   $rows =  mysqli_num_rows($query);  
  
  
   
     if($rows == 1){
	   $_SESSION['data']='1';
	   
	     header("location:upload.php");
	 }     
	else{	
	    echo "USERNAME OR PASSWORD IS INCORRECT";
	}	
	mysqli_close($con);
	}
 
?>