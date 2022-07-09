<?php
include "../view_template/header.php";
include "../view_template/topbar.php";
include "../view_template/sidebar.php";

$id = $_GET["id_accept_material"];

$ami = query("SELECT * FROM accepts_material_in WHERE id_accept_material = $id")[0];
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Detail Data Material In</h1>
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
                                <!-- <h5 class="card-title">Material Data</h5> -->
                                <div class="row mb-3">
                                    <div class="col">
                                        <h5 class="card-title">No. Nota : <?= $ami["no_nota"] ?></h5>
                                    </div>
                                    <div class="col">
                                        <a href="accepts_material_in.php" class="btn btn-primary my-3 float-end">Kembali</a>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 col-lg-6 mb-2">
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">Tanggal Pengiriman</div>
                                                    <div class="col">: <?= date('d / m / Y', strtotime($ami["date_delivery"])); ?></div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">Tanggal Diterima</div>
                                                    <div class="col">: <?= date('d / m / Y', strtotime($ami["accept_date"])); ?></div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">Tanggal Bea Cukai</div>
                                                    <div class="col">: <?= date('d / m / Y', strtotime($ami["bc_date"])); ?></div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">No. Pengiriman</div>
                                                    <div class="col">: <?= $ami["no_delivery"] ?></div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">No. Bea Cukai</div>
                                                    <div class="col">: <?= $ami["no_bc"] ?></div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">No. Kontainer</div>
                                                    <div class="col">: <?= $ami["no_container"] ?></div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">No. Item</div>
                                                    <div class="col">: <?= $ami["no_item"] ?></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-lg-6 mb-2">

                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">No. PO</div>
                                                    <div class="col">: <?= $ami["no_po"] ?></div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">Kode Material</div>
                                                    <div class="col">: <?= $ami["material_code"] ?></div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">Nama Material</div>
                                                    <div class="col">: <?= $ami["material_name"] ?></div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">Kode Supplier</div>
                                                    <div class="col">: <?= $ami["supplier_code"] ?></div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">Nama Supplier</div>
                                                    <div class="col">: <?= $ami["supplier_name"] ?></div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">PO Kuantiti</div>
                                                    <div class="col">: <?= $ami["po_quantity"] ?></div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">Cek Kuantiti</div>
                                                    <div class="col">: <?= $ami["check_quantity"] ?></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>



                            </div>

                        </div>
                    </div><!-- End Recent Sales -->
                </div>
            </div><!-- End Left side columns -->
        </div>
    </section>

</main><!-- End #main -->


<?php include "../view_template/footer.php"; ?>