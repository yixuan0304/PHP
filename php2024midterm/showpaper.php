<?php
    include("setting.inc");
?>

<?php
    if(isset($_SESSION["check"])){
        if($_SESSION["check"] == "Yes"){
            
            if($_POST["title"]!=""){
                $title=$_POST["title"];
                echo "論文標題:".$title."<br/>";
            }
            else{
                echo "沒有輸入資料"."<br/>";
            }
        
            if($_POST["authorName"]!=""){
                $authorName=$_POST["authorName"];
                echo "作者姓名:".$authorName."<br/>";
            }
            else{
                echo "沒有輸入資料"."<br/>";
            }
        
            if($_POST["authorEmail"]!=""){
                $authorEmail=$_POST["authorEmail"];
                echo "作者email:".$authorEmail."<br/>";
            }
            else{
                echo "沒有輸入資料"."<br/>";
            }
            if(trim($_POST["comment"])!=""){
                $comment=$_POST["comment"];
                echo "論文摘要:";
                echo nl2br($_POST["comment"])."<br/>";
            }
            else{
                echo "沒有輸入資料"."<br/>";
            }
            echo "<a href='logout.php'>登出</a>";
        }
    }
?>