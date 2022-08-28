<?php require_once("../php/register-form.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <span><b>TÊN</b></span>
        <input type="text" name="uname1">
        <br><br>
        <span><b>MẬT KHẨU</b></span>
        <input type="text" name="psw1">
        <br><br>   
        <span><b>NHẬP LẠI MẬT KHẨU</b></span>
        <input type="text" name="psw2">
        <br><br>
        <input type="submit" name="btn1" value="REGISTER">
        <a href="login.php">Login</a>
    </form>
</body>
</html>