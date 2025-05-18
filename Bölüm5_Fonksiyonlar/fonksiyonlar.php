<?php
function merhaba($sayi){
    echo "Benim Sayım" . $sayi;
}

merhaba(5);

function topla($a,$b){
    return $a+$b;
}

$sonuc=topla(5,10);
echo $sonuc;

function SelamVer($isim = "Misafir"){
    echo "Merhaba,$isim";
}

$isim=isset($_GET["isim"])? $_GET["isim"]: null;
SelamVer($isim);