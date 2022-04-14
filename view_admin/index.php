<?php
include "../view_template/header.php";
include "../view_template/topbar.php";
include "../view_template/sidebar.php";
?>

<main id="main" class="main">
  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col">
        <div class="row">
          <!-- Jumlah Barang Card -->
          <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Jumlah Barang</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-box"></i>
                  </div>
                  <div class="ps-3">
                    <h6>145</h6>
                    <span class="text-muted small pt-2 ps-1">Barang</span>
                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Sales Card -->

          <!-- Barang Masuk Card -->
          <div class="col-xxl-4 col-md-4">
            <div class="card info-card revenue-card">
              <div class="card-body">
                <h5 class="card-title">Barang Masuk</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-box-arrow-in-down"></i>
                  </div>
                  <div class="ps-3">
                    <h6>24</h6>
                    <span class="text-muted small pt-2 ps-1">Barang</span>
                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Revenue Card -->

          <!-- Barang Keluar Card -->
          <div class="col-xxl-4 col-md-4">

            <div class="card info-card customers-card">
              <div class="card-body">
                <h5 class="card-title">Barang Keluar</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-box-arrow-in-up"></i>
                  </div>
                  <div class="ps-3">
                    <h6>12</h6>
                    <span class="text-muted small pt-2 ps-1">Barang</span>

                  </div>
                </div>

              </div>
            </div>

          </div><!-- End Customers Card -->

          <!-- Barang Baru Masuk -->
          <div class="col-12">
            <div class="card recent-sales overflow-auto">
              <div class="card-body">
                <h5 class="card-title">Barang Baru Masuk</h5>

                <table class="table table-borderless datatable">
                  <thead>
                    <tr>
                      <th scope="col">No. </th>
                      <th scope="col">Kode Barang</th>
                      <th scope="col">Nama Barang</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</a></th>
                      <td>#2457</a></td>
                      <td>Brandon Jacob</td>
                    </tr>
                    <tr>
                      <th scope="row">2</a></th>
                      <td>#2147</a></td>
                      <td>Bridie Kessler</td>
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