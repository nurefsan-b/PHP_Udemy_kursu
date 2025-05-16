<?php

//__LINE__ - Kodun bulunduğu satır numarasını döndürür.
echo "Bu kodun satır numarası:".__LINE__;

//__FILE__ - çalışan dosyanın tam dosya yolunu döndürür
echo "Bu dosyanın yolu:".__FILE__;

//__DIR__ - çalışan dosyanın bulunduğu dizin
echo "Bu dosyanın bulunduğu dizin:".__DIR__; 

//__FUNCTION__ - bulunduğu fonksiyonun adını döndürür
function selamVer()
{
    echo "Bu fonksiyonun adı:".__FUNCTION__;
}

selamVer();

//__CLASS__ - bulunduğu sınıfın adını döndürür.
class Araba
{
    public function model()
    {
        echo"Bu sınıfın adı:".__CLASS__;
    }

}

$arabam =new Araba();
$arabam->model();

//trait:birden fazla sınıfa aynı metodu yüklemek

trait Kullanılabilir
{
    public function bilgi()
    {
        echo "Bu trait'in adı: ".__TRAIT__;
    }
}

class Test
{
    use Kullanılabilir;
}

$nesne = new Test();
$nesne->bilgi();
//Çıktı: Bu trait'in adı:Kullanılabilir

//__METHOD__ - bulunduğu metodun tam adını döndürür
class Ornek{
    public function test(){
        echo "Bu metodun tam adı:".__METHOD__;
    }
}

$nesne= new Ornek();
$nesne->test();
//çıktı: Bu metodun tam adı: Ornek::test

//__NAMESPACE__- bulunduğu Namespace'in adını döndürür
echo ornekNamespace;
echo "Bu namespace'in adı:".__NAMESPACE__;
//çıktı: BU namespace'in adı: orneksNamespace
