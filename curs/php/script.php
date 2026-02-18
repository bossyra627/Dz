<?php
//function convertUsd($rub, $exchange) {
//    $usd = $rub / $exchange;
//    return round($usd,3);
//}
//
//echo "<br>";
//
//$money = 5000;
//$exchangeRate = 79.97;
$rub =  $_POST['rub'];
$dol =  $_POST['dol'];
$converter= 80;
$rubToDol = $rub / $converter;
$dolToRub = $dol * $converter;


echo "После конвертации рублей вы получите $" . $rubToDol;
echo "<br>";
echo "После конвертации долларов вы получите ₽" . $dolToRub;