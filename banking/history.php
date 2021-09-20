<!DOCTYPE html>
<html>
 <head>
    <link rel="stylesheet" href="trans.css">
 </head>
 <body>
  <h1 align="center"><b>Transaction Details<b></h1>
  <div align="right">
  </div>
  <br><br>
  <table>
  <tr>
    <th>Sender Account Number</th>
    <th>Sender Name</th>
    <th>Recipient Account Number</th>
    <th>Recipient Name</th>
    <th>Amount</th>
    <th>Message</th>
  </tr>
  <?php
     $con=mysqli_connect("localhost","root","","banking");
     mysqli_select_db($con,'banking');

     $sql="SELECT * from transact";
     $records=mysqli_query($con,$sql);
     while($row=mysqli_fetch_array($records)){
           echo "<tr>";
           echo "<td >".$row['Sender_accno']."</td>";
           echo "<td>".$row['Sender_Name']."</td>";
           echo "<td>".$row['Receipient_accno']."</td>";
           echo "<td>".$row['Receipient_Name']."</td>";
           echo "<td>".$row['Amount']."</td>";
           echo "<td>".$row['Message']."</td>";
           echo "</tr>";
     }
  ?>
  </table>
 </body>
</html>