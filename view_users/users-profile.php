<?php
include "../view_template/header.php";
include "../view_template/topbar.php";
include "../view_template/sidebar.php";

$id = $_SESSION['id'];
$users = query("SELECT * FROM users INNER JOIN users_role ON users.role_id = users_role.id_role WHERE id = $id")[0];

if (isset($_POST["users_profile_edit"])) {
  // cek apakah data berhasil di tambahkan atau tidak
  if (users_profile_edit($_POST) > 0) {
    echo "<script>
            alert('Data Berhasil Ditambah!');
            document.location.href = 'users-profile.php';
          </script>";
  } else {
    echo "<script>
            alert('Data Gagal Ditambah!');
            document.location.href = 'users-profile.php';
          </script>";
  }
}
?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Profile</h1>
  </div><!-- End Page Title -->

  <section class="section profile">
    <div class="row">
      <div class="col">

        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
              </li>

              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
              </li>

            </ul>
            <div class="tab-content pt-2">

              <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <h5 class="card-title">Profile Details</h5>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">Nama</div>
                  <div class="col-lg-9 col-md-8"><?= $users['nama']; ?></div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">Username</div>
                  <div class="col-lg-9 col-md-8"><?= $users['username']; ?></div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Alamat</div>
                  <div class="col-lg-9 col-md-8"><?= $users['alamat']; ?></div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Telephone / Whatsapp</div>
                  <div class="col-lg-9 col-md-8"><?= $users['phone']; ?></div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Email</div>
                  <div class="col-lg-9 col-md-8"><?= $users['email']; ?></div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Role</div>
                  <div class="col-lg-9 col-md-8"><?= $users['role_name']; ?></div>
                </div>

              </div>

              <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                <!-- Profile Edit Form -->
                <form action="" method="post">

                  <input name="id" type="hidden" value="<?= $users['id']; ?>">

                  <div class="row mb-3">
                    <label for="nama" class="col-md-4 col-lg-3 col-form-label">Nama</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="nama" type="text" class="form-control" id="nama" value="<?= $users['nama']; ?>">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="username" class="col-md-4 col-lg-3 col-form-label">Username</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="username" type="text" class="form-control" id="username" value="<?= $users['username']; ?>">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="alamat" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="alamat" type="text" class="form-control" id="alamat" value="<?= $users['alamat']; ?>">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="phone" class="col-md-4 col-lg-3 col-form-label">Telephone / Whatsapp</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="phone" type="text" class="form-control" id="phone" value="<?= $users['phone']; ?>">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="email" type="email" class="form-control" id="Email" value="<?= $users['email']; ?>">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="role" class="col-md-4 col-lg-3 col-form-label">Role</label>
                    <div class="col-md-8 col-lg-9">
                      <select class="form-select" aria-label="Default select example" id="role" name="role_id">
                        <option value="<?= $users['role_id']; ?>"><?= $users['role_name']; ?></option>
                        <option value="2">Admin</option>
                        <option value="3">User</option>
                      </select>
                    </div>
                  </div>

                  <div class="text-end">
                    <button type="submit" class="btn btn-primary" name="users_profile_edit">Simpan</button>
                  </div>
                </form><!-- End Profile Edit Form -->

              </div>

              <div class="tab-pane fade pt-3" id="profile-change-password">
                <!-- Change Password Form -->
                <form>

                  <div class="row mb-3">
                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="password" type="password" class="form-control" id="currentPassword">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="newpassword" type="password" class="form-control" id="newPassword">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                    </div>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                  </div>
                </form><!-- End Change Password Form -->

              </div>

            </div><!-- End Bordered Tabs -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->


<?php include "../view_template/footer.php"; ?>