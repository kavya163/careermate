<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.image {
  background-image: url("srec.jpg");
  background-color: #cccccc;
  height: 800px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}
</style>
</head>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">CAREERMATE</a>
    </div>
    <ul class="nav navbar-nav">
    
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">ABOUT US<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <a href="http://www.srec.ac.in/aboutus">ACADEMIC DETAILS</a>
          <li><a href="#"></a></li>
          <li><a href="#"></a></li>
        </ul>
      </li>
      
    </ul>

    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">sign up<span class="glyphicon glyphicon-user"></span></a>
        <ul class="dropdown-menu">
		 
           <li><a href="singup.php">STUDENT</a></li></ul>
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">login<span class="glyphicon glyphicon-log-in"></span></a>
        <ul class="dropdown-menu">
          
          <li><a href="log.php">STUDENT</a></li>
		  <li><a href="admin.php">ADMIN</a></li></ul>
      
    </ul>
  </div>
</nav>
<div class="image">
  <div class="text">
    <h1 style="font-size:100px">CAREERMATE</h1>
  </div>
</div>

</body>
</html>
