<?php
session_start();

if (isset($_SESSION['login'])) {
	header("Location: view_admin/index.php");
	exit;
}

require "functions.php";

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($conn, "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {

	$data = mysqli_fetch_assoc($login);

	if ($data['role_id'] == 1) {
		$_SESSION['login'] = true;
		$_SESSION['id'] = $data['id'];

		header("location: view_admin/index.php");
	} else if ($data['role_id'] == 2) {
		$_SESSION['login'] = true;
		$_SESSION['id'] = $data['id'];

		header("location: view_admin/index.php");
	} else {
		header("location: index.php?pesan=gagal");
	}
} else {
	header("location: index.php?pesan=gagal");
}
