<?php  
// Tugas hari ini dikumpulkan nanti sebelum jam 2 siang.
// tugas harus diupload di git dengan ketentuan sbg berikut
// nama repository: Cek User Sudah Terdaftar Atau Belum
// Bagikan link repository anda ke group WA

// Soal:
// Pada saat kita mau bermain sosial media (FB, IG, dll) sebelumnya kita harus melakukan otentikasi username dan password terlebih dahulu. tugas kali ini adalah melakukan validasi apakah user sudah terdaftar dan user login menggunakan password yang benar.

// Contoh:
// - Jika username dengan nama "fajar" sudah terdaftar maka lakukan pengecekan password -> jika password cocok tampilkan pesan "Anda berhasil masuk", Jika salah tampilkan pesan "Password yang anda masukan salah"
// - Jika username dengan nama "fajar" belum terdaftar maka, tampilkan pesan "Username yang anda masukan belum terdaftar"

$username = "fajar";
$password = 123;




if ( $username == $password ) {
	echo 'anda berhasil masuk';
}else if ($username === $password){
	echo 'password yang anda masukan salah!';
}else{
	echo 'user name yang anda masukan belum terdaftar';
}











?>