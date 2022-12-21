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
            $value = $_POST['Expected_date'];   
            session_start();
            $_SESSION['expect'] = $value;
            $que= "SELECT * FROM record WHERE expected_date>='$value'";
            
    
            $result=mysqli_query($db,$que);
            $count = mysqli_num_rows($result);
            if($count>0){
                while($row=mysqli_fetch_array($result)){ 
                echo '<a href="docexpeclist.php" target="_blank">' . $row["recordid"]. '</a> <br>';
            }
            }
            else{
                echo "No file has been found";
            }
            
        ?>


    </body>
</html>