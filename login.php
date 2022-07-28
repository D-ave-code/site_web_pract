<?php 
$_SESSION['user']="rata mike";
$_SESSION['pass']="123";
if($_SESSION['user']=="rata mike" & $_SESSION['pass']="123"){
header ( 'Location: index1.html');
}else{
    echo "no eres admin rata";
}
?>
