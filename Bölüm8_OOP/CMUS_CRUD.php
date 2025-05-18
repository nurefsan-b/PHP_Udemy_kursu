<?php
/*
CMS CRUD Projesi Adım Adım Uygulama

Sınıf Dosyasını Oluşturma 
Bir post.php dosyası oluştur
İçinde bir Post sınıfı tanınmla
Sınıf içinde bir $posts adında,içerikleri saklayacak
özel(private) bir özellik tanımla
 */

require 'Post.php';

$postManager=new Post();

$postManager->create("PHP","Web geliştirme dili");
$postManager->create("OOP","Nesne temelli programlama");

echo "<pre>";
//print_r($postManager->readAll());

//print_r($postManager->read(1));

$postManager->update(1,"PHP nedir?","PHP...");

$postManager-> delete(1);
print_r($postManager->readAll());
?>