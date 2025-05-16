<?php
/*
kullanıcının tarayıcısında saklanan çerezlere 
erişim sağlayan bir süper global dizidir.
kullanıcı oturumunu takip etmek,tercihleri saklamak,
ve özel deneyimler sunmak için kullanılır

setcookie(name,value,expire,path,domain,secure,httponly);

 */
setcookie("kullanıcı","Ahmet",time()+3600);

echo $_COOKIE['kullanici'];
