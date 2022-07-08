<?php
include "../view_template/header.php";
include "../view_template/topbar.php";
include "../view_template/sidebar.php";

$vendor_data = query("SELECT * FROM vendor_data");
?>

<main id="main" class="main">
  <div class="pagetitle">
    <h1>Vendor Data</h1>
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
                <a href="vendor_data_add.php" class="btn btn-primary my-4">Tambah Data</a>

                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">No. </th>
                      <th scope="col">Kode Supplier</th>
                      <th scope="col">Nama Supplier</th>
                      <th scope="col">Phone</th>
                      <th scope="col">E-Mail</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">Negara</th>
                      <th scope="col">Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($vendor_data as $vd) : ?>
                      <tr>
                        <th scope="row"><?= $i; ?></a></th>
                        <td><?= $vd["code_supplier"]; ?></td>
                        <td><?= $vd["name_supplier"]; ?></td>
                        <td><?= $vd["phone"]; ?></td>
                        <td><?= $vd["email"]; ?></td>
                        <td><?= $vd["address"]; ?></td>
                        <td><?= $vd["country"]; ?></td>
                        <td>
                          <a href="vendor_data_edit.php?id_vendor=<?= $vd["id_vendor_data"] ?>" class="btn btn-success mb-2"><i class="bi bi-pencil-square"></i></a>
                          <a href="vendor_data_delete.php?id_vendor=<?= $vd["id_vendor_data"] ?>" class="btn btn-danger mb-2"><i class="bi bi-trash" onclick="return confirm('Yakin akan menghapus data material : <?= $vd['name_supplier']; ?> ?');"></i></a>
                        </td>
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


<?php include "../view_template/footer.php"; ?>