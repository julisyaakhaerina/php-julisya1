<?php
$nama = $_POST['nama'];
$tahun_lahir= $_POST['tahun_lahir'];

if ($tahun_lahir >= 1944 && $tahun_lahir <= 1964) {
    $generasi = "Baby Boomer";
} elseif ($tahun_lahir >= 1965 && $tahun_lahir <= 1979) {
    $generasi = "Generasi X";
} elseif ($tahun_lahir >= 1980 && $tahun_lahir <= 1994) {
    $generasi = "Generasi Y (milenial)";
} elseif ($tahun_lahir >= 1995 && $tahun_lahir <= 2015) {
    $generasi = "Generasi Z";
} else {
    $generasi = "Generasi tidak terdefisini";
}

echo "$nama , Berdasarkan tahun lahir anda tergolong $generasi <br>";
?>