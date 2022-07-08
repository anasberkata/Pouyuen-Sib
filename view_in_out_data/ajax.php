<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_pouyuen");

$supplier_code = $_GET['supplier_code'];

//mengambil data
$query = mysqli_query($koneksi, "SELECT * FROM vendor_data WHERE code_supplier = '$supplier_code'");
$vendor = mysqli_fetch_array($query);
$data = array(
    'supplier_name'      =>  $vendor['name_supplier']
);

//tampil data
echo json_encode($data);
