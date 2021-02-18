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
<link href="css/style.css" type="text/css" rel="stylesheet">

</head>
    
<body>
<!-- header starts-->
<?php include 'includes/header.php'; ?>
<!-- header ends-->
	
<!-- Body containing banner image and all start -->
<div id="banner_image">
 <div class="container">
<div id="banner_content">
    <h1>We sell lifestyle</h1>
    <p>Flat 40% OFF</p>
    <a href="products.php">
        <button class="btn btn-danger btn-lg active">Shop Now</button>
    </a>
</div>    
</div>   
    
</div> 
 <!-- Body containing banner image and all end-->	
	
<!-- footer start-->
<?php include 'includes/footer.php'; ?>
<!-- footer end-->

</body>
</html>


