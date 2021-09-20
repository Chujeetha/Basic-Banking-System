<!DOCTYPE html>
<html>
  <head>
  	<title>Transfer</title>
     <link rel="stylesheet" href="transfer.css">
  </head>
  <body>
  
  	<form method="post" action="transfer2.php">
    <?php if(isset($_GET['error'])) { ?>
      <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    <div class="val">
      <div class="first" >
        <h1>Transaction</h1>
        <label for="name">Name of Sender</label><br>
        <input type="text" id="name" placeholder="Enter Name"  name="sendername" style="font-size:12pt;height:40px;width:350px;"><br><br><br>

        <label for="name">Name of Recipient</label><br>
        <input type="text" id="name" placeholder="Enter Name"  name="recipientname" style="font-size:12pt;height:40px;width:350px;"><br><br><br>

        <label for="registerno">Account Number of Sender</label><br>
        <input type="text" id="registerno" placeholder="Enter Account Number" name="saccno" style="font-size:12pt;height:40px;width:350px;"><br><br>    

        <label for="name">Account Number of Recipient</label><br>
        <input type="text" id="name" placeholder="Enter Account Number"  name="raccno" style="font-size:12pt;height:40px;width:350px;"><br><br><br>

      </div> 

      <div class="second">

        <label for="name">Amount</label><br>
        <input type="text" id="name" placeholder="Enter Amount to Transfer"  name="amount" style="font-size:12pt;height:40px;width:350px;"><br><br><br>
        <label for="name">Message</label><br>
        <textarea id="message" name="mess" placeholder="Message" rows="10" cols="30" style="font-size:12pt; width:350px; height:150px;"></textarea><br><br>

        <button id="log" type="submit" value="apply">Submit</button>
        
      </div>

    </div>
    
    </form>
    </div>
  </div>
 </body>
</html>