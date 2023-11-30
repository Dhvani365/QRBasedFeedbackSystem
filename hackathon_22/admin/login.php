<?php
$userid=$_POST['uid'];
$passwd=$_POST['pass'];
if($userid=="dhvani365@gmail.com" && $passwd=="12345678"){
    setcookie('uid',$userid);
    header("location: dashboard.php");
}else{
    echo "Wrong User id and Password.";
}
?>