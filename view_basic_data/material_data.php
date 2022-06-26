<?php
include "../view_template/header.php";
include "../view_template/topbar.php";
include "../view_template/sidebar.php";
?>

<main id="main" class="main">
  <div class="pagetitle">
    <h1>Daftar Barang</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Daftar Barang</li>
      </ol>
    </nav>
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
                <h5 class="card-title">Daftar Barang</h5>

                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">No. </th>
                      <th scope="col">Kode Barang</th>
                      <th scope="col">Nama Barang</th>
                      <th scope="col">Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</a></th>
                      <td>#2457</a></td>
                      <td>Barang 01</td>
                      <td>
                        <button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></button> |
                        <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">2</a></th>
                      <td>#2147</a></td>
                      <td>Barang 02</td>
                      <td>
                        <button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></button> |
                        <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                      </td>
                    </tr>
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