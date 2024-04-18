<html>
    <head>
        <?php
            include("setting.inc");
        ?>
    </head>
    <body>
        <form action = "check.php" method = "post">
        
        <h1>高大資管論文投稿系統</h1>
        請選擇您的角色:
        <select name = role>
            <option value = "Chair" selected>Chair
            <option value = "Reviewer">Reviewer
            <option value = "Author">Author
        </select>
        <br/>
        帳號:
        <?php
                if(isset($_COOKIE["userName"])){
                    //echo $_COOKIE["userName"];
                    echo "<input type = 'text' name = 'inputId' value = '".$_COOKIE["userName"]."' required><br/>";
                }
                else{
                    echo "<input type = 'text' name = 'inputId'><br/>";
                }
            ?>
        密碼:
        <input type = "password" name = "inputPwd" value = "" required><br/>
        
        <input type = "submit" value = "提交">
        </form>
    </body>
</html>
