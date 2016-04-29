<body>
    <script type="text/javascript" src="{{ url('public/user/js/jquery.js') }}"></script>
    <script type="text/javascript">
        $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
        });
    </script>
    <script type="text/javascript" src="{{ url('public/user/js/votes.js') }}"></script>
    <div class="top margin-fixed-top">
        <div class="col-xs-2" style="margin-left: 150px;">
            <div class="container no-padding pos-res margin-site">
                <a href="#"><img border="0" src="{{ url('public/user/images/logo.png') }}" class="logo img-responsive"></a>
            </div><!--end container-->
        </div>
        <div class="col-xs-4">
            <form class="navbar-form" action="">
              <div class="form-group">
                <input type="text" class="form-control search-width" placeholder="Tìm kiếm">
              </div>
              <button type="submit" class="btn btn-default">Tìm kiếm</button>
            </form>
        </div>
        <div class="col-xs-3">
            <div class="footer-social">
            <a href="" title="Facebook">
                <img src="{{ url('public/user/images/facebook-icon.png') }}"></a>
            <a href="" title="Youtube">
                <img src="{{ url('public/user/images/youtube-icon.png') }}"></a>
            <a href="" title="Google plus">
                <img src="{{ url('public/user/images/googleplus-icon.png') }}"></a>
            </div>
        </div>
    

    </div>
    
