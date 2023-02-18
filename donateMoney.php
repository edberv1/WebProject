<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="donateMoney.css">
    <title>Document</title>
</head>
<body>
    <header>
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
        </header>

<br><br>



    
    <h1 class="main-text">Donate Money</h1><br><br><br>
        <main id="mainStyle">


            
    <div class="right-side">
        
        <img src="https://img.freepik.com/free-photo/high-angle-two-stacks-coins-with-plants-copy-space_23-2148803918.jpg?w=1380&t=st=1670362241~exp=1670362841~hmac=bb61d418db9e79f50b0acae77fe88ce23551168143fa50f4852072406710f2f7">
        
    </div>
    <div class="left-side">

    <?php
            include 'DonateMoneyC.php';
            $donateMoneyRegister = new DatabaseDonateMoney();
            $check = $donateMoneyRegister->check();
        ?>
        
        <form name="myForm" onsubmit="return donateMoney()">
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
                <input type="number" class="formStyle" id="inputNumber" name="number" placeholder="+383..."><br>
                <span class="error" id="errornumber"></span>
            </div><br>
           
            <div>
                <label for="inputMoney" class="form-label">Money:<br></label>
                <input type="number" name="money" id="txtA"  placeholder="Write the amount of money you want to donate..."></input><br>
                <span class="error" id="errortext"></span>
            </div><br>
            
            <input type="submit" value="Donate" id="dnButt"><br></input>
            </form>

    </div>

    
</main>
    <br><br>
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
                <li><a href="home.php"><img src="logo.png" alt=""></a></li>
            </ul>
        </div>
    </footer>
    <script src="JS\money.js"></script>
</html>