<?php
    $RunWay1 = $_GET['RunWay1'];
    //$RunWay2 = $_GET['RunWay2'];

    $servername = "localhost";
    $username = "root";
    $password = "12345678";
    $dbname = "projectcarparking";

    //เชื่อมต่อ
    $conn = new mysqli($servername,$username,$password,$dbname);

    //เช็คข้อมูลการเชื่อมต่อ
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    //ตรวจสอบข้อมูลช่องจอดรถที่ 1
    $val = $_GET['RunWay1'];
    $sql = "UPDATE park1 SET RunWay1='$val' WHERE  id=1";

    if ($conn->query($sql) === TRUE) {
            echo "Save ok Park1";
        } else {
            echo "Error:" . $sql . "<br>" . $conn->error;
        }

    $conn->close();
    
?>