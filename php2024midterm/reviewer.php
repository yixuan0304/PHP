<?php
    include("setting.inc");
?>

<?php
    if(isset($_SESSION["check"])){
        if($_SESSION["check"] == "Yes"){
            echo "<h2>Reviewer您好，歡迎進入論文評論網頁"."</h2>";
            echo "
                <form action = 'showreview.php' method = 'post'>
                論文評審決定:
                <input type = 'radio' name = 'decision' value = 'Accept'>Accept
                <input type = 'radio' name = 'decision' value = 'Minor Revision'>Minor Revision
                <input type = 'radio' name = 'decision' value = 'Major Revision'>Major Revision
                <input type = 'radio' name = 'decision' value = 'Reject'>Reject<br/>
                論文評論評語:
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