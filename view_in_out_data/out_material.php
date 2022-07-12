<?php
include "../view_template/header.php";
include "../view_template/topbar.php";
include "../view_template/sidebar.php";

$out_material = query("SELECT * FROM out_material
                INNER JOIN accepts_material_in ON out_material.id_ami = accepts_material_in.id_accept_material
                ");
?>

<main id="main" class="main">
  <div class="pagetitle">
    <h1>Out Material</h1>
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
                <a href="out_material_add.php" class="btn btn-primary my-4">Tambah Data</a>

                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">No. </th>
                      <th scope="col">No. Nota Pesanan</th>
                      <th scope="col">Tanggal Pesanan</th>
                      <th scope="col">Kode Material</th>
                      <th scope="col">Nama Material</th>
                      <th scope="col">Cek Qty</th>
                      <th scope="col">Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($out_material as $om) : ?>
                      <tr>
                        <th scope="row"><?= $i; ?></a></th>
                        <td><?= $om["no_nota_order"]; ?></td>
                        <td><?= date('d / m / Y', strtotime($om["date_order"])); ?></td>
                        <td><?= $om["material_code"]; ?></td>
                        <td><?= $om["material_name"]; ?></td>
                        <td><?= $om["check_quantity_out"]; ?></td>
                        <td>
                          <a href="out_material_edit.php?id_out_material=<?= $om["id_out_material"] ?>" class="btn btn-success mb-2"><i class="bi bi-pencil-square"></i></a>
                          <a href="out_material_delete.php?id_out_material=<?= $om["id_out_material"] ?>" class="btn btn-danger mb-2"><i class="bi bi-trash" onclick="return confirm('Yakin akan menghapus data No. Nota : <?= $om['no_nota_order']; ?> ?');"></i></a>
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