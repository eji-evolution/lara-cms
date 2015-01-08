<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Login System </title>
<link href="{{ URL::to('backend') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="{{ URL::to('backend') }}/css/londinium-theme.min.css" rel="stylesheet" type="text/css">
<link href="{{ URL::to('backend') }}/css/styles.min.css" rel="stylesheet" type="text/css">
<link href="{{ URL::to('backend') }}/css/icons.min.css" rel="stylesheet" type="text/css">
<link href="{{ URL::to('backend') }}/css/font-google.css" rel="stylesheet" type="text/css">
<!-- <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css"> -->
<script type="text/javascript" src="{{ URL::to('backend') }}/js/jquery.min.js"></script>
<script type="text/javascript" src="{{ URL::to('backend') }}/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{ URL::to('backend') }}/js/plugins/charts/sparkline.min.js"></script>
<script type="text/javascript" src="{{ URL::to('backend') }}/js/plugins/forms/uniform.min.js"></script>
<script type="text/javascript" src="{{ URL::to('backend') }}/js/plugins/forms/select2.min.js"></script>
<script type="text/javascript" src="{{ URL::to('backend') }}/js/plugins/forms/inputmask.js"></script>
<script type="text/javascript" src="{{ URL::to('backend') }}/js/plugins/forms/autosize.js"></script>
<script type="text/javascript" src="{{ URL::to('backend') }}/js/plugins/forms/inputlimit.min.js"></script>
<script type="text/javascript" src="{{ URL::to('backend') }}/js/plugins/forms/listbox.js"></script>
<script type="text/javascript" src="{{ URL::to('backend') }}/js/plugins/forms/multiselect.js"></script>
<script type="text/javascript" src="{{ URL::to('backend') }}/js/plugins/forms/validate.min.js"></script>
<script type="text/javascript" src="{{ URL::to('backend') }}/js/plugins/forms/tags.min.js"></script>
<script type="text/javascript" src="{{ URL::to('backend') }}/js/plugins/forms/switch.min.js"></script>
<script type="text/javascript" src="{{ URL::to('backend') }}/js/plugins/forms/uploader/plupload.full.min.js"></script>
<script type="text/javascript" src="{{ URL::to('backend') }}/js/plugins/forms/uploader/plupload.queue.min.js"></script>
<script type="text/javascript" src="{{ URL::to('backend') }}/js/plugins/forms/wysihtml5/wysihtml5.min.js"></script>
<script type="text/javascript" src="{{ URL::to('backend') }}/js/plugins/forms/wysihtml5/toolbar.js"></script>
<script type="text/javascript" src="{{ URL::to('backend') }}/js/plugins/interface/daterangepicker.js"></script>
<script type="text/javascript" src="{{ URL::to('backend') }}/js/plugins/interface/fancybox.min.js"></script>
<script type="text/javascript" src="{{ URL::to('backend') }}/js/plugins/interface/moment.js"></script>
<script type="text/javascript" src="{{ URL::to('backend') }}/js/plugins/interface/jgrowl.min.js"></script>
<script type="text/javascript" src="{{ URL::to('backend') }}/js/plugins/interface/datatables.min.js"></script>
<script type="text/javascript" src="{{ URL::to('backend') }}/js/plugins/interface/colorpicker.js"></script>
<script type="text/javascript" src="{{ URL::to('backend') }}/js/plugins/interface/fullcalendar.min.js"></script>
<script type="text/javascript" src="{{ URL::to('backend') }}/js/plugins/interface/timepicker.min.js"></script>
<script type="text/javascript" src="{{ URL::to('backend') }}/js/plugins/interface/collapsible.min.js"></script>
<script type="text/javascript" src="{{ URL::to('backend') }}/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ URL::to('backend') }}/js/application.js"></script>
</head>
<body class="full-width page-condensed">
<!-- Navbar -->
<div class="navbar navbar-inverse" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-right"><span class="sr-only">Toggle navbar</span><i class="icon-grid3"></i></button>
    <a class="navbar-brand" href="#">
      Admin System
    </a></div>
  <ul class="nav navbar-nav navbar-right collapse">
    <li><a href="{{ URL::to('/') }}"><i class="icon-screen2"></i></a></li>
  </ul>
</div>
<!-- /navbar -->
<!-- Login wrapper -->
<div class="login-wrapper">
  {{ Form::open(array('class' => 'validate','url'=>'auth/login')); }}
  <!-- <form action="{{ URL::to('/auth/login') }}" method="post" role="form" class="validate"> -->
    <div class="popup-header"><a class="pull-left"><i class="icon-user-plus"></i></a><span class="text-semibold">User Login</span>
      <div class="btn-group pull-right"><a class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cogs"></i></a>
        <ul class="dropdown-menu icons-right dropdown-menu-right">
          <li><a href="#"><i class="icon-people"></i> Change user</a></li>
          <li><a href="#"><i class="icon-info"></i> Forgot password?</a></li>
          <li><a href="#"><i class="icon-support"></i> Contact admin</a></li>
          <li><a href="#"><i class="icon-wrench"></i> Settings</a></li>
        </ul>
      </div>
    </div>
    <div class="well">
      <div class="form-group has-feedback">
        <label>Email</label>
        <input type="email" class="form-control" data-rule-required="true" placeholder="Email" name="email">
        <i class="icon-users form-control-feedback"></i></div>
      <div class="form-group has-feedback">
        <label>Password</label>
        <input type="password" class="form-control" data-rule-required="true" placeholder="Password" name="password">
        <i class="icon-lock form-control-feedback"></i></div>
      <div class="row form-actions">
        <div class="col-xs-6">
          <div class="checkbox checkbox-success">
            <label>
              <input type="checkbox" class="styled" name="remember_me">
              Remember me</label>
          </div>
        </div>
        <div class="col-xs-6">
          <button type="submit" class="btn btn-warning pull-right"><i class="icon-menu2"></i> Sign in</button>
        </div>
      </div>
    </div>
  <!-- </form> -->
  {{ Form::close(); }}
</div>
<!-- /login wrapper -->
<!-- Footer -->
<div class="footer clearfix">
  <div class="pull-left">&copy; 2015. Admin system. </div>
  <div class="pull-right icons-group"> <a href="{{ URL::to('/') }}"><i class="icon-screen2"></i></a></div>
</div>
<!-- /footer -->
<script type="text/javascript">
$(document).ready(function(){
  @if (Session::has('notif'))
    var success = "Session::has('notif')";
    $.jGrowl(success, { sticky: true, theme: 'growl-success', header: 'Success!' });
  @elseif ($errors->has('notif'))
    var error = "{{ $break = '' }}
        @foreach ($errors->all() as $error)
                {{ $error }}
                {{ $break = '<br/>' }}
        @endforeach";
    $.jGrowl(error, { sticky: true, theme: 'growl-error', header: 'Error!' });
  @elseif (Session::has('error'))
      var error = "{{ Session::get('error') }}";
    $.jGrowl(error, { sticky: true, theme: 'growl-error', header: 'Error!' });
  @endif
  
});
</script>
</body>
</html>