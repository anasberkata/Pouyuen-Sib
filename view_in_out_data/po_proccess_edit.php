<?php
include "../view_template/header.php";
include "../view_template/topbar.php";
include "../view_template/sidebar.php";

$id = $_GET["id_material"];

$material_data = query("SELECT * FROM material_data
                INNER JOIN material_catagory ON material_data.material_catagory = material_catagory.id_catagory
                INNER JOIN material_type ON material_data.material_type = material_type.id_material_type
                WHERE id_material = $id

")[0];
$material_code = query("SELECT * FROM material_catagory");
$material_type = query("SELECT * FROM material_type");
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit Material</h1>
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
                                        <h5 class="card-title">Edit Material</h5>
                                    </div>
                                    <div class="col">
                                        <a href="material_data.php" class="btn btn-primary mt-3 float-end">Kembali</a>
                                    </div>
                                </div>

                                <div class="row">
                                    <form action="" method="POST">
                                        <input type="hidden" class="form-control" name="id_material" value="<?= $material_data["id_material"]; ?>">
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Kode Material</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="code" value="<?= $material_data["code"]; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Nama material</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="material_name" value="<?= $material_data["material_name"]; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Harga / Unit</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="price_unit" value="<?= $material_data["price_unit"]; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Katagori</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="material_catagory" name="material_catagory">
                                                    <option value="<?= $material_data["id_catagory"]; ?>" selected><?= $material_data["catagory"]; ?></option>
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
                                                    <option value="<?= $material_data["id_material_type"]; ?>" selected><?= $material_data["type"]; ?></option>
                                                    <?php foreach ($material_type as $mt) : ?>
                                                        <option value="<?= $mt["id_material_type"]; ?>"><?= $mt["type"]; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary" name="material_edit">Edit Material</button>
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
if (isset($_POST["material_edit"])) {

    // cek apakah data berhasil di tambahkan atau tidak
    if (material_edit($_POST) > 0) {
        echo "<script>
                alert('Data berhasil diedit');
                document.location.href= 'material_data.php';
            </script>";
    } else {
        echo "<script>
                alert('Data gagal diedit');
            </script>";
    }
}
?>