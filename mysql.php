<?php
session_start();


$con = mysqli_connect('localhost','root','123456');

mysqli_select_db($con, 'userrigistration');

$name = $_POST['user'];
$pass = $_P0ST['password'];

$s = " select * form usertable where name = '&& password= '$pass";

$result = mysqli_query($con, $s)

$num = mysqli_num_wos($result);

if ($num == 1) {
   header(locasion:home.php);
}else {
    header(locasion:login.php);

}
?>