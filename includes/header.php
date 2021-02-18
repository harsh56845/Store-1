<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- title and linking all bootstap and external css files -->
<Title>Fashion Store</Title>
<!-- link to Bootstrap minified css-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- link to Jquery minified-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- link to Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--external css files-->
<link href="../css/style.css" type="text/css" rel="stylesheet"> 

</head>
    
<body>
<nav class="nav  navbar-inverse navbar-fixed-top">
    <div class="container">
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
<span class="icon-bar"></span>    
<span class="icon-bar"></span>    
<span class="icon-bar"></span>    
    </button>
<a href="index.php" class="navbar-brand">Fashion Store</a>
</div>
<div class="collapse navbar-collapse" id="mynav">
  <ul class="nav navbar-nav navbar-right">
<?php if(isset($_SESSION['email'])){ ?>
   
    <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>    
<li><a href="settings.php" ><span class="glyphicon glyphicon-cog"> </span>Settings</a></li>    
<li><a href="logout.php" ><span class="glyphicon glyphicon-log-out"> </span>Logout</a></li>
   
   <?php }else{ ?>
    
    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>    
<li><a href="login.php"><span class="glyphicon glyphicon-log-in"> </span> Log In</a></li>
<?php  }  ?>
    </ul>
   
</div>
</div>
</nav>

</body>

</html>


