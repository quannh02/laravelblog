<!DOCTYPE html
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description')">
    <meta name="author" content="">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>Admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ url('public/user/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ url('public/admin/css/mystyle.css')}}">
    <link href="{{ url('public/admin/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ url('public/admin/css/datepicker.css')}}">
    <link rel="stylesheet" href="{{ url('public/admin/css/bootstrap-responsive.css') }}">
    <link rel="stylesheet" href="{{ url('public/user/css/font-awesome.min.css') }}">
    <script src="{{ url('public/user/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ url('public/user/js/moment.js') }}"></script>
    <script type="text/javascript" src="{{ url('public/user/js/transition.js') }}"></script>
    <script type="text/javascript" src="{{ url('public/user/js/collapse.js') }}"></script>
    <script src="{{ url('public/user/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('public/user/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ url('public/admin/js/myscript.js') }}"></script>
    <script type="text/javascript" src="{{ url('public/user/js/search.js') }}"></script>
    
</head>
<body>
<script>
  $(function() {
  $.ajaxSetup({
    headers: {
      'X-CSRF-Token': $('meta[name="_token"]').attr('content')
    }
  });
});
</script>
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
           
              
              
              @if(Auth::user()->terms == 0)
              <li class=""><a href="{{ url('danhsachxe') }}"><i class="fa fa-cube fa-fw"></i>Tìm xe</a></li>
              <li class=""><a href="{{ url('datxe') }}"><i class="fa fa-cube fa-fw"></i>Đặt xe</a></li>
              <li class=""><a href="{{ url('quanlydondat') }}"><i class="fa fa-cube fa-fw"></i>Quản lý đặt xe</a></li>
              @endif
              @if(Auth::user()->terms == 1)
              <li class=""><a href="{{ url('danhmuc') }}"><i class="fa fa-car" aria-hidden="true"></i>Quản lý hãng</a></li>
              <li class=""><a href="{{ url('danhsachxe') }}"><i class="fa fa-car" aria-hidden="true"></i>Quản lý xe</a></li>
              <li class=""><a href="{{ url('quanlydatxe')}}"><i class="fa fa-book"></i>Quản lý đặt xe</a></li>
              <li class=""><a href="{{ url('dstaixe') }}"><i class="fa fa-male" aria-hidden="true"></i></i>Quản lý tài xế</a></li>
              <li class="dropdown hoverdropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search" aria-hidden="true"></i>
Tìm xe</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="{{ url('list/car') }}">
                        <i class="fa fa-newspaper-o">Tìm xe theo thời gian</i>
                      
                      </a>
                    </li>
                    <li class="">
                      <a href="{{ url('searchcar') }}">
                        <i class="fa fa-users fa-fw"></i>Tìm xe theo tên
                        
                      </a>
                    </li>
                  </ul>
              </li>  
              <li class="dropdown hoverdropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-plus" aria-hidden="true"></i>Thêm</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="{{ url('quanlytintuc') }}">
                        <i class="fa fa-newspaper-o">Quản lý tin tức</i>
                      
                      </a>
                    </li>
                    <li class="">
                      <a href="{{ route('user.index') }}">
                        <i class="fa fa-users fa-fw"></i>Quản lý thành viên
                        
                      </a>
                    </li>
                  </ul>
              </li>  
              @endif 
              <li class=""><a href="{{ url('trangchu') }}"><i class="fa fa-undo" aria-hidden="true"></i>Trang chủ</a></li>
              <li class="dropdown pull-right hoverdropdown">
              <a href="{{ url('user',  Auth::user()->nguoidung_id) }}" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user fa-fw"></i>Tài khoản</a>
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
    <div class="col-lg-12">
        @if(Session::has('flash_message'))
            <div class="alert alert-{!! Session::get('flash_level') !!}">
                {!! Session::get('flash_message') !!}
            </div>
        @endif
    </div>
    <!-- Page Content -->
    <div class="col-xs-12">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
    

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


<!-- Bootstrap Core JavaScript -->


<script src="{{ url('public/admin/js/bootstrap-datepicker.js') }}"></script>
</body>
</html>
