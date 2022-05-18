<?php

/*
 * Function
 * Selain menambahkan properties, kita juga bisa menambahkan function ke object.
 * Caranya dengan mendeklarasikan function tersebut di dalam block Class.
 * Sama seperti function biasanya, kita juga bisa menambahkan return value dan parameter.
 * Untuk mengakses function tersebut, kita bisa menggunakan tanda -> dan diikuti dengan nama method-nya
*/
require_once "data/Person.php";

$Person1 = new Person();
$Person1->name = "Aji";
$Person1->address = "Chicago";
$Person1->country = "America";

echo "name : {$Person1->name}" . PHP_EOL;
echo "address : {$Person1->address}" . PHP_EOL;
echo "country : {$Person1->country}" . PHP_EOL;

// Function
$Person1->sayHalo($Person1->name); // Karena function memakai parameter, jadi saya isi ($Person1->name)

?>
