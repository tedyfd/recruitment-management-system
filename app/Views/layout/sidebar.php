<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="" target="_blank">
        <img src="<?= base_url() ?>img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">RMS</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <?php if($session->get('hr_logged_in')): ?>
          <li class="nav-item">
            <a class="nav-link text-white <?= ($_SERVER['REQUEST_URI'] == '/hr')? 'active bg-gradient-primary' : '' ?>" href="<?= base_url('hr') ?>">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">dashboard</i>
              </div>
              <span class="nav-link-text ms-1">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white <?= ($_SERVER['REQUEST_URI'] == '/hr/job_setting')? 'active bg-gradient-primary' : '' ?>" href="<?= base_url('hr/job_setting') ?>">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">dashboard</i>
              </div>
              <span class="nav-link-text ms-1">Job</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white <?= ($_SERVER['REQUEST_URI'] == '/hr/user')? 'active bg-gradient-primary' : '' ?>" href="<?= base_url('hr/user') ?>">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">dashboard</i>
              </div>
              <span class="nav-link-text ms-1">User</span>
            </a>
          </li>
        <?php elseif($session->get('applicant_logged_in')): ?>
          <li class="nav-item">
            <a class="nav-link text-white active bg-gradient-primary" href="<?= base_url('applicant') ?>">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">dashboard</i>
              </div>
              <span class="nav-link-text ms-1">Job</span>
            </a>
          </li>
        <?php elseif($session->get('user_logged_in')): ?>
        <?php endif; ?>
      </ul>
    </div>
</aside>