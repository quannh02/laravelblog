@extends('frontend.master')
@section('description', 'Đây là trang chủ')
@section('content')
	<div class="col-xs-12 col-md-9-5">
		<div class="content_midle">
            <ol class = "breadcrumb">
			   <li><a href = "{{ url('trangchu') }}">Thuê xe du lịch</a></li>
			   <li><a href = "#">Thuê xe du lịch 45 chỗ</a></li>
			   <li class = "active">Thuê xe du lịch 45 chỗ đi Cửa Ông</li>
			</ol>
			<div class="clear"></div>
						<div class="row_car_hot_group">
							<h2 class="title_car_hot title_b_car">Thuê xe du lịch 45 chỗ đi Cửa Ông</h2>
							<div class="b_car_list_content">
								<div class="row">
									<div class="col-md-5 col-sm-5 col-xs-12 text-center">
									<img alt="Thuê xe du lịch 45 chỗ đi Cửa Ông" src="">
									</div>
								<div class="col-md-7 col-sm-7 col-xs-12">
									<ul class="ul_detail">
										<li class="car_detail_text_2"><span>Hiệu: Hyundai</span></li>
										<li class="car_detail_text_2"><span>Số chỗ: <span class="b_car_list">45</span></span>
										</li>
										<li class="car_detail_text_2"><span>Giá xe: </span><span class="span_price"></span></li>
										<li class="car_detail_text_2"><span>Phí ngoài giờ: </span></li>
										<li class="car_detail_text_2"><span>Phí quá km: </span></li>
										<li class="car_detail_text_2"><span>Tuyến đường: Hà Nội - Cửa Ông ( Quảng Ninh) - Hà Nội</span>
										</li>
									</ul>
									<div class="div_book_car">
										<a class="a_book_car" href="">Đặt thuê</a>
									</div>
								</div>
								</div>
								<h4><a href="index.php">Đánh giá dịch vụ</a></h>
								<span class="ratingAverage" data-average=""></span>
								<span class="article" data-id="<?php echo $vote_id->id; ?>"></span>

								<div class="barra">
									<span class="bg"></span>
									<span class="stars">
								<?php for($i=1; $i<=5; $i++):?>


								<span class="star" data-vote="<?php echo $i;?>">
									<span class="starAbsolute"></span>
								</span>
								<?php 
									endfor;
									echo '</span></div><p class="votes"><span></span> votes</p>';
								?>
								</div></div>
								@if(isset(Auth::user()->nguoidung_id))
								<form action="{{ url('binhluan', Auth::user()->nguoidung_id) }}" method="post" class="form-horizontal">
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
									<ul>
										@foreach($binhluans as $binhluan)
										<li>{{ $binhluan->noidung }}</li>
										<li>{{ $binhluan->nguoidung_id }}</li>
										@endforeach
									</ul>
								</div>
								<div class="box_search_2_all">
								<div class="title_box_support_2">Lịch trình khác</div>
						    	<div class="row">
								<div class="box_car_hot col-md-4 col-sm-4 col-xs-12">
			                		<div class="div_name_car_hot"><a href="" class="title_chitiet">Thuê xe du lịch 45 chỗ đi Nghệ An</a></div>
			                	<div class="clearfix">
			                    <a href=""><img alt="Thuê xe du lịch 45 chỗ đi Nghệ An" class="img_car_list" src=""></a><div class="b_car_information">
			                        <div class="tbold">Hiệu: Hyundai</div>
			                        <div>Số chỗ: <span class="tbold">45 chỗ</span></div>
			                        <div>Giá xe: <span class="span_price">Liên hệ ETV</span></div>
			                        <div class="div_book_car">
			                            <a href="" class="a_book_car">Đặt thuê</a>
			                        </div>
			                    	</div>
			                	</div>
			            		</div>
					            <div class="box_car_hot col-md-4 col-sm-4 col-xs-12">
					                <div class="div_name_car_hot"><a href="" class="title_chitiet">Thuê xe du lịch 45 chỗ đi Nghệ An</a></div>
					                <div class="clearfix">
					                    <a href=""><img alt="Thuê xe du lịch 45 chỗ đi Nghệ An" class="img_car_list" src=""></a><div class="b_car_information">
					                        <div class="tbold">Hiệu: Hyundai</div>
					                        <div>Số chỗ: <span class="tbold">45 chỗ</span></div>
					                        <div>Giá xe: <span class="span_price">Liên hệ ETV</span></div>
					                        <div class="div_book_car">
					                            <a href="" class="a_book_car">Đặt thuê</a>
					                        </div>
					                    </div>
					                </div>
					            </div>
					           <div class="box_car_hot col-md-4 col-sm-4 col-xs-12">
					                <div class="div_name_car_hot"><a href="" class="title_chitiet">Thuê xe du lịch 45 chỗ đi Nghệ An</a></div>
					                <div class="clearfix">
					                    <a href=""><img alt="Thuê xe du lịch 45 chỗ đi Nghệ An" class="img_car_list" src=""></a><div class="b_car_information">
					                        <div class="tbold">Hiệu: Hyundai</div>
					                        <div>Số chỗ: <span class="tbold">45 chỗ</span></div>
					                        <div>Giá xe: <span class="span_price">Liên hệ ETV</span></div>
					                        <div class="div_book_car">
					                            <a href="" class="a_book_car">Đặt thuê</a>
					                        </div>
					                    </div>
					                </div>
					            </div>
					            <div class="box_car_hot col-md-4 col-sm-4 col-xs-12">
					                <div class="div_name_car_hot"><a href="" class="title_chitiet">Thuê xe du lịch 45 chỗ đi Nghệ An</a></div>
					                <div class="clearfix">
					                    <a href=""><img alt="Thuê xe du lịch 45 chỗ đi Nghệ An" class="img_car_list" src=""></a><div class="b_car_information">
					                        <div class="tbold">Hiệu: Hyundai</div>
					                        <div>Số chỗ: <span class="tbold">45 chỗ</span></div>
					                        <div>Giá xe: <span class="span_price">Liên hệ ETV</span></div>
					                        <div class="div_book_car">
					                            <a href="" class="a_book_car">Đặt thuê</a>
					                        </div>
					                    </div>
					                </div>
					            </div>
					            <div class="box_car_hot col-md-4 col-sm-4 col-xs-12">
					                <div class="div_name_car_hot"><a href="" class="title_chitiet">Thuê xe du lịch 45 chỗ đi Nghệ An</a></div>
					                <div class="clearfix">
					                    <a href=""><img alt="Thuê xe du lịch 45 chỗ đi Nghệ An" class="img_car_list" src=""></a><div class="b_car_information">
					                        <div class="tbold">Hiệu: Hyundai</div>
					                        <div>Số chỗ: <span class="tbold">45 chỗ</span></div>
					                        <div>Giá xe: <span class="span_price">Liên hệ ETV</span></div>
					                        <div class="div_book_car">
					                            <a href="" class="a_book_car">Đặt thuê</a>
					                        </div>
					                    </div>
					                </div>
					            </div>
					            <div class="box_car_hot col-md-4 col-sm-4 col-xs-12">
					                <div class="div_name_car_hot"><a href="" class="title_chitiet">Thuê xe du lịch 45 chỗ đi Nghệ An</a></div>
					                <div class="clearfix">
					                    <a href=""><img alt="Thuê xe du lịch 45 chỗ đi Nghệ An" class="img_car_list" src=""></a><div class="b_car_information">
					                        <div class="tbold">Hiệu: Hyundai</div>
					                        <div>Số chỗ: <span class="tbold">45 chỗ</span></div>
					                        <div>Giá xe: <span class="span_price">Liên hệ ETV</span></div>
					                        <div class="div_book_car">
					                            <a href="" class="a_book_car">Đặt thuê</a>
					                        </div>
					                    </div>
					                </div>
					            </div>
					            <div class="box_car_hot col-md-4 col-sm-4 col-xs-12">
					                <div class="div_name_car_hot"><a href="" class="title_chitiet">Thuê xe du lịch 45 chỗ đi Nghệ An</a></div>
					                <div class="clearfix">
					                    <a href=""><img alt="Thuê xe du lịch 45 chỗ đi Nghệ An" class="img_car_list" src=""></a><div class="b_car_information">
					                        <div class="tbold">Hiệu: Hyundai</div>
					                        <div>Số chỗ: <span class="tbold">45 chỗ</span></div>
					                        <div>Giá xe: <span class="span_price">Liên hệ ETV</span></div>
					                        <div class="div_book_car">
					                            <a href="" class="a_book_car">Đặt thuê</a>
					                        </div>
					                    </div>
					                </div>
					            </div>
					            <div class="box_car_hot col-md-4 col-sm-4 col-xs-12">
					                <div class="div_name_car_hot"><a href="" class="title_chitiet">Thuê xe du lịch 45 chỗ đi Nghệ An</a></div>
					                <div class="clearfix">
					                    <a href=""><img alt="Thuê xe du lịch 45 chỗ đi Nghệ An" class="img_car_list" src=""></a><div class="b_car_information">
					                        <div class="tbold">Hiệu: Hyundai</div>
					                        <div>Số chỗ: <span class="tbold">45 chỗ</span></div>
					                        <div>Giá xe: <span class="span_price">Liên hệ ETV</span></div>
					                        <div class="div_book_car">
					                            <a href="" class="a_book_car">Đặt thuê</a>
					                        </div>
					                    </div>
					                </div>
					            </div>
					            <div class="box_car_hot col-md-4 col-sm-4 col-xs-12">
					                <div class="div_name_car_hot"><a href="" class="title_chitiet">Thuê xe du lịch 45 chỗ đi Nghệ An</a></div>
					                <div class="clearfix">
					                    <a href=""><img alt="Thuê xe du lịch 45 chỗ đi Nghệ An" class="img_car_list" src=""></a><div class="b_car_information">
					                        <div class="tbold">Hiệu: Hyundai</div>
					                        <div>Số chỗ: <span class="tbold">45 chỗ</span></div>
					                        <div>Giá xe: <span class="span_price">Liên hệ ETV</span></div>
					                        <div class="div_book_car">
					                            <a href="" class="a_book_car">Đặt thuê</a>
					                        </div>
					                    </div>
					                </div>
					            </div>
					           <div class="box_car_hot col-md-4 col-sm-4 col-xs-12">
					                <div class="div_name_car_hot"><a href="" class="title_chitiet">Thuê xe du lịch 45 chỗ đi Nghệ An</a></div>
					                <div class="clearfix">
					                    <a href=""><img alt="Thuê xe du lịch 45 chỗ đi Nghệ An" class="img_car_list" src=""></a><div class="b_car_information">
					                        <div class="tbold">Hiệu: Hyundai</div>
					                        <div>Số chỗ: <span class="tbold">45 chỗ</span></div>
					                        <div>Giá xe: <span class="span_price">Liên hệ ETV</span></div>
					                        <div class="div_book_car">
					                            <a href="" class="a_book_car">Đặt thuê</a>
					                        </div>
					                    </div>
					                </div>
					            </div>
					            <div class="box_car_hot col-md-4 col-sm-4 col-xs-12">
					                <div class="div_name_car_hot"><a href="" class="title_chitiet">Thuê xe du lịch 45 chỗ đi Nghệ An</a></div>
					                <div class="clearfix">
					                    <a href=""><img alt="Thuê xe du lịch 45 chỗ đi Nghệ An" class="img_car_list" src=""></a><div class="b_car_information">
					                        <div class="tbold">Hiệu: Hyundai</div>
					                        <div>Số chỗ: <span class="tbold">45 chỗ</span></div>
					                        <div>Giá xe: <span class="span_price">Liên hệ ETV</span></div>
					                        <div class="div_book_car">
					                            <a href="" class="a_book_car">Đặt thuê</a>
					                        </div>
					                    </div>
					                </div>
					            </div>
					           	<div class="box_car_hot col-md-4 col-sm-4 col-xs-12">
					                <div class="div_name_car_hot"><a href="" class="title_chitiet">Thuê xe du lịch 45 chỗ đi Nghệ An</a></div>
					                <div class="clearfix">
					                    <a href=""><img alt="Thuê xe du lịch 45 chỗ đi Nghệ An" class="img_car_list" src=""></a><div class="b_car_information">
					                        <div class="tbold">Hiệu: Hyundai</div>
					                        <div>Số chỗ: <span class="tbold">45 chỗ</span></div>
					                        <div>Giá xe: <span class="span_price">Liên hệ ETV</span></div>
					                        <div class="div_book_car">
					                            <a href="" class="a_book_car">Đặt thuê</a>
					                        </div>
					                    </div>
					                </div>
					            </div>
					            <div class="box_car_hot col-md-4 col-sm-4 col-xs-12">
					                <div class="div_name_car_hot"><a href="" class="title_chitiet">Thuê xe du lịch 45 chỗ đi Nghệ An</a></div>
					                <div class="clearfix">
					                    <a href=""><img alt="Thuê xe du lịch 45 chỗ đi Nghệ An" class="img_car_list" src=""></a><div class="b_car_information">
					                        <div class="tbold">Hiệu: Hyundai</div>
					                        <div>Số chỗ: <span class="tbold">45 chỗ</span></div>
					                        <div>Giá xe: <span class="span_price">Liên hệ ETV</span></div>
					                        <div class="div_book_car">
					                            <a href="" class="a_book_car">Đặt thuê</a>
					                        </div>
					                    </div>
					                </div>
					            </div>
					            <div class="box_car_hot col-md-4 col-sm-4 col-xs-12">
					                <div class="div_name_car_hot"><a href="" class="title_chitiet">Thuê xe du lịch 45 chỗ đi Nghệ An</a></div>
					                <div class="clearfix">
					                    <a href=""><img alt="Thuê xe du lịch 45 chỗ đi Nghệ An" class="img_car_list" src=""></a><div class="b_car_information">
					                        <div class="tbold">Hiệu: Hyundai</div>
					                        <div>Số chỗ: <span class="tbold">45 chỗ</span></div>
					                        <div>Giá xe: <span class="span_price">Liên hệ ETV</span></div>
					                        <div class="div_book_car">
					                            <a href="" class="a_book_car">Đặt thuê</a>
					                        </div>
					                    </div>
					                </div>
					            </div>
					           <div class="box_car_hot col-md-4 col-sm-4 col-xs-12">
					                <div class="div_name_car_hot"><a href="" class="title_chitiet">Thuê xe du lịch 45 chỗ đi Nghệ An</a></div>
					                <div class="clearfix">
					                    <a href=""><img alt="Thuê xe du lịch 45 chỗ đi Nghệ An" class="img_car_list" src=""></a><div class="b_car_information">
					                        <div class="tbold">Hiệu: Hyundai</div>
					                        <div>Số chỗ: <span class="tbold">45 chỗ</span></div>
					                        <div>Giá xe: <span class="span_price">Liên hệ ETV</span></div>
					                        <div class="div_book_car">
					                            <a href="" class="a_book_car">Đặt thuê</a>
					                        </div>
					                    </div>
					                </div>
					            </div>
					           	<div class="box_car_hot col-md-4 col-sm-4 col-xs-12">
					                <div class="div_name_car_hot"><a href="" class="title_chitiet">Thuê xe du lịch 45 chỗ đi Nghệ An</a></div>
					                <div class="clearfix">
					                    <a href=""><img alt="Thuê xe du lịch 45 chỗ đi Nghệ An" class="img_car_list" src=""></a><div class="b_car_information">
					                        <div class="tbold">Hiệu: Hyundai</div>
					                        <div>Số chỗ: <span class="tbold">45 chỗ</span></div>
					                        <div>Giá xe: <span class="span_price">Liên hệ ETV</span></div>
					                        <div class="div_book_car">
					                            <a href="" class="a_book_car">Đặt thuê</a>
					                        </div>
					                    </div>
					                </div>
					            </div>
					           <div class="box_car_hot col-md-4 col-sm-4 col-xs-12">
					                <div class="div_name_car_hot"><a href="" class="title_chitiet">Thuê xe du lịch 45 chỗ đi Nghệ An</a></div>
					                <div class="clearfix">
					                    <a href=""><img alt="Thuê xe du lịch 45 chỗ đi Nghệ An" class="img_car_list" src=""></a><div class="b_car_information">
					                        <div class="tbold">Hiệu: Hyundai</div>
					                        <div>Số chỗ: <span class="tbold">45 chỗ</span></div>
					                        <div>Giá xe: <span class="span_price">Liên hệ ETV</span></div>
					                        <div class="div_book_car">
					                            <a href="" class="a_book_car">Đặt thuê</a>
					                        </div>
					                    </div>
					                </div>
					            </div>
					            <div class="box_car_hot col-md-4 col-sm-4 col-xs-12">
					                <div class="div_name_car_hot"><a href="" class="title_chitiet">Thuê xe du lịch 45 chỗ đi Nghệ An</a></div>
					                <div class="clearfix">
					                    <a href=""><img alt="Thuê xe du lịch 45 chỗ đi Nghệ An" class="img_car_list" src=""></a><div class="b_car_information">
					                        <div class="tbold">Hiệu: Hyundai</div>
					                        <div>Số chỗ: <span class="tbold">45 chỗ</span></div>
					                        <div>Giá xe: <span class="span_price">Liên hệ ETV</span></div>
					                        <div class="div_book_car">
					                            <a href="" class="a_book_car">Đặt thuê</a>
					                        </div>
					                    </div>
					                </div>
					            </div>
			        </div>
				</div>        
			</div>
		</div>
@endsection