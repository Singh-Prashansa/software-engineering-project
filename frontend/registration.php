<?php
require 'config.php';
if(!empty($_SESSION["ID"])){
    header("Location:index.php");
}
if(isset($_POST["submit"])){
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$password=$_POST["password"];
$confirmpassword=$_POST["confirmpassword"];
$dob=$_POST["dob"];
$gender=$_POST["gender"];


// to check if the email is already registered
$duplicate=mysqli_query($con,"SELECT * FROM user_register WHERE email='$email' ");
if(mysqli_num_rows($duplicate)>0){
    echo
    "<script> alert('Username or Email Has Already Taken');
    </script>";
}
else{
    if($password==$confirmpassword){
        $query="Insert into user_register values('','$firstname','$lastname','$phone','$email','$password','$dob','$gender')";
        mysqli_query($con,$query);
        echo
        "<script>alert ('Registration Successful');</script>";
    }
    else{
        echo
        "<script> alert('Password does not match');</script>";
    }
}
}
?>


<!-- <!DOCTYPE html>
<html>
    <head> 
        <title>Registration</title>
</head>
<body>
    <h2>Registration</h2>
    <form class="" action="" method="post" autocomplete="off">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required value=""><br><br>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" required value=""><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required value=""><br><br>
        <label for="confirmpassword">Confirm password:</label>
        <input type="password" name="confirmpassword" id="confirmpassword" required value=""><br><br>
        <button type="submit" name="submit">Register</button>
</form>
<br>
<a href ="login.php">Login</a>
</body>
</html> -->


