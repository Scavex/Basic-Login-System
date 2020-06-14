<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaibhav</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <h1 class="brand"><a href="home.php">Pro<span>j</span>ect F</a></h1>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="box">
    
       <?php
          if(isset($_SESSION['userId'])){
            echo '<form action="includes/logout.inc.php" method="post">
                    <button class="btn" type="submit" name="logout-submit">Leave</button>
                    </form>';
          }
        else{
            echo '<h1>Login</h1>';     
           
           
            echo '        <form action="includes/login.inc.php" method="post">
            <div class="textbox">
                <input type="text" placeholder="Username" name="mailuid" value="">
            </div>
    
            <div class="textbox">
            
                <input type="password" placeholder="Password" name="pwd" value="">
            </div>
    
            <button class="btn" type="submit" name="login-submit">Enter</button>
            </form>
            <a href="signup.php"> Sign Up</a>';
        }
       ?>
       

    </div>
</body>
</html>