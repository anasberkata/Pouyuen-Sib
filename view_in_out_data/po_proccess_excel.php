<?php
require '../functions.php';

$po_proccess = query("SELECT * FROM po_proccess");

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data PO Proccess.xls");
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>PO Proccess</h1>
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
                                            <th scope="col">No. PO</th>
                                            <th scope="col">Kode Supplier</th>
                                            <th scope="col">Nama Supplier</th>
                                            <th scope="col">Tanggal Pengiriman</th>
                                            <th scope="col">Tanggal PO</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($po_proccess as $pp) : ?>
                                            <tr>
                                                <th scope="row"><?= $i; ?></a></th>
                                                <td><?= $pp["no_po"]; ?></td>
                                                <td><?= $pp["supplier_code"]; ?></td>
                                                <td><?= $pp["supplier_name"]; ?></td>
                                                <td><?= date('d / m / Y', strtotime($pp["delivery_date"])); ?></td>
                                                <td><?= date('d / m / Y', strtotime($pp["date_po"])); ?></td>
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