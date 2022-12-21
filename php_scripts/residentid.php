<html>
    <head>
        <title>Raccoon City</title>
    </head>

    <body>
         
        <!-- <div style="padding-top: 10px"> Given Info here</div>

        <form style="padding:10px" action="user.php" method="post">
            <input type="text" name="firstname" placeholder="First name">
            <input type="text" name="lastname" placeholder="Last name">
            <input type="tel" name="phonenumber" placeholder="Phone number">
            <input type="submit">
        </form> -->

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
            $count_query="SELECT * FROM residentid";
            $count_result=mysqli_query($db,$count_query);
            $count = mysqli_num_rows($count_result)+1;
            $query="INSERT INTO residentid(resid,height,eye_color) 
            VALUES ('$count','$_POST[height]','$_POST[eye_color]')";

            $count_query="SELECT * FROM document";
            $count_result=mysqli_query($db,$count_query);
            $count = mysqli_num_rows($count_result)+1;
            $query="INSERT INTO document(docid,noofcopies) 
            VALUES ('$count','$_POST[noofcopies]')";

            $count_query="SELECT * FROM record";
            $count_result=mysqli_query($db,$count_query);
            $count = mysqli_num_rows($count_result)+1;
            $query="INSERT INTO record(recordid,comment) 
            VALUES ('$count','$_POST[comment]')";

            if(!mysqli_query($db,$query)){
                die('Error '. mysqli_error($db));
            }
            echo "<h1>success</h1>";

        ?>
        <div>
         <a href="../maintenance.html">Maintenance</a>    
        </div>
    </body>
</html>