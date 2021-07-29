<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style2.css" rel="stylesheet" type="text/css">
<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color:PALEGREEN;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: pink;
    font-size: 25px;
    color: blue;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: red;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
div{
	 text: red;
}

</style>
</head>
<body>
<header>
<center>
<h1>ADMIN SITE</h1>
</center>

<center>
<div style="font-size: 1.9em;">
<center><br><a href=""><button class="button button1">ELIGIBILITY ANALYSIS</button></a></center></br>
         <a href="deptview.php">Eligibility Analysis Based On Department </a></br></br>
		  <a href="reportview.php">Eligibility Analysis Based On CGPA </a></br></br>
		   <a href="domainview.php"> Eligibility Analysis Based On Area of Interest</a></br></br>
 
 </div>
 </center>
</body>
</html>
