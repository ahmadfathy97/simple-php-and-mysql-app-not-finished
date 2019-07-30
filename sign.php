<?php
include "./config.php";
if(!$_SESSION["user"]){
    if(isset($_POST["post"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $birth = $_POST["birth"];
        $about = $_POST["about"];

        $sql = "INSERT INTO users (name, email, password, about, birth) VALUES ('$name', '$email', '$password' , ' $about', '$birth')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else{
        echo "hi";
    }
} else{
    header('location: /app/index.php')
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TEST-sign up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<section class="container">
   <h1>SIGN UP</h1>
    <form action="" method="POST">
        <div class="form-group">
           <input class="form-control" name="name" placeholder="name" required>
        </div>
        <div class="form-group">
            <input class="form-control" name="email" type="email" placeholder="email" required>
        </div>
        <div class="form-group">    
            <input class="form-control" name="password" type="password" placeholder="password" required>
        </div>
        <div class="form-group">    
            <textarea class="form-control" name="about" required>
            </textarea>
        </div>
        <div class="form-group">    
            <input class="form-control" name="birth" type="date" required>
        </div>
        <div class="form-group">    
            <input class="form-control btn btn-primary" name= "post" type="submit" value="sign up" >
        </div>
    </form>
</section>
</body>
</html>