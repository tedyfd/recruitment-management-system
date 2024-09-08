<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="row mt-4">
  <div class="col-lg-6 col-md-6 mb-md-0 mb-4">
    <div class="card">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-lg-6 col-7">
            <h6>Applicant</h6>
          </div>
          <div class="col-lg-6 col-5 my-auto text-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAddApplicant">Add Applicant</button>
          </div>
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsives">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">Username</th>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7"></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($applicant as $rows):?>
              <tr>
                <td class="align-middle text-center text-sm">
                  <a href="<?= base_url("/hr/applicant/$rows[id]") ?>">
                  <span class="text-xs font-weight-bold"> <?= $rows['username'] ?> </span>
                  </a>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs font-weight-bold"> <?= $rows['name'] ?> </span>
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
  <div class="col-lg-6 col-md-6 mb-md-0 mb-4">
    <div class="card">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-lg-6 col-7">
            <h6>User</h6>
          </div>
          <div class="col-lg-6 col-5 my-auto text-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAddUser">Add User</button>
          </div>
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsives">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">Username</th>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-7"></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($user as $rows):?>
              <tr>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs font-weight-bold"> <?= $rows['username'] ?> </span>
                </td>
                <td class="align-middle text-center text-sm">
                  <span class="text-xs font-weight-bold"> <?= $rows['name'] ?> </span>
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

<div class="modal" id="modalAddApplicant" tabindex="-1" tabindex="-1" aria-labelledby="modalAddApplicantLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h5 class="modal-title">Add Applicant</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="input-group input-group-outline mb-3 dark-version">
          <select class="form-select" id="job" name="job">
            <option selected>Job</option>
            <?php foreach($job as $rows): ?>
              <option value="<?= $rows['id'] ?>"><?= $rows['name'] . ' - ' . $rows['position_name'] . ' - ' . $rows['category_name']. ' - ' . $rows['organization_name']?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="input-group input-group-outline my-3">
          <label class="form-label">name</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="input-group input-group-outline my-3">
          <label class="form-label">Username</label>
          <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="input-group input-group-outline my-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" onclick="saveApplicant()">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="modalAddUser" tabindex="-1" tabindex="-1" aria-labelledby="modalAddUserLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h5 class="modal-title">Add User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="input-group input-group-outline mb-3 dark-version">
          <select class="form-select" id="userJobOrganization" name="userJobOrganization">
            <option selected>Job Organization</option>
            <?php foreach($jobOrganization as $rows): ?>
              <option value="<?= $rows['id'] ?>"><?= $rows['name']?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="input-group input-group-outline my-3">
          <label class="form-label">name</label>
          <input type="text" class="form-control" id="userName" name="userName">
        </div>
        <div class="input-group input-group-outline my-3">
          <label class="form-label">Username</label>
          <input type="text" class="form-control" id="userUsername" name="userUsername">
        </div>
        <div class="input-group input-group-outline my-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" id="userPassword" name="userPassword">
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" onclick="saveUser()">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script>
function saveApplicant() {
    const jobId = $("#job").val();
    const username = $("#username").val();
    const password = $("#password").val();
    const name = $("#name").val();
    if (jobId == "" || username == "" || password == "" || name == "") {
        alert("Please enter all required details.");
        return false;
    }
    $.ajax({
        url: "<?= base_url('hr/add_applicant') ?>",
        type: "POST",
        dataType: 'json',
        data: {
            jobId: jobId,
            name: name,
            username: username,
            password: password,
        },
        success: function(response) {
            $('#modalAddApplicant').modal('hide');
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
        url: "<?= base_url('hr/del_applicant/') ?>"+id,
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
function saveUser() {
    const jobOrganizationId = $("#userJobOrganization").val();
    const username = $("#userUsername").val();
    const password = $("#userPassword").val();
    const name = $("#userName").val();
    if (jobOrganizationId == "" || username == "" || password == "" || name == "") {
        alert("Please enter all required details.");
        return false;
    }
    $.ajax({
        url: "<?= base_url('hr/add_user') ?>",
        type: "POST",
        dataType: 'json',
        data: {
            jobOrganizationId: jobOrganizationId,
            name: name,
            username: username,
            password: password,
        },
        success: function(response) {
            $('#modalAddApplicant').modal('hide');
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