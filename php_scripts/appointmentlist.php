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
           

            $que= "SELECT * FROM appointment WHERE appointment_date>'$value'";
            // $que = "SELECT * FROM request where username = '$value'";
            // $result = $conn -> query($que);
            
            $result=mysqli_query($db,$que);
            while($row=mysqli_fetch_array($result)){
                echo ' Appointmentid: '. $row["appointmentid"]. ' Appointment_date: '. $row["appointment_date"]
                .' Appointment_time: '. $row["appointment_time"]. ' Status: '. $row["status"].'<br>';
            }
            

        ?>


    </body>
</html>