<?php
    include("setting.inc");
?>

<?php
    if(isset($_SESSION["check"])){
        if($_SESSION["check"] == "Yes"){
            echo "Author您好，歡迎進入論文投稿網頁"."<br/>";
            echo "
                <form action = 'showpaper.php' method = 'post'>
                論文標題:<br/>
                <input type = 'text' name = 'title' value = ''><br/>
                作者姓名:
                <input type = 'text' name = 'authorName' value = ''><br/>
                作者email:
                <input type = 'text' name = 'authorEmail' value = ''><br/>
                論文摘要:
                <textarea name = 'comment' value = '' rows = '15' cols = '50'>
                </textarea>
                <br/>
                <input type = 'submit' value = '提交'>
                </form>
            ";
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