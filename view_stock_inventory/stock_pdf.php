<?php

// require_once __DIR__ . '/vendor/autoload.php';
require_once '../vendor/autoload.php';
require '../functions.php';

$stock_material = query("SELECT * FROM out_material
                INNER JOIN accepts_material_in ON out_material.id_ami = accepts_material_in.id_accept_material
                ");

$html = '
    <body style="font-size: 10pt; font-family: Arial, Helvetica, sans-serif; color: #000000;">
        <h4 style="text-transform: uppercase; margin-top:100px; text-align: center;">
        STOK MATERIAL
        </h4>
        <table class="" width="100%" cellspacing=0 border=1 cellpadding=5>
            <thead>
                <tr>
                    <th scope="col">No. </th>
                    <th scope="col">Kode Material</th>
                    <th scope="col">Nama Material</th>
                    <th scope="col">PO Qty</th>
                    <th scope="col">Cek Qty</th>
                    <th scope="col">Tanggal Pemesanan</th>
                    <!-- <th scope="col">Request Vectory</th> -->
                </tr>
            </thead>
            <tbody>';
$i = 1;
foreach ($stock_material as $sm) :
    $html .=

        '<tr>
            <th scope="row" style="height: 50;">' . $i . '</a></th>
            <td>' . $sm["material_code"] . '</td>
            <td>' . $sm["material_name"] . '</td>
            <td style="text-align: right;">' . $sm["po_quantity"] . ' Pcs</td>
            <td style="text-align: right;">' . $sm["check_quantity_in"] . ' Pcs</td>
            <td style="text-align: center;">' . date('d / m / Y', strtotime($sm["date_order"])) . '</td>
        </tr>';
    $i++;
endforeach;
$html .=
    '</tbody>
        </table>
    </body>
';

$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);

$stylesheet = file_get_contents('style_print.css');
$mpdf->WriteHTML($stylesheet, \Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->WriteHTML("$html", \Mpdf\HTMLParserMode::HTML_BODY);
$mpdf->Output('Stok Material.pdf', 'I');
// $mpdf->Output();
