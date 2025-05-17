<?php
/*
&&  ve
||  veya
!   değil
and ve
or  veya
*/ 

$a = true;
$b = false;

$result = $a || $b;
var_dump($result);

$result = !$a;
var_dump($result);

$isLoggedIn=true;
$isAdmin=false;
$isGuest=false;

if($isLoggedIn && $isadmin || $isGuest){
    echo "Erişşim izni verildi!";
}
else{
    echo "Erisim reddedildi!";
}
