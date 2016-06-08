@extends('frontend.master')
@section('description', 'Đây là trang chủ')
@section('content')
	<h4>Kết quả tìm kiếm cho {{ $q }}</h4>
			<div class="col-xs-12 col-md-9-5">
				<div class="row_car_hot_group">
				<div class="title_car_hot"><i class="fa fa-car"></i><a href="" class="title_b_car">Xe du lịch 45 chỗ</a></div>
        			<div class="row">
						@foreach($cars as $car)
                        <div class="box_car_hot col-md-4 col-sm-4 col-xs-12">
                            <div class="div_name_car_hot">
                                <a href="{{ url('chitiet', $car->xe_id ) }}"><img class="img_car_list img img-responsive" src="{{ url('public/user/images', $car->url_hinhxe) }}"></a>
                                <div class="a_name_car_hot">
                                    <a href="{{ url('chitiet', $car->xe_id ) }}">Thuê xe du lịch {{ $car->ten_xe }}</a>
                                </div>
			                <div class="clearfix">
			                  
                               <div class="b_car_information">
			                        <div class="tbold">Hiệu: {{ App\Brand::find($car->hang_id)->hang_name }}</div>
			                        <div>Số chỗ: <span class="tbold">{{ $car->socho_xe }} chỗ</span></div>
			                        <div>Giá xe: <span class="span_price"></span></div>
			                        <div class="div_book_car">
			                            <a href="" class="a_book_car">Đặt thuê</a>
			                        </div>
			                    </div>
			                </div>
                            </div>
						</div>
                        @endforeach
						
			        </div>
				</div> 
				<!-- end row-car-hot-group -->
			</div> <!-- end col-xs-7 -->	
@endsection