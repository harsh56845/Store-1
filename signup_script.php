<?php require 'includes/common.php';

$name = mysqli_real_escape_string($conn,$_POST["name"]);
$email = mysqli_real_escape_string($conn,$_POST["email"]);
$password  = md5(mysqli_real_escape_string($conn,$_POST["password"]));
$contact = mysqli_real_escape_string($conn,$_POST["contact"]);
$city = mysqli_real_escape_string($conn,$_POST["city"]);
$address = mysqli_real_escape_string($conn,$_POST["address"]);


$q2 = "SELECT id from users WHERE email='$email' && password='$password'";
$q2_run = mysqli_query($conn,$q2) or die(mysqli_error($conn));

$row = mysqli_num_rows($q2_run);

if($row==0)
{
    $q3 = "INSERT into users(name,email,password,contact,city,address) VALUES('$name','$email','$password','$contact','$city','$address')";
	$q3_run = mysqli_query($conn,$q3) or die(mysqli_error($conn));
	$_SESSION["email"] = $email;
	$_SESSION["id"] = mysqli_insert_id($conn);
	header("location: products.php");
	
}
else
{
   echo "Email alredy exists";  
}

?>