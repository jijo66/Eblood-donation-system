<?php
$uname=$_POST['uname'];
$pass=$_POST['pass'];

if($uname=='admin' and $pass=='admin')
{
header ('location: Admin.php');
}
else{
echo "Sorry wrong username or password";
}
?>