<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="{{ url('public/user/css/style.css')}}">
	 <!-- slider CSS STYLE -->
    <link rel="stylesheet" type="text/css" href="{{ url('public/slider/css/style.css') }}" media="screen" />


    <!-- slider THE PREVIEW STYLE SHEETS, NO NEED TO LOAD IN YOUR DOM -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ url('public/slider/css/navstylechange.css') }}" media="screen" /> -->
	<!-- <link rel="stylesheet" type="text/css" href="{{ url('public/slider/css/editor.css') }}" media="screen" /> -->


	<!-- slider THE ICON FONTS -->
	<link rel="stylesheet" href="{{ url('public/slider/fonts/fontello.css') }}">

	<script type="text/javascript" src="{{ url('public/user/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ url('public/slider/js/editor.js') }}"></script>


     <!-- slider jQuery REVOLUTION Slider  -->
    <script type="text/javascript" src="{{ url('public/slider/js/jquery.themepunch.plugins.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('public/slider/js/jquery.themepunch.revolution.min.js') }}"></script>



	<!-- slider REVOLUTION BANNER CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="{{ url('public/slider/css/settings.css') }}" media="screen" />

	<!-- slider GOOGLE FONTS -->
	<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800' rel='stylesheet' type='text/css'> -->
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbarmenu" aria-expanded="true">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">NHQtravel</a>
	    </div>
		
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse navbar-right" id="mynavbarmenu">
	      <ul class="nav navbar-nav">
		      
	        <li class="active"><a href="{{ url('trangchu')}}">Trang chủ <span class="sr-only">(current)</span></a></li>
	        <li><a href="#">Thuê xe</a></li>
	        <li><a href="">Tin tức</a></li>
	        <li><a href="">Liên hệ</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tài khoản</a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Đăng ký</a></li>
	            <li><a href="#">Đăng nhập</a></li>
	          </ul>
	        </li>
	        <form class="navbar-form navbar-left" role="search">
		        <div class="form-group">
		          <input type="text" class="form-control search-control" placeholder="Search">
		        </div>
		        <button type="submit" class="btn btn-default search-button">Submit</button>
		      </form>
	      </ul>
	     
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
</nav>
<!-- <div class="container">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">

	  <ol class="carousel-indicators">
	    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    <li data-target="#myCarousel" data-slide-to="1"></li>
	    <li data-target="#myCarousel" data-slide-to="2"></li>
	    <li data-target="#myCarousel" data-slide-to="3"></li>
	  </ol>


	  <div class="carousel-inner" role="listbox">
	    <div class="item active">
	      <img src="{{ url('public/user/images/slider.jpg') }}" alt="Chania">
	      <div class="carousel-caption">
	       <div class="tp-caption title-top">

	        	<h3>Chania</h3>
	        </div>
	        	<p>The atmosphere in Chania has a touch of Florence and Venice.</p>
	      </div>
	    </div>

	    <div class="item">
	      <img src="{{ url('public/user/images/slider1.jpg') }}" alt="Chania">
	      <div class="carousel-caption">
	      	<div class="tp-caption title-top">

	        	<h3>Chania</h3>
	        </div>
	        	<p>The atmosphere in Chania has a touch of Florence and Venice.</p>
	      	
	      </div>
	    </div>

	    <div class="item">
	      <img src="{{ url('public/user/images/slider2.jpg') }}" alt="Flower">
	      <div class="carousel-caption">
	       <div class="tp-caption title-top">

	        	<h3>Chania</h3>
	        </div>
	        	<p>The atmosphere in Chania has a touch of Florence and Venice.</p>
	      </div>
	    </div>

	    <div class="item">
	      <img src="{{ url('public/user/images/slider3.jpg') }}" alt="Flower">
	      <div class="carousel-caption">
	       <div class="tp-caption title-top">

	        	<h3>Chania</h3>
	        </div>
	        	<p>The atmosphere in Chania has a touch of Florence and Venice.</p>
	      </div>
	    </div>
	  </div>

	  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div> 
