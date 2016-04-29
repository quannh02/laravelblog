<!-- <div class="box_search_all clearfix">
                    <form action="search-results.php" method="GET">
                    <div class="title_box_search">TÌM NHANH</div>
                    <div class="b_search_content">
                        <div class="b_search_row">
                            <div class="b_search_text">
                                Điểm đón
                            </div>
                            <select name="seat" class="select_b_search select_b_search_tinh">
                                <option value="">--Chọn điểm đón--</option>
                                @foreach($tinhs as $tinh)
                                <option value="{{ $tinh->id }}">{{ $tinh->name }}</option>
                                @endforeach
                            </select>
                            <div class="clear_left"><span></span></div>
                        </div>
                        <div class="b_search_row">
                            <div class="b_search_text">Điểm địa danh</div>
                            <div class="select_b_search_diadanh">
                            <select class="select_b_search select_b_search_diadanh1" name="from">
                                <option value="">--Chọn địa danh--</option>
                            </select>
                            </div>
                        </div>
                        <div class="b_search_row">
                            <div class="b_search_text">
                                Nhãn hiệu
                            </div>
                             <select name="label" class="select_b_search">
                                <option value="">--Chọn hãng xe--</option>
                            </select>
                        </div>
                        <div class="b_search_row">
                            <div class="b_search_text">Điểm đến</div>
                            <div class="search_diemden_tinh">
                             <select class="select_b_search search_diemdenTinh1" name="to">
                                <option value="">--Chọn điểm đến--</option>
                                @foreach($tinhs as $tinh)
                                <option value="{{ $tinh->id }}">{{ $tinh->name }}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="b_search_row">
                            <div class="b_search_text">Điểm địa danh</div>
                            <div class="search_diadanhDen">
                            <select class="select_b_search search_diadanhDen1" name="from">
                                <option value="">--Chọn địa danh--</option>
                            </select>
                            </div>
                        </div>
                        <input type="submit" value="Tìm xe" class="input_b_search">
                        </div>
                    </form>
            </div>   end box_search_all -->
                    <div class="navbar navbar-inverse navbar-fixed-left">
                      <a class="navbar-brand" href="#">Danh mục xe</a>
                      <ul class="nav navbar-nav">
                       <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Thuê xe theo cỡ<span class="caret"></span></a>
                         <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Xe cỡ nhỏ</a></li>
                          <li><a href="#">Xe cỡ vừa</a></li>
                          <li><a href="#">Xe cỡ lớn</a></li>
                         </ul>
                       </li>
                       <li><a href="#">Thông tin khuyến mại</a></li>
                       <li><a href="#">Tin tức</a></li>
                      </ul>
                    </div>
                    <!-- <div class="box_promotion">
                        <h3 class="title_promotion">KHUYẾN MẠI</h3>
                        <div class="b_promotions_content">
                                <div class="b_promotions_row clearfix">
                                <a href=""><img alt="Thuê xe du lịch 45 chỗ đi Tây Thiên" class="img_promotion" src="{{ url('public/user/images/PS06L71KDA_HYUNDAI_UNIVERSE_LUXURY_BUS.jpg') }}"></a>
                                <div class="b_promotions_text">
                                    <div class="b_pro_text_1"><a href="">Thuê xe du lịch 45 chỗ đi Tây Thiên</a></div>
                                    <span class="price_source">3.500.000</span><br>                    
                                    <span class="f11">Giảm giá: </span><span class="span_price">15%</span>
                                </div>
                                </div>
                        </div>
                    </div> -->