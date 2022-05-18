<?php
/*
 * Properties Type Declarations
 * Sama seperti di function, di properties pun, kita bisa membuat type declaration
 * Ini membuat PHP otomatis memeriksa tipe data yang sesuai dengan type declaration yang telah ditentukan
 * Jika kita mencoba mengubah properties dengan tipe yang berbeda, maka otomatis akan error
 * Ingat, bahwa PHP memiliki fitur type juggling yang secara otomatis akan mengkonversi menjadi tipe data lainnya
 * Untuk menambahkan type declaration, kita bisa tambahkan setelah kata kunci 'var' di properties
*/

require_once "data/Person.php";

// Instansiasi object
$person1 = new Person();

// Menambahkan properties
$person1->name = "Eko";
// $person1->name = []; // PHP Fatal error:  Uncaught TypeError: Typed property Person::$name must be string, array used
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
