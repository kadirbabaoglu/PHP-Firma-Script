<?php
 
 include 'header.php';

session_destroy();

 header('location:login.php?durum=exit');

?>