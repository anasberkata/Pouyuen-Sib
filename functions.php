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


// ---------------------------------------------------------- MATERIAL DATA -----------------------------------------------------
function material_tambah($data)
{
    global $conn;

    $code = $data["code"];
    $material_name = $data["material_name"];
    $price_unit = $data["price_unit"];
    $material_catagory = $data["material_catagory"];
    $material_type = $data["material_type"];

    // $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

    // Cek Username Mahasiswa Sudah Ada Atau Belum
    // if (mysqli_fetch_assoc($result)) {
    //     echo "<script>
    //         alert('Username Sudah Terdaftar!');
    //         document.location.href = 'users-add.php';
    //         </script>";
    // }

    $query = "INSERT INTO material_data
				VALUES
			(NULL, '$code', '$material_name', '$price_unit', '$material_catagory', '$material_type')
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function material_edit($data)
{
    global $conn;

    $id_material = $data["id_material"];
    $code = $data["code"];
    $material_name = $data["material_name"];
    $price_unit = $data["price_unit"];
    $material_catagory = $data["material_catagory"];
    $material_type = $data["material_type"];

    $query = "UPDATE material_data SET
			code = '$code',
			material_name = '$material_name',
			price_unit = '$price_unit',
			material_catagory = '$material_catagory',
			material_type = '$material_type'

            WHERE id_material = $id_material
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function material_delete($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM material_data WHERE id_material = $id");
    return mysqli_affected_rows($conn);
}

// ---------------------------------------------------------- VENDOR DATA -----------------------------------------------------
function vendor_tambah($data)
{
    global $conn;

    $code_supplier = $data["code_supplier"];
    $phone = $data["phone"];
    $name_supplier = $data["name_supplier"];
    $email = $data["email"];
    $address = $data["address"];
    $country = $data["country"];

    $query = "INSERT INTO vendor_data
				VALUES
			(NULL, '$code_supplier', '$phone', '$name_supplier', '$email', '$address', '$country')
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function vendor_edit($data)
{
    global $conn;

    $id_vendor_data = $data["id_vendor_data"];
    $code_supplier = $data["code_supplier"];
    $phone = $data["phone"];
    $name_supplier = $data["name_supplier"];
    $email = $data["email"];
    $address = $data["address"];
    $country = $data["country"];

    $query = "UPDATE vendor_data SET
			code_supplier = '$code_supplier',
			phone = '$phone',
			name_supplier = '$name_supplier',
			email = '$email',
			address = '$address',
			country = '$country'

            WHERE id_vendor_data = $id_vendor_data
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function vendor_delete($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM vendor_data WHERE id_vendor_data = $id");
    return mysqli_affected_rows($conn);
}

// ---------------------------------------------------------- PO PROCCESS -----------------------------------------------------
function po_tambah($data)
{
    global $conn;

    $no_po = $data["no_po"];
    $supplier_name = $data["supplier_name"];
    $delivery_date = $data["delivery_date"];
    $date_po = $data["date_po"];
    $supplier_code = $data["supplier_code"];

    $query = "INSERT INTO po_proccess
				VALUES
			(NULL, '$no_po', '$supplier_name', '$delivery_date', '$date_po', '$supplier_code')
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function po_edit($data)
{
    global $conn;

    $id_po_proccess = $data["id_po_proccess"];
    $no_po = $data["no_po"];
    $supplier_name = $data["supplier_name"];
    $delivery_date = $data["delivery_date"];
    $date_po = $data["date_po"];
    $supplier_code = $data["supplier_code"];

    $query = "UPDATE po_proccess SET
			no_po = '$no_po',
			supplier_name = '$supplier_name',
			delivery_date = '$delivery_date',
			date_po = '$date_po',
			supplier_code = '$supplier_code'

            WHERE id_po_proccess = $id_po_proccess
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function po_delete($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM po_proccess WHERE id_po_proccess = $id");
    return mysqli_affected_rows($conn);
}
