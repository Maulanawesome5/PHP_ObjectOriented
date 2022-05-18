<?php
/*
 * Class Properties
 * Field / Properties / Attributes adalah data yang bisa disimpan didalam object
 * Namun sebelum memasukkan data di fields, kita harus mendeklarasikan data apa saja
 * yang dimiliki oleh object tersebut didalam class-nya.
*/

require_once "data/Person.php";

// Instansiasi object
$person1 = new Person();

// Menambahkan properties
$person1->name = "Eko";
$person1->address = "Subang";
$person1->country = "Indonesia";

echo "Nama   : {$person1->name}" . PHP_EOL;
echo "Alamat : {$person1->address}" . PHP_EOL;
echo "Negara : {$person1->country}" . PHP_EOL;

$person2 = new Person();
$person2->name = "Budi";
$person2->address = "Jakarta";
$person2->country = "Indonesia";

echo "Nama   : {$person2->name}" . PHP_EOL;
echo "Alamat : {$person2->address}" . PHP_EOL;
echo "Negara : {$person2->country}" . PHP_EOL;

?>
