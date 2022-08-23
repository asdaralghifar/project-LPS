<?php
session_start();

if(!isset($_SESSION['username'])){
    header ("Location: ../index.php");
}
if($_SESSION['level']!="admin")
{
    // die("Anda bukan Super Admin");
    header ("Location: ../guru");
}
?>