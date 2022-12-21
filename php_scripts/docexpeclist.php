<html>
    <head>
        <title>Goytom City</title>
    </head>

    <body>

        <?php
            session_start(); 
            $value = $_SESSION['expect'];
            $db=mysqli_connect("localhost","group31","migrateanswer","group31");

            if(mysqli_connect_errno()){
                echo "failed to connect: " . mysqli_connect_errno();
            }
           

            $que= "SELECT * FROM record WHERE expected_date>'$value'";
            // $que = "SELECT * FROM request where username = '$value'";
            // $result = $conn -> query($que);
            
            $result=mysqli_query($db,$que);
            while($row=mysqli_fetch_array($result)){
                echo ' Tracking no: '. $row["tracking_no"]. ' Record Id: '. $row["recordid"]
                .' Expected_date: '. $row["expected_date"]. ' Date_issued: '. $row["date_issued"].'<br>';
            }
              
            // while($row = $result->fetch_assoc()){
            //     if($result->num_rows > 0){
            //         echo 'First Name: '. row["firstname"]. 'dateofbirth'. row["dateofbirth"].' Address: '. row["address"]. ' sex'. row["sex"].' Nationality'. row["nationality"];
            //     }
            // }

        ?>


    </body>
</html>