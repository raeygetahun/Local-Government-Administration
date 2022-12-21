<html>
    <head>
        <title>Goytom City</title>
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
            
            //insert query
            $count_query="SELECT * FROM admin";
            $count_result=mysqli_query($db,$count_query);
            $count = mysqli_num_rows($count_result)+1;
            $query="INSERT INTO admin(adminid,username,password) 
            VALUES ('$count','$_POST[user_name]','$_POST[pass_word]')";

            if(!mysqli_query($db,$query)){
                die('Error '. mysqli_error($db));
            }
            echo "Successfully added";

        ?>

        <div>
         <a href="../maintenance.html">Maintenance</a>    
        </div>

    </body>
</html>
