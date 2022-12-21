<html>
    <head>
        <title>Goytom City</title>
    </head>

    <body>

        <?php
            
            $db=mysqli_connect("localhost","group31","migrateanswer","group31");
            if(mysqli_connect_errno()){
                echo "failed to connect: " . mysqli_connect_errno();
            }
            //insert query
            $value = $_POST['username'];   
            session_start();
            $_SESSION['userna'] = $value;
            $que= "SELECT * FROM request JOIN resident ON 
            resident.residentid=request.residentid WHERE username='$value'";

            
            $result=mysqli_query($db,$que);
            $count = mysqli_num_rows($result);
            if($count>0){
                while($row=mysqli_fetch_array($result)){ 
                    echo '<a href="documentlist.php" target="_blank">' . $row["docid"]. '</a> <br>';
                }
            }
            else{
                echo "No file has been found";
            }
        ?>


    </body>
</html>

