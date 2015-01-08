<?php
  $uri2 = $this->uri->segment(2);
  $uri3 = $this->uri->segment(3);
?>

<!-- Page header -->
<div class="page-header">
  <div class="page-title">
    <h3><?php echo (!empty($uri2) ? ucwords($uri2) : 'Admin Area') ?></h3>
  </div>
</div>
<!-- /page header -->

<div class="breadcrumb-line">
      <ul class="breadcrumb">
        <li><a href="<?php echo site_url('panel/dashboard'); ?>"><i class="fa fa-home"></i> Dashboard</a></li>
        <?php if($uri2!='dashboard'){ ?>
        <li class="active"><?php echo ucwords($uri2); ?></li>
        <?php } ?>
      </ul>
      <div class="visible-xs breadcrumb-toggle"><a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a></div>
      <!-- <ul class="breadcrumb-buttons collapse">
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-search3"></i> <span>Search</span> <b class="caret"></b></a>
          <div class="popup dropdown-menu dropdown-menu-right">
            <div class="popup-header"><a href="#" class="pull-left"><i class="icon-paragraph-justify"></i></a><span>Quick search</span><a href="#" class="pull-right"><i class="icon-new-tab"></i></a></div>
            <form action="#" class="breadcrumb-search">
              <input type="text" placeholder="Type and hit enter..." name="search" class="form-control autocomplete">
              <div class="row">
                <div class="col-xs-6">
                  <label class="radio">
                    <input type="radio" name="search-option" class="styled" checked="checked">
                    Everywhere</label>
                  <label class="radio">
                    <input type="radio" name="search-option" class="styled">
                    Invoices</label>
                </div>
                <div class="col-xs-6">
                  <label class="radio">
                    <input type="radio" name="search-option" class="styled">
                    Users</label>
                  <label class="radio">
                    <input type="radio" name="search-option" class="styled">
                    Orders</label>
                </div>
              </div>
              <input type="submit" class="btn btn-block btn-success" value="Search">
            </form>
          </div>
        </li>
        <li class="language dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo base_url('backend'); ?>/images/flags/german.png" alt=""> <span>German</span> <b class="caret"></b></a>
          <ul class="dropdown-menu dropdown-menu-right icons-right">
            <li><a href="#"><img src="<?php echo base_url('backend'); ?>/images/flags/ukrainian.png" alt=""> Ukrainian</a></li>
            <li class="active"><a href="#"><img src="<?php echo base_url('backend'); ?>/images/flags/english.png" alt=""> English</a></li>
            <li><a href="#"><img src="<?php echo base_url('backend'); ?>/images/flags/spanish.png" alt=""> Spanish</a></li>
            <li><a href="#"><img src="<?php echo base_url('backend'); ?>/images/flags/german.png" alt=""> German</a></li>
            <li><a href="#"><img src="<?php echo base_url('backend'); ?>/images/flags/hungarian.png" alt=""> Hungarian</a></li>
          </ul>
        </li>
      </ul> -->
    </div>