<?php
require_once("../connection.php");
if(isset($_POST["btn1"])){
    $name = $_POST["uname1"];
    $pass1 = $_POST["psw1"];
    $pass2 = $_POST["psw2"];
    if($name == "" || $pass1 == "" || $pass2 == ""){
        echo  "<script>alert('Vui lòng nhập đầy đủ')</script>";
    } else {
        $sql = "select * from hocsinh where name = '$name' ";
        $kt = mysqli_query($conn,$sql);
        if($pass1 === $pass2){
            if(mysqli_num_rows($kt)>0){
                echo "<script>alert('Tai khoan da ton tai')</script>";
            } else {
                $sql1 = "INSERT INTO hocsinh (name,pass) VALUES ('$name','$pass1')";
                mysqli_query($conn,$sql1);
                echo "<script>alert('chúc mừng bạn đã đăng ký thành công')</script>";   
            }
        } else {
            echo "<script>alert('bạn nhập pass1 và pass2 không chính xác')</script>";   
        }
    }
}
?>