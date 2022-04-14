<?php
// Mengaktifkan session pada php
session_start();

// Menghubungkan php dengan koneksi database
require "functions.php";

// Menangkap data yang dikirim dari form login
$username = $_POST['username'];
// $password = hash($_POST['password'], PASSWORD_DEFAULT);
$password = $_POST['password'];


// Menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");

// Menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if ($data['level'] == 1) {
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = 1;
		$_SESSION['id'] = $data['id'];
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['email'] = $data['email'];
		$_SESSION['phone'] = $data['phone'];

		// alihkan ke halaman dashboard admin
		header("location: view_admin/index.php");

		// cek jika user login sebagai pegawai
	} else if ($data['level'] == 2) {
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = 2;
		$_SESSION['id'] = $data['id'];
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['email'] = $data['email'];
		$_SESSION['phone'] = $data['phone'];

		// alihkan ke halaman dashboard pegawai
		header("location: view_admin/index.php");

		// cek jika user login sebagai pengurus
	} else {

		// alihkan ke halaman login kembali
		header("location: index.php?pesan=gagal");
	}
} else {
	header("location: index.php?pesan=gagal");
}
