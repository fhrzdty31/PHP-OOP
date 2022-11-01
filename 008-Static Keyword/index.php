<?php

// class Contoh {
//     public static $angka = 1;

//     public static function halo(Type $var = null) {
//         return "Hello World ke-" . self::$angka++;
//     }
// }

// echo "<br>";
// echo Contoh::halo();
// echo "<br><hr>";
// echo Contoh::halo();
// echo "<br><hr>";
// echo Contoh::halo();

class Contoh {
    public static $angka = 1;

    public function halo(Type $var = null) {
        return "Hello World ke-" . self::$angka++;
    }
}

$obj1 = new Contoh();
$obj2 = new Contoh();

echo "<br>";
echo $obj1->halo();
echo "<br><hr>";
echo $obj1->halo();
echo "<br><hr>";
echo $obj1->halo();

echo "<br><hr>";
echo $obj2->halo();
echo "<br><hr>";
echo $obj2->halo();
echo "<br><hr>";
echo $obj2->halo();