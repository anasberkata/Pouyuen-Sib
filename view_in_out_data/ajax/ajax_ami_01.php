<?php
$conn = mysqli_connect("localhost", "root", "", "db_pouyuen");

$no_po = $_GET['no_po'];

$ami = mysqli_query($conn, "SELECT * FROM po_proccess WHERE no_po = '$no_po'");
$a = mysqli_fetch_array($ami);
$data = [
    'supplier_name'     =>      $a['supplier_name'],
    'supplier_code'     =>      $a['supplier_code'],
    'delivery_date'     =>      $a['delivery_date']
];

echo json_encode($data);
