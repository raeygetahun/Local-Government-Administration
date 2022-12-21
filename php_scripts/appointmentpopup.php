<html>
<body>

<?php
 
            $db=mysqli_connect("localhost","group31","migrateanswer","group31");
            if(mysqli_connect_errno()){
                echo "failed to connect: Incorrect database username or password <br> <a href='../maintenance.html'>Maintenance</a>" . mysqli_connect_errno();
            }
           

            $count_query="SELECT * FROM appointment";
            $result=mysqli_query($db,$count_query);
            while($row=mysqli_fetch_array($result)){
                echo $row['appointment_date'] .'<br>';
            }          
           
?>
            <div>
         <a href="../maintenance.html">Maintenance</a>    
        </div>
</body>
</html>