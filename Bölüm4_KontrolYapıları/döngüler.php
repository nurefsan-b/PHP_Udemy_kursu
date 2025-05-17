<?php
/*$sayi = 1;
while ($sayi <=5){
    echo $sayi . " ";
    $sayi++;
}
*/

$hesapBakiyesi = 1000;
$cekilmekIstenenMiktar=200;

echo "Hesap bakiyeniz: $hesapBakiyesi TL<br>";

while ($hesapBakiyesi >= $cekilmekIstenenMiktar){
    echo "Çekiliyor: $cekilmekIstenenMiktar TL <br>";
    $hesapBakiyesi -= $cekilmekIstenenMiktar;
    echo "Kalan Bakiye: $hesapBakiyesi TL <br>";
}

if ($hesapBakiyesi < $cekilmekIstenenMiktar){
    echo "Bakiyeniz yetersiz! Kalan Bakiye: $hesapBakiyesi TL <br>";
}

$sayi=6;
do{
    echo $sayi . " ";
    $sayi++;
}while ($sayi <=7);

//for döngüsü

for($i =1; $i <=5; $i++){
    echo $i . " ";
}
