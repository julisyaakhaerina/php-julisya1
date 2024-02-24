<center>
<?php
if(isset($_REQUEST['simpan'])){
    $Nama_Lengkap = $_REQUEST['nama_lengkap'];
    $Jenis_Kelamin = $_REQUEST['Jenis_Kelamin'];
    $Tanggal_Lahir = $_REQUEST['tanggal_lahir'];
    $Kategori_Olahraga = $_REQUEST['kategori_olahraga'];
    $Pilihan_Kelas = $_REQUEST['PK'];
    $Kemampuan_Fisik = $_REQUEST['KF'];
    $Pembayaran = $_REQUEST['Pembayaran'];
    $diskon = 0;
    
    if($Kategori_Olahraga == "Sepak_Bola") {
        $harga = 0;
            if($Pilihan_Kelas == "pemula") {
                $harga += 200000;
            } else if ($Pilihan_Kelas == "menengah") {
                $harga += 250000;
            } else if ($Pilihan_Kelas == "lanjutan") {
                $harga += 300000;
            }
        } else if ($Kategori_Olahraga == "Bulu_Tangkis") {
        $harga = 0;
        if ($Pilihan_Kelas == "pemula") {
            $harga += 150000;
            if ($Jenis_Kelamin == "Perempuan") {
                $diskon += $harga * 0.1;
            }
        } elseif ($Pilihan_Kelas == "menengah") {
            $harga += 200000;
            if ($Jenis_Kelamin == "Perempuan") {
                $diskon += $harga * 0.1;
            }
        } elseif ($Pilihan_Kelas == "lanjutan") {
            $harga += 250000;
            if ($Jenis_Kelamin == "Perempuan") {
                $diskon += $harga * 0.1;
            }
        }

    } else if ($Kategori_Olahraga == "Renang") {
        $harga = 0;
        if ($Pilihan_Kelas == "pemula") {
            $harga += 100000;
        } elseif ($Pilihan_Kelas == "menengah") {
            $harga += 220000;
        } elseif ($Pilihan_Kelas == "lanjutan") {
            $harga += 270000;
        }
        
    }
     
    $total = $harga - $diskon;

    if ($total > 500000) {
        $keputusan = "Selamat anda mendapatkan hadiah";
    } else {
        $keputusan = "Total Harga anda Tidak mencapai tujuan, anda tidak bisa mendapatkan hadiah :(";
    }


    echo "<h1>Formulir Pendaftaran </h1>=================<br>";
    echo "===================================================<br>";
    echo "Nama Lengkap       = $Nama_Lengkap <br>";
    echo "Jenis Kelamin      = $Jenis_Kelamin <br>";
    echo "Tanggal Lahir      = $Tanggal_Lahir <br>";
    echo "Kategori Olahraga  = $Kategori_Olahraga <br>";
    echo "Pilihan Kelas      = $Pilihan_Kelas <br>";
    echo "Kemampuan Fisik    = $Kemampuan_Fisik <br>";
    echo "Pembayaran         = $Pembayaran <br>";
    echo "Harga              = Rp. $harga <br>";
    echo "Diskon             = Rp. $diskon <br>";
    echo "Total Harga        = Rp. $total <br>";
    echo "<br>";
    echo $keputusan;
}
?>





