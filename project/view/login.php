<?php 
session_start();
require_once("../php/login-form.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="login.php">
        <span><b>TÊN</b></span>
        <input type="text" name="unameLg">
        <br><br>
        <span><b>MẬT KHẨU</b></span>
        <input type="text" name="pswLg">
        <br><br>
        <input type="submit" name="login" value="LOGIN">
        <br><br>
    </form>
</body>
</html>