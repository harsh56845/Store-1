<?php require 'includes/common.php'; 
if (isset($_SESSION['email'])) {
 header('location: products.php');
}
?>

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
    

    
<!-- Sign Upform start-->
<div class="container panel-margin">
    <div class="row">
    <div class="col-md-4 col-md-offset-4" >
 <h1>SIGN UP</h1>
<form action="signup_script.php" method="POST">
<div class="form-group">
<input type="text" class="form-control" placeholder="Name" name="name" required>   </div> 
<div class="form-group">
<input type="email" class="form-control" placeholder="Email" name="email"  required>    
</div> 
<div class="form-group">
<input type="password" class="form-control" placeholder="Password" name="password"  required>    
</div> 
<div class="form-group">
<input type="number"  class="form-control" placeholder="Contact" name="contact"  required>    
</div> 
<div class="form-group">
<input type="text" class="form-control" placeholder="City" name="city" required>    
</div> 
<div class="form-group">
<input type="text" class="form-control" placeholder="Address" name="address" required>    
</div> 
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>   
 </div> </div>  
<!-- Sign Upform end--> 
    
<!-- footer start-->
<?php include 'includes/footer.php'; ?>
<!-- footer end-->

</body>
</html>