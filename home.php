<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Home</title>
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

    <div class="heading">

        <h1>"Look deep into nature, and then you will understand everything better."</h1><br><br>

    </div>

    
    <div class="mainimg">

        <div class="slideshow-container">

            <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <img alt="img1" src="https://wallpapercave.com/wp/wp6966643.jpg" style="width:100%">
            </div>
          
            <div class="mySlides fade">
              <div class="numbertext">2 / 3</div>
              <img alt="img2" src="https://wallpaper.dog/large/10737881.jpg" style="width:100%">
            </div>
          
            <div class="mySlides fade">
              <div class="numbertext">3 / 3</div>
              <img alt="img3" src="https://wallpapercave.com/wp/wp1990734.jpg" style="width:100%">
            </div>
          
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
          </div>
          <br>
        
          <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
          </div>
    </div>


    <main id="mainColums">
    
    
        <div class="leftcolum">
            
            <img src="https://img.freepik.com/free-photo/beautiful-shot-forest-with-tall-green-trees-with-sun-shining-through-branches_181624-20728.jpg?w=1380&t=st=1670362056~exp=1670362656~hmac=5f0122b2bd68212fcb536beb4b100968be01a7289d11115964b12c3eef79f03d" class="clothes" alt="plant"><br><br>
            <a href="donateclothes.php">
                
            <button type="button" class="button"> <a class="btnA" href="donatePlants.php"> Donate Plants </a></button><br><br>
            </a>
                
    
        </div>
        
        <div class="rightcolum">
        <img class="money" src="https://img.freepik.com/free-photo/high-angle-two-stacks-coins-with-plants-copy-space_23-2148803918.jpg?w=1380&t=st=1670362241~exp=1670362841~hmac=bb61d418db9e79f50b0acae77fe88ce23551168143fa50f4852072406710f2f7" alt="money"><br><br>
            
            <a  href="donatemoney.php">
                
            <button type="button" class="button"> <a  class="btnA" href="donatemoney.php">Donate Money</a></button><br><br>
            </a>
            
        
        </div>
    </main>

    <footer>
        <div class="div1">
            <ul type="none">
                <li><h1>GiveHelp</h1></li>
                <p>"GiveHelp" is a website for people that want to help
                    the nature by donating money or plants. After their donation our organisation plants them where it is needed the most.</p>
                
            </ul>
        </div>
        <div class="div2">
            <ul type="none">
                <li><a href="home.php"><img src="logo.png" alt=""></a></li>
            </ul>
        </div>
    </footer>

    <script src="a.js"></script>
</body>
</html>