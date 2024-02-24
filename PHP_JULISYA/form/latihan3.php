<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
   <h2>Daftar SMK</h2>
   <!-- form -->
        <form method ="POST" action= "">
        <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type='text' name='nama'></td>
        </tr>
        <tr>
            <td>Tanggal_lahir</td>
            <td>:</td>
            <td><input type='date' name='tanggal_lahir'></td>
          </td>
        </tr>
        <tr>
            <td>Jenis_kelamin</td>
            <td>:</td>
            <td><input type='radio' name='jenis_kelamin' value="Laki-laki"> Laki-laki
            <td><input type='radio' name='jenis_kelamin' value="Perempuan"> Perempuan
        </tr>
        <tr>
            <td>Biaya Register<td>
            <td>:</td>
            <td><input type='text' name='biaya_register'></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><select name="jurusan">
                    <option value="RPL">RPL</option>
                    <option value="TBSM">TBSM</option>
                    <option value="TKRO">TKRO</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name = "simpan" value = 'DAFTAR'></td>
        </td>
        </tr>
        </table>
    </form> 
  </center>
</body>
</html>
<?php
if(isset($_POST['simpan'])) {
    $a = $_POST ['nama'];
    $b = $_POST ['tanggal_lahir'];
    $c = $_POST ['jenis_kelamin'];
    $d = $_POST ['biaya_register'];
    $e = $_POST ['jurusan'];
    $biaya = 0;

    if($e == "RPL" )  {
        $biaya = "2500000";
    } else if($e == "TBSM") {
        $biaya = "3000000";
    }else if($e == "TKRO") {
        $biaya = "3500000";
    } else {
        $biaya = "Jurusan tidak ada";
    }

    $total = $biaya + $d;

    echo "======== STRUK REGISTER ========<br>";
    echo "===============================<br>";
    echo "Nama : $a <br>";
    echo "Tanggal Lahir : $b <br>";
    echo "Jenis Kelamin : $c <br>";
    echo "Biaya Register : $d <br>";
    echo "Jurusan: $e <br>";
    echo "Biaya Jurusan : $biaya <br>";
    echo "Total Pembayaran : $total <br>";

}
?>