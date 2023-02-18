<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../CSS/login.css">
    
</head>
<body>

<nav>
        <ul type="none" id="nav">
            <div class="logo">
                <li><a href="home.php"><img id="logo" src="../Assets/logo.png" alt=""></a></li>
                <li><a href="home.php">GiveHelp</a></li>
            </div>
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="weather.php">Extras</a></li>
            <li> <a href="login.php">Login</a> </li>
            <li> <a href="register.php">Register</a> </li>
        </ul>

        <ul type="none">
            
        </ul>
    </nav>

    <main>
        
        <div class="formStyle">
            <p id="loginForm">Login</p>

            <?php
                include 'registerC.php';
                $logini = new DatabaseRegister();
                $check = $logini->check();   
            ?>   
         
            <form action="" name="myForm" method="post" onsubmit="return validateFormLogin()">
                
            <label for="email" class="arrangeLabel" id="pak1">Email: </label>
            <input type="email" placeholder="Enter email" id="emaili" name="email"><br>
            <span class="error" id="erroremail"></span><br>
            
            <label for="password" class="arrangeLabel" id="pak2">Password: </label>
            <input type="password" placeholder="Enter password" id="passi" name="password"><br>
            <span class="error" id="errorpassword"></span>

            <p id="dont">Not a memeber?<a href="register.php"> Register here </a></p>
            <input type="submit" name="submit" value="Login" id="btn"><br>
            </form>
        </div>
    </main>

    <script src="../JS/login.js"></script>
</body>
</html>