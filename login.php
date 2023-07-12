<!DOCTYPE html>
<html>
<head>
<title>Login</title>
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
<img src="https://cdn-icons-png.flaticon.com/512/5087/5087579.png" alt="image" >
</div>

</div>
<form action="server.php" method="post">
<?php if (isset($_GET['error'])) { ?>

<p class="error"><?php echo $_GET['error']; ?></p>

<?php } ?>
<h3>Login</h3>
<div class="form-wrapper">
<input type="text" name="email" placeholder="Username" class="form-control">
</div>
<div class="form-wrapper">
<input type="password" name="password" placeholder="Password" class="form-control">
</div>
<button name="login_user">Login
 
</button>
<h1> &nbsp <br>  </h1>
<center>

<a href="home.php" class="button">BACK TO HOME</a></center>
</form>
</div>
</div>
</body>
</html>
