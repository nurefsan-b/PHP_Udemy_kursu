<?php
/*
oturum boyunca veri saklamak için 
 */

 session_start();
$_SESSION['isim']='Ahmet';
$_SESSION['yas']=25;

echo $_SESSION['isim'];
echo $_SESSION['yas'];