</div> -->

<!-- START REVOLUTION SLIDER 3.1 rev5 fullwidth mode -->
<div class="container">
	<div class="fullwidthbanner-container roundedcorners">
		<div class="fullwidthbanner" >
			<ul>
				<!-- SLIDE  -->
				<li data-transition="fade" data-slotamount="5" data-masterspeed="700" >
					<!-- MAIN IMAGE -->
					<img src="{{ url('public/user/images/slider.jpg') }}"   alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

					<!-- LAYER NR. 1 -->
					<div class="tp-caption medium_bg_asbestos fade"
						data-x="50"
						data-y="250"
						data-speed="500"
						data-start="800"
						data-easing="Power4.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="off"
						style="z-index: 6">AN TOÀN
					</div>

					<!-- LAYER NR. 2 -->
					<div class="tp-caption medium_bg_asbestos sfl"
						data-x="50"
						data-y="300"
						data-speed="500"
						data-start="1200"
						data-easing="Power4.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="off"
						style="z-index: 6">UY TÍN CAO
					</div>

					
				<!-- SLIDE  -->
				<li data-transition="fade" data-slotamount="5" data-masterspeed="700" >
					<!-- MAIN IMAGE -->
					<img src="{{ url('public/user/images/slider1.jpg') }}"   alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
					<!-- LAYERS -->
					<!-- LAYER NR. 1 -->
					<div class="tp-caption medium_bg_asbestos sfl"
						data-x="50"
						data-y="250"
						data-speed="500"
						data-start="800"
						data-easing="Power1.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="off"
						style="z-index: 6">CHÚNG TÔI TỰ HÀO LÀ NHÀ CUNG CẤP XE CHO THUÊ HÀNG ĐẦU
					</div>
				</li>

				<!-- SLIDE  -->
				<li data-transition="fade" data-slotamount="5" data-masterspeed="700" >
					<!-- MAIN IMAGE -->
					<img src="{{ url('public/user/images/slider2.jpg') }}"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
					<!-- LAYERS -->
					
					<!-- LAYER NR. 5 -->
					<div class="tp-caption medium_bg_asbestos skewfromleft customout"
						data-x="104"
						data-y="154"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="800"
						data-start="800"
						data-easing="Power4.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="on"
						style="z-index: 6">ĐI VÀ TRẢI NGHIỆM
					</div>
				</li>

				<!-- SLIDE  -->
				<li data-transition="fade" data-slotamount="5" data-masterspeed="700" >
					<!-- MAIN IMAGE -->
					<img src="{{ url('public/user/images/slider3.jpg') }}"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
					<!-- LAYERS -->
					<!-- LAYER NR. 5 -->
					<div class="tp-caption medium_bg_asbestos skewfromleft customout"
						data-x="104"
						data-y="154"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="800"
						data-start="800"
						data-easing="Power4.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="on"
						style="z-index: 6">KHÁM PHÁ DU LỊCH
					</div>
				</li>


			</ul>
			<div class="tp-bannertimer"></div>
		</div>
	</div>
