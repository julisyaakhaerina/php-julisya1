<?php

$email = @$_REQUEST['email'];
$password = @$_REQUEST ['password'];

if ($email !== 'jkaerina@gmail.com') {
    die ("Email tidak terdaftar");
}
if ($password !== 'anggaraaryadaffa') {
    die ("password salah");
}
# jika lolos alias email dan password nya benar

echo "selamat {@gmail), anda berhasil login! :)";