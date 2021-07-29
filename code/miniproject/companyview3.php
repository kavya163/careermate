<!DOCTYPE HTML>
      <html>
      <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="stylesheet" href="main.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      </head>
      <body style="background-color: black;">
      <header id="header" class="alt" style="background-color: black;">
      
      </header>

<br><br><br><br><br>

      <?php
      $companycode=$_GET['val'];
      ?>
    <div>
      <form action="" method="POST">
  <center><table border="1" style="color: white;">
    <thead>
      <tr>
    <th style="color: white;">Company code</th>
    <th style="color: white;">Company Name</th>
<th style="color: white;">HR Name</th>
<th style="color: white;">Contact no</th>
<th style="color: white;">Date</th>
<th style="color: white;">No.Of.Students Placed</th>
<th style="color: white;">Internship</th>
<th style="color: white;">Packeage</th>
</tr>
</thead>
  <tbody>
  
   <?php 
       require 'c.php'; 
        
            $sql = "SELECT * FROM company where  `companycode`='$companycode'";
            $result = $con->query($sql);
        while( $row = mysqli_fetch_assoc( $result ) ){
          echo "<tr style='color: white;'><center><td>{$row['companycode']}</td><td>{$row['companyname']}</td><td>{$row['hrname']}</td><td>{$row[ 'contactno']}</td><td>{$row['dob']}</td><td>{$row['nosp']}</td><td>{$row['internship']}</td><td>{$row['packeage']}</td></center></tr>";  
        }
?>
</tbody>
  </tbody>
</table></center></form>
</div>


      </body>
      </html>
