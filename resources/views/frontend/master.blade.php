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
    <title>Document</title>
</head>
<body>
<script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '1762623787314842',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.6' // use version 2.2
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
  }
</script>
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
                @include('frontend.blocks.search')
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