<?php
include "../view_template/header.php";
include "../view_template/topbar.php";
include "../view_template/sidebar.php";

if (isset($_POST["users_add"])) {

  if (users_add($_POST) > 0) {
    echo "<script>
            alert('Pengguna Berhasil Ditambah!');
            document.location.href = 'users-list.php';
          </script>";
  } else {
    echo "<script>
            alert('Pengguna Gagal Ditambah!');
            document.location.href = 'users-add.php';
          </script>";
  }
}
?>

<main id="main" class="main">
  <div class="pagetitle">
    <h1>Tambah Pengguna</h1>
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


                <h5 class="card-title">Isi Form Pengguna</h5>

                <!-- General Form Elements -->
                <form action="" method="post">
                  <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="email" name="email">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="username" name="username">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="password" name="password">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="phone" class="col-sm-2 col-form-label">Telephone</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="phone" name="phone">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" style="height: 100px" id="alamat" name="alamat"></textarea>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="role" class="col-sm-2 col-form-label">Role</label>
                    <div class="col-sm-10">
                      <select class="form-select" aria-label="Default select example" id="role" name="role_id">
                        <option value="2">Admin</option>
                        <option value="3">User</option>
                      </select>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                      <button type="submit" name="users_add" class="btn btn-primary">Tambah</button>
                    </div>
                  </div>

                </form><!-- End General Form Elements -->

              </div>
            </div>
          </div><!-- End Recent Sales -->
        </div>
      </div><!-- End Left side columns -->
    </div>
  </section>

</main><!-- End #main -->


<?php include "../view_template/footer.php"; ?>