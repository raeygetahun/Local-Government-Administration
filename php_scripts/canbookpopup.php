<html>
<body>
<div>hello from div </div>
<?php
 
            $db=mysqli_connect("localhost","group31","migrateanswer","group31");
            if(mysqli_connect_errno()){
                echo "failed to connect: " . mysqli_connect_errno();
            }
            //insert query
            $count_query="SELECT residentid FROM resident";
            $result=mysqli_query($db,$count_query);
            while($row=mysqli_fetch_array($result)){
                echo $row['residentid'] . '<br>';
            }

            $count_query="SELECT appointmentid FROM appointment";
            $result=mysqli_query($db,$count_query);
            while($row=mysqli_fetch_array($result)){
                echo $row['appointmentid'];
            }          
           
?>
</body>
</html>