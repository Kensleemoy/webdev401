<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="./favicon.ico?v1" type="image/x-icon">   
        <link rel="stylesheet" type="text/css" href="CSS/index.css"/>
    </head>
    <?php 
        include("header.php")
    ?>
    <header>
    <title>
        My Account
    </title>
    </header>
    <div class = main>
        <body>
            <h1>Here is your generated letter:</h1>
            <p>
                Dear <?php echo $_SESSION['employee'] ?>,
                <br>
                Sincerely,
                <?php echo $_SESSION['name'] ?>
            </p>
        </body>
    </div>
    <?php include("footer.php"); ?>
</html>