<?php

//function tambah
function tambah($int1,$int2){
  return $int1+$int2;
}

//function kurang
function kurang($int1,$int2){
  return $int1-$int2;
}

//function kali
function kali($int1,$int2){
  return $int1*$int2;
}

//function bagi
function bagi($int1,$int2){
  return $int1/$int2;
}

$a = 1;
$b = 2;
$c = $a + $b;

echo $a;
echo $b;
echo $c;

echo tambah($a,$b);
echo kurang($a,$b);
echo kali($a,$b);
echo bagi($a,$b);

echo tambah(10,30);
echo kurang(30,10);
echo kali(20,20;
echo bagi(20,5);
