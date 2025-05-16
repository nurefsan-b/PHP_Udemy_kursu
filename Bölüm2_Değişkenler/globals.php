<?php
$isim="Ahmet";
$yas=25;

echo "<pre>";
print_r($GLOBALS);
echo "</pre>";

echo $GLOBALS['isim'];

//Server küresel değişkeni

echo "<pre>";
print_r($_SERVER);
echo "</pre>";

echo $_SERVER['Request_METHOD'];
if($_SERVER['REQUEST_METHOD']=="GET")
{
    echo"Bu bir Get metodur.";
}
?>
<form action="" method="POST">
    <input type="text">
    <button type="Submit">Gönder</button>
</form>

<?php
/*php de request http isteklerinden gelen tüm 
giriş verilerini tek bir yerden erişilebilir hale getiren 
bir süper global dizidir.
get post cookie
*/

echo "<pre>";
print_r($_REQUEST);
echo "</pre>";

echo $_REQUEST['ad'];
?>

<form action="" method="POST">
    <input name="ad" type="text">
    <button type="submit">Gönder</button>
</form>

<?php 
/* PHP'de $FILES,bir form aracılığıyla sunucuya 
dosyaların bilgilerini içerir.
Bu dizi,dosya adı,geçici konumu,boyutu
gibi bilgileri tutar */

echo "<pre>";
print_r($_FILES['dosya']);
echo "</pre>";
?>

<form action="" method="POST" enctype="multipart/form-data">
    <input name="dosya" type="file">
    <button type="submit">Gönder</button>
</form>

<?php
/* $_ENV çevresel değişkenlere erişim sağlar 
env dosyasıyla çalışır*/
