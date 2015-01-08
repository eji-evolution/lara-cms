<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Admin Area </title>
  <link href="<?php echo base_url('backend'); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('backend'); ?>/css/londinium-theme.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('backend'); ?>/css/styles.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('backend'); ?>/css/icons.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('backend'); ?>/css/font-google.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="<?php echo base_url('backend'); ?>/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('backend'); ?>/js/jquery-ui.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('backend'); ?>/js/plugins/charts/sparkline.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('backend'); ?>/js/plugins/forms/uniform.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('backend'); ?>/js/plugins/forms/select2.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('backend'); ?>/js/plugins/forms/inputmask.js"></script>
  <script type="text/javascript" src="<?php echo base_url('backend'); ?>/js/plugins/forms/autosize.js"></script>
  <script type="text/javascript" src="<?php echo base_url('backend'); ?>/js/plugins/forms/inputlimit.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('backend'); ?>/js/plugins/forms/listbox.js"></script>
  <script type="text/javascript" src="<?php echo base_url('backend'); ?>/js/plugins/forms/multiselect.js"></script>
  <script type="text/javascript" src="<?php echo base_url('backend'); ?>/js/plugins/forms/validate.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('backend'); ?>/js/plugins/forms/tags.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('backend'); ?>/js/plugins/forms/switch.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('backend'); ?>/js/plugins/forms/uploader/plupload.full.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('backend'); ?>/js/plugins/forms/uploader/plupload.queue.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('backend'); ?>/js/plugins/forms/wysihtml5/wysihtml5.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('backend'); ?>/js/plugins/forms/wysihtml5/toolbar.js"></script>
  <script type="text/javascript" src="<?php echo base_url('backend'); ?>/js/plugins/interface/daterangepicker.js"></script>
  <script type="text/javascript" src="<?php echo base_url('backend'); ?>/js/plugins/interface/fancybox.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('backend'); ?>/js/plugins/interface/moment.js"></script>
  <script type="text/javascript" src="<?php echo base_url('backend'); ?>/js/plugins/interface/jgrowl.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('backend'); ?>/js/plugins/interface/datatables.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('backend'); ?>/js/plugins/interface/colorpicker.js"></script>
  <script type="text/javascript" src="<?php echo base_url('backend'); ?>/js/plugins/interface/fullcalendar.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('backend'); ?>/js/plugins/interface/timepicker.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('backend'); ?>/js/plugins/interface/collapsible.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('backend'); ?>/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('backend'); ?>/js/application.js"></script>
</head>
<body class="sidebar-wide">
<!-- Navbar -->
<?php echo $this->load->view('backend/master/navbar'); ?>
<!-- /navbar -->
<!-- Page container -->
<div class="page-container">
  <!-- Sidebar -->
  <?php echo $this->load->view('backend/master/sidebar'); ?>
  <!-- /sidebar -->
  <!-- Page content -->
  <div class="page-content">
    

    <!-- Breadcrumbs line -->
    <?php echo $this->load->view('backend/master/breadcrumb'); ?>
    <!-- /breadcrumbs line -->
    <!-- Default info blocks -->
    
   <!--  <ul class="info-blocks">
      <li class="bg-primary">
        <div class="top-info"><a href="#">Add new post</a><small>post management</small></div>
        <a href="#"><i class="icon-pencil"></i></a><span class="bottom-info bg-danger">12 drafts in progress</span>
      </li>
      <li class="bg-success">
        <div class="top-info"><a href="#">Site parameters</a><small>layout settings</small></div>
        <a href="#"><i class="icon-cogs"></i></a><span class="bottom-info bg-primary">No updates</span>
      </li>
      <li class="bg-danger">
        <div class="top-info"><a href="#">Site statistics</a><small>visits, users, orders stats</small></div>
        <a href="#"><i class="icon-stats2"></i></a><span class="bottom-info bg-primary">3 new updates</span>
      </li>
      <li class="bg-info">
        <div class="top-info"><a href="#">My messages</a><small>messages history</small></div>
        <a href="#"><i class="icon-bubbles3"></i></a><span class="bottom-info bg-primary">24 new messages</span>
      </li>
      <li class="bg-warning">
        <div class="top-info"><a href="#">Orders history</a><small>purchases statistics</small></div>
        <a href="#"><i class="icon-cart2"></i></a><span class="bottom-info bg-primary">17 new orders</span>
      </li>
      <li class="bg-primary">
        <div class="top-info"><a href="#">Invoices stats</a><small>invoices archive</small></div>
        <a href="#"><i class="icon-coin"></i></a><span class="bottom-info bg-danger">9 new invoices</span>
      </li>
    </ul> -->
    <!-- /default info blocks -->
    <!-- Page tabs -->
    <?php echo $this->load->view('backend/'.$page); ?>
    <!-- /page tabs -->
    <!-- Footer -->
    <div class="footer clearfix">
      <div class="pull-left">&copy; 2014. Admin system.</div>
      <div class="pull-right icons-group"> <a href="<?php echo base_url(''); ?>" target="_blank"><i class="icon-screen2"></i></a></div>
    </div>
    <!-- /footer -->
  </div>
  <!-- /page content -->
</div>
<!-- /page container -->
<script type="text/javascript">
$(document).ready(function(){
  <?php if($this->session->flashdata('error')){ ?>
    var error = "<?php echo $this->session->flashdata('error'); ?>";
    $.jGrowl(error, { sticky: true, theme: 'growl-error', header: 'Error!' });
  <?php } ?>
  <?php if($this->session->flashdata('success')){ ?>
    var success = "<?php echo $this->session->flashdata('success'); ?>";
    $.jGrowl(success, { sticky: true, theme: 'growl-success', header: 'Success!' });
  <?php } ?>
});
</script>
</body>
</html>