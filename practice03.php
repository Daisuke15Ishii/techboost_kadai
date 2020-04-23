<?php
//課題1
$name = 'Daisuke';
if ($name == 'Daisuke'){
    echo '私は' .$name . 'です'."\n";
}else{
    echo $name . 'ではありません'."\n";
}


//課題2
$total = 0;
for($i = 1; $i <= 10000; $i++){
    $total += $i;
}
echo $total ."\n";


//課題3
$fruits = array("apple", "orange", "lemon", "grape", "ichigo");
foreach($fruits as $fruit){
    echo $fruit ."\n";
}


//課題4
$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){
  if($i % 5 == 0){
    echo $i ."\n";
  }
}

