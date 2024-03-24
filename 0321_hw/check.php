<?php
    session_start();
?>

<meta charset = "utf-8">

<?php
    $sId = "nuk";
    $sPwd = "1234567890";

    $uId = $_GET["uId"];
    $uPwd = $_GET["uPwd"];

    if($uId == $sId && $uPwd == $sPwd){
        $_SESSION["check"] = "Yes";
        header("Location: success.php");
    }
    else{
        $_SESSION["check"] = "No";
        header("Location: fail.php");
    }
?>