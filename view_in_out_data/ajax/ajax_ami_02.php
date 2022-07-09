<?php
$conn = mysqli_connect("localhost", "root", "", "db_pouyuen");

$material_code = $_GET['material_code'];

$material = mysqli_query($conn, "SELECT * FROM material_data WHERE code = '$material_code'");
$m = mysqli_fetch_array($material);
$data = [
    'material_name' => $m['material_name']
];

echo json_encode($data);
