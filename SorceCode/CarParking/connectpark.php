<?php
    
    $empty = "ว่าง";
    $full = "ไม่ว่าง";


    $servername = "localhost";
    $username = "root";
    $password = "12345678";
    $dbname = "projectcarparking";
     
    //เชื่อมต่อ
    $conn = new mysqli($servername, $username, $password, $dbname);

    //เช็คข้อมูลการเชื่อมต่อ
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
?>