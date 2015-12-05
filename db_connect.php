<?php
$host = "localhost";
$db_name = "database";
$username = "root";
$password = "root";
 
try {
    $db = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
  
    }

 
//to handle connection error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>