</div>
			<script type="text/javascript">

				var revapi;

				jQuery(document).ready(function() {

					   revapi = jQuery('.fullwidthbanner').revolution(
						{
							delay:15000,
							startwidth:1170,
							startheight:500,
							hideThumbs:10,

							thumbWidth:100,
							thumbHeight:50,
							thumbAmount:5,

							navigationType:"both",
							navigationArrows:"solo",
							navigationStyle:"round",

							touchenabled:"on",
							onHoverStop:"on",

							navigationHAlign:"center",
							navigationVAlign:"bottom",
							navigationHOffset:0,
							navigationVOffset:0,

							soloArrowLeftHalign:"left",
							soloArrowLeftValign:"center",
							soloArrowLeftHOffset:20,
							soloArrowLeftVOffset:0,

							soloArrowRightHalign:"right",
							soloArrowRightValign:"center",
							soloArrowRightHOffset:20,
							soloArrowRightVOffset:0,

							shadow:0,
							fullWidth:"on",
							fullScreen:"off",

							stopLoop:"on",
							stopAfterLoops:0,
							stopAtSlide:1,


							shuffle:"off",

							autoHeight:"off",
							forceFullWidth:"off",

							hideThumbsOnMobile:"off",
							hideBulletsOnMobile:"on",
							hideArrowsOnMobile:"on",
							hideThumbsUnderResolution:0,

							hideSliderAtLimit:0,
							hideCaptionAtLimit:768,
							hideAllCaptionAtLilmit:0,
							startWithSlide:0,
							videoJsPath:"plugins/revslider/rs-plugin/videojs/",
							fullScreenOffsetContainer: ""
						});

				});	//ready

			</script>

			<!-- END REVOLUTION SLIDER -->

	<!-- Content End -->

<section id="columns" class="columns-container">
	<div class="container">
		<div class="row">
			<section id="center-column" class="col-md-12">
				<div class="center-column-wrapper">
					<div class="clearfix">
						<div class="wrapper">
							<div class="home-2-block">
								<h2>________ Xe 45 chỗ ________</h2>
								<div class="row">
								    <div class="col-md-12">
								      <!-- <div class="carousel slide multi-item-carousel" id="theCarousel">
								        <div class="carousel-inner">
								          <div class="item active">
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
											<div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
											<div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
								          </div>
								          <div class="item">
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/e91e63/000000" class="img-responsive"></a></div>
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
								          </div>
								          <div class="item">
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/9c27b0/000000" class="img-responsive"></a></div>
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
								          </div>
								          <div class="item">
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/673ab7/000000" class="img-responsive"></a></div>
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
								          </div>
								          <div class="item">
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/4caf50/000000" class="img-responsive"></a></div>
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
								          </div>
								          <div class="item">
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/8bc34a/000000" class="img-responsive"></a></div>
								          </div>
								        </div>
								        <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
								        <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
								      </div> -->
								      <div class="card-group">
								      
								      	<div class="card">
								      		<img src="{{ url('public/user/images/ford_transit_2014.jpg')}}" alt="" class="img img-responsive card-img-top">
								      		<div class="card-block">
								      			<div class="h4 card-title">Thuê xe du lịch Universe chỗ</div>
								      			<p class="card-text">Hiệu: Huyndai
													</p>
												<p>Số chỗ: 45 chỗ</p>
								      		</div>
								      	</div>
								      	<div class="card">
								      		<img src="{{ url('public/user/images/ford_transit_2014.jpg')}}" alt="" class="img img-responsive card-img-top">
								      		<div class="card-block">
								      			<div class="h4 card-title">Thuê xe du lịch Universe chỗ</div>
								      			<p class="card-text">Hiệu: Huyndai
													</p>
												<p>Số chỗ: 45 chỗ</p>
								      		</div>
								      	</div>
								      	<div class="card">
								      		<img src="{{ url('public/user/images/ford_transit_2014.jpg')}}" alt="" class="img img-responsive card-img-top">
								      		<div class="card-block">
								      			<div class="h4 card-title">Thuê xe du lịch Universe chỗ</div>
								      			<p class="card-text">Hiệu: Huyndai
													</p>
												<p>Số chỗ: 45 chỗ</p>
								      		</div>
								      	</div>
								    	
								      </div>
								      <div class="card-group">
								      	<div class="card">
								      		<img src="{{ url('public/user/images/ford_transit_2014.jpg')}}" alt="" class="img img-responsive card-img-top">
								      		<div class="card-block">
								      			<div class="h4 card-title">Thuê xe du lịch Universe chỗ</div>
								      			<p class="card-text">Hiệu: Huyndai
													</p>
												<p>Số chỗ: 45 chỗ</p>
								      		</div>
								      	</div>
								      	<div class="card">
								      		<img src="{{ url('public/user/images/ford_transit_2014.jpg')}}" alt="" class="img img-responsive card-img-top">
								      		<div class="card-block">
								      			<div class="h4 card-title">Thuê xe du lịch Universe chỗ</div>
								      			<p class="card-text">Hiệu: Huyndai
													</p>
												<p>Số chỗ: 45 chỗ</p>
								      		</div>
								      	</div>
								      	<div class="card">
								      		<img src="{{ url('public/user/images/ford_transit_2014.jpg')}}" alt="" class="img img-responsive card-img-top">
								      		<div class="card-block">
								      			<div class="h4 card-title">Thuê xe du lịch Universe chỗ</div>
								      			<p class="card-text">Hiệu: Huyndai
													</p>
												<p>Số chỗ: 45 chỗ</p>
								      		</div>
								      	</div>
								      </div>
								    </div>
  								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</section>

