<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'student');
$email = $_POST['email'];
$password = $_POST['password'];
$query = "select * from student where email='$email' && password = $password";
$result = mysqli_query($con,$query);
$num = mysqli_num_rows($result);
if($num == 1)
{
    header('location:display.php');
}
else{
    header('location:login.php');
}

?>