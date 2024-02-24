<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <center>
   <h2>Form Biodata Diri</h2>
   <!-- form -->
        <form method ="POST" action= "">
        <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type='text' name='nama'></td>
        </tr>
        <tr>
        <tr>
            <td>Tanggal_lahir</td>
            <td>:</td>
            <td><input type='date' name='tanggal_lahir'></td>
        </tr>
        <tr>
            <td>jenis_kelamin</td>
            <td>:</td>
            <td><input type='radio' name='jenis_kelamin' value="Laki-laki"> Laki-laki
            <td><input type='radio' name='jenis_kelamin' value="Perempuan"> Perempuan
        </tr>
        <tr>
            <td>alamat</td>
            <td>:</td>
            <td><textarea name="alamat"  cols="30" rows="5"></textarea></td>
        </tr>
        <tr>
            <td>agama</td>
            <td>:</td>
            <td>
            <select name="agama">
                <option value="">Pilih</option>
                <option value="islam">islam</option>
                <option value="kristen">kristen</option>
                <option value="hindu">hindu</option>
                <option value="budha">budha</option>
                <option value="konghucu">konghucu</option>
                <option value="katolik">katolik</option>
            </select>
            </td>
        </tr>
        <tr>
            <td>pendidikan_terakhir</td>
            <td>:</td>
            <td>
                <select name="pendidikan_terakhir">
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMK">SMK</option>
                    <option value="SMA">SMA</option>
                    <option value="Kuliah">Kuliah</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>status</td>
            <td>:</td>
            <td><input type='text' name='status'></td>
        </tr>
        <tr>
            <td>hobi</td>
            <td>:</td>
            <td><input type='text' name='hobi'></td>
        </tr>
        <tr>
            <td>cita_cita</td>
            <td>:</td>
            <td><input type='text' name='cita_cita'></td>
        </tr>
            <td></td>
            <td></td>
            <td><input type="submit" name = "simpan" value = 'KIRIM'></td>
        </tr>
    </table>
    </form> 
  </center>
</body>
</html>
<?php
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal_lahir'];
    $jenis = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $pendidikan = $_POST['pendidikan_terakhir'];
    $status = $_POST['status'];
    $hobi = $_POST['hobi'];
    $cita_cita = $_POST['cita_cita'];

    echo "======== Biodata Diri ========<br>";
    echo "==============================<br>";
    echo "Nama = $nama <br>";
    echo "Tanggal lahir = $tanggal <br>";
    echo "jenis kelamin = $jenis <br>";
    echo "alamat = $alamat <br>";
    echo "agama = $agama <br>";
    echo "pendidikan_terakhir = $pendidikan <br>";
    echo "status = $status <br>";
    echo "hobi = $hobi <br>";
    echo "cita_cita= $cita_cita <br>";
}