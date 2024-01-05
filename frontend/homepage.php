<!-- homepage, first page after logging in -->
<?php
    require 'connection.php ';
    if(!empty($_SESSION["id"])){
        $id=$_SESSION["id"];
        $result=mysqli_query($con,"SELECT * FROM register WHERE id=$id");
        $row=mysqli_fetch_assoc($result);
    }else{
        header("Location: login1.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Homepage </title>
    </head>
    <body>
        <h1>Welcome <?php echo $row["username"];?></h1>
        <a href="logout.php">Logout</a>
    </body>
</html>
