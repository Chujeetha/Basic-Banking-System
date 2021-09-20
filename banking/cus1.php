<!DOCTYPE html>
<html>
  <head>
    <title>Profile</title>
     <link rel="stylesheet" href="cus1.css">
  </head>
  <body>
    <br><br>
    <h1 align="center">Customer's Profile</h1><br><br><br>
    <div class="about">
      <?php
          $con=mysqli_connect("localhost","root","","banking");
          mysqli_select_db($con,'banking');
          $q="SELECT * FROM customer WHERE Email='$_GET[id]'";
          $records=mysqli_query($con,$q);
          while($row=mysqli_fetch_array($records))
          { 
              $name=$row['Account_Number'];
              $reg=$row['Customer_Name'];
              $hos=$row['Email'];
              $mes=$row['Current_Balance'];

              echo "<br>";
              echo "Account Number: ".$name;
              echo "<br>";
              echo "<br>";
              echo "Customer Name: ".$reg;
              echo "<br>";
              echo "<br>";
              echo "Email id: ".$hos;
              echo "<br>";
              echo "<br>";
              echo "Current Balance: ".$mes;

          }   
      ?>
      <br>
      <br>
      <b><input type="button" class="btn" onclick="location.href='transfer1.php';" value="Transfer Now" /></b>
    </div>
  </body>
</html>