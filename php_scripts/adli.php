<html>
    <head>
        <title>Goytom City</title>
    </head>

    <body>

        <?php
            session_start(); 
            $value = $_SESSION['userna'];
            $db=mysqli_connect("localhost","group31","migrateanswer","group31");

            if(mysqli_connect_errno()){
                echo "failed to connect: " . mysqli_connect_errno();
            }
           

            $que= "SELECT * FROM add_remove JOIN admin ON 
            admin.adminid=add_remove.adminid 
            JOIN document ON document.docid=add_remove.docid WHERE admin.username='$value'";
            // $que = "SELECT * FROM request where username = '$value'";
            // $result = $conn -> query($que);
            
            $result=mysqli_query($db,$que);
            while($row=mysqli_fetch_array($result)){
                echo 'User Name: '. $row["username"]." ". $row['adminid']. " " $row['docid']."<br>";

            }
              
            
            // while($row = $result->fetch_assoc()){
            //     if($result->num_rows > 0){
            //         echo 'First Name: '. row["firstname"]. 'dateofbirth'. row["dateofbirth"].' Address: '. row["address"]. ' sex'. row["sex"].' Nationality'. row["nationality"];
            //     }
            // }

        ?>


    </body>
</html>
