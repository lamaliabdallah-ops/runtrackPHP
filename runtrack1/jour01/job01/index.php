<?php
// Création et affichage de la variable $str
$str = "LaPlateforme";
echo $str . "<br>";

// Création de $str2 et $str3, affichage avec concaténation
$str2 = "Vive";
$str3 = "!";
echo $str2 . " " . $str . " " . $str3 . "<br>";

// Variable entière $val, affichage, ajout de 4, nouvel affichage
$val = 6;
echo $val . "<br>";
$val += 4;
echo $val . "<br>";

// Variable booléenne $myBool, affichage true puis false
$myBool = true;
echo $myBool . "<br>"; // Affiche 1
$myBool = false;
echo $myBool . "<br>"; // N'affiche rien car false
?>
