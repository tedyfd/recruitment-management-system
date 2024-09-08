<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="row mt-4">
  <div class="col-lg-6 col-md-6 mb-md-0 mb-4">
    <div class="card">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-lg-6 col-7">
            <h6>Applicant Accepted by HR</h6>
            <p>You organize <strong><?= $jobOrganization['name'] ?></strong></p>
          </div>
          <div class="col-lg-6 col-5 my-auto text-end">
          </div>
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsives">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">Job Category</th>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">Job Position</th>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">Job Organization</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($applicant as $rows):?>
              <tr>
                <td class="align-middle text-center text-sm">
                  <a href="<?= base_url("/user/applicant/$rows[id]") ?>">
                    <span class="text-xs font-weight-bold"> <?= $rows['name'] ?> </span>
                  </a>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs font-weight-bold"> <?= $rows['job_category'] ?> </span>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs font-weight-bold"> <?= $rows['job_position'] ?> </span>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs font-weight-bold"> <?= $rows['job_organization'] ?> </span>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
 
</div>



<script>

</script>

<?= $this->endSection(); ?>                