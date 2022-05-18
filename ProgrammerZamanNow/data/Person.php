<?php
/*
 * Class
 * Class adalah blueprint, prototype atau cetakan untuk membuat object.
 * Class berisi deklarasi semua properties dan functions yang dimiliki oleh object.
 * Untuk membuat class bisa menggunakan kata kunci "class".
 * Penamaan class menggunakan gaya penulisan CamelCase
*/

class Person{
    // Class Properties
    var string $name; // Type declaration dengan menentukan jenis tipe datanya.
    var string $address;
    var string $country = "Indonesia"; // Default Value Properties
}
