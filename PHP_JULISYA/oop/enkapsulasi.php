<?php

class manusia{

    public $nama = "Julisya bageur";

    private function tampilkan_nama(){
        echo "Nama saya malas ngoding <br/>";
    }

    public function keluarkan(){
        $this->tampilkan_nama();
    }
}

$cetak = new manusia();
//manggil method
echo $cetak->keluarkan();
//manggil property
echo $cetak->nama;

?>