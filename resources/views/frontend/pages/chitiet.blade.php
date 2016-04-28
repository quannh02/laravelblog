@extends('frontend.master')
@section('description', 'Đây là trang chủ')
@section('content')
	<div class="col-xs-7">
		<div class="content_midle">
            <ol class = "breadcrumb">
			   <li><a href = "#">Thuê xe du lịch</a></li>
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
								<h1><a href="index.php">Đánh giá dịch vụ</a></h1>
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
									echo '</span></div><p class="votes"><span></span> votos</p>';
								?>
							<div class="b_car_list_bottom">
								<span class="b_car_list">Chi tiết
								</span>
								<br>Công ty cho thuê xe du lịch tại Hà Nội xin được báo giá 
								thuê xe du lịch 45 chỗ> từ Hà Nội đi du xuân đầu năm Cửa Ông (Quảng Ninh) như sau:
								<br> Lịch trình: Hà Nội - Cửa Ông - Hà Nội
								<div><strong>Giá tiền:</strong>
								<br>
								<em>Đi Trong ngày
								</em>: + 6,500,000 VNĐ ( Giá thuê xe đi đầu tuần - từ thứ 2 đến thứ 5)\
								<br>+ 8,500,000 VNĐ ( Giá thuê xe đi cuối tuần - từ thứ 6 đến Chủ Nhật)<br>
								<br>
								<strong>
								<u>
									Ghi chú:
								</u>
								</strong><br>
								- Giá thuê xe du lịch 45 chỗ đi Cửa Ông đã bao gồm chi phí cầu phà, bến Bãi, Xăng dầu<br>
								- Giá thuê xe du lịch 45 chỗ đi Cửa Ông chưa bao gồm: 10% thuế VAT, Ăn nghỉ lái xe theo đoàn<br>
								<br>
								Báo giá dịch vụ thuê xe du lịch trên chỉ áp dụng từ ngày 1/02/2014 cho đến ngày 30/03/2014.<br>
								<br>
								<u><strong>Chú ý:</strong></u>
								Giá thuê xe du lịch có thể thay đổi theo từng thời điểm phụ thuộc vào thời điểm đặt xe để biết thêm thông tin chi tiết xin liên hệ<strong>
								<br>
								<br>
								</strong></div>
								<br><br>Quý khách có thể đặt thuê xe bằng các phương thức sau: <br>
								- <strong>Đặt thuê xe trực tiếp qua website</strong>:<br>
								</a> - <strong>Ký hợp đồng   qua fax:</strong><br>
								- <strong>Ký hợp đồng tại địa   chỉ của khách hàng</strong><br>
								- <strong>Ký hợp đồng tại địa chỉ Công ty chúng tôi:</strong> <strong></strong><br>
								- <strong>Đặt xe qua Email</strong>:<br>
								- <strong>Đặt xe qua điện thoại</strong>: </div></div></div>
								<div class="box_search_2_all">
								<div class="title_box_support_2">Lịch trình khác</div>
						    	<div class="row">
								<div class="box_car_hot col-md-6 col-sm-6 col-xs-12">
			                		<div class="div_name_car_hot"><a href="" class="a_name_car_hot">Thuê xe du lịch 45 chỗ đi Nghệ An</a></div>
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
			            <div class="box_car_hot col-md-6 col-sm-6 col-xs-12">
			                <div class="div_name_car_hot"><a href="" class="a_name_car_hot">Thuê xe du lịch 45 chỗ đi Nghệ An</a></div>
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
			            <div class="box_car_hot col-md-6 col-sm-6 col-xs-12">
			                <div class="div_name_car_hot"><a href="" class="a_name_car_hot">Thuê xe du lịch 45 chỗ đi Nghệ An</a></div>
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
			            <div class="box_car_hot col-md-6 col-sm-6 col-xs-12">
			                <div class="div_name_car_hot"><a href="" class="a_name_car_hot">Thuê xe du lịch 45 chỗ đi Nghệ An</a></div>
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
			            <div class="box_car_hot col-md-6 col-sm-6 col-xs-12">
			                <div class="div_name_car_hot"><a href="" class="a_name_car_hot">Thuê xe du lịch 45 chỗ đi Nghệ An</a></div>
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
			            <div class="box_car_hot col-md-6 col-sm-6 col-xs-12">
			                <div class="div_name_car_hot"><a href="" class="a_name_car_hot">Thuê xe du lịch 45 chỗ đi Nghệ An</a></div>
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
			            <div class="box_car_hot col-md-6 col-sm-6 col-xs-12">
			                <div class="div_name_car_hot"><a href="" class="a_name_car_hot">Thuê xe du lịch 45 chỗ đi Nghệ An</a></div>
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
			            <div class="box_car_hot col-md-6 col-sm-6 col-xs-12">
			                <div class="div_name_car_hot"><a href="" class="a_name_car_hot">Thuê xe du lịch 45 chỗ đi Nghệ An</a></div>
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
			            <div class="box_car_hot col-md-6 col-sm-6 col-xs-12">
			                <div class="div_name_car_hot"><a href="" class="a_name_car_hot">Thuê xe du lịch 45 chỗ đi Nghệ An</a></div>
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
			           <div class="box_car_hot col-md-6 col-sm-6 col-xs-12">
			                <div class="div_name_car_hot"><a href="" class="a_name_car_hot">Thuê xe du lịch 45 chỗ đi Nghệ An</a></div>
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
			            <div class="box_car_hot col-md-6 col-sm-6 col-xs-12">
			                <div class="div_name_car_hot"><a href="" class="a_name_car_hot">Thuê xe du lịch 45 chỗ đi Nghệ An</a></div>
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
			           	<div class="box_car_hot col-md-6 col-sm-6 col-xs-12">
			                <div class="div_name_car_hot"><a href="" class="a_name_car_hot">Thuê xe du lịch 45 chỗ đi Nghệ An</a></div>
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
			            <div class="box_car_hot col-md-6 col-sm-6 col-xs-12">
			                <div class="div_name_car_hot"><a href="" class="a_name_car_hot">Thuê xe du lịch 45 chỗ đi Nghệ An</a></div>
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
			            <div class="box_car_hot col-md-6 col-sm-6 col-xs-12">
			                <div class="div_name_car_hot"><a href="" class="a_name_car_hot">Thuê xe du lịch 45 chỗ đi Nghệ An</a></div>
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
			           <div class="box_car_hot col-md-6 col-sm-6 col-xs-12">
			                <div class="div_name_car_hot"><a href="" class="a_name_car_hot">Thuê xe du lịch 45 chỗ đi Nghệ An</a></div>
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
			           	<div class="box_car_hot col-md-6 col-sm-6 col-xs-12">
			                <div class="div_name_car_hot"><a href="" class="a_name_car_hot">Thuê xe du lịch 45 chỗ đi Nghệ An</a></div>
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
			            <div class="box_car_hot col-md-6 col-sm-6 col-xs-12">
			                <div class="div_name_car_hot"><a href="" class="a_name_car_hot">Thuê xe du lịch 45 chỗ đi Nghệ An</a></div>
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
			            <div class="box_car_hot col-md-6 col-sm-6 col-xs-12">
			                <div class="div_name_car_hot"><a href="" class="a_name_car_hot">Thuê xe du lịch 45 chỗ đi Nghệ An</a></div>
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