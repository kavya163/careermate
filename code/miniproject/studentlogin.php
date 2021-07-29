<?php
session_start();
?>
<?php
if(isset($_POST['submit']))
{  
   if(empty($_POST['user']) || empty($_POST['psw'])){
		echo "username or password invalid";
	}
   $con = mysqli_connect("localhost","root","nivethasubramani");
   $db = mysqli_select_db($con,"student");
   $user=$_POST['user'];
   $psw=$_POST['psw'];  


$_SESSION["userid"] = $user;


   
   $query = mysqli_query($con,"SELECT * from detail WHERE pass='$psw' AND rollno='$user'");       
   $rows =  mysqli_num_rows($query);   
     if($rows == 1){
	   $_SESSION['data']='1';
	     header("location:first.php");
	 }     
	else{	
	    echo "USERNAME OR PASSWORD IS INCORRECT";
	}	
	mysqli_close($con);
	}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<link rel = "stylesheet" type = "text/css" href = "welcometest.css" />
<title>student login</title>


</head>
    
<body>


<div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="loginimage.jpg" />
            </br>
			<form class="form-signin" id="form_id" method="post" name="myform">
                <input type="text" id="username" name="user" class="form-control" placeholder="RollNumber" required autofocus>
                </br>
				<input type="password" id="Password" name="psw" class="form-control" placeholder="Password" required>
                </br>
				<div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="submit">Sign in</button>
            </form>
            <a href="change.php" class="forgot-password">
                Forgot the password?
            </a>
        </div>
    </div>
	

</body>
</html>


