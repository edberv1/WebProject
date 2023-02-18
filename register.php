<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>

<nav>
        <ul type="none" id="nav">
            <div class="logo">
                <li><a href="home.php"><img id="logo" src="logo.png" alt=""></a></li>
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

        <?php
            include 'registerC.php';
            $registeri = new DatabaseRegister();
            $insert = $registeri->insert();

            ?>

            <p id="registerForm">Register</p>
            <form action="" name="myForm" method="post" onsubmit="return validateFormRegister()">
            <label for="name" class="arrangeLabel" id="pak1">Name: </label><br>
            <input type="text" placeholder="Enter name..." name="name" id="emaili"><br>
            <span class="error" id="errorname"></span><br>

            <label for="surname" class="arrangeLabel" id="pak2">Surname: </label><br>
            <input type="text" placeholder="Enter surname..." name="surname" id="emaili"><br>
            <span class="error" id="errorsurname"></span><br>
            
            <label for="email" class="arrangeLabel" id="pak3">Email: </label><br>
            <input type="email" placeholder="Enter email..." name="email" id="emaili"><br>
            <span class="error" id="erroremail"></span><br>

            <label for="password" class="arrangeLabel" id="pak4">Password: </label><br>
            <input type="password" placeholder="Enter password..." name="password" id="emaili"><br> 
            <span class="error" id="errorpassword"></span><br>
            
            <label for="user_type" class="arrangeLabel" id="pak5">Role: </label>
                <select name="user_type" id="selection" class="test">
                <option value="user">User</option>
                <option value="admin">Administrator</option>
                </select><br>

            <input type="submit" value="Register" id="btn"><br>
            </form>
            
        </div>
        
        
    </main>

    <script src="register.js"></script>
</body>
</html>