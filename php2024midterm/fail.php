<?php
    include("setting.inc");
?>

<?php
    echo "登入失敗"."<br/>";
    echo "3秒鐘之後回登入畫面";
    header("Refresh: 3; url = index.php");
?>