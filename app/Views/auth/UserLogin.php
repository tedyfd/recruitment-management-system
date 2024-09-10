<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
  <link rel="icon" type="image/png" href="img/favicon.png">
  <title>
    User Login
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../../../css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
</head>

<body class="bg-gray-200">
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100"  style="background-image: url('https://images.unsplash.com/photo-1686771416282-3888ddaf249b?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">User</h4>
                </div>
              </div>
              <div class="card-body">
                <form method="POST" action="<?= base_url('auth/user/login_process') ?>">
                <?= csrf_field(); ?>
                  <?php if($session->getFlashdata('message')): ?>
                  <div class="bg-gradient-primary pe-1">
                    <div class="text-white font-weight-bolder text-center mt-2 mb-0"><?= $session->getFlashdata('message') ?></div>
                  </div>
                  <?php endif ?>
                  <a href="<?= base_url() ?>"><span>Home</span></a>
                  <div class="input-group input-group-outline my-3">
                  <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username">
                  </div>
                  <div id="validationServerUsernameFeedback" class="invalid-feedback">
                      
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign in</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="../../../js/core/popper.min.js"></script>
  <script src="../../../js/core/bootstrap.min.js"></script>
  <script src="../../../js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../../../js/material-dashboard.js?v=3.1.0"></script>
</body>

</html>