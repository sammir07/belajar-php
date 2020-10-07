<?php

error_reporting(0);
function tentukan_nilai1($number)
{
    //  kode disini
    $nilai1 = $number ;
    echo "<br>";
    echo $nilai1;
    if($nilai1 = 98 ){
        echo " Sangat baik";
    }
  
}

echo tentukan_nilai1(98); //Sangat Baik
function tentukan_nilai2($number)
{
    //  kode disini
    $nilai1 = $number ;
    echo "<br>";
    echo $nilai1;
    if($nilai1 = 76 ){
        echo  " baik";
    }
  
}
echo tentukan_nilai2(76); //Baik

function tentukan_nilai3($number)
{
    //  kode disini
    $nilai1 = $number ;
    echo "<br>";
    echo $nilai1;
    if($nilai1 = 67 ){
        echo  " cukup";
    }
  
}
echo tentukan_nilai3(67); //cukup

function tentukan_nilai4($number)
{
    //  kode disini
    $nilai1 = $number ;
    echo "<br>";
    echo $nilai1;
    if($nilai1 = 43 ){
        echo  " kurang";
    }
  
}
echo tentukan_nilai4(43); //kurang

//TEST CASES
echo tentukan_nilai(98); //Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang
?>


