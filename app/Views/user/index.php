<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="row mt-4">
  <div class="col-lg-6 col-md-6 mb-md-0 mb-4">
    <div class="card">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-lg-6 col-7">
            <h6>Applicant Accepted by HR</h6>
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
                  <span class="text-xs font-weight-bold"> <?= $rows['name'] ?> </span>
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
                <td class="align-middle">
                  <div class="dropdown float-lg-end pe-4">
                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-secondary"></i>
                    </a>
                    <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                      <li><button class="dropdown-item border-radius-md">Update</button></li>
                      <li><a class="dropdown-item border-radius-md" onclick="delUser(<?= $rows['id'] ?>)">Delete</a></li>
                    </ul>
                  </div>
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