<section id="columns" class="columns-container">
	<div class="container">
		<div class="row">
			<section id="center-column" class="col-md-12">
				<div class="center-column-wrapper">
					<div class="clearfix">
						<div class="wrapper">
							<div class="home-2-block">
								<h2>________ Xe 35 chỗ ________</h2>
								<div class="row">
								    <div class="col-md-12">
								      <!-- <div class="carousel slide multi-item-carousel" id="theCarousel">
								        <div class="carousel-inner">
								          <div class="item active">
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
											<div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
											<div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
								          </div>
								          <div class="item">
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/e91e63/000000" class="img-responsive"></a></div>
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
								          </div>
								          <div class="item">
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/9c27b0/000000" class="img-responsive"></a></div>
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
								          </div>
								          <div class="item">
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/673ab7/000000" class="img-responsive"></a></div>
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
								          </div>
								          <div class="item">
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/4caf50/000000" class="img-responsive"></a></div>
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
								          </div>
								          <div class="item">
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/8bc34a/000000" class="img-responsive"></a></div>
								          </div>
								        </div>
								        <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
								        <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
								      </div> -->
								      <div class="card-group">
								      
								      	<div class="card">
								      		<img src="{{ url('public/user/images/ford_transit_2014.jpg')}}" alt="" class="img img-responsive card-img-top">
								      		<div class="card-block">
								      			<div class="h4 card-title">Thuê xe du lịch Universe chỗ</div>
								      			<p class="card-text">Hiệu: Huyndai
													</p>
												<p>Số chỗ: 45 chỗ</p>
								      		</div>
								      	</div>
								      	<div class="card">
								      		<img src="{{ url('public/user/images/ford_transit_2014.jpg')}}" alt="" class="img img-responsive card-img-top">
								      		<div class="card-block">
								      			<div class="h4 card-title">Thuê xe du lịch Universe chỗ</div>
								      			<p class="card-text">Hiệu: Huyndai
													</p>
												<p>Số chỗ: 45 chỗ</p>
								      		</div>
								      	</div>
								      	<div class="card">
								      		<img src="{{ url('public/user/images/ford_transit_2014.jpg')}}" alt="" class="img img-responsive card-img-top">
								      		<div class="card-block">
								      			<div class="h4 card-title">Thuê xe du lịch Universe chỗ</div>
								      			<p class="card-text">Hiệu: Huyndai
													</p>
												<p>Số chỗ: 45 chỗ</p>
								      		</div>
								      	</div>
								    	
								      </div>
								      <div class="card-group">
								      	<div class="card">
								      		<img src="{{ url('public/user/images/ford_transit_2014.jpg')}}" alt="" class="img img-responsive card-img-top">
								      		<div class="card-block">
								      			<div class="h4 card-title">Thuê xe du lịch Universe chỗ</div>
								      			<p class="card-text">Hiệu: Huyndai
													</p>
												<p>Số chỗ: 45 chỗ</p>
								      		</div>
								      	</div>
								      	<div class="card">
								      		<img src="{{ url('public/user/images/ford_transit_2014.jpg')}}" alt="" class="img img-responsive card-img-top">
								      		<div class="card-block">
								      			<div class="h4 card-title">Thuê xe du lịch Universe chỗ</div>
								      			<p class="card-text">Hiệu: Huyndai
													</p>
												<p>Số chỗ: 45 chỗ</p>
								      		</div>
								      	</div>
								      	<div class="card">
								      		<img src="{{ url('public/user/images/ford_transit_2014.jpg')}}" alt="" class="img img-responsive card-img-top">
								      		<div class="card-block">
								      			<div class="h4 card-title">Thuê xe du lịch Universe chỗ</div>
								      			<p class="card-text">Hiệu: Huyndai
													</p>
												<p>Số chỗ: 45 chỗ</p>
								      		</div>
								      	</div>
								      </div>
								    </div>
  								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</section>
