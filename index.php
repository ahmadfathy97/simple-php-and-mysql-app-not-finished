<?php
include "./config.php";
$qqqq = "SELECT p.*, u.* FROM posts AS p INNER JOIN users AS u ON (u.id=p.user_id)";
$result = mysqli_query($conn, $qqqq);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
   <div class="container">
   <ul class="nav nav-fixed">
          <li><a href="/app/user.php/?id=<?php echo $_SESSION["user"]["id"] ?>">Profile</a></li>
      </ul>
   <h1>POSTS</h1>
    <?php if($_SESSION["user"]){ ?>
       <?php foreach($data as $posts): ?>
       <div class="btn-primary post">
           <h2><?php echo $posts["title"] ?></h2>
           <span><?php echo $posts["post_date"] ?></span>
           <p><?php echo $posts["body"] ?></p>
           <p>by: <?php echo $posts["name"] ?></p>

       </div>
       <?php endforeach; ?>
    <?php } else{ ?>
        <a href="/app/login.php">
            login to see posts
        </a>
    <?php }?>
    </div>
</body>
</html>