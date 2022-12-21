<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Input</title>
</head>
<body>
    <body>
            <h4 class="message">Please Enter the Data for resident below</h4>
            <form action="../php_scripts/resident.php" method='post'>
                <?php include("connect.html") ?>                
                <label for="username">Username: </label>
                <input type="text" class="input" name="user_name"><br>
                
                <label for="password">Password: </label>
                <input type="password" class="input" name="pass_word"><br>
                
                
                <label for="address">Address: </label>
                <input type="text" name="address" id="" class="input"><br>
                
                <label for="sex">Gender: </label>
                <select name="sex" id="">
                    <option value="M">M</option>
                    <option value="F">F</option>
                </select><br>
                
                <label for="nationality">Nationality: </label>
                <input type="text" name="nationality" id="" class="input"><br>

                
                
                
                <input type="submit" class="button">


            </form>
        </div>

</body>
</html>