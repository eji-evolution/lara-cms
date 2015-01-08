<form class="form-horizontal form-bordered validate" action="<?php echo site_url('panel/groups/edit_save/'.$data->id); ?>" role="form" method="POST">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h6 class="panel-title" style="width: 100%;"><i class="icon-menu"></i> <?php echo (!empty($title) ? $title : '') ?>
        <a href="<?php echo site_url('panel/groups'); ?>" class="pull-right btn btn-default btn-left-icon"><i class="icon-arrow-left9"></i> Kembali</a>
      </h6>
    </div>
    <div class="panel-body">
      <div class="form-group">
        <label class="col-sm-2 control-label">Nama Group: <span class="mandatory">*</span></label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="group_name" data-rule-required="true" value="<?php echo $data->group_name; ?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Deskripsi: <span class="mandatory">*</span></label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="group_description" data-rule-required="true" value="<?php echo $data->group_description; ?>">
        </div>
      </div>
      <div class="form-actions text-right">
        <button type="submit" class="btn btn-success">Submit data</button>
      </div>
    </div>
  </div>
</form>