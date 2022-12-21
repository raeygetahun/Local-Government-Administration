<html>
<body>

<?php
 
            $db=mysqli_connect("localhost","group31","migrateanswer","group31");
            if(mysqli_connect_errno()){
                echo "failed to connect: " . mysqli_connect_errno();
            }
           

            $count_query="SELECT * FROM record";
            $result=mysqli_query($db,$count_query);
            while($row=mysqli_fetch_array($result)){
                echo $row['tracking_no'] .'<br>';
            }          
           
?>
</body>
</html>