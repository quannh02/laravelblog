<body>
    <script type="text/javascript" src="{{ url('public/user/js/jquery.js') }}"></script>
    <script type="text/javascript">
        $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
        });
    </script>
    <script type="text/javascript" src="{{ url('public/user/js/votes.js') }}"></script>
    <div class="top margin-fixed-top">
        <div class="col-xs-2">
            <div class="">
                <a href="#"><img src="{{ url('public/user/images/logo.png') }}" class="logo img-responsive" style="float:right;"></a>
            </div><!--end container-->
        </div>
        <div class="col-xs-4">
            <form class="navbar-form" role="search" action="{{ url('/search') }}" method="post">
            {{ csrf_field() }}
              <div class="form-group">
                <input type="text" class="form-control search-width" name="q" placeholder="Tìm kiếm">
              </div>
              <button type="submit" class="btn btn-default">Tìm kiếm</button>
            </form>
        </div>
        <div class="col-xs-2">
            <div class="footer-social">
            <a href="" title="Facebook">
                <img src="{{ url('public/user/images/facebook-icon.png') }}"></a>
            <a href="" title="Youtube">
                <img src="{{ url('public/user/images/youtube-icon.png') }}"></a>
            <a href="" title="Google plus">
                <img src="{{ url('public/user/images/googleplus-icon.png') }}"></a>
            </div>
        </div>
        <div class="col-xs-3 linkthanhvien">
            <ul>    
                <li><a href="{{ url('auth/register') }}">Đăng ký</a></li>
                <li><a href="{{ url('auth/login') }}">Đăng nhập</a></li>
            </ul>
        </div> 

    </div>
    
