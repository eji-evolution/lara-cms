<div class="block">
  <h6 class="heading-hr"><i class="icon-users"></i> <?php echo (!empty($title) ? $title : '') ?>
        <a href="<?php echo site_url('panel/groups/add'); ?>" class="pull-right btn btn-default btn-left-icon"><i class="icon-plus-circle"></i> Tambah</a>
  </h6>
  <div class="datatable-custom">
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Nama Group</th>
          <th>Deskripsi</th>
          <th style="width: 18%;">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data as $key => $value) { ?>
              <tr>
                <td><?php echo $value->group_name; ?></td>
                <td><?php echo $value->group_description; ?></td>
                <td>
                    <div class="btn-group">
                      <a href="<?php echo site_url('panel/groups/edit/'.$value->id); ?>" class="btn btn-xs btn-success"><i class="icon-pencil3"></i> Edit</a>
                      <a href="<?php echo site_url('panel/groups/delete/'.$value->id); ?>" class="btn btn-xs btn-danger remove-data"><i class="icon-remove3"></i> Delete</a>
                    </div>
                </td>
              </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
  datatable_custom();
});
function datatable_custom()
{


  oTable = $('.datatable-custom table').dataTable({
    "bJQueryUI": false,
    "bAutoWidth": false,
    "iDisplayLength": 5,
    "sPaginationType": "full_numbers",
    "sDom": '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
    "oLanguage": {
      "sSearch": "<span>Filter:</span> _INPUT_",
      "sLengthMenu": "<span>Show:</span> _MENU_",
      "oPaginate": { "sFirst": "First", "sLast": "Last", "sNext": "Next →", "sPrevious": "← Previous" }
    },
    "aoColumnDefs": [
        // { "bSortable": false, "aTargets": [ 1, 6 ] }
        { 'bSortable': false, 'aTargets': [2] }
      ],
      "aaSorting": [[1,'desc']]   
  });
}
</script>
<style type="text/css">
  .heading-hr {
      padding-bottom: 20px;
      margin-bottom: 5px;
  }
</style>