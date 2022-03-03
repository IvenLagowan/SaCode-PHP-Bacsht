<?php
session_start();
header('localition:login.php')

$con = mysqli_connect('localhost','root','123456');

mysqli_select_db($con, 'userrigistration');

$name = $_POST['user'];
$pass = $_P0ST['password'];

$s = " select * form usertable where name = '%name' ";

$result = mysqli_query($con, $s)

$num = mysqli_num_wos($result);

if ($num == 1) {
    echo" usename Areadiy taken";
} else {
    $rag= "unirt into usertable(name, password) values ('$name' , ' $pass ')";
    mysqli_query($con, $reg);
    echo" Registrasion Successfull";
}
?>