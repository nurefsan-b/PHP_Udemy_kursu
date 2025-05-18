<?php
error_reporting(0);
try{
    $file = fopen('example.txt','r');
    if(!$file){
        throw new Exception("Dosya açılamadı.");
    }
}
catch(Exception $e){
    echo "Hata: ". $e->getMessage();
}
finally{
    echo "Bu kod her zaman çalışır.";
}
