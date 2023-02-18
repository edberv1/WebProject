<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/home.css">
    <title>Weather</title>
    <style>
        input{
    margin-top: 10px;
    background-color: gainsboro;
    border-radius: 20px;
    width: 250px;
    height: 35px;
    border: none;
    padding-left: 14px;
}
button {
    margin-top: 20px;
    width: 250px;
    border-radius: 20px;
    background-color: green;
    color: white;
    height: 35px;
    font-size: 15px;
    border: none;
    cursor: pointer;
    
}
button:hover{
color: wheat;
}
body{
    background-image: url("https://wallpaperaccess.com/full/6451924.jpg");

}
    </style>
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

    <center>

        <h1>Check the live weather in your city if you want to go out!</h1>

        </br>
        <input id="qyteti_id" type="text" class="form-control col-xl-4" placeholder="City :">
        </br>
        <button class="btn btn-info" onclick="moti()">Check Weather</button>


        <div class="col-xl-6">
            <h2 id="city"></h2>
            <h2 id="weather"></h2>
            <h2 id="description"></h2>
        </div>
    </center>


    <script src="../JS/weather.js"></script> 
</body>
</html>