@extends('frontend.master')
@section('description', 'Đây là trang chủ')
@section('content')
 			<ol class = "breadcrumb">
			   <li><a href = "{{ url('trangchu') }}">Thuê xe</a></li>
			   <li class = "active">Tin tức ô tô</li>
			</ol>
	<div class="col-xs-12 col-md-9-5">
	<div class="row_car_hot_group">
	<h2 class="none_tag title_car_hot title_b_car">Tin tức ô tô</h2>
	<div class="b_car_list_content">
				@foreach ($tintucs as $key => $value)
				<div class="b_car_list_row clearfix">
	  
	                <div class="b_visa_title"><a href="">{{ $value->tieude }}</a></div>
	                <div class="b_visa_detail">Có thể nói, người đẹp và siêu xe là cặp từ luôn đi kèm với nhau, không tách rời. Cùng đếm ngược top 12 siêu xe đắt nhất mà dàn sao nữ Hollywood sở hữu.<br></div>
	                <div class="b_visa_more_detail"><a href="{{ url('chitiettintuc', $value->id )}}">Xem tất cả</a></div>
				</div>
				@endforeach
			</div>
	</div>
</div>
@endsection