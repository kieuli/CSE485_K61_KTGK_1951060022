<?php 
    //Create Constants to Store Non Repeating Values
    define('SITEURL', 'http://localhost:3000');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'qlmau');
    
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD,DB_NAME,'3306') or die(mysqli_error()); //Database Connection
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); //SElecting Database


?>