<?php
include "../view_template/header.php";
include "../view_template/topbar.php";
include "../view_template/sidebar.php";

$id = $_GET["id_out_material"];

$om = query("SELECT * FROM out_material WHERE id_out_material = $id")[0];
$material = query("SELECT * FROM material_data");
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit Material Out</h1>
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
                                <div class="row mb-4">
                                    <div class="col">
                                        <h5 class="card-title">Edit Material Out</h5>
                                    </div>
                                    <div class="col">
                                        <a href="out_material.php" class="btn btn-primary mt-3 float-end">Kembali</a>
                                    </div>
                                </div>

                                <div class="row">
                                    <form action="" method="POST">
                                        <input type="hidden" name="id_out_material" value="<?= $om["id_out_material"]; ?>">
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">No. Nota Pesanan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="no_nota_order" value="<?= $om["no_nota_order"]; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Tanggal Pesanan</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" name="date_order" value="<?= $om["date_order"]; ?>">
                                            </div>
                                        </div>
                                        <div class=" row mb-3">
                                            <label class="col-sm-2 col-form-label">Nama Material</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="material_catagory" name="material_name">
                                                    <option value="<?= $om["material_name"]; ?>"><?= $om["material_name"]; ?></option>
                                                    <?php foreach ($material as $m) : ?>
                                                        <option value="<?= $m["material_name"]; ?>"><?= $m["material_name"]; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Cek Kuantiti</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="check_quantity" value="<?= $om["check_quantity"]; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary" name="om_edit">Edit Material Out</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Recent Sales -->
                </div>
            </div><!-- End Left side columns -->
        </div>
    </section>

</main><!-- End #main -->

<?php include "../view_template/footer.php";

// Tambah RT RW
if (isset($_POST["om_edit"])) {

    // cek apakah data berhasil di tambahkan atau tidak
    if (om_edit($_POST) > 0) {
        echo "<script>
                alert('Data berhasil diubah');
                document.location.href= 'out_material.php';
            </script>";
    } else {
        echo "<script>
                alert('Data gagal diubah');
            </script>";
    }
}
?>