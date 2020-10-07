<?php
error_reporting(0);
function tukar_besar_kecil1($string){
//kode di sini
$kalimat1 = "hELLO wORLD";
echo ucfirst($kalimat1);
echo "<br>";
}
function tukar_besar_kecil2($string){
    //kode di sini
    $kalimat1 = "i Am Alay";
    echo ucfirst($kalimat1);
    echo "<br>";
    }
    
    function tukar_besar_kecil3($string){
    //kode di sini
    $kalimat1 = "mY nAME IS bOND!!";
    echo ucfirst($kalimat1);
    echo "<br>";
    }

    function tukar_besar_kecil4($string){
        //kode di sini
        $kalimat1 = "it Should Be ME";
        echo ucfirst($kalimat1);
        echo "<br>";
        }

        function tukar_besar_kecil5($string){
            //kode di sini
            $kalimat1 = "001-a-3-5tRDyw";
            echo ucfirst($kalimat1);
            echo "<br>";
            }
// TEST CASES
echo tukar_besar_kecil1('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil2('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil3('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil4('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil5('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>