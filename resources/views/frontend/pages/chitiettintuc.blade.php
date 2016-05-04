@extends('frontend.master')
@section('description', 'Đây là trang chủ')
@section('content')
		<div class="col-xs-12 col-md-9-5">
			<ol class = "breadcrumb">
			   <li><a href = "{{ url('trangchu') }}">Thuê xe du lịch</a></li>
			   <li><a href = "{{ url('tintuc') }}">Tin tức ô tô</a></li>
			   <li class = "active">Dàn sao nữ Hollywood đi siêu xe gì?</li>
			</ol>
			<div class="row_car_hot_group">
			<h2 class="none_tag title_car_hot title_b_car">Dàn sao nữ Hollywood đi siêu xe gì?</h2>
			<div class="b_about_us">
        	<div class="clearfix">
			<img alt="Dàn sao nữ Hollywood đi siêu xe gì?" class="img_news_detail" src="/thuexetructuyen-images/news/img1/1458295972-1458282151-7.jpg">		Có thể nói, người đẹp và siêu xe là cặp từ luôn đi kèm với nhau, không tách rời. Cùng đếm ngược top 12 siêu xe đắt nhất mà dàn sao nữ Hollywood sở hữu.<br>        </div>
			<div class="visa_detail">
            	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>	
			</div>
					<div class="b_recruitment_more_title">Các tin khác</div>
					<li class="b_recruitment_more_title"><a href="http://thuexedulich.vn/tin-tuc/Tin-tuc-o-to/Dan-sao-nu-Hollywood-di-sieu-xe-gi-.html">Dàn sao nữ Hollywood đi siêu xe gì?</a></li>
			</div>
		</div>
@endsection