<section id="columns" class="columns-container">
	<div class="container">
		<div class="row">
			<section id="center-column" class="col-md-12">
				<div class="center-column-wrapper">
					<div class="clearfix">
						<div class="wrapper">
							<div class="home-2-block">
								<h2>________ Xe 35 chỗ ________</h2>
								<div class="row">
								    <div class="col-md-12">
								      <!-- <div class="carousel slide multi-item-carousel" id="theCarousel">
								        <div class="carousel-inner">
								          <div class="item active">
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
											<div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
											<div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
								          </div>
								          <div class="item">
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/e91e63/000000" class="img-responsive"></a></div>
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
								          </div>
								          <div class="item">
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/9c27b0/000000" class="img-responsive"></a></div>
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
								          </div>
								          <div class="item">
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/673ab7/000000" class="img-responsive"></a></div>
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
								          </div>
								          <div class="item">
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/4caf50/000000" class="img-responsive"></a></div>
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
								          </div>
								          <div class="item">
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/8bc34a/000000" class="img-responsive"></a></div>
								          </div>
								        </div>
								        <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
								        <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
								      </div> -->
								      <div class="card-group">
								      
								      	<div class="card">
								      		<img src="{{ url('public/user/images/ford_transit_2014.jpg')}}" alt="" class="img img-responsive card-img-top">
								      		<div class="card-block">
								      			<div class="h4 card-title">Thuê xe du lịch Universe chỗ</div>
								      			<p class="card-text">Hiệu: Huyndai
													</p>
												<p>Số chỗ: 45 chỗ</p>
								      		</div>
								      	</div>
								      	<div class="card">
								      		<img src="{{ url('public/user/images/ford_transit_2014.jpg')}}" alt="" class="img img-responsive card-img-top">
								      		<div class="card-block">
								      			<div class="h4 card-title">Thuê xe du lịch Universe chỗ</div>
								      			<p class="card-text">Hiệu: Huyndai
													</p>
												<p>Số chỗ: 45 chỗ</p>
								      		</div>
								      	</div>
								      	<div class="card">
								      		<img src="{{ url('public/user/images/ford_transit_2014.jpg')}}" alt="" class="img img-responsive card-img-top">
								      		<div class="card-block">
								      			<div class="h4 card-title">Thuê xe du lịch Universe chỗ</div>
								      			<p class="card-text">Hiệu: Huyndai
													</p>
												<p>Số chỗ: 45 chỗ</p>
								      		</div>
								      	</div>
								    	
								      </div>
								      <div class="card-group">
								      	<div class="card">
								      		<img src="{{ url('public/user/images/ford_transit_2014.jpg')}}" alt="" class="img img-responsive card-img-top">
								      		<div class="card-block">
								      			<div class="h4 card-title">Thuê xe du lịch Universe chỗ</div>
								      			<p class="card-text">Hiệu: Huyndai
													</p>
												<p>Số chỗ: 45 chỗ</p>
								      		</div>
								      	</div>
								      	<div class="card">
								      		<img src="{{ url('public/user/images/ford_transit_2014.jpg')}}" alt="" class="img img-responsive card-img-top">
								      		<div class="card-block">
								      			<div class="h4 card-title">Thuê xe du lịch Universe chỗ</div>
								      			<p class="card-text">Hiệu: Huyndai
													</p>
												<p>Số chỗ: 45 chỗ</p>
								      		</div>
								      	</div>
								      	<div class="card">
								      		<img src="{{ url('public/user/images/ford_transit_2014.jpg')}}" alt="" class="img img-responsive card-img-top">
								      		<div class="card-block">
								      			<div class="h4 card-title">Thuê xe du lịch Universe chỗ</div>
								      			<p class="card-text">Hiệu: Huyndai
													</p>
												<p>Số chỗ: 45 chỗ</p>
								      		</div>
								      	</div>
								      </div>
								    </div>
  								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</section>
