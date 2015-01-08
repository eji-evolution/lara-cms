<?php
  $uri2 = $this->uri->segment(2);
  $uri3 = $this->uri->segment(3);
  $sess = $this->session->userdata('admin');
  $user = user_by_id($sess['id']);
?>

<div class="sidebar collapse">
  <div class="sidebar-content">
    <!-- User dropdown -->
    <div class="user-menu dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <img src="<?php echo base_url('backend'); ?>/images/user.png" alt="">
      <div class="user-info"><?php echo $user->fullname; ?></div>
      </a>
      <div class="popup dropdown-menu dropdown-menu-right">
        <div class="thumbnail">
          <div class="thumb"><img alt="" src="<?php echo base_url('backend'); ?>/images/user.png">
            <div class="thumb-options"><span><a href="#" class="btn btn-icon btn-success"><i class="icon-pencil"></i></a><a href="#" class="btn btn-icon btn-success"><i class="icon-remove"></i></a></span></div>
          </div>
          <div class="caption text-center">
            <h6><?php echo $user->fullname; ?><small>Status : Superadmin</small></h6>
          </div>
        </div>
        <ul class="list-group">
          <li class="list-group-item"><i class="icon-pencil3 text-muted"></i> My posts <span class="label label-success">289</span></li>
          <li class="list-group-item"><i class="icon-people text-muted"></i> Users online <span class="label label-danger">892</span></li>
          <li class="list-group-item"><i class="icon-stats2 text-muted"></i> Reports <span class="label label-primary">92</span></li>
          <li class="list-group-item"><i class="icon-stack text-muted"></i> Balance
            <h5 class="pull-right text-danger">$45.389</h5>
          </li>
        </ul>
      </div>
    </div>
    <!-- /user dropdown -->
    <!-- Main navigation -->
    <ul class="navigation">
      <li <?php echo ($uri2=='dashboard' ? 'class="active"' : '') ?>><a href="<?php echo site_url('panel/dashboard'); ?>"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>
      <li <?php echo ($uri2=='groups' || $uri2=='users' ? 'class="active"' : '') ?>>
          <a href="#" <?php echo ($uri2=='groups' || $uri2=='users' ? 'class="expand level-opened"' : 'class="expand"') ?>><span>Management User</span> <i class="icon-paragraph-justify2"></i></a>
        <ul <?php echo ($uri2=='groups' || $uri2=='users' ? 'style="display: block!important;"' : '') ?>>
          <li <?php echo ($uri2=='users' ? 'class="active"' : '') ?>><a href="<?php echo site_url('panel/users'); ?>">List Users</a></li>
          <li <?php echo ($uri2=='groups' ? 'class="active"' : '') ?>><a href="<?php echo site_url('panel/groups'); ?>">List Groups</a></li>
        </ul>
      </li>
    </ul>
    <!-- /main navigation -->
  </div>
</div>