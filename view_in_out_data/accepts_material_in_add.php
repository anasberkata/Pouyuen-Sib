<?php
include "../view_template/header.php";
include "../view_template/topbar.php";
include "../view_template/sidebar.php";

// $vendor = query("SELECT * FROM vendor_data");
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Tambah Accept Material</h1>
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
                                        <h5 class="card-title">Tambah Accept Material In</h5>
                                    </div>
                                    <div class="col">
                                        <a href="accepts_material_in.php" class="btn btn-primary mt-3 float-end">Kembali</a>
                                    </div>
                                </div>

                                <form action="" method="POST" class="row">
                                    <div class="col-12 col-lg-6">
                                        <div class="row mb-3">
                                            <label class="col-sm-5 col-form-label">No. Nota</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="no_nota">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-5 col-form-label">Tanggal Pengiriman</label>
                                            <div class="col-sm-7">
                                                <input type="date" class="form-control" name="date_delivery" id="date_delivery" readonly>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-5 col-form-label">Tanggal Diterima</label>
                                            <div class="col-sm-7">
                                                <input type="date" class="form-control" name="accept_date">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-5 col-form-label">Tanggal Bea Cukai</label>
                                            <div class="col-sm-7">
                                                <input type="date" class="form-control" name="bc_date">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-5 col-form-label">No. Pengiriman</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="no_delivery">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-5 col-form-label">No. Bea Cukai</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="no_bc">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-5 col-form-label">No. Kontainer</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="no_container">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-5 col-form-label">No. Item</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="no_item">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-6">
                                        <div class="row mb-3">
                                            <label class="col-sm-5 col-form-label">No. PO</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="no_po" id="no_po" onkeyup="fill_po_data()">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-5 col-form-label">Kode Material</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="material_code" id="material_code" onkeyup="fill_material_data()">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-5 col-form-label">Nama Material</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="material_name" id="material_name" readonly>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-5 col-form-label">Kode Supplier</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="supplier_code" id="supplier_code" readonly>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-5 col-form-label">Nama Supplier</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="supplier_name" id="supplier_name" readonly>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-5 col-form-label">PO Qty</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="po_quantity">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-5 col-form-label">Cek Qty</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" name="check_quantity_in">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="row mb-3">
                                            <label class="col-sm-5 col-form-label"></label>
                                            <div class="col-sm-7">
                                                <button type="submit" class="btn btn-primary w-100" name="ami_tambah">Tambah Accept Material</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

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
    function fill_po_data() {
        var no_po = $("#no_po").val();
        $.ajax({
            url: 'ajax/ajax_ami_01.php',
            data: "no_po=" + no_po,
        }).success(function(data) {
            var json = data,
                obj = JSON.parse(json);
            $('#supplier_code').val(obj.supplier_code);
            $('#supplier_name').val(obj.supplier_name);
            $('#date_delivery').val(obj.delivery_date);
        });
    }

    function fill_material_data() {
        var material_code = $("#material_code").val();
        $.ajax({
            url: 'ajax/ajax_ami_02.php',
            data: "material_code=" + material_code,
        }).success(function(data) {
            var json = data,
                obj = JSON.parse(json);
            $('#material_name').val(obj.material_name);
        });
    }
</script>


<?php include "../view_template/footer.php";

// Tambah RT RW
if (isset($_POST["ami_tambah"])) {

    // cek apakah data berhasil di tambahkan atau tidak
    if (ami_tambah($_POST) > 0) {
        echo "<script>
                alert('Data berhasil ditambahkan');
                document.location.href= 'accepts_material_in.php';
            </script>";
    } else {
        echo "<script>
                alert('Data gagal ditambahkan');
            </script>";
    }
}
?>