<?php
    /*$_SESSION['user'] = 'ahmad';
    echo ($_SESSION ? $_SESSION['user'] : 'there is no session');*/
    session_start();
    //mysqli
    $servername = "localhost";
    $username = "root";
    $password = "123456789";
    $db = "ahmad";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //echo "Connected successfully";

    //pdo
    /*$servername = "localhost";
    $username = "root";
    $password = "123456789";

    try {
        $pdo = new PDO("mysql:host=$servername;dbname=ahmad", $username, $password);
        // set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully"; 
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }*/
    

?>