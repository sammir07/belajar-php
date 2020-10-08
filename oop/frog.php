<?php

require_once 'index.php';

$sungokong = new Frog("buduk");
// $sungokong->yell() // "hip hop"

$sungokong->name="buduk";
$sungokong->yell="hip hop";

echo $sungokong->name;
echo "<br>";
echo $sungokong->yell;
