<!DOCTYPE HTML>
      <html>
      <head>
      <style>
      .icon1 {
    padding: 10px;
    background: dodgerblue;
    color: white;
    min-width: 50px;
    text-align: center;
}
.input-container {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    width: 100%;
    margin-bottom: 15px;
}
.input-field {
    width: 100%;
    padding: 10px;
    outline: none;
}

.input-field:focus {
    border: 2px solid dodgerblue;
}.btn {
    background-color: green;
    color: white;
    padding: 20px 20px;
    border: none;
    cursor: pointer;
    width: 35%;
    opacity: 0.9;
    border-radius: 10px;
    font-size:20px;
}

.btn:hover {
    opacity: 1;
    color: green;
    background-color: white;
}
</style>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="stylesheet" href="main.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      </head>
      <body style="background-color: black;">
      
      </header>

<br><br><br><br><br>

 <form style="max-width:500px;margin:auto;" action="" method="POST">
    <div class="input-container">
    <i class="fa fa-user icon1"></i>
    <input class="input-field" type="text" placeholder="DEPT" name="dept" style="color: block;">
</div>

    <center><input class="btn" type="submit" value="VIEW DETAILS" name="submit"></center>


</form>
<br>
<?php
if(isset($_POST["submit"]))
{  
     $dept=$_POST['dept'];
     if($dept){
     header('Location:deptmain.php?val='.$dept.'');  }
}
?>

            </body>
            </html>