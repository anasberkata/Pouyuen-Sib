<?php
include "../view_template/header.php";
include "../view_template/topbar.php";
include "../view_template/sidebar.php";

$accepts_material_in = query("SELECT * FROM accepts_material_in");
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
                <!-- <h5 class="card-title">Material Data</h5> -->
                <a href="accepts_material_in_add.php" class="btn btn-primary my-4">Tambah Data</a>

                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">No. </th>
                      <th scope="col">Tanggal Pengiriman</th>
                      <th scope="col">Cek Qty</th>
                      <th scope="col">Nama Material</th>
                      <th scope="col">Nama Supplier</th>
                      <th scope="col">Opsi</th>
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
                        <td>
                          <a href="accepts_material_in_details.php?id_accept_material=<?= $ami["id_accept_material"] ?>" class="btn btn-primary mb-2"><i class="bi bi-boxes"></i></a>
                          <a href="accepts_material_in_edit.php?id_accept_material=<?= $ami["id_accept_material"] ?>" class="btn btn-success mb-2"><i class="bi bi-pencil-square"></i></a>
                          <a href="accepts_material_in_delete.php?id_accept_material=<?= $ami["id_accept_material"] ?>" class="btn btn-danger mb-2"><i class="bi bi-trash" onclick="return confirm('Yakin akan menghapus data material : <?= $ami['material_name']; ?> ?');"></i></a>
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