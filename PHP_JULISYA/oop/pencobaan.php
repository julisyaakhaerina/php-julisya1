<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


    <title>latihan</title>
</head>
<body>
    <center>
  <img src="./logo-ass.png" width="400" height="150">
  <div class="card-body">
    <h4 class="card-title">PENGGAJIHAN</h4>
    <h4 class="card-title">GURU/KARYAWAN YAYASAN ASSALAAM</h4>
</div>
</center>
</body>
<!-- content -->
<div class="card mt-5 ml-5 mr-5">
  <div class="card-header">
    DATA PENGGAJIHAN
</div>
  <div class="card-body">
    <form method="post" action="">
    <div class="form-group">
    <label for="exampleInputNo">No</label>
    <input type="text" class="form-control" name="no">
  </div>
  <div class="form-group">
    <label for="exampleInputNama">Nama</label>
    <input type="text" class="form-control" name="nama">
  </div>
  <div style="margin-bottom: 1rem;">
        <label>Unit Pendidikan</label> <br>
        <select name="unit_pendidikan" class="form-control">
            <option value="TK">TK</option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
            <option value="SMK">SMK</option>
        </select>
    </div>
    <div class="form-group">
    <label for="exampleInputTanggalgaji">Tanggal Gaji</label>
    <input type="date" class="form-control" name="tanggal_gaji" >
  </div>
  <!-- /content -->


  <!-- Bagian Perhitungan -->
  <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><center>GAJI</center></h5>
        <div style="margin-bottom: 1rem;">
        <label>Jabatan</label> <br>
        <select name="jabatan" class="form-control">
            <option value="Kepala_sekolah">Kepala Sekolah</option>
            <option value="Wakasek">Wakasek</option>
            <option value="Guru">Guru</option>
            <option value="Karyawan">Karyawan</option>
        </select>
      </div>
      <div class="form-group">
    <label for="exampleInputLamakerja">Lama Kerja</label>
    <input type="text" class="form-control" name="lama_kerja">
     </div>
    <div style="margin-bottom: 1rem;">
        <label>Status Kerja</label> <br>
        <select name="status_kerja" class="form-control">
            <option value="Tetap">Tetap</option>
            <option value="Kontrak">Kontrak</option>
        </select>
    </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><center>POTONGAN</center></h5>
    <div class="form-group">
    <label for="exampleInputBpjs">BPJS</label>
    <input type="text" class="form-control" name="bpjs">
    </div>
    <div class="form-group">
    <label for="exampleInputPinjaman">Pinjaman</label>
    <input type="text" class="form-control" name="pinjaman">
    </div>
    <div class="form-group">
    <label for="exampleInputTabungan">Tabungan</label>
    <input type="text" class="form-control" name="tabungan">
    </div>
    <div class="form-group">
    <label for="exampleInputLainnya">Lainnya</label>
    <input type="text" class="form-control" name="lainnya">
    </div>
      </div>
    </div>
  </div>
</div>
</html>
<center>
<button type="submit" class="btn btn-secondary mt-4 ml-5 mr-5" name="submit">submit</button>
</center>
<!-- /bagian perhitungan -->

<?php
if(isset($_POST['submit'])){

  $no = $_POST['no'];
  $nama = $_POST['nama'];
  $unit_pendidikan = $_POST['unit_pendidikan'];
  $tanggal_gaji = $_POST['tanggal_gaji'];
  $jabatan = $_POST['jabatan'];
  $gaji;
  $lama_kerja= $_POST['lama_kerja'];
  $status_kerja= $_POST['status_kerja'];
  $bonus;
  $bpjs = $_POST['bpjs'];
  $pinjaman = $_POST['pinjaman'];
  $tabungan = $_POST['tabungan'];
  $lainnya = $_POST['lainnya'];#
  $gaji_bersih;

  if($jabatan== "Kepala_sekolah"){
    $gaji = 5000000;
  } elseif($jabatan== "Wakasek"){
    $gaji = 4000000;
  } elseif($jabatan== "Guru"){
    $gaji = 3000000;
  } elseif($jabatan== "Karyawan"){
    $gaji = 2000000;
  } else {
    echo "Pilih Jabatan Anda";
  } if ($status_kerja== "Tetap") {
    $bonus = 1000000;
  } elseif ($status_kerja == "Kontrak") {
    $bonus = 0;
  } else {
    echo "Pilih Status Kerja Anda";
  }

  $gaji_bersih = $gaji + $bonus - $bpjs - $pinjaman - $tabungan - $lainnya;

class hasil {

    public function pendaftaran($no2,$nama2,$unit_pendidikan2,$tanggal_gaji2,$jabatan2,$gaji,$lama_kerja2,$status_kerja2,$bonus,$bpjs2,$pinjaman2,$tabungan2,$lainnya2,$gaji_bersih) {

    
?>
  
      <center>
    <div class="card text-bold bg-light mt-5 mb-5" style="max-width: 25rem;">
  <div class="card-header"><h4>DATA PENGGAJIHAN</h4></div>
  <div class="card-body">
    <h5 class="card-title">STUKTUR GAJI !</h5>
    <table>
      <tr>
        <td>No</td>
        <td>:</td>
        <td><?php echo $no2 ?></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><?php echo $nama2 ?></td>
      </tr>
      <tr>
        <td>Unit Pendidikan</td>
        <td>:</td>
        <td><?php echo $unit_pendidikan2 ?></td>
      </tr>
      <tr>
        <td>Tanggal Gaji</td>
        <td>:</td>
        <td><?php echo $tanggal_gaji2 ?></td>
      </tr>
      <tr>
        <td>Jabatan</td>
        <td>:</td>
        <td><?php echo $jabatan2 ?></td>
      </tr>
      <tr>
        <td>Gaji</td>
        <td>:</td>
        <td><?php echo $gaji ?></td>
      </tr>
      <tr>
        <td>Lama Kerja</td>
        <td>:</td>
        <td><?php echo $lama_kerja2?></td>
      </tr>
      <tr>
        <td>Status Kerja</td>
        <td>:</td>
        <td><?php echo $status_kerja2 ?></td>
      </tr>
      <tr>
        <td>Bonus</td>
        <td>:</td>
        <td><?php echo $bonus ?></td>
      </tr>
      <tr>
        <td>BPJS</td>
        <td>:</td>
        <td><?php echo $bpjs2 ?></td>
      </tr>
      <tr>
        <td>Pinjaman</td>
        <td>:</td>
        <td><?php echo $pinjaman2 ?></td>
      </tr>
      <tr>
        <td>Tabungan</td>
        <td>:</td>
        <td><?php echo $tabungan2 ?></td>
      </tr>
      <tr>
        <td>Lainnya</td>
        <td>:</td>
        <td><?php echo $lainnya2?></td>
      </tr>
      <tr>
        <td>Gaji bersih</td>
        <td>:</td>
        <td><?php echo $gaji_bersih?></td>
      </tr>
    </table>
  </div>
  </div>
  </center>
  <?php

     }
  }

  $cetak = new hasil();

  echo $cetak->pendaftaran($no,$nama,$unit_pendidikan,$tanggal_gaji,$jabatan,$gaji,$lama_kerja,$status_kerja,$bonus,$bpjs,$pinjaman,$tabungan,$lainnya,$gaji_bersih);
  }
