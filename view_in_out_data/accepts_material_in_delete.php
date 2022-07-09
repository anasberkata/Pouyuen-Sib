<?php
session_start();

// cek apakah yang mengakses halaman ini sudah login
if (!isset($_SESSION['login'])) {
	header("location: ../index.php");
}

require '../functions.php';

$id = $_GET["id_po_proccess"];

if (po_delete($id) > 0) {
	echo "
		<script>
			alert('Data berhasil dihapus');
			document.location.href = 'po_proccess.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('Data gagal dihapus');
			document.location.href = 'po_proccess.php';
		</script>

	";
}
