<?php
include "./config.php";
if($_GET["id"]){
    $id = $_GET["id"];
    $query = "SELECT * from users WHERE id = $id";
    $result2 = mysqli_query($conn, $query);
    $user = mysqli_fetch_array($result2);
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TEST</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    </style>
</head>
<body>
    <?php 
if($_GET["id"]){
    echo "
    <div class='container'>
        <h1>${user['name']}</h1>
        <h2>ABOUT</h2>
        <p>${user['about']}</p>
        <h2>BORN IN</h2>
        <p>${user['birth']}</p>
        <h2>EMAIL</h2>
        <p>${user['email']}</p>
    </div>";
} else{ 
    echo "-_-";
}
?>
</body>
</html>
