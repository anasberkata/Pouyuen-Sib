<?php
include "../view_template/header.php";
include "../view_template/topbar.php";
include "../view_template/sidebar.php";

$po_proccess = query("SELECT * FROM po_proccess");
?>

<main id="main" class="main">
  <div class="pagetitle">
    <h1>PO Proccess</h1>
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
                <a href="po_proccess_add.php" class="btn btn-primary my-4">Tambah Data</a>
                <a href="po_proccess_excel.php" class="btn btn-warning my-4">Download</a>

                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">No. </th>
                      <th scope="col">No. PO</th>
                      <th scope="col">Kode Supplier</th>
                      <th scope="col">Nama Supplier</th>
                      <th scope="col">Tanggal Pengiriman</th>
                      <th scope="col">Tanggal PO</th>
                      <th scope="col">Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($po_proccess as $pp) : ?>
                      <tr>
                        <th scope="row"><?= $i; ?></a></th>
                        <td><?= $pp["no_po"]; ?></td>
                        <td><?= $pp["supplier_code"]; ?></td>
                        <td><?= $pp["supplier_name"]; ?></td>
                        <td><?= date('d / m / Y', strtotime($pp["delivery_date"])); ?></td>
                        <td><?= date('d / m / Y', strtotime($pp["date_po"])); ?></td>
                        <td>
                          <a href="po_proccess_edit.php?id_po_proccess=<?= $pp["id_po_proccess"] ?>" class="btn btn-success mb-2"><i class="bi bi-pencil-square"></i></a>
                          <a href="po_proccess_delete.php?id_po_proccess=<?= $pp["id_po_proccess"] ?>" class="btn btn-danger mb-2"><i class="bi bi-trash" onclick="return confirm('Yakin akan menghapus data PO : <?= $pp['supplier_name']; ?> ?');"></i></a>
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