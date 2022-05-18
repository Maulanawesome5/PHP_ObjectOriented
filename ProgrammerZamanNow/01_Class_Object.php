<?php
/*
 * Class
 * Class adalah blueprint, prototype atau cetakan untuk membuat object.
 * Class berisi deklarasi semua properties dan functions yang dimiliki oleh object.
 * Object
 * Object adalah hasil instansiasi dari suatu class.
 * Untuk membuat object kita bisa menggunakan kata kunci new, dan diikuti dengan nama Class
 * beserta tanda kurung bulat '()'
*/

require_once "data/Person.php";

$person1 = new Person();
var_dump($person1);

?>