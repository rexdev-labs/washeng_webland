<?php
error_reporting(1);
session_start();
require "app/koneksi.php";
//require "app/set-register.php";
// require "app/set_login.php";
//require "sistem/set_login.php";

// if($_SESSION['login']){
    $page=$_GET[page];
    if(file_exists("view/$page.php")) require "view/$page.php";
    else require "view/home.php";
// }else{
//  include "view/login.php";
// }
?>