<section id="columns" class="columns-container">
	<div class="container">
		<div class="row">
			<section id="center-column" class="col-md-12">
				<div class="center-column-wrapper">
					<div class="clearfix">
						<div class="wrapper">
							<div class="home-2-block">
								<h2>________ Xe 35 chỗ ________</h2>
								<div class="row">
								    <div class="col-md-12">
								      <!-- <div class="carousel slide multi-item-carousel" id="theCarousel">
								        <div class="carousel-inner">
								          <div class="item active">
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
											<div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
											<div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
								          </div>
								          <div class="item">
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/e91e63/000000" class="img-responsive"></a></div>
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
								          </div>
								          <div class="item">
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/9c27b0/000000" class="img-responsive"></a></div>
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
								          </div>
								          <div class="item">
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/673ab7/000000" class="img-responsive"></a></div>
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
								          </div>
								          <div class="item">
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/4caf50/000000" class="img-responsive"></a></div>
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/f44336/000000" class="img-responsive"></a></div>
								          </div>
								          <div class="item">
								            <div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/8bc34a/000000" class="img-responsive"></a></div>
								          </div>
								        </div>
								        <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
								        <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
								      </div> -->
								      <div class="card-group">
								      
								      	<div class="card">
								      		<img src="{{ url('public/user/images/ford_transit_2014.jpg')}}" alt="" class="img img-responsive card-img-top">
								      		<div class="card-block">
								      			<div class="h4 card-title">Thuê xe du lịch Universe chỗ</div>
								      			<p class="card-text">Hiệu: Huyndai
													</p>
												<p>Số chỗ: 45 chỗ</p>
								      		</div>
								      	</div>
								      	<div class="card">
								      		<img src="{{ url('public/user/images/ford_transit_2014.jpg')}}" alt="" class="img img-responsive card-img-top">
								      		<div class="card-block">
								      			<div class="h4 card-title">Thuê xe du lịch Universe chỗ</div>
								      			<p class="card-text">Hiệu: Huyndai
													</p>
												<p>Số chỗ: 45 chỗ</p>
								      		</div>
								      	</div>
								      	<div class="card">
								      		<img src="{{ url('public/user/images/ford_transit_2014.jpg')}}" alt="" class="img img-responsive card-img-top">
								      		<div class="card-block">
								      			<div class="h4 card-title">Thuê xe du lịch Universe chỗ</div>
								      			<p class="card-text">Hiệu: Huyndai
													</p>
												<p>Số chỗ: 45 chỗ</p>
								      		</div>
								      	</div>
								    	
								      </div>
								      <div class="card-group">
								      	<div class="card">
								      		<img src="{{ url('public/user/images/ford_transit_2014.jpg')}}" alt="" class="img img-responsive card-img-top">
								      		<div class="card-block">
								      			<div class="h4 card-title">Thuê xe du lịch Universe chỗ</div>
								      			<p class="card-text">Hiệu: Huyndai
													</p>
												<p>Số chỗ: 45 chỗ</p>
								      		</div>
								      	</div>
								      	<div class="card">
								      		<img src="{{ url('public/user/images/ford_transit_2014.jpg')}}" alt="" class="img img-responsive card-img-top">
								      		<div class="card-block">
								      			<div class="h4 card-title">Thuê xe du lịch Universe chỗ</div>
								      			<p class="card-text">Hiệu: Huyndai
													</p>
												<p>Số chỗ: 45 chỗ</p>
								      		</div>
								      	</div>
								      	<div class="card">
								      		<img src="{{ url('public/user/images/ford_transit_2014.jpg')}}" alt="" class="img img-responsive card-img-top">
								      		<div class="card-block">
								      			<div class="h4 card-title">Thuê xe du lịch Universe chỗ</div>
								      			<p class="card-text">Hiệu: Huyndai
													</p>
												<p>Số chỗ: 45 chỗ</p>
								      		</div>
								      	</div>
								      </div>
								    </div>
  								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</section>
