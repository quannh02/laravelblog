<body>
    <script type="text/javascript" src="{{ url('public/user/js/jquery.js') }}"></script>
    <script type="text/javascript">
        $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
        });
    </script>
    <div class="canvas">
    <div class="top margin-fixed-top">
        <div class="container no-padding pos-res margin-site">
            <a href="#"><img border="0" src="{{ url('public/user/images/logo.png') }}" class="logo img-responsive"></a>
            <div class="callUs">
                <p class="callUsNumber">
                    <a href="" class="phone">0-1677-665-526</a>
                <br><span class="">
                    <a href="">My Account</a>
                    </span>
                </p>
            </div>
        </div><!--end container-->
    </div>
    
