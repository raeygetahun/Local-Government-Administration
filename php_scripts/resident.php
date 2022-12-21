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
            //insert query
            $count_query="SELECT * FROM resident";
            $count_result=mysqli_query($db,$count_query);
            $count = mysqli_num_rows($count_result)+1;
            $query="INSERT INTO resident(residentid,sex,password,nationality,username,address) 
            VALUES ('$count','$_POST[sex]','$_POST[pass_word]','$_POST[nationality]','$_POST[user_name]',
            '$_POST[address]')";

            if(!mysqli_query($db,$query)){
                die('Error '. mysqli_error($db));
            }
            echo "success";

        ?>

        <div>
         <a href="../maintenance.html">Maintenance</a>    
        </div>
    </body>
</html>
