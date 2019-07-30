<?php
include "./config.php";
if($_GET["id"]){
    $id = $_GET["id"];
    $query = "SELECT * from posts WHERE id = $id";
    $result2 = mysqli_query($conn, $query);
    $post = mysqli_fetch_array($result2);
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
        .post{
            padding: 20px;
            margin: 20px auto;
            box-shadow: 0px 0px 15px #0080aa;
        }
    </style>
</head>
<body>
    <?php 
if($_GET["id"]){
    echo "
    <div class='container'>
        <h1>${post['title']}</h1>
        <span>${post['post_date']}</span>
        <p>${post['body']}</p>
    </div>";
} else{ 
    echo "-_-";
}
?>
</body>
</html>
