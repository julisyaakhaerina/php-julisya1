<form method="POST" action="proses-login-php">
        <div>
            <label>Email</label> <br>
            <input name="email" type="email" placeholder="Masukan email">
        </div>
        <div>
            <label>Kata sandi</label> <br>
            <input name="password" type="password" placeholder="Masukan kata sandi">
        </div>
        <div>
            <button>Login</button>
        </div>
    </form>

<?php

$email = @$_REQUEST['email'];
$password = @$_REQUEST ['password'];

if ($email !== 'fulan@gmail.com') {
    die ("Email tidak terdaftar");
}
if ($password !== 'kerja dari rumah') {
    die ("password salah");
}
# jika lolos alias email dan password nya benar

echo "selamat {@gmail), anda berhasil login! :)"
?>