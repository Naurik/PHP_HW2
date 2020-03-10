<?php

//1
$string = "werw,rewr||ww%k#l*>qq|\\";
$array = [',', ':', ';','!', '@', '#', '$', '%', '?', '>', '<', '-',
    '=', ')','(', '*', '&', '^', '[', ']', '{', '}','\\', '//', '|', '~', '+'];
$str = str_replace($array, '.', $string);
echo $str . "\n";

//2,3,4
$str2 = 'a1234rdgda66';

$arrStr = str_split($str2);
$min=9;
$max=0;
$average=0;
$sum = 0;

for($i=0; $i<count($arrStr); $i++)
{
    if(is_numeric($arrStr[$i])==false)
    {
        $arrStr[$i] = (int)$arrStr[$i]; //если не число то автоматический 0
    }

    if($arrStr[$i] < $min)
        $min = $arrStr[$i];
    if($arrStr[$i] > $max)
        $max = $arrStr[$i];

    $sum+=$arrStr[$i];
}

$average = $sum/count($arrStr);

echo "min = " . $min . "\n";
echo "max = " . $max . "\n";
echo "average = " . $average . "\n";
