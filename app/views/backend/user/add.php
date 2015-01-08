<form class="form-horizontal form-bordered validate" action="<?php echo site_url('panel/users/add_save'); ?>" role="form" method="POST">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h6 class="panel-title" style="width: 100%;"><i class="icon-menu"></i> <?php echo (!empty($title) ? $title : '') ?>
        <a href="<?php echo site_url('panel/users'); ?>" class="pull-right btn btn-default btn-left-icon"><i class="icon-arrow-left9"></i> Kembali</a>
      </h6>
    </div>
    <div class="panel-body">
      <div class="form-group">
        <label class="col-sm-2 control-label">Pilih Group: <span class="mandatory">*</span></label>
        <div class="col-sm-10">
          <select name="group_id" data-placeholder="Pilih Nama Group..." class="select-search" tabindex="2" data-rule-required="true">
            <option value=""></option>
            <?php 
              $groups = get_all_group(); 
              if(count($groups)>0){
                  foreach ($groups as $key => $value) { ?>
                    <option value="<?php echo $value->id; ?>"><?php echo $value->group_name; ?></option>        
                  <?php } 
                } ?>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Nama Lengkap: <span class="mandatory">*</span></label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="fullname" data-rule-required="true">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Email: <span class="mandatory">*</span></label>
        <div class="col-sm-10">
          <input type="email" class="form-control" name="email" data-rule-required="true">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Password: <span class="mandatory">*</span></label>
        <div class="col-sm-10">
          <input type="password" class="form-control" name="password" data-rule-required="true">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Status: <span class="mandatory">*</span></label>
        <div class="col-sm-10">
          <label class="checkbox-inline">
            <input type="checkbox" class="switch" name="status" value="non active" data-on-label="Yes" data-off-label="No">
          </label>
        </div>
      </div>
      <div class="form-actions text-right">
        <button type="submit" class="btn btn-success">Submit data</button>
      </div>
    </div>
  </div>
</form>