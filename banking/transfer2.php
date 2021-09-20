<!DOCTYPE html>
<html>
 <head>
 </head>
 <body>
  <div align="right">
  </div>
  <?php
     $con=mysqli_connect("localhost","root","","banking");
     $sac=$_POST['saccno'];
     $rac=$_POST['raccno'];
     $sname=$_POST['sendername'];
     $rname=$_POST['recipientname'];
     $amt=$_POST['amount'];
     $msg=$_POST['mess'];

     $sql="SELECT * from customer where Customer_Name='$sname'";
     $records=mysqli_query($con,$sql);
     $rec1=mysqli_fetch_array($records);

     $sql2="SELECT * from customer where Customer_Name='$rname'";
     $value=mysqli_query($con,$sql2);
     $val1=mysqli_fetch_array($value);

     if(($amt)<0){
        echo '<script type="text/javascript">';
        echo 'alert("enter valid amount")';
        echo '</script>';
      }

      else if(($amt)> $rec1['Current_Balance']){
        echo '<script type="text/javascript">';                                                                   
        echo 'alert("Insufficient Balance")';
        echo '</script>';
      }
      else {

        $new=$rec1['Current_Balance']-$amt;
        $sqli="update customer set Current_Balance='$new' where Account_Number='$sac'";
        mysqli_query($con,$sqli);

        $new2=$val1['Current_Balance']+$amt;
        $sqli2="update customer set Current_Balance='$new2' where Account_Number='$rac'";
        mysqli_query($con,$sqli2);

        $sq="INSERT INTO transact(Sender_accno,Sender_Name,Receipient_accno,Receipient_Name,Amount,Message) 
               VALUES ('$sac','$sname','$rac','$rname','$amt','$msg')";

        $rs = mysqli_query($con,$sq);

        if($rs)
        {
           echo '<script type="text/javascript">';                                                                   
           echo 'alert("Transaction Successfull !!")';
           echo '</script>';
        }
        else{
          echo '<script type="text/javascript">';                                                                   
          echo 'alert("Check your connection")';
          echo '</script>';
        }
     }
     
  ?>
 </body>
</html>