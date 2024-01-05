?php
require 'config.php';
echo "hi";
if(!empty($_SESSION["ID"])){
    header("Location: index.php");
}
if(isset($_POST["submit"])){
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    $email=test_input($_POST["email"]);
    $password=test_input($_POST["password"]);
    
    $result= mysqli_query($con,"SELECT * FROM user_register WHERE email='$email'");
    $row=mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result)>0){
        if($password==$row["password"]){
            $_SESSION["login"]=true;
            $_SESSION["ID"]=$row["ID"];
            header("Location:index.php");
        }else{
            echo"<script>alert('Wrong password');</script>";
        }  
    } else{
        echo"<script> alert('User not registered');</script>";
    }
}
?>


<!-- <!DOCTYPE html>
<html><head>
    <title>Login</title></head>
    <body>
        <h2>Login</h2>
        <form class="" action method="post" autocomplete="off">
            <label for="usernameemail"> Username or Email:</label>
            <input type="text" name="usernameemail" id="usernameemail" required value=""><br><br>
            <label for="Password"> Password:</label>
            <input type="password" name="password" id="password" required value=""><br><br>
            <button type="submit" name="submit">Login</button>
</form>

<br>
<a href ="registration.php">Registration </a>
</body>
</html> -->


