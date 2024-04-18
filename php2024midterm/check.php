<?php
    include("setting.inc");
?>

<?php
    $role = $_POST["role"];
    $inputId = $_POST["inputId"];
    //echo "帳號:".$inputId."<br/>";
    $inputPwd = $_POST["inputPwd"];
    //echo "密碼:".$inputPwd."<br/>";
    $chairId = "chair";
    $chairPwd = "123";
    $reviewerId = "reviewer";
    $reviewerPwd = "234";
    $authorId = "author";
    $authorPwd = "345";

    if($role == "Chair" && $inputId == $chairId && $inputPwd == $chairPwd){
        $_SESSION["check"] = "Yes";
        $date = strtotime("+7 days", time());
        setcookie("userName", $chairId, $date);
        header("Location: chair.php");
    }
    else if($role == "Reviewer" && $inputId == $reviewerId && $inputPwd == $reviewerPwd){
        $_SESSION["check"] = "Yes";
        $date = strtotime("+7 days", time());
        setcookie("userName", $reviewerId, $date);
        header("Location: reviewer.php"); 
    }
    else if($role == "Author" && $inputId == $authorId && $inputPwd == $authorPwd){
        $_SESSION["check"] = "Yes";
        $date = strtotime("+7 days", time());
        setcookie("userName", $authorId, $date);
        header("Location: author.php");
    }
    else{
        $_SESSION["check"] = "No";
        header("Location: fail.php");
    }
?>