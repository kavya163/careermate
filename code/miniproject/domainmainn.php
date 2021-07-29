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
      $aoi=$_GET['val'];
      ?>
    <div>
      <form action="" method="POST">
  <center><table border="1" style="color: white;">
    <thead>
      <tr>
    <th style="color: white;">Rollno</th>
    <th style="color: white;">Name</th>
<th style="color: white;">Gender</th>
<th style="color: white;">Dept</th>
<th style="color: white;">DateofBirth</th>
<th style="color: white;">Address</th>
<th style="color: white;">Nationality</th>
<th style="color: white;">Father's Name</th>
<th style="color: white;">Mother's Name</th>
<th style="color: white;">ContactNo</th>
<th style="color: white;">Email</th>
<th style="color: white;">Sem1</th>
<th style="color: white;">Sem2</th>
<th style="color: white;">Sem3</th>
<th style="color: white;">Sem4</th>
<th style="color: white;">Sem5</th>
<th style="color: white;">Sem6</th>
<th style="color: white;">Sem7</th>
<th style="color: white;">Sem8</th>
<th style="color: white;">CGPA</th>
<th style="color: white;">History Of Arrears</th>
<th style="color: white;">Current Arrears</th>
<th style="color: white;">Area Of Interst</th>


</tr>
</thead>
  <tbody>
  
   <?php 
       require 'c.php'; 
        
            $sql = "SELECT * FROM report where `aoi`='$aoi'";
            $result = $con->query($sql);
        while( $row = mysqli_fetch_assoc( $result ) ){
          echo "<tr style='color: white;'><center><td>{$row['rollno']}</td><td>{$row['name']}</td><td>{$row['gender']}</td><td>{$row[ 'dept']}</td><td>{$row['dob']}</td><td>{$row['address']}</td><td>{$row['nationality']}</td><td>{$row['fname']}</td><td>{$row['mname']}</td><td>{$row['contactno']}</td><td>{$row['email']}</td><td>{$row['sem1']}</td><td>{$row['sem2']}</td><td>{$row['sem3']}</td><td>{$row['sem4']}</td><td>{$row['sem5']}</td><td>{$row['sem6']}</td><td>{$row['sem7']}</td><td>{$row['sem8']}</td><td>{$row['cgpa']}</td><td>{$row['hoa']}</td><td>{$row['ca']}</td><td>{$row['aoi']}</td></center></tr>";  
        }
?>
</tbody>
  </tbody>
</table></center></form>
</div>


      </body>
      </html>
