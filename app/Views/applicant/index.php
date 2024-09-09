<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="row mt-4">
  <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
    <div class="card">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-lg-6 col-7">
            <h6>Applicant</h6>
          </div>
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-2">
              <a href="<?= ($form) ? '#' : base_url('applicant/form')  ?>">
                <div class="card <?= ($form) ? 'bg-success' : 'bg-info' ?>">
                  <div class="card-header">
                    <div class="icon icon-shape icon-lg bg-gradient-secondary shadow text-center border-radius-lg">
                      <i class="material-icons opacity-10">receipt_long</i>
                    </div>
                  </div>
                  <div class="card-body pt-0 p-3 text-center">
                    <h6 class="text-center mb-0">Form</h6>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
    <div class="card h-100">
      <div class="card-header pb-0">
        <h6>Status Recruitment</h6>
      </div>
      <div class="card-body p-3">
        <div class="timeline timeline-one-side">
          <?php foreach($selection as $rows) : ?>
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="material-icons <?= $rows['color'] ?> text-gradient"><?= $rows['icon'] ?></i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0"><?= $rows['status'] ?></h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0"><?= $rows['created_at'] ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>                