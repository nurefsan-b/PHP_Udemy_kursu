<?php
$meyveler = ["Elma","Armut","Muz"];
echo $meyveler[0];
foreach ($meyveler as $meyve){
    echo $meyve . "<br>";
}

$kisi = [
    "isim" => "Ahmet",
    "yas" => 25,
    "sehir" =>"İstanbul"
];

echo "<pre>";
print_r($kisi);


?>