<?php
include "../view_template/header.php";
include "../view_template/topbar.php";
include "../view_template/sidebar.php";

$users = query("SELECT * FROM users WHERE NOT role_id = 1");
?>

<main id="main" class="main">
  <div class="pagetitle">
    <h1>Daftar Pengguna Aplikasi</h1>
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
                <a href="users-add.php" class="btn btn-primary mt-3 mb-3">Tambah Pengguna</a>
                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">No. </th>
                      <th scope="col">Nama</th>
                      <th scope="col">Telephone</th>
                      <th scope="col">E-Mail</th>
                      <th scope="col">Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($users as $u) : ?>
                      <tr>
                        <th scope="row"><?= $i; ?></a></th>
                        <td><?= $u['nama']; ?></a></td>
                        <td><?= $u['phone']; ?></a></td>
                        <td><?= $u['email']; ?></a></td>
                        <td>
                          <a href="users-edit.php?id=<?= $u['id']; ?>" class="btn btn-success"><i class="bi bi-pencil-square"></i></a> |
                          <a href="users-delete.php?id=<?= $u['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin dihapus?')"><i class="bi bi-trash"></i></a>
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