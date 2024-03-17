<meta charset="utf8">
<?php
    $read=$_POST["read"];
    
    $id=$_POST["id"];
    echo "學號:".$id."<br/>";

    $name=$_POST["name"];
    echo "姓名:".$name."<br/>";

    $gender=$_POST["gender"];
    echo "性別:".$gender."<br/>";

    $birthday=$_POST["birthday"];
    echo "出生日期:".$birthday."<br/>";

    $peopleNum=$_POST["peopleNum"];
    echo "同行人數:".$peopleNum."<br/>";

    $time=$_POST["time"];
    echo "活動當天到場時間:".$time."<br/>";

    $clothNum=$_POST["clothNum"];
    echo "衣服件數:".$clothNum."<br/>";

    $size=$_POST["size"];
    $x=count($size);
    echo "衣服尺寸:";
    for($i=0;$i<$x;$i++){
        if($i<$x-1){
            echo $size[$i].",";
        }
        else{
            echo $size[$i];
        }
    }
    echo "<br/>";

    $phone=$_POST["phone"];
    echo "聯絡電話:".$phone."<br/>";

    $email=$_POST["email"];
    echo "聯絡信箱:".$email."<br/>";

    $password=$_POST["password"];
    echo "密碼:".$password."<br/>";

    $food=$_POST["food"];
    if($food=" "){
        echo "飲食習慣：無"."<br/>";
    }
    else{
       echo "飲食習慣：".$food."<br/>"; 
    }
    
?>