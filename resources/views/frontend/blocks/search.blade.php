<div class="box_search_all clearfix">
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
            </div>  <!-- end box_search_all -->