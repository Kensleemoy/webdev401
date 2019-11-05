<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="favicon.ico?v1" type="image/x-icon">
        <link rel="icon" href="favicon.ico?v1" type="image/x-icon">  
        <link rel="stylesheet" type="text/css" href="CSS/index.css"/>
    </head>
    <?php include("header.php"); ?>
    <header>
        <title>
           Login
        </title>
    </header>
    <div class="main">
        <body>
            <h1>
                Login
            </h1>
            <div class="form">
                <form action="login.php" method="post">
                    Username:<br> 
                    <input class="inputContent" type="text" name="name"><br><br>
                    Pasword:<br>
                    <input class="inputContent" type="text" name="employee"><br><br>
                    <input class="submitButton" type="submit">
                </form>       
            </div>
            <div class="form">
                Don't have an account? <a href="signup.php">Create an account</a>.
            </div>
        </body>
    </div>

    <?php include("footer.php"); ?>
</html>