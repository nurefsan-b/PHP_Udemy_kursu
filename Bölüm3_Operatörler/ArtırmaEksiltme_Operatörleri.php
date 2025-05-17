<?php
//++ ya da -- 
$stok=10;
--$stok;
++$stok;
echo ++$stok;
echo $stok++;

//Null Koalesan Operatörü ??
$isim = $_GET[!'isim'] ?? 'Misafir';
echo $isim;

$a=10;
echo $a > 5 ? "Büyük" : "Küçük";

$kullanıcı = null;
echo $kullanıcı?-> getAdi();//Hata yerine null döndürür
