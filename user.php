<?php
include "./config.php";
if($_GET["id"]){
    $id = $_GET["id"];
    $query = "SELECT * from users WHERE id = $id";
    $result2 = mysqli_query($conn, $query);
    $user = mysqli_fetch_array($result2);
}
$conn->close();
if($_GET["id"]){
    echo "
    <div class='containre'>
        <h1>${user['name']}</h1>
        <h2>ABOUT</h2>
        <p>${user['about']}</p>
    </div>";
} else{ 
    echo "-_-";
}
?>