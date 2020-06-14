
<?php
    require "header.php";
?>
<head>
<link rel="stylesheet" href="styles.css">
</head>


<main>
    <?php
    
        if(isset($_SESSION['userId'])){
            echo '<p class="login-status"> You are Logged In!</p>';
            echo '<p class="login-status"> The site is being created and currently offers nothing. Meanwhile just remember that Vaibhav Is Sexy ! </p>';

        }
        else{
            echo '<p class="login-status"> </p>';
        }

    ?>
</main>

<?php
    require "footer.php";
?>
