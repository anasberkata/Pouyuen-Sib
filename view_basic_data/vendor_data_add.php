<?php
include "../view_template/header.php";
include "../view_template/topbar.php";
include "../view_template/sidebar.php";
?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Tambah Vendor</h1>
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
                                        <h5 class="card-title">Tambah Vendor</h5>
                                    </div>
                                    <div class="col">
                                        <a href="vendor_data.php" class="btn btn-primary mt-3 float-end">Kembali</a>
                                    </div>
                                </div>

                                <div class="row">
                                    <form action="" method="POST">
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Kode Supplier</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="code_supplier">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Nama Supplier</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="name_supplier">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Telephone</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="phone">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">E-Mail</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" name="email">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="address">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label">Negara</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="country">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary" name="vendor_tambah">Tambah Vendor</button>
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
if (isset($_POST["vendor_tambah"])) {

    // cek apakah data berhasil di tambahkan atau tidak
    if (vendor_tambah($_POST) > 0) {
        echo "<script>
                alert('Data berhasil ditambahkan');
                document.location.href= 'vendor_data.php';
            </script>";
    } else {
        echo "<script>
                alert('Data gagal ditambahkan');
            </script>";
    }
}
?>