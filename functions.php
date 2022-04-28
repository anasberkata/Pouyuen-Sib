<?php

// KONEKSI DATABASE =====================================================
$conn = mysqli_connect("localhost", "root", "", "db_pouyuen");


function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


// CRUD USER & PROFILE
function users_add($data)
{
    global $conn;

    $nama = $data["nama"];
    $username = $data["username"];
    $password = $data["password"];
    $alamat = $data["alamat"];
    $phone = $data["phone"];
    $email = $data["email"];
    $role_id = $data["role_id"];

    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

    // Cek Username Mahasiswa Sudah Ada Atau Belum
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('Username Sudah Terdaftar!');
            document.location.href = 'users-add.php';
            </script>";
    }

    $query = "INSERT INTO users
				VALUES
			(NULL, '$nama', '$username', '$password', '$email', '$phone', '$alamat', '$role_id')
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function users_edit($data)
{
    global $conn;

    $id = $data["id"];
    $nama = $data["nama"];
    $username = $data["username"];
    $alamat = $data["alamat"];
    $phone = $data["phone"];
    $email = $data["email"];
    $role_id = $data["role_id"];

    $query = "UPDATE users SET
			nama = '$nama',
			username = '$username',
			email = '$email',
			phone = '$phone',
			alamat = '$alamat',
			role_id = '$role_id'

            WHERE id = $id
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function users_delete($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM users WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function users_profile_edit($data)
{
    global $conn;

    $id = $data["id"];
    $nama = $data["nama"];
    $username = $data["username"];
    $alamat = $data["alamat"];
    $phone = $data["phone"];
    $email = $data["email"];
    $role_id = $data["role_id"];

    $query = "UPDATE users SET
			nama = '$nama',
			username = '$username',
			email = '$email',
			phone = '$phone',
			alamat = '$alamat',
			role_id = '$role_id'

            WHERE id = $id
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function users_profile_password_edit($data)
{
    global $conn;

    $id = $data["id"];

    $newPassword = $data["newPassword"];

    $query = "UPDATE `users` SET `password`='$newPassword' WHERE `id`='$id'";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// // FORM PENDAFTARAN =====================================================
// function register($data)
// {
//     global $conn;

//     $username = strtolower(stripslashes($data["username"]));
//     $password01 = mysqli_real_escape_string($conn, $data["password01"]);
//     $password02 = mysqli_real_escape_string($conn, $data["password02"]);
//     $level = 2;
//     $nama = htmlspecialchars($data["nama"]);
//     $tempat_lahir = "";
//     $tanggal_lahir = "0000-00-00";
//     $nim = htmlspecialchars($data["nim"]);
//     $fakultas = "Fakultas Ilmu Komputer";
//     $program_studi = htmlspecialchars($data["program_studi"]);
//     $ipk = 0;
//     $alamat = "";
//     $email = htmlspecialchars($data["email"]);
//     $phone = htmlspecialchars($data["phone"]);
//     $foto = "default.jpg";
//     $confirm = "Belum";
//     $icon_confirm = "fa-times-circle text-danger";
//     $bg_confirm = "border-left-danger";
//     $undangan_01 = "default.jpg";
//     $undangan_02 = "";
//     $undangan_tambah = "";
//     $foto_akta = "";
//     $foto_ijazah = "";
//     $bukti_pembayaran = "";
//     $bukti_undangan = "";

//     $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

//     // Cek Username Mahasiswa Sudah Ada Atau Belum
//     if (mysqli_fetch_assoc($result)) {
//         echo "<script>
//                 Swal.fire(
// 				    'Pendaftaran Gagal!',
// 				    'Username Sudah Terdaftar',
// 				    'error'
// 				)
//             </script>";
//         return false;
//     }


//     // Cek Konfirmasi Password
//     if ($password01 !== $password02) {
//         echo "<script>
// 				Swal.fire(
// 				    'Pendaftaran Gagal!',
// 				    'Password validasi Tidak Sesuai',
// 				    'error'
// 				)
// 		    </script>";
//         return false;
//     }

//     // Enkripsi Password Hash
//     // $password = password_hash($password01, PASSWORD_DEFAULT);

//     // No Hash
//     $password = $password01;

//     // Tambahkan Mahasiswa Baru ke Database

//     $query = "INSERT INTO users
// 				VALUES
// 			(NULL, '$username', '$password', '$level', '$nama', '$tempat_lahir', '$tanggal_lahir', '$nim', '$fakultas', '$program_studi', '$ipk', '$alamat', '$email', '$phone', '$foto', '$confirm', '$icon_confirm', '$bg_confirm', '$undangan_01', '$undangan_02', '$undangan_tambah', '$foto_akta', '$foto_ijazah', '$bukti_pembayaran', '$bukti_undangan')
// 			";

//     mysqli_query($conn, $query);

//     return mysqli_affected_rows($conn);
// }


// // CRUD ADMIN =====================================================
// // Tambah Mahasiswa
// function wisudawan_add($data)
// {
//     global $conn;

//     $username = strtolower(stripslashes($data["username"]));
//     $password = $data["password"];
//     $level = 2;
//     $nama = htmlspecialchars($data["nama"]);
//     $tempat_lahir = htmlspecialchars($data["tempat_lahir"]);
//     $tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
//     $nim = htmlspecialchars($data["nim"]);
//     $fakultas = "Fakultas Ilmu Komputer";
//     $program_studi = htmlspecialchars($data["program_studi"]);
//     $ipk = 0;
//     $alamat = htmlspecialchars($data["alamat"]);
//     $email = htmlspecialchars($data["email"]);
//     $phone = htmlspecialchars($data["phone"]);
//     $confirm = "Belum";
//     $icon_confirm = "fa-times-circle text-danger";
//     $bg_confirm = "border-left-danger";
//     $undangan_01 = "default.jpg";
//     $undangan_02 = "";
//     $undangan_tambah = "";
//     $foto_akta = "";
//     $foto_ijazah = "";
//     $bukti_pembayaran = "";
//     $bukti_undangan = "";

//     // Upload gambar
//     $foto = upload();
//     if (!$foto) {
//         return false;
//     }

//     $query = "INSERT INTO users
// 				VALUES
// 			(NULL, '$username', '$password', '$level', '$nama', '$tempat_lahir', '$tanggal_lahir', '$nim', '$fakultas', '$program_studi', '$ipk', '$alamat', '$email', '$phone', '$foto', '$confirm', '$icon_confirm', '$bg_confirm', '$undangan_01', '$undangan_02', '$undangan_tambah', '$foto_akta', '$foto_ijazah', '$bukti_pembayaran', '$bukti_undangan')
// 			";
//     mysqli_query($conn, $query);

//     return mysqli_affected_rows($conn);
// }

// // Update Mahasiswa
// function wisudawan_edit($data)
// {
//     global $conn;

//     $id = $data["id"];

//     $nama = htmlspecialchars($data["nama"]);
//     $nim = htmlspecialchars($data["nim"]);
//     $username = strtolower(stripslashes($data["username"]));
//     $password = $data["password"];
//     $tempat_lahir = htmlspecialchars($data["tempat_lahir"]);
//     $tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
//     $program_studi = htmlspecialchars($data["program_studi"]);
//     $email = htmlspecialchars($data["email"]);
//     $phone = htmlspecialchars($data["phone"]);
//     $alamat = htmlspecialchars($data["alamat"]);
//     $fotoLama = htmlspecialchars($data["fotoLama"]);

//     // cek apakah user pilih gambar baru atau tidak
//     if ($_FILES['foto']['error'] === 4) {
//         $foto = $fotoLama;
//     } else {
//         $foto = upload();
//     }

//     $query = "UPDATE users SET
// 			nama = '$nama',
// 			nim = '$nim',
//             username = '$username',
//             password = '$password',
//             tempat_lahir = '$tempat_lahir',
//             tanggal_lahir = '$tanggal_lahir',
//             program_studi = '$program_studi',
//             email = '$email',
//             phone = '$phone',
//             alamat = '$alamat',
//             foto = '$foto'

//             WHERE id = $id
// 			";

//     mysqli_query($conn, $query);

//     return mysqli_affected_rows($conn);
// }

// // Update Verifikasi Wisudawan
// function wisudawan_verify_edit($data)
// {
//     global $conn;

//     $id = $data["id"];
//     $verify = htmlspecialchars($data["verify"]);
//     $icon = "fa-check-circle text-success";
//     $bg = "border-left-success";

//     $query = "UPDATE users SET
// 			confirm = '$verify',
//             icon_confirm = '$icon',
//             bg_confirm = '$bg'

//             WHERE id = $id
// 			";

//     mysqli_query($conn, $query);

//     return mysqli_affected_rows($conn);
// }

// // Hapus Mahasiswa
// function wisudawan_delete($id)
// {
//     global $conn;
//     mysqli_query($conn, "DELETE FROM users WHERE id = $id");
//     return mysqli_affected_rows($conn);
// }

// // Tambah Pekerjaan
// function work_list_add($data)
// {
//     global $conn;

//     $nama = htmlspecialchars($data["nama"]);
//     $jabatan = htmlspecialchars($data["jabatan"]);
//     $deskripsi = htmlspecialchars($data["deskripsi"]);
//     $status = "Belum";
//     $icon_status = "fa-times-circle text-success";

//     $query = "INSERT INTO works
// 				VALUES
// 			(NULL, '$nama', '$jabatan', '$deskripsi', '$status', '$icon_status')
// 			";
//     mysqli_query($conn, $query);

//     return mysqli_affected_rows($conn);
// }

// // Update Pekerjaan
// function work_list_edit($data)
// {
//     global $conn;

//     $id = $data["id"];
//     $nama = htmlspecialchars($data["nama"]);
//     $jabatan = htmlspecialchars($data["jabatan"]);
//     $deskripsi = htmlspecialchars($data["deskripsi"]);

//     $query = "UPDATE works SET
// 			nama_panitia = '$nama',
//             jabatan = '$jabatan',
//             deskripsi = '$deskripsi'

//             WHERE id_pekerjaan = $id
// 			";

//     mysqli_query($conn, $query);

//     return mysqli_affected_rows($conn);
// }

// // Update Verifikasi Pekerjaan
// function work_verify_edit($data)
// {
//     global $conn;

//     $id = $data["id"];
//     $verify = htmlspecialchars($data["verify"]);

//     $query = "UPDATE works SET
// 			status = '$verify',
// 			icon_status = 'fa-check-circle text-success'

//             WHERE id_pekerjaan = $id
// 			";

//     mysqli_query($conn, $query);

//     return mysqli_affected_rows($conn);
// }

// // Hapus Pekerjaan
// function work_list_delete($id)
// {
//     global $conn;
//     mysqli_query($conn, "DELETE FROM works WHERE id_pekerjaan = $id");
//     return mysqli_affected_rows($conn);
// }




// // CRUD USER / MAHASISWA =====================================================
// // Update Mahasiswa
// function mahasiswa_edit($data)
// {
//     global $conn;

//     $id = $data["id"];

//     $nama = htmlspecialchars($data["nama"]);
//     $nim = htmlspecialchars($data["nim"]);
//     $username = strtolower(stripslashes($data["username"]));
//     $password = $data["password"];
//     $tempat_lahir = htmlspecialchars($data["tempat_lahir"]);
//     $tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
//     $program_studi = htmlspecialchars($data["program_studi"]);
//     $ipk = $data["ipk"];
//     $email = htmlspecialchars($data["email"]);
//     $phone = htmlspecialchars($data["phone"]);
//     $alamat = htmlspecialchars($data["alamat"]);
//     $fotoLama = htmlspecialchars($data["fotoLama"]);

//     // cek apakah user pilih gambar baru atau tidak
//     if ($_FILES['foto']['error'] === 4) {
//         $foto = $fotoLama;
//     } else {
//         $foto = upload();
//     }

//     $query = "UPDATE users SET
//             username = '$username',
//             password = '$password',
// 			nama = '$nama',
//             tempat_lahir = '$tempat_lahir',
//             tanggal_lahir = '$tanggal_lahir',
// 			nim = '$nim',
//             program_studi = '$program_studi',
//             ipk = '$ipk',
//             alamat = '$alamat',
//             email = '$email',
//             phone = '$phone',
//             foto = '$foto'

//             WHERE id = $id
// 			";

//     mysqli_query($conn, $query);

//     return mysqli_affected_rows($conn);
// }

// // Upload Dokumen Mahasiswa
// function mahasiswa_verify($data)
// {
//     global $conn;

//     $id = $data["id"];

//     $akta = upload_akta_verify();
//     $ijazah = upload_ijazah_verify();
//     $bukti = upload_bukti_verify();

//     $query = "UPDATE users SET
//             foto_akta = '$akta',
//             foto_ijazah = '$ijazah',
// 			bukti_pembayaran = '$bukti'

//             WHERE id = $id
// 			";

//     mysqli_query($conn, $query);

//     return mysqli_affected_rows($conn);
// }

// // Tambah undangan Mahasiswa
// function undangan_add($data)
// {
//     global $conn;

//     $id = $data["id"];

//     $nama = htmlspecialchars($data["nama_undangan"]);
//     $bukti = upload_bukti_verify();

//     $query = "UPDATE users SET
//             undangan_tambah = '$nama',
//             bukti_undangan = '$bukti'

//             WHERE id = $id
// 			";

//     mysqli_query($conn, $query);

//     return mysqli_affected_rows($conn);
// }

// // Update Verifikasi Pekerjaan
// function undangan_verify_edit($data)
// {
//     global $conn;

//     $id = $data["id"];

//     $verify = htmlspecialchars($data["verify"]);

//     $query = "UPDATE users SET

// 			undangan_02 = '$verify'

//             WHERE id = $id
// 			";

//     mysqli_query($conn, $query);

//     return mysqli_affected_rows($conn);
// }







// // UPLOAD FILE =====================================================
// // Upload Gambar
// function upload()
// {

//     $namaFile = $_FILES['foto']['name'];
//     $ukuranFile = $_FILES['foto']['size'];
//     $error = $_FILES['foto']['error'];
//     $tmpName = $_FILES['foto']['tmp_name'];

//     // cek apakah tidak ada gambar yang diupload
//     if ($error === 4) {
//         echo "<script>
//                 Swal.fire(
// 				    'Gagal!',
// 				    'Pilih Gambar Terlebih Dahulu!',
// 				    'error'
// 				)
//             </script>";
//         return false;
//     }

//     // cek apakah yang diupload adalah gambar
//     $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
//     $ekstensiGambar = explode('.', $namaFile);
//     $ekstensiGambar = strtolower(end($ekstensiGambar));
//     if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
//         echo "<script>
//                 Swal.fire(
// 				    'Gagal!',
// 				    'Upload Gambar dengan Format .jpg / .jpeg / .png!',
// 				    'error'
// 				)
//             </script>";
//         return false;
//     }

//     // cek jika ukurannya terlalu besar
//     if ($ukuranFile > 1000000) {
//         echo "<script>
//                 Swal.fire(
// 				    'Gagal!',
// 				    'Ukuran Gambar Terlalu Besar!',
// 				    'error'
// 				)
//             </script>";
//         return false;
//     }

//     // lolos pengecekan, gambar siap diupload
//     // generate nama gambar baru
//     $namaFileBaru = uniqid();
//     $namaFileBaru .= '.';
//     $namaFileBaru .= $ekstensiGambar;

//     move_uploaded_file($tmpName, '../assets/img/mahasiswa/' . $namaFileBaru);

//     return $namaFileBaru;
// }


// function upload_akta_verify()
// {

//     $namaFile = $_FILES['foto_akta']['name'];
//     $ukuranFile = $_FILES['foto_akta']['size'];
//     $error = $_FILES['foto_akta']['error'];
//     $tmpName = $_FILES['foto_akta']['tmp_name'];

//     // cek apakah tidak ada gambar yang diupload
//     if ($error === 4) {
//         echo "<script>
//                 Swal.fire(
// 				    'Gagal!',
// 				    'Pilih Gambar Terlebih Dahulu!',
// 				    'error'
// 				)
//             </script>";
//         return false;
//     }

//     // cek apakah yang diupload adalah gambar
//     $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
//     $ekstensiGambar = explode('.', $namaFile);
//     $ekstensiGambar = strtolower(end($ekstensiGambar));
//     if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
//         echo "<script>
//                 Swal.fire(
// 				    'Gagal!',
// 				    'Upload Gambar dengan Format .jpg / .jpeg / .png!',
// 				    'error'
// 				)
//             </script>";
//         return false;
//     }

//     // cek jika ukurannya terlalu besar
//     if ($ukuranFile > 10000000) {
//         echo "<script>
//                 Swal.fire(
// 				    'Gagal!',
// 				    'Ukuran Gambar Terlalu Besar!',
// 				    'error'
// 				)
//             </script>";
//         return false;
//     }

//     // lolos pengecekan, gambar siap diupload
//     // generate nama gambar baru
//     $namaFileBaru = uniqid();
//     $namaFileBaru .= '.';
//     $namaFileBaru .= $ekstensiGambar;

//     move_uploaded_file($tmpName, '../assets/img/upload/' . $namaFileBaru);

//     return $namaFileBaru;
// }


// function upload_ijazah_verify()
// {

//     $namaFile = $_FILES['foto_ijazah']['name'];
//     $ukuranFile = $_FILES['foto_ijazah']['size'];
//     $error = $_FILES['foto_ijazah']['error'];
//     $tmpName = $_FILES['foto_ijazah']['tmp_name'];

//     // cek apakah tidak ada gambar yang diupload
//     if ($error === 4) {
//         echo "<script>
//                 Swal.fire(
// 				    'Gagal!',
// 				    'Pilih Gambar Terlebih Dahulu!',
// 				    'error'
// 				)
//             </script>";
//         return false;
//     }

//     // cek apakah yang diupload adalah gambar
//     $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
//     $ekstensiGambar = explode('.', $namaFile);
//     $ekstensiGambar = strtolower(end($ekstensiGambar));
//     if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
//         echo "<script>
//                 Swal.fire(
// 				    'Gagal!',
// 				    'Upload Gambar dengan Format .jpg / .jpeg / .png!',
// 				    'error'
// 				)
//             </script>";
//         return false;
//     }

//     // cek jika ukurannya terlalu besar
//     if ($ukuranFile > 10000000) {
//         echo "<script>
//                 Swal.fire(
// 				    'Gagal!',
// 				    'Ukuran Gambar Terlalu Besar!',
// 				    'error'
// 				)
//             </script>";
//         return false;
//     }

//     // lolos pengecekan, gambar siap diupload
//     // generate nama gambar baru
//     $namaFileBaru = uniqid();
//     $namaFileBaru .= '.';
//     $namaFileBaru .= $ekstensiGambar;

//     move_uploaded_file($tmpName, '../assets/img/upload/' . $namaFileBaru);

//     return $namaFileBaru;
// }


// function upload_bukti_verify()
// {

//     $namaFile = $_FILES['foto_bukti']['name'];
//     $ukuranFile = $_FILES['foto_bukti']['size'];
//     $error = $_FILES['foto_bukti']['error'];
//     $tmpName = $_FILES['foto_bukti']['tmp_name'];

//     // cek apakah tidak ada gambar yang diupload
//     if ($error === 4) {
//         echo "<script>
//                 Swal.fire(
// 				    'Gagal!',
// 				    'Pilih Gambar Terlebih Dahulu!',
// 				    'error'
// 				)
//             </script>";
//         return false;
//     }

//     // cek apakah yang diupload adalah gambar
//     $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
//     $ekstensiGambar = explode('.', $namaFile);
//     $ekstensiGambar = strtolower(end($ekstensiGambar));
//     if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
//         echo "<script>
//                 Swal.fire(
// 				    'Gagal!',
// 				    'Upload Gambar dengan Format .jpg / .jpeg / .png!',
// 				    'error'
// 				)
//             </script>";
//         return false;
//     }

//     // cek jika ukurannya terlalu besar
//     if ($ukuranFile > 10000000) {
//         echo "<script>
//                 Swal.fire(
// 				    'Gagal!',
// 				    'Ukuran Gambar Terlalu Besar!',
// 				    'error'
// 				)
//             </script>";
//         return false;
//     }

//     // lolos pengecekan, gambar siap diupload
//     // generate nama gambar baru
//     $namaFileBaru = uniqid();
//     $namaFileBaru .= '.';
//     $namaFileBaru .= $ekstensiGambar;

//     move_uploaded_file($tmpName, '../assets/img/upload/' . $namaFileBaru);

//     return $namaFileBaru;
// }
