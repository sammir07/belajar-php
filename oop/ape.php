<?php

require_once 'index.php';

$sungokong = new Ape("kera sakti");
// $sungokong=yell() // "Auooo"

$sungokong->name="kerasakti";
$sungokong->yell="Auoooo";

echo $sungokong->name;
echo "<br>";
echo $sungokong->yell;
