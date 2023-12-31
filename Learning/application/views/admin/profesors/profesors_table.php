<table id="profesorsTable" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Name</th>
      <th>Last Name</th>
      <th>Gender</th>
      <th>Birthday</th>
      <th>Email</th>
      <th>Empoyee ID</th>
      <th>options</th>
    </tr>
  </thead>
  <tbody>
    <?php if (@$profesors) {
      foreach ($profesors as $iProf) { ?>
        <tr>
          <td>
            <?= @$iProf->name_person; ?>
          </td>
          <td>
            <?= @$iProf->lastname_person; ?>
          </td>
          <td>
            <?= @$iProf->gender_person == "M" ? 'Male' : ''; ?>
            <?= @$iProf->gender_person == "F" ? 'Female' : ''; ?>
          </td>
          <td>
            <?= @$iProf->birthday_person; ?>
          </td>
          <td>
            <?= @$iProf->email_user; ?>
          </td>
          <td>
            <?= @$iProf->IDUser; ?>
          </td>
          <td>
            <?php
            $session = $this->session->userdata("up_sess");
            if (@$iProf->status_user == "Active") {
              if ($session->type_user != "Cordi") { ?>
                <button type="button" class="btn btn-success btn_rst_pass" data-code="<?= @$iProf->id_user; ?>" data-opt="reset"
                  data-toggle="modal" data-target="#profesors_modal">
                  <i class="fas fa-undo"></i> Password
                </button>
              <?php } ?>
              <button type="button" class="btn btn-success btn_operation" data-code="<?= @$iProf->id_user; ?>" data-opt="edit"
                data-toggle="modal" data-target="#profesors_modal">
                <i class="fas fa-edit"></i>
              </button>
              <button type="button" class="btn btn-danger btn_operation" data-code="<?= @$iProf->id_user; ?>"
                data-opt="inactivate" data-toggle="modal" data-target="#profesors_modal">
                <i class="fa fa-user-times"></i>
              </button>
            <?php } else { ?>
              <button type="button" class="btn btn-success btn_operation" data-code="<?= @$iProf->id_user; ?>"
                data-opt="reactive" data-toggle="modal" data-target="#profesors_modal">
                <i class="fas fa-edit"></i>
                Rehire
              </button>
            <?php }
            ?>
          </td>
        </tr>
      <?php }
    } ?>
  </tbody>
</table>