<footer id="footer" class="footer-container" >
	<div class="container">
		<div class="row ApRow">
			<div class="f-left col-lg-3 col-md-3 col-sm-12 col-xs-12 col-sp-12 ApColumn">
				<div class="about-us ApImage">
					<a href="#">NHQtravel</a>
					<div class="image_description">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, tenetur?</p>
					</div>
				</div>
				<div class="footer-block" id="social_block">
					<h4>Follow us</h4>
					<div class="block_content toggle-footer">
						<ul>
							<li class="facebook"><a href=""><span  class="fa fa-facebook-official fa-2"></span></a></li>
							<li class="twitter"><a href=""><span class="fa fa-twitter-square fa-2"></span></a></li>
							<li class="google-plus"><a href=""><span class="fa fa-google-plus-square fa-2"></span></a></li>
							<li class="pinterest"><a href=""><span class="fa fa-pinterest-square fa-2"></span></a></li>
							<li class="instagram"><a href=""><span class="fa fa-instagram fa-2"></span></a></li>
						</ul>
					</div>						
				</div>
			</div>

			<div class="f-right col-lg-9 col-md-9 col-sm-12 col-xs-12 col-sp-12 ApColumn">
				<div class="block" id="block_varius_links_footer">
					<h4 class="title-block">Information</h4>
					<ul>
						<li class="item"><a href="">Specials</a></li>
						<li class="item"><a href="">Specials</a></li>
						<li class="item"><a href="">Specials</a></li>
						<li class="item"><a href="">Specials</a></li>
						<li class="item"><a href="">Specials</a></li>
					</ul>
				</div>
				<div class="block">
					<h4 class="title-block">Information</h4>
					<ul>
						<li class="item"><a href="">Specials</a></li>
						<li class="item"><a href="">Specials</a></li>
						<li class="item"><a href="">Specials</a></li>
						<li class="item"><a href="">Specials</a></li>
						<li class="item"><a href="">Specials</a></li>
					</ul>
				</div>
				<div class="block">
					<h4 class="title-block">Information</h4>
					<ul>
						<li class="item"><a href="">Specials</a></li>
						<li class="item"><a href="">Specials</a></li>
						<li class="item"><a href="">Specials</a></li>
						<li class="item"><a href="">Specials</a></li>
						<li class="item"><a href="">Specials</a></li>
					</ul>
				</div>
				<div class="contacts-info">
					<h4 class="title-block">Information</h4>
					<ul>
						<li class="item"><a href="">Specials</a></li>
						<li class="item"><a href="">Specials</a></li>
						<li class="item"><a href="">Specials</a></li>
						<li class="item"><a href="">Specials</a></li>
						<li class="item"><a href="">Specials</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
 <script type="text/javascript" src="{{ url('public/user/js/bootstrap.min.js') }}"></script>

</body>
</html>