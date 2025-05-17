<?php
/*$dizi=["PHP","Javascript","Python"];

foreach ($dizi as $deger)
{
    echo $deger . " ";
}*/

$kategoriler = ["Elektronik","Ev ve Yaşam","Kitaplar","Moda","Spor","Oyun ve Eğlence"];

echo "<h3> Kategoriler:</h3>";
echo "<ul>";
foreach($kategoriler as $kategori){
    echo "<li>{$kategori}</li>";
}
echo "</ul>";

?>

<?php
for($i =1;$i<=10;$i++){
    if($i==5){
        break;
    }
    echo $i . " ";
}