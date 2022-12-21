<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Raccoon City</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css.css">
        <link
            rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
            integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
    </head>

    <body>
        <header id="nav">
            <div>
              <a href="index.html">
              <img width="150" height="100" src="../logo.jpg">
                </a>
            </div>
            <div class="home">
                <a href="index.html">Home</a>
            </div>
            <div class="home">
                <a href="maintenance.html">maintenance</a>
            </div>

            <div class="about">
                About        
            </div>
            <div>
              Services
            </div>
            <div>
              Login
            </div>
        </header>
         
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
            $count_query="SELECT * FROM marriage";
            $count_result=mysqli_query($db,$count_query);
            $count = mysqli_num_rows($count_result)+1;
            $query="INSERT INTO marriage(mid,spousename,dateofmarriage) 
            VALUES ('$count','$_POST[spousename]','$_POST[dateofmarriage]')";

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
            echo "success";

        ?>

        <div>
         <a href="../maintenance.html">Maintenance</a>    
        </div>


        <footer id="footer">
            <div class="inner-div" id="address">              
                Contact US
                <p>Phone Number: +4920203</p>
                <p>Location: 123 Hello</p>
                <p>FAX:  12002</p>


            </div>

            <div class="inner-div" id="copy-right"><span>&copy;</span>Copyright 2022</div>
            <div class="inner-div"> <a href="disclaimer.html">Disclaimer</a></div>
            <div class="inner-div" id="social-media">
                <a href="#"><i class="fab icons fa-2x fa-facebook"></i></a>
                <a href="#"><i class="fab icons fa-2x fa-instagram"></i></a>
                <a href="#"><i class="fab icons fa-2x fa-twitch"></i></a>
                <a href="#"><i class="fab icons fa-2x fa-twitter"></i></a>
            </div>
            
        </footer>
    </body>
</html>