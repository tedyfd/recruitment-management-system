<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="row mt-4">
  <div class="col-lg-12 col-md-6 mb-md-0 mt-4 ">
    <div class="card">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-lg-6 col-7">
            <h6>Job</h6>
          </div>
          <div class="col-lg-6 col-5 my-auto text-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAddJob">Add Job</button>
          </div>
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsives">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">name</th>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">category</th>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">position</th>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">organization</th>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7"></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($job as $rows):?>
              <tr>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs font-weight-bold"> <?= $rows['name'] ?> </span>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs font-weight-bold"> <?= $rows['category_name'] ?> </span>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs font-weight-bold"> <?= $rows['position_name'] ?> </span>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs font-weight-bold"> <?= $rows['organization_name'] ?> </span>
                </td>
                <td class="align-middle">
                  <div class="dropdown float-lg-end pe-4">
                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-secondary"></i>
                    </a>
                    <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                      <li><button class="dropdown-item border-radius-md">Update</button></li>
                      <li><a class="dropdown-item border-radius-md" onclick="delJob(<?= $rows['id'] ?>)">Delete</a></li>
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
  <div class="col-lg-4 col-md-6 mb-md-0 mt-4  ">
    <div class="card">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-lg-6 col-7">
            <h6>Job Category</h6>
          </div>
          <div class="col-lg-6 col-5 my-auto text-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAddJobCategory">Add Job Category</button>
          </div>
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsives">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">name</th>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">description</th>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7"></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($jobCategory as $rows):?>
              <tr>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs font-weight-bold"> <?= $rows['name'] ?> </span>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs font-weight-bold"> <?= $rows['description'] ?> </span>
                </td>
                <td class="align-middle">
                  <div class="dropdown float-lg-end pe-4">
                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-secondary"></i>
                    </a>
                    <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                      <li><button class="dropdown-item border-radius-md">Update</button></li>
                      <li><a class="dropdown-item border-radius-md" onclick="delApplicant(<?= $rows['id'] ?>)">Delete</a></li>
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
  <div class="col-lg-4 col-md-6 mb-md-0 mt-4  ">
    <div class="card">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-lg-6 col-7">
            <h6>Job Position</h6>
          </div>
          <div class="col-lg-6 col-5 my-auto text-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAddJobPosition">Add Job Position</button>
          </div>
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsives">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">name</th>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">description</th>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7"></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($jobPosition as $rows):?>
              <tr>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs font-weight-bold"> <?= $rows['name'] ?> </span>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs font-weight-bold"> <?= $rows['description'] ?> </span>
                </td>
                <td class="align-middle">
                  <div class="dropdown float-lg-end pe-4">
                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-secondary"></i>
                    </a>
                    <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                      <li><button class="dropdown-item border-radius-md">Update</button></li>
                      <li><a class="dropdown-item border-radius-md" onclick="delApplicant(<?= $rows['id'] ?>)">Delete</a></li>
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
  <div class="col-lg-4 col-md-6 mb-md-0 mt-4  ">
    <div class="card">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-lg-6 col-7">
            <h6>Job Organization</h6>
          </div>
          <div class="col-lg-6 col-5 my-auto text-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAddJobOrganization">Add Job Organization</button>
          </div>
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsives">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">name</th>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">description</th>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7"></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($jobOrganization as $rows):?>
              <tr>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs font-weight-bold"> <?= $rows['name'] ?> </span>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs font-weight-bold"> <?= $rows['description'] ?> </span>
                </td>
                <td class="align-middle">
                  <div class="dropdown float-lg-end pe-4">
                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-secondary"></i>
                    </a>
                    <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                      <li><button class="dropdown-item border-radius-md">Update</button></li>
                      <li><a class="dropdown-item border-radius-md" onclick="delJobOrganization(<?= $rows['id'] ?>)">Delete</a></li>
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

