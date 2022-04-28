<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: ../index.php");
    exit;
}

require "../functions.php";

$id = $_GET["id"];

if (users_delete($id) > 0) {
    echo "
		<script>
			alert('User berhasil dihapus!');
			document.location.href = 'users-list.php';
		</script>
	";
} else {
    echo "
		<script>
			alert('User gagal dihapus!');
			document.location.href = 'user-list.php';
		</script>

	";
}
