<?php
require '../functions.php';

$stock_material = query("SELECT * FROM out_material
                INNER JOIN accepts_material_in ON out_material.id_ami = accepts_material_in.id_accept_material
                ");

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Stok Material.xls");
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Stock Material</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col">
                <div class="row">
                    <!-- Barang Baru Masuk -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body pt-3">

                                <table class="table table-borderless datatable">
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
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($stock_material as $sm) : ?>
                                            <tr>
                                                <th scope="row"><?= $i; ?></a></th>
                                                <td><?= $sm["material_code"]; ?></td>
                                                <td><?= $sm["material_name"]; ?></td>
                                                <td><?= $sm["po_quantity"]; ?></td>
                                                <td><?= $sm["check_quantity_in"]; ?></td>
                                                <td><?= date('d / m / Y', strtotime($sm["date_order"])); ?></td>
                                                <!-- <td><?= $sm["request_vectory"]; ?></td> -->
                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Recent Sales -->
                </div>
            </div><!-- End Left side columns -->
        </div>
    </section>

</main><!-- End #main -->