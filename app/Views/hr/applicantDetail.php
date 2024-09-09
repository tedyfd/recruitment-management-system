<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
  <span class="mask  bg-gradient-primary  opacity-6"></span>
</div>
<div class="card card-body mx-3 mx-md-4 mt-n6">
  <div class="row gx-4 mb-2">
    <div class="col-auto">
      <div class="avatar avatar-xl position-relative">
        <img src="<?= base_url() ?>img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
      </div>
    </div>
    <div class="col-auto my-auto">
      <div class="h-100">
        <h5 class="mb-1">
          <?= $applicant['name'] ?>
        </h5>
        <p class="mb-0 font-weight-normal text-sm">
          <?= $job['category_name'] . ' ' . $job['position_name'] . ' - ' . $job['organization_name'] ?>
        </p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="row">
      <div class="col-12 col-xl-8">
        <div class="card card-plain h-100">
          <div class="card-header pb-0 p-3">
            <div class="row">
              <div class="col-md-8 d-flex align-items-center">
                <h6 class="mb-0">Form</h6>
              </div>
            </div>
          </div>
          <div class="card-body p-3">
            <hr class="horizontal gray-light my-4">
            <?php if($selectionRow['selection_status_id'] === '4'):?>
            <button type="submit" class="btn btn-primary" onclick="addSelection(<?= $applicant['id'] ?>,5)">Accept</button>
            <button type="submit" class="btn btn-primary" onclick="addSelection(<?= $applicant['id'] ?>,2)">Reject</button>
            <?php endif; ?>
            <ul class="list-group">
              <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full Name:</strong> &nbsp; <?= $form['name'] ?></li>
              <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Gender:</strong> &nbsp; <?= $form['gender'] ?></li>
              <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Mobile:</strong> &nbsp; <?= $form['phone_number'] ?></li>
              <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Address:</strong> &nbsp; <?= $form['address'] ?></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-12 col-xl-4">
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
  </div>
</div>
<script>
function addSelection(applicantId, selectionStatusId) {
  
  $.ajax({
      url: "<?= base_url('hr/add_selection') ?>",
      type: "POST",
      dataType: 'json',
      data: {
          applicantId: applicantId,
          selectionStatusId: selectionStatusId,
      },
      success: function(response) {
          if (response.status == true) {
              alert(response.msg);
              location.reload();
          } else {
              alert(response.msg);
          }
      },
      error: function(xhr, status) {
          console.log('ajax error = ' + xhr.statusText);
          alert(response.msg);
      }
  });
}
</script>
<?= $this->endSection(); ?>                