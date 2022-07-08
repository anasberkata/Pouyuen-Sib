<?php
include "../view_template/header.php";
include "../view_template/topbar.php";
include "../view_template/sidebar.php";

$material_code = query("SELECT * FROM material_catagory");
$material_type = query("SELECT * FROM material_type");
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Tambah Material</h1>
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
                                        <h5 class="card-title">Tambah Material</h5>
                                    </div>
                                    <div class="col">
                                        <a href="material_data.php" class="btn btn-primary mt-3 float-end">Kembali</a>
                                    </div>
                                </div>

                                <div class="row">
                                    <form action="" method="POST">
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Kode Material</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="code">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Nama material</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="material_name">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Harga / Unit</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="price_unit">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Katagori</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="material_catagory" name="material_catagory">
                                                    <option selected>Pilih Katagori Material</option>
                                                    <?php foreach ($material_code as $mc) : ?>
                                                        <option value="<?= $mc["id_catagory"]; ?>"><?= $mc["catagory"]; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNumber" class="col-sm-2 col-form-label">Tipe</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="material_catagory" name="material_type">
                                                    <option selected>Pilih Tipe Material</option>
                                                    <?php foreach ($material_type as $mt) : ?>
                                                        <option value="<?= $mt["id_material_type"]; ?>"><?= $mt["type"]; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary" name="material_tambah">Tambah Material</button>
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
if (isset($_POST["material_tambah"])) {

    // cek apakah data berhasil di tambahkan atau tidak
    if (material_tambah($_POST) > 0) {
        echo "<script>
                alert('Data berhasil ditambahkan');
                document.location.href= 'material_data.php';
            </script>";
    } else {
        echo "<script>
                alert('Data gagal ditambahkan');
            </script>";
    }
}
?>