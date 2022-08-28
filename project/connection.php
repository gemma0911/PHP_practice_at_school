<?php 
$conn = mysqli_connect('localhost','root','','kungfuphp');
		//Nếu có lỗi xảy ra thì dừng đoạn mã và in ra thông báo lỗi.
		if(mysqli_connect_errno()!==0)
		{
			die("Error: Could not connect to the database. An error ".mysqli_connect_error()." ocurred.");
		} else {
			echo "oke";
		}

mysqli_set_charset($conn,'utf8');
?>
