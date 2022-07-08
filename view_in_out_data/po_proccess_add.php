<?php
include "../view_template/header.php";
include "../view_template/topbar.php";
include "../view_template/sidebar.php";

$vendor = query("SELECT * FROM vendor_data");
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Tambah PO Proccess</h1>
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
                                        <h5 class="card-title">Tambah PO</h5>
                                    </div>
                                    <div class="col">
                                        <a href="po_proccess.php" class="btn btn-primary mt-3 float-end">Kembali</a>
                                    </div>
                                </div>

                                <div class="row">
                                    <form action="" method="POST">
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">No. PO</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="no_po">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Kode Supplier</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="supplier_code" name="supplier_code" onkeyup="fill_supplier_name()">

                                                <!-- <select class="form-select" aria-label="material_catagory" id="supplier_code" name="supplier_code" onchange="fill_supplier_name()">
                                                    <option selected>Pilih Kode Supplier</option>
                                                    <?php foreach ($vendor as $v) : ?>
                                                        <option value="<?= $v["id_vendor_data"]; ?>"><?= $v["code_supplier"]; ?></option>
                                                    <?php endforeach; ?>
                                                </select> -->
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Nama Supplier</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="supplier_name" name="supplier_name">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Tanggal PO</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" name="date_po">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Tanggal Pengiriman</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" name="delivery_date">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label"></label>
                                            <div class="col-sm-9">
                                                <button type="submit" class="btn btn-primary" name="po_tambah">Tambah PO Proccess</button>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    function fill_supplier_name() {
        var supplier_code = $("#supplier_code").val();
        $.ajax({
            url: 'ajax.php',
            data: "supplier_code=" + supplier_code,
        }).success(function(data) {
            var json = data,
                obj = JSON.parse(json);
            $('#supplier_name').val(obj.supplier_name);
        });
    }
</script>


<?php include "../view_template/footer.php";

// Tambah RT RW
if (isset($_POST["po_tambah"])) {

    // cek apakah data berhasil di tambahkan atau tidak
    if (po_tambah($_POST) > 0) {
        echo "<script>
                alert('Data berhasil ditambahkan');
                document.location.href= 'po_proccess.php';
            </script>";
    } else {
        echo "<script>
                alert('Data gagal ditambahkan');
            </script>";
    }
}
?>