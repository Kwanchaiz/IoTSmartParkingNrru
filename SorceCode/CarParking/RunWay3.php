<?php
    $RunWay3 = $_GET['RunWay3'];
    //$RunWay4 = $_GET['RunWay4'];

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

    //ตรวจสอบข้อมูลช่องจอดรถที่ 3
    $val = $_GET['RunWay3'];
    $sql = "UPDATE park3 SET RunWay3='$val' WHERE  id=1";

    if ($conn->query($sql) === TRUE) {
            echo "Save ok Park3";
        } else {
            echo "Error:" . $sql . "<br>" . $conn->error;
        }

    //ตรวจสอบข้อมูลช่องจอดรถที่ 4
    //$val = $_GET['RunWay4'];
    //$sql = "INSERT INTO park4(RunWay4) VALUES ($val);";

    //if ($conn->query($sql) === TRUE) {
    //        echo "Save ok Park4";
    //    } else {
    //        echo "Error:" . $sql . "<br>" . $conn->error;
    //    }
 
$conn->close();

?>