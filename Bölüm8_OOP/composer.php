<?php
/*composer,bağımlılık yönetimi sağlar
sınıf dosyalarını dinamik olarak yükler */

require __DIR__. '/vendor/autoload.php';

use Kurs\Example\Vehicles\Car;

$car= new Car();
$car->drive();