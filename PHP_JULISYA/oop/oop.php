<?php
// buat class
class Manusia{
        // buat property / atribut
        public $nama = "Julisya";
        public $nama2 = "Annisa";

        // buat method / function
        public function makan(){
            echo " $this->nama suka keju";
        }
        public function minum(){
            echo " $this->nama2 suka jus";
        }
            
}

// buat object
$cetak = new Manusia();

echo $cetak->makan();
echo "<br>";
echo $cetak->minum();

?>