<?php
 include "config.php";
 $sql = "SELECT email FROM register";
 $result = mysqli_query($conn, $sql);
 $emails = array();
 while ($row = mysqli_fetch_assoc($result)) {
     $emails[] = $row['email'];
 }
 
 // Compose the email
 $subject = 'Test Email';
 $body = 'Hello, this is a test email!';
 $headers = 'From: srilekhaganagalla@gmail.com';
 
 // Loop through user data and send email
 foreach ($emails as $email) {
     mail($email, $subject, $body, $headers);
 }
 
 // Close the database connection
//  mysqli_close($conn);
 ?>

<!DOCTYPE html>
<html>
<head>
<title>Donation form</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<style>
    #chin img{
        height:400px;
        padding-top: 40px;
        padding-left: 40px;
    }
    </style>
   
</head>
<body>

<div class="wrapper" style="background-color: #db2436">
<div class="inner">
<div class="image-holder">

    <div id="chin">
<img src="https://www.pinclipart.com/picdir/middle/107-1073611_when-donating-food-always-check-the-expiration-dates.png" alt="image" >
</div>
<h1> &nbsp <br>  </h1>
<center>
<a href="home.php"><button>BACK TO HOME
 
</button></a></center>
</div>
<form action="dserver.php" method="post">
<?php if(isset($_GET['error'])) { ?>
              <p class="error"><?php echo $_GET['error']; ?></p>
          <?php } ?>
<h3>Donation Form</h3>
<center><h6> please fill the below details.</h6><br></center>
<div class="form-group">
  
<input type="text" placeholder="Item Name" name="foodname" class="form-control">
<input type="text" placeholder="Quantity" name="quantity" class="form-control">
</div>
<div class="form-wrapper">
<input type="text" placeholder="Address" name="address" class="form-control">
<input type="text" placeholder="Time of Cooking" name="Time" class="form-control">
</div>
<div class="form-wrapper">
<input type="text" placeholder="Available upto" name="avail" class="form-control">
 
</div>
<div class="form-wrapper">
<input type="text" placeholder="Contact number" name="mobileno" class="form-control">
<input type="text" placeholder="Add Message" name="msg" class="form-control">
</div>
<button onclick="sendEmails()">Donate</button>
    <script src="script.js"></script>

<!-- <button id="send-email-btn">Donate</button> -->
</form>

</div>

</div>


</body>
</html>