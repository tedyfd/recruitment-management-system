<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="row mt-4">
  <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
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
                      <div class="card-header mx-4 p-3 text-center">
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
</div>

<?= $this->endSection(); ?>                