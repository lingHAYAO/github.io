<?php
header("content-type:text/html,charset='utf8'");
$Cno = $_POST['Cno'];
$Cname = $_POST['Cname'];
$Cpno= $_POST['Cpno'];
$Ccredit = $_POST['Ccredit'];

$link=mysqli_connect("localhost","root","admin123456");
if(!$link){
    echo "服务器忙，请重试";
    exit;
}
mysqli_set_charset($link,"utf8");
mysqli_select_db($link,"成绩_u202211923");
$sql = "UPDATE course SET Cname = $Cname,Cpno = $Cpno,Ccredit = $Ccredit where Cno = '{$Cno}'";
$res=mysqli_query($link,$sql);
if($res){
    echo "success";
}else{
    echo "error";
};
mysqli_close($link);

?>
