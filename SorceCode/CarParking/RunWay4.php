<?php
    $RunWay4 = $_GET['RunWay4'];

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

    //ตรวจสอบข้อมูลช่องจอดรถที่ 4
    $val = $_GET['RunWay4'];
    $sql = "UPDATE park4 SET RunWay4='$val' WHERE  id=1";

    if ($conn->query($sql) === TRUE) {
            echo "Save ok Park4";
        } else {
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
 
$conn->close();

?>