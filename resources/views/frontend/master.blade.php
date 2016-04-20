<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ url('public/user/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/user/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('public/user/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/user/css/bootstrap-responsive.css') }}">
    <title>Document</title>
</head>
<body>
<!-- Header Start -->
    @include('frontend.blocks.header')
   <div class="col-xs-12">
        @include('frontend.blocks.nav')
    </div>
    <div class="col-xs-12">
        <div class="content clearfix">
            <div class="row">
                <div class="col-xs-2-5">
                @include('frontend.blocks.search')
                @include('frontend.blocks.lienhe')
                </div> 
                @yield('content')
                @include('frontend.blocks.khuyenmai')
            </div>      
        </div> 
    </div>
    @include('frontend.blocks.footer')
</body>
</html>