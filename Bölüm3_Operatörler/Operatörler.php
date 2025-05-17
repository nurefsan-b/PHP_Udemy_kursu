<?php
/*birden fazla değişken veya değer üzerinde 
işlem yapmamıza olanak sağlar.
Matematiksel işlemlerden mantıksal karşılaştırmalara 
string birleştirme işlemlerinden hata kontrolüne 
kadar birçok işlemde kullanılır.
  */

  $x=5;
  $x +=3;
  echo $x;

  $z=10;
  $z -= 2;
  echo $z;
  
  $y =4;
  $y *=4;
  echo $x;

  $n = 20;
  $n /=5;
  echo $n;

  $m =10;
  $m %=3;
  echo $m;

  /* Karşılaştırma operatörleri */

  var_dump(5=="5");

  var_dump(5===5);

  var_dump(5<3);
  var_dump(5>3);
  var_dump(5<=3);
  var_dump(5>=3);
  var_dump(5<=>3);

  $age =18;
  if($age =18){
    echo "Reşitsiniz.";
  }
  else{
    echo "Reşit değilsiniz.";
  }

  for($i=0;$i<=5;$i++){
    echo $i . "\n";
  }


  

