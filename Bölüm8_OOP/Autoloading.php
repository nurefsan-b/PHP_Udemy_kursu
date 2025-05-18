<?php
spl_autoload_register(function ($class_name) {
    $file=__DIR__.'/clases/'.$class_name.'.php';

    if(file_exists($file)){
        require $file;
    }
});

$car=new Car ();
$car->drive();

$bike = new Bike ();
$bike->ride();