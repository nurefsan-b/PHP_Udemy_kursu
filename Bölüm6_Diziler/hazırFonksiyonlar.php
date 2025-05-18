<?php
$meyveler=["Elma","Armut","Muz","Kiraz","Karpuz"];
echo $elemanSayisi = count($meyveler);

sort($meyveler);
print_r($meyveler);
rsort($meyveler);

$dizi1=["elma","armut"];
$dizi2=["muz","kiraz"];
$birlesikDizi=array_merge($dizi1,$dizi2);
print_r($birlesikDizi);

$kisi=[
    "isim" => "Ahmet",
    "yas" => 25,
    "sehir" => "İstanbul",
    "meslek" => "Yazılım Geliştirici"
];

$anahtarlar = array_keys($kisi);
print_r($anahtarlar);

if(in_array("Ahmet",$kisi)){
    echo "Dizide mevcut";
}
else{
    echo "Dizide mevcut değil";
}
