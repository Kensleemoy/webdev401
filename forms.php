<?php
    session_start();

    $errorArray = array("", "", "");

    if(isset($_GET["errorArray"])){
        if($_GET["errorArray"][0]){
            $errorArray[0] = "Your name is required.";
        }
        if($_GET["errorArray"][1]){
            $errorArray[1] = "Your poor employee's name is required.";
        }
        if($_GET["errorArray"][2]){
            $errorArray[2] = "The formality level is required.";
        }
    }
?>

<!DOCTYPE html>
<html>
        <?php include("header.php"); ?>
    <head>
        <link rel="stylesheet" type="text/css" href="CSS/index.css"/>
        <link rel="stylesheet" type="text/css" href="CSS/forms.css"/>
    </head>
    <header>
        <title>
            It's me
        </title>
    </header>
    <div class="main">
        <body>
            <h1>
                Getting Started
            </h1>
            <p>We'll need to know a few things about your particular case:</p>
            <div class="form">
                <form action="results_handler.php" method="post">
                    <div>
                        <strong>Your Name:</strong><div class="error"><?php echo $errorArray[0];?></div> 
                        <input class="inputContent" type="text" name="name" value="<?php echo $_SESSION['name'];?>">
                        <?php $_SESSION['name'] = ""; ?>
                    </div>
                    <br>
                    <div>
                        <strong>Employee's Name:</strong><div class="error"><?php echo $errorArray[1];?></div>
                        <input class="inputContent" type="text" name="employee" value="<?php echo $_SESSION['employee'];?>">
                        <?php $_SESSION['employee'] = ""; ?>
                    </div>
                    <br>
                    <div>
                    <strong>Formality of Letter: </strong> <div class="error"><?php echo $errorArray[2];?></div>
                    <div class="formality-selector">
                        <label>
                            <input type="radio" name="formality" value="formal" <?php if(isset($_SESSION['formality']) && $_SESSION['formality']=="formal") echo "checked";?> > 
                            Formal<br>
                        </label>
                        <label>
                            <input type="radio" name="formality" value="semi-formal" <?php if(isset($_SESSION['formality']) && $_SESSION['formality']=="semi-formal") echo "checked";?>>
                            Semi-formal<br>
                        </label>
                        <label>
                            <input type="radio" name="formality" value="informal" <?php if(isset($_SESSION['formality']) && $_SESSION['formality']=="informal") echo "checked";?>> 
                            Informal<br>
                        </label>
                    </div>
                    <?php $_SESSION['formality'] = ""; ?>
                    </div>
                    <br>
                    <input class="submitButton" type="submit">
                </form>       
            </div>
        </body>
    </div>

    <?php include("footer.php"); ?>
</html>