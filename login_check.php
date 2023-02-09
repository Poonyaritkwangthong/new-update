<?php
include 'connectdb.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];


$sql="SELECT * FROM users WHERE user_name='$username' 
and password ='$password' ";

$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

if($row > 0 ){
    $_SESSION["username"]=$row['user_name'];
    $_SESSION["pw"]=$row['password'];
    $_SESSION["firstname"]=$row['f_name'];
    $_SESSION["lastname"]=$row['l_name'];



}else{
    $_SESSION["Error"] = "<p> Username หรือ Password ของคุณผิด </p>";
    $show=header("location:login.php");
}
echo $show;
?>