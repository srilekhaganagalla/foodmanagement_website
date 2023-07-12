<!DOCTYPE html>
<html>
<head>
<title>How to make registration form using HTML and CSS </title>
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
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShRNQI8M0QhZ7um3j_k-4uxfRKf-5vAUTBEP86CWaMu4vtZ61r" alt="image" >
</div>
</div>
<form action="sample1.php" method="post">
<?php if(isset($_GET['error'])) { ?>
              <p class="error"><?php echo $_GET['error']; ?></p>
          <?php } ?>
<h3>NGO Registration Form</h3>
<div class="form-group">
<input type="text" placeholder="NGO Name" name="Nname" class="form-control">
<input type="text" placeholder="Employee Name" name="name" class="form-control">
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