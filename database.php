<?php
function connectDB() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "studiorekaman";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
       
        die("Connection failed: " . $conn->connect_error);
    }
    else{
        
    }

    return $conn;
}