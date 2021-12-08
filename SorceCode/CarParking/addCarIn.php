<?php
    $Parking = $_GET['Parking'];

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

    //ตรวจสอบข้อมูลรถเข้าออก
    $val = $_GET['Parking'];
    //$sql = "UPDATE carparking(Parking) VALUES ($val);";
    $sql = "UPDATE carparking SET Parking='$val' WHERE  id=1";

    if ($conn->query($sql) === TRUE) {
            echo "Save ok Parking";
        } else {
            echo "Error:" . $sql . "<br>" . $conn->error;
        }

        $conn->close();

?>
<!--
    //ตรวจสอบข้อมูลช่องจอดรถที่ 1
    //$val = $_GET['RunWay1'];
    //$sql = "INSERT INTO park1(RunWay1) VALUES ($val);";

    //if ($conn->query($sql) === TRUE) {
    //        echo "Save ok Park1";
    //    } else {
    //        echo "Error:" . $sql . "<br>" . $conn->error;
    //    }

    //ตรวจสอบข้อมูลช่องจอดรถที่ 2
    //$val = $_GET['RunWay2'];
    //$sql = "INSERT INTO park2(RunWay2) VALUES ($val);";

    //if ($conn->query($sql) === TRUE) {
    //        echo "Save ok Park2";
    //    } else {
    //        echo "Error:" . $sql . "<br>" . $conn->error;
    //    }

    //ตรวจสอบข้อมูลช่องจอดรถที่ 3
    //$val = $_GET['RunWay3'];
    //$sql = "INSERT INTO park3(RunWay3) VALUES ($val);";

    //if ($conn->query($sql) === TRUE) {
    //        echo "Save ok Park3";
    //    } else {
    //       echo "Error:" . $sql . "<br>" . $conn->error;
    //    }

    //ตรวจสอบข้อมูลช่องจอดรถที่ 4
    //$val = $_GET['RunWay4'];
    //$sql = "INSERT INTO park4(RunWay4) VALUES ($val);";

    //if ($conn->query($sql) === TRUE) {
    //        echo "Save ok Park4";
    //    } else {
    //        echo "Error:" . $sql . "<br>" . $conn->error;
    //    }
 !>
 