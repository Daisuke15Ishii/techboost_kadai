<?php
/*テキスト例文
$string = 'I love Ruby';
$new_string = str_replace("Ruby", "PHP", $string);
echo $new_string ."\n";

$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo count($array)  ."\n";
*/

//課題1
function bai2($num){
    $bai = $num * 2;
    return $bai;
}

$aaa = 3;
$bai = bai2($aaa);
echo $aaa . 'の2倍は' . $bai ."\n";


//課題2
function f($a, $b){
    $c = $a + $b;
    return $c;
}

$ccc = f(2, 3);
echo '足し算合計は' .$ccc ."\n";


//課題3
function func($arr){
    $total = 1;
    foreach($arr as $ar){
        $total *= $ar;
    }
    return $total;
}
$array = [1,3,5,7,9];
$total = func($array);
echo '配列内の数字を全てかけた合計は' . $total ."\n";


//課題4
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a){
            $max_number = $a;
        }
    }
    return $max_number;
}
$array = [1,7,11,15,9];
$maxtest = max_array($array);
echo '配列内の一番大きい値は' . $maxtest ."\n";


//課題5(strip_tags)
$string = '<a href="http://google.com"><b>Google</b>は<br><strong>凄い</strong></a><hr>';
$result = strip_tags($string,'<b><hr>');
echo $result ."\n";

//課題5(array_push)
$data = array("A", "B", "C");
array_push($data, "D", "E", $array);
var_dump($data) ."\n";


//課題5(array_merge)
$data2 = array("A", "B", "C");
$data2 = array_merge($data2, $array);
var_dump($data2) ."\n";


//課題5(time, mktime,date)
$nowt = time();
$timestamp = mktime(12,3,2,4,19,2020);
$now = date('Y年m月d日H時i分s秒', $nowt);
echo $nowt ."\n";
echo $timestamp ."\n";
echo $now ."\n";

