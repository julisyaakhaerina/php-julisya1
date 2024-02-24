<?php

class contoh{
    public function __construct() {
            echo "Assalamualaikum <br>";
    }

    public function perkenalan(){
            echo "Nama saya Julisya <br>";
    }

    public function __destruct(){
            echo "Hallo nis";
    }
    
}
$cetak = new contoh();

echo $cetak-> perkenalan();

?>