<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DonatePlants</title>
    <link rel="stylesheet" href="../CSS/plants.css">
</head>
<body>
    <header>
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
        </header>

    <br><br>


    <h1 class="main-text">Donate Plants</h1>
        <main id="mainStyle">
            <div class="right-side">
        
                <img src="https://img.freepik.com/free-photo/people-stacking-hands-together-park_53876-63293.jpg?w=1380&t=st=1670365596~exp=1670366196~hmac=a69fd1bf8630cc47992a401edd0256e7eb2cc327a103c807ef27aae7b85c6bd1">
                
            </div>

    <div class="left-side">

    <?php
            include 'DonatePlantsC.php';
            $donatePlants = new DatabaseDonatePlants();
            $check = $donatePlants->check();
        ?>
        <form name="myForm" method="post" onsubmit="return donatePlants()">
        <div>
            <label for="formName" class="form-label">Name: <br></label>
            <input type="text" class="formStyle" id="formName" name="name" placeholder="Name here..."><br>
            <span class="error" id="errorname"></span>

        </div><br>

        <div >
            <label for="formSurname" class="form-label">Surname: <br></label>
            <input type="text" class="formStyle" id="formSurname" name="surname" placeholder="Surname here..."><br>
            <span class="error" id="errorsurname"></span>

        </div><br>

        <div>
            <label for="inputEmail" class="form-label">Email:<br></label>
            <input type="email" class="formStyle" id="inputEmail" name="email" placeholder="Email here..."><br>
            <span class="error" id="erroremail"></span>

        </div><br>
        <div>
            <label for="inputPhone" class="form-label">Phone Number:<br></label>
            <input type="number" class="formStyle" id="inputNumber" name="number" placeholder="+383 ..."><br>
            <span class="error" id="errornumber"></span>
        </div><br>
        
        <div>
            <label for="inputPlants" class="form-label">Plant name:<br></label>
            <textarea name="plants" id="txtA"  placeholder="Write here the information about the plant..."></textarea><br>
            <span class="error" id="errortext"></span>
        </div><br>
        
        <input type="submit" name="submit" value="Donate" id="dnButt"><br> <br></input>
        </form>

    </div>


    
</main>

    
    <!-- Footeri -->
    
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
                <li><a href="home.php"><img src="../Assets/logo.png" alt=""></a></li>
            </ul>
        </div>
    </footer>
    <script src="../JS/plants.js"></script>
</body>
</html>