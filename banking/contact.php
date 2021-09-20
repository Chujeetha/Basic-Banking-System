<!DOCTYPE html>
<html>
  <head>
      <link rel="stylesheet" href="cont.css">
  </head>
  <body>
      <div class="cont">
      <div class="first"> 
        <h1>Contact Us</h1>
         <form  method="post" action="cont.php">
         <?php if(isset($_GET['error'])) { ?>
         <p class="error"><?php echo $_GET['error']; ?></p>
         <?php } ?>
        <label for="name">Name</label><br>
        <input type="text" id="name" placeholder="Name - ex:John" name="name" style="font-size:12pt;height:40px;width:350px;"><br><br>
        <label for="name">Email</label><br>
        <input type="text" id="subject" placeholder="Email" name="email" style="font-size:12pt;height:40px;width:350px;"><br><br>
        <label for="name">Subject</label><br>
        <input type="text" id="subject" placeholder="Subject" name="subject" style="font-size:12pt;height:40px;width:350px;"><br><br>

      </div>

      <div class="second">
        <label for="name">Message</label><br>
        <textarea id="message" name="message" placeholder="Message" rows="10" cols="30" style="font-size:12pt"></textarea><br><br>    
        <button id="log" type="submit" value="contactus">Contact Us</button>

      </div>
    </div>
  </body>
</html>