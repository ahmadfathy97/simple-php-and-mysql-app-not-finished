<?php
include "./config.php";
if(!$_SESSION["user"]){
    if(isset($_POST["post"])){
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "select * from users WHERE email = '$email' and password = '$password'";
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

        if (mysqli_num_rows($result)) {
            echo "تمام يا اسطا";
            foreach($data as $prop => $val){
                $_SESSION["user"] = $data[$prop];
                header('Location: /app/index.php');
            }
        } else {
            echo "احنا هنهزر";
        }
    }
} else{
    header('Location: /app/index.php');
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TEST-LOGIN</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<section class="container">
   <h1>LOG IN</h1>
    <form action="" method="POST">
        <div class="form-group">
            <input class="form-control" name="email" type="email" placeholder="email" required>
        </div>
        <div class="form-group">    
            <input class="form-control" name="password" type="password" placeholder="password" required>
        </div>
        
        <div class="form-group">    
            <input class="form-control btn btn-primary" name= "post" type="submit" value="sign up" >
        </div>
    </form>
</section>
</body>
</html>