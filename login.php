<?php require 'includes/common.php'; ?>
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
<link href="Css/style.css" type="text/css" rel="stylesheet">
</head>
    
<body>
<!-- header starts-->
    <?php include 'includes/header.php'; ?>
<!-- header ends-->
    
    
<!-- Body containing login form start-->
<div class="container panel-margin">
    <div class="row">
    <div class="col-md-4 col-md-offset-4" >
 <div class="panel panel-primary">
<div class="panel-heading">
<h4 class="panel-title">LOGIN</h4>     
</div> 
     <div class="panel-body">
     <p class="text-warning">Login to make a purchase</p>
         <form method="POST" action="login_submit.php">
        <div class="form-group">
             <input class="form-control" type="email" placeholder="Email" name="email" required>
         </div>
             <div class="form-group">
             <input class="form-control" type="password" placeholder="Password" name="password" required>
         </div>
             <button class="btn btn-primary">Login</button>
         </form>
     </div>
<div class="panel-footer">
     <p>Don't have an account ? <a href="signup.html">Register</a></p>
</div>    
</div>   
 </div> </div>  
</div> 
<!-- Body containing login form end-->    

<!-- footer start-->
<?php include 'includes/footer.php'; ?>
<!-- footer end-->

    
    
</body>
</html>