<div class="modal" id="modalAddJob" tabindex="-1" tabindex="-1" aria-labelledby="modalAddJobLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Job</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="input-group input-group-outline my-3">
          <label class="form-label">name</label>
          <input type="text" class="form-control" id="jobName" name="jobName">
        </div>
        <div class="input-group input-group-outline mb-3">
          <select class="form-select" id="jobCategory" name="jobCategory">
            <option selected>Job Category</option>
            <?php foreach($jobCategory as $rows): ?>
              <option value="<?= $rows['id'] ?>"><?= $rows['name'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="input-group input-group-outline mb-3">
          <select class="form-select" id="jobPosition" name="jobPosition">
            <option selected>Job Position</option>
            <?php foreach($jobPosition as $rows): ?>
              <option value="<?= $rows['id'] ?>"><?= $rows['name'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="input-group input-group-outline mb-3">
          <select class="form-select" id="jobOrganization" name="jobOrganization">
            <option selected>Job Organization</option>
            <?php foreach($jobOrganization as $rows): ?>
              <option value="<?= $rows['id'] ?>"><?= $rows['name'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" onclick="saveJob()">Save</button>
      </div>
    </div>
  </div>
</div>
<div class="modal" id="modalAddJobCategory" tabindex="-1" tabindex="-1" aria-labelledby="modalAddJobCategoryLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Job Category Add</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="input-group input-group-outline my-3">
          <label class="form-label">name</label>
          <input type="text" class="form-control" id="jobCategoryName" name="jobCategoryName">
        </div>
        <div class="input-group input-group-outline my-3">
          <label class="form-label">description</label>
          <input type="text" class="form-control" id="jobCategoryDescription" name="jobCategoryDescription">
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" onclick="saveJobCategory()">Save</button>
      </div>
    </div>
  </div>
</div>
<div class="modal" id="modalAddJobPosition" tabindex="-1" tabindex="-1" aria-labelledby="modalAddJobPositionLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Job Position Add</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="input-group input-group-outline my-3">
          <label class="form-label">name</label>
          <input type="text" class="form-control" id="jobPositionName" name="jobPositionName">
        </div>
        <div class="input-group input-group-outline my-3">
          <label class="form-label">description</label>
          <input type="text" class="form-control" id="jobPositionDescription" name="jobPositionDescription">
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" onclick="saveJobPosition()">Save</button>
      </div>
    </div>
  </div>
</div>
<div class="modal" id="modalAddJobOrganization" tabindex="-1" tabindex="-1" aria-labelledby="modalAddJobOrganizationLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Job Organization Add</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="input-group input-group-outline my-3">
          <label class="form-label">name</label>
          <input type="text" class="form-control" id="jobOrganizationName" name="jobOrganizationName">
        </div>
        <div class="input-group input-group-outline my-3">
          <label class="form-label">description</label>
          <input type="text" class="form-control" id="jobOrganizationDescription" name="jobOrganizationDescription">
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" onclick="saveJobOrganization()">Save</button>
      </div>
    </div>
  </div>
</div>

<script>
function saveJob() {
    const jobName = $("#jobName").val();
    const jobCategory = $("#jobCategory").val();
    const jobPosition = $("#jobPosition").val();
    const jobOrganization = $("#jobOrganization").val();
    if (jobName == "" || jobCategory == "" || jobPosition == "" || jobOrganization == "") {
        alert("Please enter all required details.");
        return false;
    }
    $.ajax({
        url: "<?= base_url('hr/add_job') ?>",
        type: "POST",
        dataType: 'json',
        data: {
          jobName: jobName,
          jobCategory: jobCategory,
          jobPosition: jobPosition,
          jobOrganization: jobOrganization,  
        },
        success: function(response) {
            $('#modalAddJob').modal('hide');
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

function saveJobCategory() {
    const jobCategoryName = $("#jobCategoryName").val();
    const jobCategoryDescription = $("#jobCategoryDescription").val();
    if (jobCategoryName == "" ) {
        alert("Please enter all required details.");
        return false;
    }
    $.ajax({
        url: "<?= base_url('hr/add_job_category') ?>",
        type: "POST",
        dataType: 'json',
        data: {
            name: jobCategoryName,
            description: jobCategoryDescription,
        },
        success: function(response) {
            $('#modalAddJobCategory').modal('hide');
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

function delApplicant(id){
  const delConfirm = confirm('Are you sure you want to delete this? ');
  if (delConfirm)
  {
    $.ajax({
        url: "<?= base_url('hr/del_job_category/') ?>"+id,
        type: "DELETE",
        dataType: 'json',
        data: {
            id: id,
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
}

function saveJobPosition() {
    const jobPositionName = $("#jobPositionName").val();
    const jobPositionDescription = $("#jobPositionDescription").val();
    if (jobPositionName == "" ) {
        alert("Please enter all required details.");
        return false;
    }
    $.ajax({
        url: "<?= base_url('hr/add_job_position') ?>",
        type: "POST",
        dataType: 'json',
        data: {
            name: jobPositionName,
            description: jobPositionDescription,
        },
        success: function(response) {
            $('#modalAddJobPosition').modal('hide');
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

function saveJobOrganization() {
    const jobOrganizationName = $("#jobOrganizationName").val();
    const jobOrganizationDescription = $("#jobOrganizationDescription").val();
    if (jobOrganizationName == "" ) {
        alert("Please enter all required details.");
        return false;
    }
    $.ajax({
        url: "<?= base_url('hr/add_job_organization') ?>",
        type: "POST",
        dataType: 'json',
        data: {
            name: jobOrganizationName,
            description: jobOrganizationDescription,
        },
        success: function(response) {
            $('#modalAddJobOrganization').modal('hide');
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