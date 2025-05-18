<?php
echo $bul=rand(1,5);

if ($bul == 3){
    echo "Tebrikler kazandınız.";
}

print_r($bul);

$text="Merhaba";
$length=strlen($text);
echo "String uzunluğu:".$length; //çıktı 14 boşluk ve türkçe karakterden

$position = strpos($text,"Dünya");
echo "'Dünya kelimesi şu konumda başlıyor:'".$position;
//Çıktı:'Dünya' kelimesi şu konumda başlıyor:8

$trimmedText=trim($text);

$substring=substr($text,8,5);
echo "Parça:".$substring;
echo abs(-10);//mutlak
echo round(3.4);//3
echo rand(1,10);
echo ceil(3.1);
echo floor(3.9);

echo strtotime("2024-12-25");
echo date("Y-m-d H:i:s");
echo time();
echo mktime(15,30,45,12,25,2024);
echo "<pre>";
print_r(getdate());


$contents=file_get_contents("example.txt");

$file = fopen("example.txt","r");//a yazarsan üstüne ekler
if($file){
    echo "Dosya başarıyla açıldı.";
}
fwrite($file,"Yeni içerik");
fclose($file);

if(file_exists("example.txt")){
    echo "Dosya mevcut.";
}
else{
    echo "Dosya mevcut değil.";
}
?>





