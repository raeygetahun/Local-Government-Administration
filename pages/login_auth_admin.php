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
            $user_name = $_POST['username'];   
            $pass_word= $_POST['password'];
            
            
            $que= "SELECT * FROM admin WHERE username='$user_name'";
            $result=mysqli_query($db,$que);

            echo $user_name;
            $row=mysqli_fetch_array($result);
            
            if($row['password']==$pass_word){
                header("Location:  ../loggedinadmin.html");
                
            }
            else{
                echo "Invalid Password or username";
            }
            
        ?>


    </body>
</html>

