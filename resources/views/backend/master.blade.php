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
    <link href="{{ url('public/admin/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
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
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav nav-tabs nav-pills">
           
              <li class=""><a href="{{ url('dstaixe') }}"><i class="fa fa-male" aria-hidden="true"></i></i>Quản lý tài xế<span class="caret"></span></a></li>
              <li class=""><a href="{{ url('danhsachxe') }}"><i class="fa fa-car" aria-hidden="true"></i>Quản lý xe<span class="caret"></span></a></li>
              @if(Auth::user()->terms == 0)
              <li class=""><a href="{{ url('timxe') }}"><i class="fa fa-cube fa-fw"></i>Tìm xe<span class="caret"></span></a></li>
              <li class=""><a href="{{ url('datxe') }}"><i class="fa fa-cube fa-fw"></i>Đặt xe<span class="caret"></span></a></li>
              @endif
              @if(Auth::user()->terms == 1)
              <li class=""><a href="{{ url('list/car') }}"><i class="fa fa-cube fa-fw"></i>Tìm xe<span class="caret"></span></a></li>
              <li class=""><a href="{{ url('quanlydatxe')}}"><i class="fa fa-book"></i>Quản lý đặt xe<span class="caret"></span></a></li>
          
              <li class="dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-plus" aria-hidden="true"></i>Thêm<span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li><a href="{{ url('quanlytintuc') }}"><i class="fa fa-newspaper-o">Quản lý tin tức</i><span class="caret"></span></a></li>
              <li class=""><a href="{{ route('user.index') }}"><i class="fa fa-users fa-fw"></i>Quản lý thành viên<span class="caret"></span></a></li>
              </ul>
              </li>  
              @endif 
              <li class=""><a href="{{ url('trangchu') }}"><i class="fa fa-undo" aria-hidden="true"></i>Trang chủ<span class="caret"></span></a></li>
              <li class="dropdown pull-right">
              <a href="{{ url('user',  Auth::user()->nguoidung_id) }}" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user fa-fw"></i>Tài khoản<span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li><a href="">{{ Auth::user()->tendaydu }}</a></li>
              <li><a href="{{ url('profile', Auth::user()->nguoidung_id) }}"><i class="fa fa-gear fa-fw"></i>Profile</a></li>
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
<script src="{{ url('public/admin/js/myscript.js') }}"></script>
<script src="{{ url('public/admin/js/bootstrap-datepicker.js') }}"></script>
</body>
</html>
