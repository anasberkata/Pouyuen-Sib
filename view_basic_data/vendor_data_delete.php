<?php
session_start();

// cek apakah yang mengakses halaman ini sudah login
if (!isset($_SESSION['login'])) {
	header("location: ../index.php");
}

require '../functions.php';

$id = $_GET["id_vendor"];

if (vendor_delete($id) > 0) {
	echo "
		<script>
			alert('Data berhasil dihapus');
			document.location.href = 'vendor_data.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('Data gagal dihapus');
			document.location.href = 'vendor_data.php';
		</script>

	";
}
