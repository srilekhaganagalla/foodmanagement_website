<!DOCTYPE html>
<html>
<head>
<title>Registration page</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
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
</div>
<form action="sample.php" method="post">
<?php if(isset($_GET['error'])) { ?>
              <p class="error"><?php echo $_GET['error']; ?></p>
          <?php } ?>
<h3>Restaurant Registration Form</h3>
<div class="form-group">
<input type="text" placeholder="Restaurant Name" name="resname" class="form-control">
<input type="text" placeholder="Owner Name" name="name" class="form-control">
</div>
<div class="form-wrapper">
<input type="text" placeholder="Address" name="address" class="form-control">
 
</div>
<div class="form-wrapper">
<input type="text" placeholder="Email" name="email" class="form-control">
 
</div>
<div class="form-wrapper">
<input type="text" placeholder="Contact number" name="mobileno" class="form-control">
 
</div>

<div class="form-wrapper">
<input type="password" placeholder="Password" class="form-control">
 
</div>
<div class="form-wrapper">
<input type="password" placeholder="Confirm Password" name="password" class="form-control">
 
</div>
<button>Register
 
</button>
</form>
</div>
</div>
</body>
</html>