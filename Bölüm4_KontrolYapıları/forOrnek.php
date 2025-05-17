<?php
$ogrenciSayisi=10;
$toplamNot=0;

echo "Öğrenci Notları ve Hesaplama süreci:<br>";
for ($i = 1; $i <=$ogrenciSayisi;$i++)
{
    $not = rand(50,100);
    echo "Öğrenci {$i} notu: {$not}<br>";
}

$ortalama = $toplamNot / $ogrenciSayisi;
echo "<br> Toplam Sınıf Ortalaması: {$ortalama}";