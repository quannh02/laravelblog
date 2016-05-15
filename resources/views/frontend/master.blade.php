<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="{{ url('public/user/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/user/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('public/user/css/font-awesome.min.css') }}">
   <!-- <link rel="stylesheet" href="{{ url('public/user/css/bootstrap-responsive.css') }}"> -->
    <link rel="stylesheet" href="{{ url('public/user/css/votes.css') }}">
    <link rel="stylesheet" href="{{ url('public/user/css/menu.css') }}">
    <script src="{{ url('public/user/js/bootstrap.min.js') }}"></script>
    <title>Document</title>
</head>
<body>

<!-- Header Start -->
    @include('frontend.blocks.header')
   <div class="col-xs-12">

        <div class="container">
            <div class="row">
            @include('frontend.blocks.nav')
            </div>
    <div class="col-xs-12">
        <div class="content clearfix">
            <div class="row">
                <div class="col-xs-12 col-md-2-5">
                @include('frontend.blocks.menu')
                </div> 
                @yield('content')
            </div>      
        </div> 
    </div>
    @include('frontend.blocks.footer')
            </div>
        </div>
    <!-- end row -->
    
    <script type="text/javascript" src="{{ url('public/user/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('public/user/js/select.js') }}"></script>
</body>
</html>