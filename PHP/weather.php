<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/home.css">
    <title>Weather</title>
    <script>
        function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
    </script>
    <style>
        input{
            -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    font: 15px/1 'Open Sans', sans-serif;
    color: #333;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    width: 100%;
    max-width: 500px;
    background-color: #ddd;
    border: none;
    padding: 10px 11px 11px 11px;
    border-radius: 3px;
    box-shadow: none;
    outline: none;
    margin: 0;
    box-sizing: border-box; 
}
.btn {
  padding: 1em 2.1em 1.1em;
  border-radius: 3px;
  margin: 8px 8px 8px 8px;
  color: #fbdedb;
  background-color: #fbdedb;
  display: inline-block;
  background: green;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
  font-family: sans-serif;
  font-weight: 800;
  font-size: .85em;
  text-transform: uppercase;
  text-align: center;
  text-decoration: none;
  -webkit-box-shadow: 0em -0.3rem 0em rgba(0, 0, 0, 0.1) inset;
  -moz-box-shadow: 0em -0.3rem 0em rgba(0, 0, 0, 0.1) inset;
  box-shadow: 0em -0.3rem 0em rgba(0, 0, 0, 0.1) inset;
  position: relative;
}
.btn:hover, .btn:focus {
  opacity: 0.8;
}
.btn:active {
  -webkit-transform: scale(0.80);
  -moz-transform: scale(0.80);
  -ms-transform: scale(0.80);
  -o-transform: scale(0.80);
  transform: scale(0.80);
}
.btn.block {
  display: block !important;
}
.btn.circular {
border-radius: 50em !important;
}

body{
    background-image: url("https://wallpaperaccess.com/full/6451924.jpg");

}
    </style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="home.php"><img src="../Assets/logo.png" id="logo"></a>
  <a href="home.php">Home</a>
  <a href="about.php">About</a>
  <a href="weather.php">Extras</a>
  <?php
                    if (!(isset($_SESSION['user_type']))) {
                        echo "<a class='ula' id='pad' href='login.php'>Login</a>";
                    } else if (isset($_SESSION['user_type']) == 'user') {
                        echo "<a class='ula' id='pad' href='logout.php'>Logout</a>";
                    }
                    ?> 
  <a href="register.php">Register</a> 
  <a class="icon" onclick="myFunction()">
    <i class="fa fa-bars">↓</i>
  </a>
</div>

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


