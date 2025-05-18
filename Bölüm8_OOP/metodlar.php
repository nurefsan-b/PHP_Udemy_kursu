<?php
class Araba {
    public $marka;
    public $model;
    public $renk;
    public $hiz;
    
    private $veriler=[];

    public function __construct(){
       // echo 'Araba sınıfı oluşturuldu.';
       $this->marka=$marka;
       $this->model=$model;
       $this->renk=$renk;
       $this->hiz=$hiz;
    }

    public function __set($name,$value){
        $this->veriler[$name] = $value;
    }
    public function __get($name){
        return "Bu property mevcut değil".$name;
    }

    public function __toString(){
        return $this->bilgileriGoster();
    }

    public function __call($name,$arguments){
        return "Bu method mevcut değil:" .$name;
    }

    public function __destruct(){
        echo"Araba nesnesi silindi";
    }
    public function bilgileriGoster(){
        return $this->marka.' '.$this->model. ' ' .$this->renk. ' ' .$this->hiz;
    }
}

$bmw = new Araba("BMW","X6","Siyah",280);
/*$bmw =new Araba();
$bmw->marka='BMW';
$bmw->model='X6';
$bmw->renk='siyah';
$bmw->hiz=280;*/

echo $bmw->bilgileriGoster1();