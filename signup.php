
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
        <h1>Sign Up</h1>
        <?php
            if(isset($_GET['error'])){
                if($_GET['error']=="emptyfields"){
                    echo '<p class="signuperror">Please fill all the fields!</p>';
                }
                else if($_GET['error']=="invaliduidmail"){
                    echo '<p class="signuperror">Invalid username and e-mail!</p>';
                }
                else if($_GET['error']=="invaliduid"){
                    echo '<p class="signuperror">Invalid username!</p>';
                }
                else if($_GET['error']=="invalidmail"){
                    echo '<p class="signuperror">Invalid e-mail!</p>';
                }
                else if($_GET['error']=="passwordcheck"){
                    echo '<p class="signuperror">Your passwords do no match!</p>';
                }
                else if($_GET['error']=="userstaken"){
                    echo '<p class="signuperror">Username is already taken!</p>';
                }
                
            }
            else if(isset($_GET['signup'])){
                echo '<p class="signupsuccess">Sign Up Successful!</p>';
            }
           
        ?>
        <form action="includes/signup.inc.php" method="post">
            <div class="textbox">
                <input type="text" name="uid" placeholder="Username">
            </div>
            <div class="textbox">
                <input type="text" name="mail" placeholder="E-mail">
            </div>
            <div class="textbox">
                <input type="password" name="pwd" placeholder="Password">
            </div>
            <div class="textbox">
                <input type="password" name="pwd-repeat" placeholder="Repeat Password"?>
            </div>
            <button class="btn" type="submit" name="signup-submit">Create</button>
            </form>
    </div>
</body>
</html>