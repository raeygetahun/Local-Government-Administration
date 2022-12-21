<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css.css">
        <link
            rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
            integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
    <title>Birth Certeficate Result</title>
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
        
        

        $query = "INSERT INTO recordhaspayment (paymentid, recordid) VALUES ( '$_POST[paymentid]',
        '$_POST[recordid]')";

        if(!mysqli_query($db, $query)){
            die ('Error: '. mysqli_error($db));
        }
        echo "1 Record added successfully ";

        ?>   

        
   
        

     <div>
             <a href="../maintenance.html">Maintenance</a>    
    </div>
</body>
</html>