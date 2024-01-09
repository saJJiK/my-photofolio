<?php
$server= 'localhost';
$user= 'root';
$password ='';
$database= 'photofolio';

try{$__conn =new mysqli($server,$user,$password,$database);}
catch (mysqli_sql_exception $__e){
    $errmsg = 'database connection unsuccessful';
    $errmsg_info ='Please check whether database is operational';
    header("location:/redirect.php?title=$errmsg&msg=$errmsg_info");
    return;
}
?>