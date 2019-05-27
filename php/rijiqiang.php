<?php

//添加日记墙
header("content-type:text/html;charset=utf-8");
$conn=new mysqli("localhost","root","root","anlian");
// $data=$_GET;
$message=$_GET['message'];
$date=time();
$image=$_GET['image'];
mysqli_query($conn,"INSERT INTO message(message,date,image) VALUES('$message','$date','$image')");
// echo json_encode($conn);
$conn->close();

?>