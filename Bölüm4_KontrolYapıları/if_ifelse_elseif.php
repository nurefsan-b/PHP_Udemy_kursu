<?php
/*
KOşul Yapıları
if
if else
if elseif else
switch case
 */

 $a=5;
 if ($a>10){
    echo "$a değişkeninin değeri 10'dan büyüktür.";
 }

 $b = true;
 if ($b){
    echo "Sonuç doğrudur.";
 }


 $puan=40;
if($puan>=50){
    echo"Geçtiniz.";
}
else{
    echo"Kaldınız.";
}

$puan2=80;

if($puan2>=90)
{
    echo "Notunuz A";
}

elseif($puan>=75)
{
    echo "Notunuz B";
}
else{
    echo "Notunuz F kaldınız";
}