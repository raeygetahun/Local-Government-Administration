<?php
            
            $db=mysqli_connect("localhost","group31","migrateanswer","group31");
            if(mysqli_connect_errno()){
                echo "failed to connect: " . mysqli_connect_errno();
            }
            else{
                $value = $_POST['query'];   
        
                
                $que= "SELECT username FROM admin WHERE username LIKE '%$value%'";
                
                $result=$db->query($que);
                
                // $count = ($result->num_rows);
                if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){ 
                        echo "<a href='#' class='list-group-item list-group-item-action border-1'>". $row['username']."</a>";
                        
                    }
                }
                else{
                    echo  "No record";
                }

            }
            //insert query

    ?>  