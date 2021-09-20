<?php
   $con=mysqli_connect("localhost", "root","","banking");
   $name=$_POST['name'];
   $email=$_POST['email'];
   $subject=$_POST['subject'];
   $message=$_POST['message'];
   

   
   if($name=="" || $email=="" || $subject=="" || $message=="")
   {
       echo "Empty fields not allowed";
   }
     if(!preg_match('/^[A-z0-9_\-]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z.]{2,4}$/', $email)){
       echo '<script>alert("Invalid Email !!")</script>';
       header("refresh:0; url=contact1.php");
         exit();  
}
   else{
       $sql = "INSERT INTO contact (Name,Email,Subject,Message) 
               VALUES ('$name', '$email','$subject','$message')";

       $rs = mysqli_query($con,$sql);
       if($rs)
       {
        header("Location: contact.php?error=Message sent !!");
        exit();
       }
       else
       {
        header("Location: contact.php?error=Error 404 !!");
        exit();
       }
   }

?>