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
    <title>Admin Input</title>
</head>
<body>
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

            <div class="about">
                About        
            </div>
            <div>
              Services
            </div>
            <div>
              <a href="./login1.html">Login</a>
            </div>
        </header>
        <div class="input-div">
            <button>
        </button>
            <h4 class="message">Please Enter the Data for Admin below</h4>
            <form action="../php_scripts/canbook.php" method="post">
            <?php include("connect.html") ?>
              
                <label for="appointmentid">Appointmen ID: </label>
                <input type="number" class="input" name="appointmentid" id="appointmentid">  
                <button>
                    <a href="../php_scripts/appointmentpopup.php" target="popup" 
                        onclick="window.open('../php_scripts/appointmentpopup.php','popup','width=600,height=600'); return false;">
                        List of appoinment IDs</a>
                 </button><br>
                
                
                <label for="residnetid">Resident ID: </label>
                <input type="number" class="input" name="residentid" id="residentid">  
                <button>
                    <a href="../php_scripts/residentpopup.php" target="popup" 
                        onclick="window.open('../php_scripts/residentpopup.php','popup','width=600,height=600'); return false;">
                        List of resident IDs</a>
                 </button>
                <br>
                
                
                <input type="submit" class="button">


            </form>
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