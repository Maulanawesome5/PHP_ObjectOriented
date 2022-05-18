<?php

/*
 * Nullable Properties
 * Saat kita menambah type declaration di properties atau di function argument
 * maka secara otomatis kita tidak bisa mengirim data null ke dalam properties
 * atau function argument tersebut.
 * Di PHP 7.4 dikenalkan nullable type, jadi kita bisa mengirim data null ke properties
 * atau function arguments
 * Caranya sebelum type declaration, tambahkan tanda tanya '?'
*/
require_once "data/Person.php";

$Person1 = new Person();
$Person1->name = "Aji";
$Person1->address = null;
$Person1->country = "Indonesia";

echo "name : {$Person1->name}" . PHP_EOL;
echo "address : {$Person1->address}" . PHP_EOL;
echo "country : {$Person1->country}" . PHP_EOL;

?>
