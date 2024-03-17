<html>
    <head>
        <meta charset="utf8">
        <title>
        資管晚會報名表
        </title>
    </head>
    <body>
        <font size="4"><b>活動資訊:</b></font><br/>
        <font size="4">活動地點:管院B101</font><br/>
        <font size="4">活動日期:2024/12/31</font><br/>
        <font size="4">活動時間:6:30~9:00PM</font><br/>
        <font size="4">為方便辨認是否為參加活動之人員，將會統一訂做衣服</font><br/>
        <br/>
        <form action="result.php" method="post">
            以上資訊是否已詳細閱讀且截圖保存<br/>
            <input type="radio" name="read" value="yes" required>已閱讀並已截圖保存<br/>
            <b>報名資料:</b><br/>
            學號:
            <input type="text" name="id" value="" required><br/>
            姓名:
            <input type="text" name="name" value="" required><br/>
            性別:
            <input type="radio" name="gender" value="男">男
            <input type="radio" name="gender" value="女">女<br/>
            出生日期:
            <input type="date" name="birthday" value=""><br/> 
            同行人數:
            <input type="number" name="peopleNum" value="" min="0"><br/>
            活動當天到場時間:
            <input type="time" name="time" value=""><br/>
            衣服件數:
            <input type="number" name="clothNum"><br/>
            衣服尺寸:
            <select name="size[]" multiple>
                <option value="S">S
                <option value="M">M
                <option value="L">L
                <option value="XL">XL
            </select><br/>
            聯絡電話:
            <input type="text" name="phone" value="" required><br/>
            聯絡信箱:
            <input type="text" name="email" value="" required><br/>
            密碼:
            <input type="password" name="password" value="" required><br/>
            飲食習慣:
            <textarea name="food" value="" rows="1"></textarea><br/>
            
            <input type="submit" value="送出表單">
            <input type="reset" value="清除表單">
        </form>
    </body>
</html>
