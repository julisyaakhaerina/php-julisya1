<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
     <center>
   <h2>Formulir Pendaftaran</h2>
   <!-- form -->
        <form method ="POST" action= "hasilform3.php">
        <table>
        <tr>
            <td>Nama_Lengkap</td>
            <td>:</td>
            <td><input type='text' name='nama_lengkap'></td>
        </tr>
        <tr>
            <td>Jenis_Kelamin</td>
            <td>:</td>
            <td>
                <select name="Jenis_Kelamin">
                    <option value="Perempuan">Perempuan</option>
                    <option value="Laki_Laki">Laki_Laki</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tanggal_lahir</td>
            <td>:</td>
            <td><input type='date' name='tanggal_lahir'></td>
          </td>
        </tr>
        <tr>
            <td>Kategori_Olahraga</td>
            <td>:</td>
            <td><input type='radio' name='kategori_olahraga' value="Sepak_bola"> Sepak Bola
            <td><input type='radio' name='kategori_olahraga' value="Bulu_Tangkis"> Bulu Tangkis
            <td><input type='radio' name='kategori_olahraga' value="Renang"> Renang
            </td>
        </tr>
        <tr>
          <td>Pilihan_Kelas</td>
          <td>:</td>
         <td><input type="checkbox" name="PK" value="pemula"> pemula <br>
             <input type="checkbox" name="PK" value="menengah"> menengah <br>
             <input type="checkbox" name="PK" value="lanjutan"> lanjutan <br>
          </td>
        </tr>
        <tr>
            <td>Kemampuan_fisik</td>
            <td>:</td>
            <td><textarea name="KF"  cols="30" rows="5"></textarea></td>
        </tr>
        <tr>
            <td>Pembayaran</td>
            <td>:</td>
            <td>
                <select name="Pembayaran">
                    <option value="">Pilih</option>
                    <option value="Transfer_Bank">Transfer_Bank</option>
                    <option value="Kartu_Kredit">Kartu_Kredit</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name = "simpan" value = 'KIRIM'></td>
        </tr>
        
    </table>
    </form> 
  </center>
</body>
</html>
