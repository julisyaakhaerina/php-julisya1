<?php

function luasPersegi() {
    echo "<h3> Menghitung Luas Persegi </h3>";
    echo "Rumus : Sisi x Sisi <br>";
    $Sisi = 5;
    $Luas = ($Sisi * $Sisi);
    echo "Sisi : $Sisi <br>";
    echo "Luasnya : $Luas <br>";
}
function luasPersegiPanjang() {
    echo "<h3> Menghitung Luas Persegi Panjang</h3>";
    echo "Rumus : Panjang x Lebar <br>";
    $panjang = 5;
    $lebar = 4;
    $Luas = ($panjang * $lebar);
    echo "Panjang : $panjang <br>";
    echo "Lebar : $lebar <br>";
    echo "Luasnya : $Luas <br>";
}
function luasSegitiga() {
    echo "<h3> Menghitung Luas Segitiga </h3>";
    echo "Rumus : Alas x Tinggi <br>";
    $alas = 5;
    $tinggi = 6;
    $Luas = ($alas * $tinggi);
    echo "Alas : $alas <br>";
    echo "Tinggi : $tinggi <br>";
    echo "Luasnya : $Luas <br>";
}
function luasLingkaran() {
    echo "<h3> Menghitung Luas Lingkaran </h3>";
    echo "Rumus : Konstanta x Jari-jari <br>";
    $k = 3.14;
    $jari = 4;
    $Luas = ($k * $jari);
    echo "Konstanta : $k <br>";
    echo "Jari-Jari : $jari <br>";
    echo "Luasnya : $Luas <br>";
}
luasPersegi();
echo "<hr>";
luasPersegiPanjang();
echo "<hr>";
luasSegitiga();
echo "<hr>";
luasLingkaran();#
?>