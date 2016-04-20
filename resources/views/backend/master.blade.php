<!DOCTYPE html
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ url('public/admin/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ url('public/admin/css/mystyle.css')}}">
    <link href="{{ url('public/admin/css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ url('public/admin/css/datepicker.css')}}">
    <link rel="stylesheet" href="{{ url('public/admin/css/bootstrap-responsive.css') }}">
</head>
<body>
<div class="container">
<div id="wrapper">
    <div class="row">
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Dashboard</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bar-chart-o fa-fw"></i>Car Types<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">List CarType</a></li>
            <li><a href="#">Add CarType</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cube fa-fw"></i>Cars<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">List Cars</a></li>
            <li><a href="#">Add Car</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cube fa-fw"></i>Bookings<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('list/car') }}">List Bookings</a></li>
            <li><a href="{{ url('datxe') }}">Add Bookings</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users fa-fw"></i>Member<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('user.index') }}">List User</a></li>
            <li><a href="{{ route('user.create') }}">Add User</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="{{ url('user',  Auth::user()->id) }}" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user fa-fw"></i>{{ Auth::user()->fullname }}<span class="caret"></span></a>
          <ul class="dropdown-menu">

            <li><a href="{{ url('profile', Auth::user()->id) }}"><i class="fa fa-gear fa-fw"></i>Profile</a></li>
            <li><a href="{!! route('logout')!!}"><i class="fa fa-sign-out fa-fw">Logout</i></a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    
    <!-- Page Content -->
    <div class="col-xs-12">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
    <div class="col-lg-12">
        @if(Session::has('flash_message'))
            <div class="alert alert-{!! Session::get('flash_level') !!}">
                {!! Session::get('flash_message') !!}
            </div>
        @endif
    </div>
    
    <!-- Page Content -->
        @yield('content')
    <!-- /#page-wrapper -->
   
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
     </div>
     </div> <!-- end row -->
</div>
<!-- /#wrapper -->
</div>  <!-- end container -->
<!-- jQuery -->
<script src="{{ url('public/admin/js/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ url('public/admin/js/bootstrap.min.js') }}"></script>

<!-- Metis Menu Plugin JavaScript -->
<!-- <script src="{{ url('public/admin/js/metisMenu.min.js') }}"></script> -->

<!-- Custom Theme JavaScript -->
<!-- <script src="{{ url('public/admin/js/sb-admin-2.js') }}"></script> -->

<!-- DataTables JavaScript -->
<!-- <script src="{{ url('public/admin/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('public/admin/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ url('public/admin/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ url('public/admin/js/responsive.bootstrap.min.js') }}"></script> -->
<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<!-- myscript -->
<script src="{{ url('public/admin/js/myscript.js') }}"></script>
<script src="{{ url('public/admin/js/bootstrap-datepicker.js') }}"></script>
</body>
</html>
