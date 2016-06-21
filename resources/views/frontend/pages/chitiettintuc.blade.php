@extends('frontend.master')
@section('content')
		<div class="col-xs-12 col-md-9-5">
			<ol class = "breadcrumb">
			   <li><a href = "{{ url('trangchu') }}">Thuê xe du lịch</a></li>
			   <li><a href = "{{ url('tintuc') }}">Tin tức ô tô</a></li>
			   <li class = "active">{{ $tintuc->tieude }}</li>
			</ol>
			<div class="row_car_hot_group">
			<h2 class="none_tag title_car_hot title_b_car">{{ $tintuc->tieude }}</h2>
			<div class="b_about_us">
        	<div class="clearfix">
			</div>
			<div class="visa_detail">
            	<p>{{ $tintuc->noidung }}</p>	
			</div>
					<div class="b_recruitment_more_title">Các tin khác</div>
					@foreach($tintuckhac as $tin)
					<li class="b_recruitment_more_title"><a href="{{ url('chitiettintuc', $tin->id )}}">{{ $tin->tieude}}</a></li>
					@endforeach
			</div>
		</div>
@endsection