<?php
require_once("../connection.php");
if(isset($_POST["login"])){
    $username = $_POST["unameLg"];
    $pass = $_POST["pswLg"];
    if($username == "" || $pass == ""){
        echo "<script>alert('Vui lòng nhập đầy đủ tài khoản mật khẩu')</script>";
    } else {
        $sql = "SELECT * FROM hocsinh where name = '$username' and pass = '$pass' ";
        $result = mysqli_query($conn,$sql);
        $num_rows = mysqli_num_rows($result);
        if($num_rows == 0){
            echo "sai";
        } else {
            $_SESSION['name'] = $username;
            header('Location:register.php');
        }
    }
}
?>