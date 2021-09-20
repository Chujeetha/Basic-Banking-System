<!DOCTYPE html>
<html>
 <head>
    <link rel="stylesheet" href="table.css">
 </head>
 <body>
  <h1 align="center"><b>Customer Details<b></h1><br><br><br>
  <div align="right">
  </div>
  <table>
  <tr>
    <th>Account Number</th>
    <th>Customer Name</th>
    <th>Email id</th>
    <th>Current Balance</th>
    <th>Profile</th>
  </tr>
  <?php
     $con=mysqli_connect("localhost","root","","banking");
     mysqli_select_db($con,'banking');

     $sql="SELECT * from customer";
     $records=mysqli_query($con,$sql);
     while($row=mysqli_fetch_array($records)){
           echo "<tr>";
	         echo "<td >".$row['Account_Number']."</td>";
	         echo "<td>".$row['Customer_Name']."</td>";
	         echo "<td>".$row['Email']."</td>";
	         echo "<td>".$row['Current_Balance']."</td>";
	         echo "<td><a href=cus1.php?id=".$row['Email'].">view</a></td>";
     }
  ?>
  </table>
 </body>
</html>