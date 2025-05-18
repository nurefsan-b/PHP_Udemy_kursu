<?php
/*class Araba{
    public $marka;
    public $model;
    public$renk;
    public $hiz=0;

    public function hizlan($artis){
        $this->hiz  += $artis;
    }
    public function yavasla($azalis){
        $this->hiz -=$azalis;
    }
    public function dur(){
        $this->hiz=0;
    }
}*/

class Araba {
    public $marka;
    public $model;

    public function bilgileriGoster(){
        return $this->marka . '' . $this->model;
    }
}

$bmw = new Araba();
$bmw->marka = 'bmw';
$bmw->model = 'x6';

echo $bmw->bilgileriGoster();
echo "<br>";
echo $bmw->marka;