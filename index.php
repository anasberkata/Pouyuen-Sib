<?php
session_start();

if (isset($_SESSION['login'])) {
    header("Location: view_admin/index.php");
    exit;
}

include "v_header.php";
?>

<main>
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                        <img src="assets/img/logopouyuen.png" alt="logo" width="100px">
                        <div class="d-flex justify-content-center py-4 text-center">
                            <a href="#" class="logo d-flex align-items-center w-auto">
                                <span class="d-none d-lg-block">Sistem Informasi Barang
                                    <br>PT. Pou Yuen Indonesia</span>
                            </a>
                        </div><!-- End Logo -->

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-2 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Login</h5>
                                </div>

                                <form class="row g-3 needs-validation mb-3" action="check_login.php" method="post">
                                    <div class="col-12">
                                        <label for="yourUsername" class="form-label">Username</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                            <input type="text" name="username" class="form-control" id="yourUsername" required>
                                            <div class="invalid-feedback">Tolong masukan username anda.</div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="yourPassword" required>
                                        <div class="invalid-feedback">Tolong masukan password anda.</div>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit" name="login">Login</button>
                                    </div>
                                </form>

                            </div>
                        </div>

                        <div class="credits">
                            Copyright &copy; <?= date("Y"); ?> By Riana Cahyawati</a>
                        </div>

                    </div>
                </div>
            </div>

        </section>

    </div>
</main><!-- End #main -->

<?php include "v_footer.php"; ?>