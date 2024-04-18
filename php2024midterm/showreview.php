<?php
    include("setting.inc");
?>

<?php
    if(isset($_SESSION["check"])){
        if($_SESSION["check"] == "Yes"){
            if($_POST["decision"]!=""){
                $decision=$_POST["decision"];
                echo "論文評審決定:".$decision."<br/>";
            }
            else{
                echo "沒有輸入資料"."<br/>";
            }
        
            if(trim($_POST["comment"])!=""){
                $comment=$_POST["comment"];
                echo "論文評論評語:";
                echo nl2br($_POST["comment"]);
            }
            else{
                echo "沒有輸入資料"."<br/>";
            }
            echo "<a href='logout.php'>登出</a>";
        }
    }
    
?>