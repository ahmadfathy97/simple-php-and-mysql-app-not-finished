<?php
include "./config.php";
session_start();
/*$q = "select * from posts";
$qq = "SELECT p.*, u.* FROM posts p inner join users u on p.user_id = u.id";
$qqq = "SELECT * FROM posts p, users u WHERE u.id = p.user_id";*/
$qqqq = "SELECT p.*, u.* FROM posts AS p INNER JOIN users AS u ON (u.id=p.user_id)";
$result = mysqli_query($conn, $qqqq);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
if($_GET["user"]){
    $id = $_GET["user"];
    $query = "SELECT * from users WHERE id = $id";
    $result2 = mysqli_query($conn, $query);
    $user = mysqli_fetch_array($result2);
    
}
/*var_dump($_SERVER);
var_dump($_HOST);*/
/*$q = "select * from posts";
$result = $pdo->query($q);
$result->setFetchMode(PDO::FETCH_ASSOC);
$pdo = null;*/
/*$sql = "INSERT INTO posts (user_id, title, body, post_date) VALUES (1, 'test3', 'test test test test test test', now())";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}*/
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
            box-shadow: 0px 0px 15px #080
        }
    </style>
</head>
<body>
    <?php if($_SESSION["user"]){ ?>
    <?php if($_GET["user"]){
        echo $user["name"];
    } else{ ?>
    <div class="container">
      <ul class="nav nav-fixed">
          <li><a href="/app/?user=<?php echo $_SESSION["user"]["id"] ?>">Profile</a></li>
      </ul>
      <h1>POSTS</h1>
       <?php foreach($data as $posts): ?>
       <div class="btn-success post">
           <h2><?php echo $posts["title"] ?></h2>
           <span><?php echo $posts["post_date"] ?></span>
           <p><?php echo $posts["body"] ?></p>
           <p>by: <?php echo $posts["name"] ?></p>

       </div>
       
       <?php endforeach; ?>
    </div>
    <?php }} else{ ?>
        <a href="/app/login.php">
            login to see posts
        </a>
    <?php }?>
</body>
</html>