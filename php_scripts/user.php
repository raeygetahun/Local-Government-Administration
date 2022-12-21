<html>
    <head>
        <title>Raccoon City</title>
    </head>

    <body>
         
        <?php

            $username = $_REQUEST['username'];
            $password = $_REQUEST['password'];
            $servername = "localhost";
            $dbname = "group31";
        
            $db=mysqli_connect($servername, $username, $password, $dbname);

            if(mysqli_connect_errno()){
                echo "failed to connect: Incorrect database username or password <br> <a href='../maintenance.html'>Maintenance</a>" . mysqli_connect_errno();
            }

            $count_query="SELECT * FROM user";
            $count_result=mysqli_query($db,$count_query);
            $count = mysqli_num_rows($count_result)+1;
            $query="INSERT INTO user(userid,firstname,lastname,phonenumber) 
            VALUES ('$count','$_POST[firstname]','$_POST[lastname]','$_POST[phonenumber]')";

            if(!mysqli_query($db, $query)){
                die ('Error: '. mysqli_error($db));
            }
            echo "1 Record added successfully ";

            // if ($db->query($query) === TRUE) {
            //     echo "hellohs";
            //     echo "User added successfully" . "<br>";
            //     echo "<a class='btn btn-primary' href='../pages/user_input.php'>Back</a>";
            // } else {
                
            //     echo "Error: " . "<br>" . $db->error;
            // }
            // echo "successfully added";
        ?>

        <div>
         <a href="../maintenance.html">Maintenance</a>    
        </div>
    </body>
</html>