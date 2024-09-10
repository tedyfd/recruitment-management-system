<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/ico" href="<?= base_url() ?>favicon.ico">
  <title>
    Recruitment Management System
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="<?= base_url() ?>css/material-dashboard.css?v=3.1.0" rel="stylesheet" />

</head>

<body class="g-sidenav-show  bg-gray-200 ">

  <?= $this->include('layout/sidebar'); ?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    
    <!-- Navbar -->
    <?= $this->include('layout/navbar'); ?>

    <!-- End Navbar -->
    <div class="container-fluid py-4">

        <?= $this->renderSection('content'); ?>

        <footer class="footer py-4  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            © <script>
                            document.write(new Date().getFullYear())
                            </script>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    </div>
                </div>
            </div>
        </footer>
    </div>
  </main>

  <!--   Core JS Files   -->
  <script src="<?= base_url() ?>js/core/popper.min.js"></script>
  <script src="<?= base_url() ?>js/core/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?= base_url() ?>js/plugins/smooth-scrollbar.min.js"></script>
  <script src="<?= base_url() ?>js/plugins/chartjs.min.js"></script>
  <script src="<?= base_url() ?>js/jquery.min.js"></script>

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url() ?>js/material-dashboard.js?v=3.1.0"></script>

  
  <script>
    // darkMode(document.getElementById("dark-version"));
    <?php if($session->getFlashdata('message')): ?>
    alert('<?= $session->getFlashdata('message') ?>');
    <?php endif; ?>
  </script>
</body>

</html>