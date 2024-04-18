<?php
    include("setting.inc");
?>

<?php
    if(isset($_SESSION["check"])){
        if($_SESSION["check"] == "Yes"){
            echo "Chair您好，歡迎進入網頁"."<br/>";
            echo "<a href = 'logout.php'>登出</a>";
        }
        else{
            echo "非法進入網頁"."<br/>";
            echo "3秒鐘之後回登入畫面";
            header("Refresh: 3; url = index.php");
        }
    }
    else{
        echo "非法進入網頁"."<br/>";
        echo "3秒鐘之後回登入畫面";
        header("Refresh: 3; url = index.php");
    }
?>