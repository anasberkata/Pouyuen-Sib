<?php
require '../functions.php';

$accepts_material_in = query("SELECT * FROM accepts_material_in");

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Accepts Material In.xls");
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Accepts Material In</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col">
                <div class="row">
                    <!-- Barang Baru Masuk -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">

                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No. </th>
                                            <th scope="col">Tanggal Pengiriman</th>
                                            <th scope="col">Cek Qty</th>
                                            <th scope="col">Nama Material</th>
                                            <th scope="col">Nama Supplier</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($accepts_material_in as $ami) : ?>
                                            <tr>
                                                <th scope="row"><?= $i; ?></a></th>
                                                <td><?= date('d / m / Y', strtotime($ami["date_delivery"])); ?></td>
                                                <td><?= $ami["check_quantity_in"]; ?></td>
                                                <td><?= $ami["material_name"]; ?></td>
                                                <td><?= $ami["supplier_name"]; ?></td>
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