<?php
/*
 * Default Properties Value
 * Sama seperti variable, di properties juga kita bisa langsung mengisi value-nya.
 * Ini mirip seperti default value, jadi jika tidak diubah di object, maka properties akan memiliki value tersebut.
*/

require_once "data/Person.php";

// Instansiasi object
$person1 = new Person();

// Menambahkan properties
$person1->name = "Eko";
$person1->address = "Subang";


echo "Nama   : {$person1->name}" . PHP_EOL;
echo "Alamat : {$person1->address}" . PHP_EOL;
echo "Negara : {$person1->country}" . PHP_EOL;  // default value, akan diisi Indonesia

$person2 = new Person();
$person2->name = "Aji";
$person2->address = "Chicago";
$person2->country = "United States";

echo "Nama   : {$person2->name}" . PHP_EOL;
echo "Alamat : {$person2->address}" . PHP_EOL;
echo "Negara : {$person2->country}" . PHP_EOL;

?>
