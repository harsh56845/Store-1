<?php require 'includes/common.php';

$email = mysqli_real_escape_string($conn,$_POST["email"]);
$password  = md5(mysqli_real_escape_string($conn,$_POST["password"]));

$q1 = "SELECT email,password FROM users WHERE email='$email' && password='$password'";
$q1_run = mysqli_query($conn,$q1) or die(mysqli_error($conn));

$row = mysqli_num_rows($q1_run);

if($row==0)
{
    echo " no user with the email and password in the users
table";
}
else
{
     $row1 = mysqli_fetch_array($row);
        $_SESSION["email"] = $email;
        $_SESSION["id"] = $row["id"];
    
    header("location: products.php");
}

?>