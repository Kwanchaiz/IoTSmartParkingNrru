<html>

<head>
    <meta http-equiv="refresh" content="1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Smart Car Parking Sistem</title>

</head>
<style>
body {
    background: lightblue;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
}
</style>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light static-top mb-5 shadow">
        <div class="container">
            <a class="navbar-brand" href="#">Smart Car Parking</a>
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
                <center>
                    <h1>Smart Car Parking</h1>
                    <p>Website Update Carparking realtime</P>
                    <br><br>
                </center>

                <?php
                        include "connectcarin.php";
                        print"<center><h3>ลานจอดรถในตอนนี้ : ";           
                        $sql = "SELECT * FROM carparking ORDER by id DESC LIMIT 1";
                        $result = $conn->query($sql);      
                        while($row = $result->fetch_assoc())
                        print "".$row['Parking']."";   
                        print" คัน </h3></center>";    
                        $conn->close(); 
                    ?>
                <br><br>
                <div class="row">
                    <div class="col-6">
                        <?php
                                    include "connectcarin.php";
                                    print"<h3>ลานจอดที่ 1 : ";             
                                    $sql = "SELECT * FROM park1 ORDER by id DESC LIMIT 1";
                                    $result = $conn->query($sql);      
                                    while($row = $result->fetch_assoc())
                                    if ($row['RunWay1'] == 1){
                                        //print $empty;
                                        print'<img src ="./image/CarGreen.png"  width="150" height="150" >';
                                    }else{
                                        //print $full;
                                        print'<img src ="./image/CarRed.png"  width="150" height="150" >';
                                    }
                                    //print "".$row['RunWay1']."";    
                                    print "</h3>";   
                                    $conn->close(); 
                                    
                                    ?>
                    </div>
                    <div class="col-6">
                        <?php
                                        
                                        include "connectcarin.php";
                                        print"<h3>ลานจอดที่ 2 : ";             
                                        $sql = "SELECT * FROM park2 ORDER by id DESC LIMIT 1";
                                        $result = $conn->query($sql);      
                                        while($row = $result->fetch_assoc())
                                        if ($row['RunWay2'] == 1){
                                            //print $empty;
                                            print'<img src ="./image/CarGreen.png"  width="150" height="150" >';
                                        }else{
                                            //print $full;
                                            print'<img src ="./image/CarRed.png"  width="150" height="150" >';
                                        }
                                        //print "".$row['RunWay2']."";     
                                        print "</h3>";  
                                        $conn->close(); 
                                    
                                        ?>
                    </div>
                    <div class="col-6">
                        <br><br>
                        <?php

                                        include "connectcarin.php";
                                        print"<h3>ลานจอดที่ 3 : ";             
                                        $sql = "SELECT * FROM park3 ORDER by id DESC LIMIT 1";
                                        $result = $conn->query($sql);      
                                        while($row = $result->fetch_assoc())
                                        if ($row['RunWay3'] == 1){
                                            //print $empty;
                                            print'<img src ="./image/CarGreen.png"  width="150" height="150" >';
                                        }else{
                                            //print $full;
                                            print'<img src ="./image/CarRed.png"  width="150" height="150" >';
                                        }
                                        //print "".$row['RunWay3']."";     
                                        print "</h3>";  
                                        $conn->close(); 
                                    

                                        ?>
                    </div>
                    <div class="col-6">
                        <br><br>
                        <?php

                                        include "connectcarin.php";
                                        print"<h3>ลานจอดที่ 4 : ";             
                                        $sql = "SELECT * FROM park4 ORDER by id DESC LIMIT 1";
                                        $result = $conn->query($sql);      
                                        while($row = $result->fetch_assoc())
                                        if ($row['RunWay4'] == 1){
                                            //print $empty;
                                            print'<img src ="./image/CarGreen.png"  width="150" height="150" >';
                                        }else{
                                            //print $full;
                                            print'<img src ="./image/CarRed.png"  width="150" height="150" >';
                                        }
                                        //print "".$row['RunWay4']."";     
                                        print "</h3>"; 
                                        $conn->close(); 
                                    ?>
                    </div>
                </div>
                <div style="height: 250px"></div>
                <p class="lead mb-0">Version 1</p>
            </div>
        </div>
    </div>


</body>

</html>