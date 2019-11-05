<?php 
    session_start();
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['employee'] = $_POST['employee'];
    $_SESSION['formality'] = $_POST['formality'];

    $errorArray = array(0,0,0);
    $inputArray = array("","","");

    if($_SESSION['name'] != '' && $_SESSION['employee'] != '' && $_SESSION['formality'] != '') {
        header("Location: ./results.php");
    }
    else {
        if($_SESSION['name'] == '') {
            $errorArray[0] = 1;
        }
        if($_SESSION['employee'] == '') {
            $errorArray[1] = 1;
        }
        if($_SESSION['formality'] == '') {
            $errorArray[2] = 1;
        }

        header("Location: ./forms.php?errorArray=".$errorArray[0].$errorArray[1].$errorArray[2]);
    }

?>