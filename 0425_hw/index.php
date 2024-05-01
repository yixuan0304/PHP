<meta charset = "utf-8">

<?php
    //連接資料庫
    $link = @mysqli_connect(
                'localhost',
                'root',
                'yqiu230624',
                'im_eveningparty');
    if(!$link)
        die("無法開啟資料庫!<br/>");
    else
        echo "資料庫開啟成功!";

    //SQL語法
    $SQL = "SELECT * FROM attendee";

    //送出查詢
    $result = mysqli_query($link, $SQL);

    //結果轉陣列
    echo "<table border = '1'>";
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row["No"]."</td><td>".$row["isRead"]."</td><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["gender"]."</td><td>".$row["birthday"]."</td><td>".$row["peopleNum"]."</td><td>".$row["time"]."</td><td>".$row["phone"]."</td><td>".$row["email"]."</td><td>".$row["food"]."</td><td><a href = 'del.php?No=".$row["No"]."'>刪除</a></td><td>修改</td><br/>";
        echo "</tr>";
    }
    echo "</table>";

    mysqli_close($link);
?>