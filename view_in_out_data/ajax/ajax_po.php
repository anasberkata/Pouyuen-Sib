<?php
$conn = mysqli_connect("localhost", "root", "", "db_pouyuen");

// ----------------------- PO ----------------
$supplier_code = $_GET['supplier_code'];

$vendor = mysqli_query($conn, "SELECT * FROM vendor_data WHERE code_supplier = '$supplier_code'");
$v = mysqli_fetch_array($vendor);
$data_po = [
    'supplier_name'     =>      $v['name_supplier']
];
echo json_encode($data_po);
