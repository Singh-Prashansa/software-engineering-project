<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <div class="loginbox">
            <div class="login">
                <form action="homepage.php">
                    <h2>Log In</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="Email" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" style="width: 88.7%; padding: 0 10px 0 5px;" required id="password">
                        <label>Password</label>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">Remember Me<br></label>
                    </div>
                    <button>Log In</button>
                    <div class="register_form">
                        <p>Haven't subscribed yet? <br><a href="register_form.html">Register and Subscribe</a></p>
                    </div>
                </form>
            </div>
        </div>
        
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>

<?php
    include('connection.php');
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if(!empty($_SESSION["id"])){
        header("Location: index.php");
    }
    if(isset($_POST["submit"])){
        $usernameemail=test_input($_POST["usernameemail"]);    
        $password=test_input($_POST["password"]);
    
        $result= mysqli_query($con,"SELECT * FROM register WHERE username='$usernameemail' OR email='$usernameemail'");
        $row=mysqli_fetch_assoc($result);

        if(mysqli_num_rows($result)>0){
            if($password==$row["password"]){
                $_SESSION["login"]=true;
                $_SESSION["id"]=$row["id"];
            header("Location:index.php");
            } 
            else{
            echo    "<script>alert('Wrong password');</script>";
            }  
        }
        else{
        echo        "<script> alert('User not registered');</script>";
    }
}
?>