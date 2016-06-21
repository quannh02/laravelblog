@extends('frontend.master')
@section('content')
	<div class="col-xs-12 col-md-9-5">
		<div class="content_midle">
            <ol class = "breadcrumb">
			   <li><a href = "{{ url('trangchu') }}">Thuê xe du lịch</a></li>
			   <li><a href = "#">Thuê xe du lịch 45 chỗ</a></li>
			   <li class = "active">Thuê xe {{ $xe->hang_xe }} </li>
			</ol>
			<div class="clear"></div>
						<div class="row_car_hot_group">
							<h2 class="title_car_hot title_b_car"></h2>
							<div class="b_car_list_content">
								<div class="row">
									<div class="col-md-5 col-sm-5 col-xs-12 text-center">
									<img src="{{ url('public/user/images', $xe->url_hinhxe)}}">
									</div>
								<div class="col-md-7 col-sm-7 col-xs-12">
									<ul class="ul_detail">
										<li class="car_detail_text_2"><span>Hiệu: {{ App\Models\Brand::find($xe->hang_id)->hang_name }}</span></li>
										<li class="car_detail_text_2"><span>Số chỗ: <span class="b_car_list">{{ $xe->socho_xe }}</span></span>
										<li class="car_detail_text_2"><span>Màu: <span class="b_car_list">{{ $xe->color }}</span></span>
										<li class="car_detail_text_2"><span>Biển số: <span class="b_car_list">{{ $xe->sodangky_xe }}</span></span>
										<li class="car_detail_text_2"><span>Năm sản xuất: <span class="b_car_list">{{ $xe->ngaysanxuat }}</span></span>
										<li class="car_detail_text_2"><span>Lái xe: <span class="b_car_list">
										@if(isset($tenlaixe))
											{{ $tenlaixe->tentaixe }}
										@endif
										</span></span>
									</ul>
								<div>
									<table class="table table-responsive">
								    <thead>
								      <tr>
								        <th>Nội thành (100Km/8h)</th>
								        <th>Đường dài trên (200km/ngày)</th>
								        <th>Sân bay (80km/3h)</th>
								        <th>Thuê tháng (2600km)</th>
								        <th>Ngoài giờ</th>
								      </tr>
								    </thead>
								    <tbody>
								      <tr>
								        <td>{{ number_format($xe->gianoithanh, 0)}}</td>
								        <td>{{ number_format($xe->giaduongdai, 0)}}/1h</td>
								        <td>{{ number_format($xe->giasanbay, 0)}}</td>
								        <td>{{ number_format($xe->giathuethang, 0)}}</td>
								        <td>{{ number_format($xe->giangoaigio, 0)}}</td>
								      </tr>
								    </tbody>
								  </table>
								</div>
										
			                            <a href="{{ url('gioxe', $xe->xe_id)}}" class="btn btn-success">Đặt thuê</a>							
								</div>
								</div>
								<h4><a href="index.php">Đánh giá dịch vụ</a></h>
								<span class="ratingAverage" data-average="{{ $roundVote }}"></span>
								<span class="article" data-id="<?php echo $vote_id->cars_id; ?>"></span>

								<div class="barra">
									<span class="bg"></span>
									<span class="stars">
								
								<?php for($i=1; $i<=5; $i++):?>


								<span class="star" data-vote="<?php echo $i;?>">
									<span class="starAbsolute"></span>
								</span>
								<?php 
									endfor;
								?>
							
								</span></div><p class="votes"><span>{{ $vote_id->sovotes }}</span> votes</p>
								</div></div>
								@if(isset(Auth::user()->nguoidung_id))
								<form action="{{ url('binhluan', [Auth::user()->nguoidung_id, $xe->xe_id]) }}" method="post" class="form-horizontal">
									{{ csrf_field() }}
  									<div class="form-group">
						
								    <div class="col-sm-10">
								    	<textarea class="form-control" name="txtbinhluan" rows="3" placeholder="Bình luận"></textarea>
								    </div>
								  	</div>
								 	<div class="form-group">
								    <div class="col-sm-10">
								      <button type="submit" class="btn btn-default">Bình luận</button>
								    </div>
								  	</div>

								</form>
								@else
								<div class="box_search_2_all"><p><a href="{{ url('auth/login') }}">Đăng nhập</a> để bình luận</p></div>
								@endif
								<div class="box_search_2_all">
									@if(isset($binhluans))
										@foreach($binhluans as $binhluan)
									<div class="comment">
										
										<div class="noidungcm">{{ $binhluan->noidung }}</div>
										<div class="nguoidungcm">{{ $binhluan->nguoidung_id }}</div>
										<div class="thoigiancm"><?php echo date('h:m d/m/Y', strtotime($binhluan->created_at)); ?></div>
										

									</div>
									@endforeach
										@endif
									<div class="comment">
									{!! $binhluans->render() !!}
									</div>
								</div>
								<div class="box_search_2_all">
								<div class="title_box_support_2"><h3><b>Xe cùng loại</b></h3></div>
						    	<div class="row">
						    	@foreach($xekhac as $xe)
								<div class="box_car_hot col-md-4 col-sm-4 col-xs-12">
			                		<div class="div_name_car_hot"><a href="{{ url('chitiet', $xe->xe_id ) }}" class="title_chitiet">{{ App\Models\Brand::find($xe->hang_id)->hang_name }} {{ $xe->ten_xe }}</a></div>
			                	<div class="clearfix">
			                    <a href="{{ url('chitiet', $xe->xe_id ) }}"><img class="img_car_list" src="{{ url('public/user/images', $xe->url_hinhxe) }}"></a><div class="b_car_information">
			                        <div class="tbold">Hiệu: {{ App\Models\Brand::find($xe->hang_id)->hang_name }}</div>
			                        <div>Số chỗ: <span class="tbold">{{ $xe->socho_xe }} chỗ</span></div>
			                        <div>Giá xe: <span class="span_price">Liên hệ</span></div>
			                    	</div>
			                	</div>
			            		</div>
			            		@endforeach
					            
    
			        </div>
				</div>        
			</div>
		</div>
@endsection 