<?php
require'config.php ';
if(!empty($_SESSION["ID"])){
    $id=$_SESSION["ID"];
    $result=mysqli_query($con,"SELECT * FROM user_register WHERE ID=$id");
    $row=mysqli_fetch_assoc($result);
}else{
    header("Location: login1.html");
}

?>

<!DOCTYPE html>
<html><head>
    <title>Index </title>
</head>
<body>
    <h1>Welcome <?php echo $row["firstname"];?></h1>
    <a href="logout.php">Logout</a>
</body>
    </html>
