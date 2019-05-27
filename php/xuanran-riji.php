<?php
//添加日记墙
header("content-type:text/html;charset=utf-8");
$conn=new mysqli("localhost","root","root","anlian");

$sql="SELECT * FROM message ";
$aa=$conn->query($sql);//返回一个资源标识符  ↓↓
$result = $conn->query($sql);
$arr_aa=array();//储存数据
$arr_all=array();
// echo $result;
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        //查找到的数据改为 "关联数组" 格式,方便转json格式
        $arr=array('ID'=>$row["ID"],'title'=> $row["title"],'message'=>$row["message"],'date'=>$row["date"],'image'=>$row["image"]);
        array_push($arr_aa , $arr);
    }
    echo json_encode($arr_aa);
} else {
    echo "0 ";
}
$conn->close();
?>