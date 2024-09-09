<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="row mt-4">
  <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
    <div class="card">
      <div class="card-header pb-0">
        <div class="row">
          <div class="col-lg-6 col-7">
            <h6>Form</h6>
          </div>
        </div>
      </div>
      <div class="card-body px-0 px-4">
          <div class="row">
            <div class="col-12 col-md-8 ">
              <input type="hidden" class="form-control" id="applicantId" name="applicantId" value='<?= $applicant['id'] ?>'>
              <div class="input-group input-group-outline mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name">
              </div>
              <div class="input-group input-group-outline mb-3">
                <select class="form-select" id="gender" name="gender">
                  <option selected disabled>Gender</option>
                  <option value="man">Man</option>
                  <option value="female">Female</option>
                </select>
              </div>
              <div class="input-group input-group-outline mb-3">
                <label class="form-label">Phone Number</label>
                <input type="number" class="form-control" id="phone" name="phone">
              </div>
              <div class="input-group input-group-outline mb-3">
                <label class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address">
              </div>
              <div class="input-group input-group-outline mb-3">
                <label class="form-label">Certificates</label>
                <input class="form-control" type="file" id="formFile">
              </div>
              <div class="text-center">
                <button type="button" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0" onclick="saveForm()">Submit</button>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
<script>
  function saveForm() {
    const applicantId = $("#applicantId").val();
    const name = $("#name").val();
    const gender = $("#gender").val();
    const phone = $("#phone").val();
    const address = $("#address").val();

    if (name == "" || gender == "" || phone == "" || address == "") {
        alert("Please enter all required details.");
        return false;
    }
    $.ajax({
        url: "<?= base_url('applicant/add_form') ?>",
        type: "POST",
        dataType: 'json',
        data: {
            applicantId: applicantId,
            name: name,
            gender: gender,
            phone: phone,
            address: address,
        },
        success: function(response) {
            if (response.status == true) {
                alert(response.msg);
                window.location.replace("<?= base_url('applicant') ?>");
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