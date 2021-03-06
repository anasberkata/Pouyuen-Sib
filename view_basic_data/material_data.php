<?php
include "../view_template/header.php";
include "../view_template/topbar.php";
include "../view_template/sidebar.php";

$material_data = query("SELECT * FROM material_data
                INNER JOIN material_catagory ON material_data.material_catagory = material_catagory.id_catagory
                INNER JOIN material_type ON material_data.material_type = material_type.id_material_type
                ");
?>

<main id="main" class="main">
  <div class="pagetitle">
    <h1>Material Data</h1>
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
                <a href="material_data_add.php" class="btn btn-primary my-4">Tambah Data</a>

                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">No. </th>
                      <th scope="col">Kode</th>
                      <th scope="col">Nama Material</th>
                      <th scope="col">Harga / Unit</th>
                      <th scope="col">Katagori</th>
                      <th scope="col">Tipe</th>
                      <th scope="col">Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($material_data as $md) : ?>
                      <tr>
                        <th scope="row"><?= $i; ?></a></th>
                        <td><?= $md["code"]; ?></td>
                        <td><?= $md["material_name"]; ?></td>
                        <td>Rp. <?= $md["price_unit"]; ?></td>
                        <td><?= $md["catagory"]; ?></td>
                        <td><?= $md["type"]; ?></td>
                        <td>
                          <a href="material_data_edit.php?id_material=<?= $md["id_material"] ?>" class="btn btn-success"><i class="bi bi-pencil-square"></i></a> |
                          <a href="material_data_delete.php?id_material=<?= $md["id_material"] ?>" class="btn btn-danger"><i class="bi bi-trash" onclick="return confirm('Yakin akan menghapus data material : <?= $md['material_name']; ?> ?');"></i></a>
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