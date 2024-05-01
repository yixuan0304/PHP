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

    $phone=$_POST["phone"];
    echo "聯絡電話:".$phone."<br/>";

    $email=$_POST["email"];
    echo "聯絡信箱:".$email."<br/>";

    $food=$_POST["food"];
    if($food=" "){
        echo "飲食習慣：無"."<br/>";
    }
    else{
       echo "飲食習慣：".$food."<br/>"; 
    }

    //連接資料庫
    $link = @mysqli_connect(
        'localhost',
        'root',
        'yqiu230624',
        'im_eveningparty');
    
    //SQL語法
    $SQL = "INSERT INTO attendee(isRead,id,name,gender,birthday,peopleNum,time,phone,email,food) VALUES('$read','$id','$name','$gender','$birthday','$peopleNum','$time','$phone','$email','$food')";

    //送出查詢
    if($result = mysqli_query($link, $SQL)){
        echo "<br/>新增成功";
    }
    echo "<br/><a href='index.php'>查看資料庫資料</a>";
    
?>