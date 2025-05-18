<?php
$ogrenciler = [
    ["isim"=>"Ali","yas"=>20,"bolum"=>"Bilgisayar mühendisliği"],
    ["isim"=>"Ayşe","yas"=>22,"bolum"=>" Makine mühendisliği"],
    ["isim"=>"Mehmet","yas"=>21,"bolum"=>"Elektrik Elektronik mühendisliği"]
];

echo $ogrenciler[0]["isim"];
print_r($ogrenciler);

foreach($ogrenciler as $ogrenci){
    echo "isim:".$ogrenci["isim"]."<br>";
    echo "Yas:".$ogrenci["yas"]."<br>";
    echo "Bolum:".$ogrenci["bolum"]."<br>";
    echo "-------------------------<br>";
}

