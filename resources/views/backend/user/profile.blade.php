@extends('backend.master')
@section('content')
<h1 class="page-header">User
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-md-12" style="padding-bottom:120px">
                        
                        <form action="{{ url('profile', $data->nguoidung_id) }}" method="POST">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <div class="col-md-4">
                                    <label>Tên đầy đủ</label>
                                    <input type="text" class="form-control" name="txtName" value="{{ $data->tendaydu }}" placeholder="Nhập họ tên" />
                                </div>
                                <div class="col-md-4">

                                    <label>Số điện thoại</label>
                                    @if ($errors->has('txtSoDienThoai'))
                                  <span class="error">{{ $errors->first('txtSoDienThoai') }}</span>
                                    @endif
                                    <input type="text" class="form-control" name="txtSoDienThoai" value="{{ $data->sodienthoai }}" placeholder="Nhập số điện thoại" />
                                </div>
                                <div class="col-md-4">
                                    <label>Mã số thuế công ty</label>
                                    <input type="text" class="form-control" name="txtMaSoThue" value="{{ $data->masothue }}" placeholder="Nhập mã số thuế" />
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label>Address</label>
                                <textarea type="text" class="form-control" name="txtAddress" placeholder="Nhập địa chỉ" >{{ $data->diachi }}</textarea> 
                            </div>
                            <div class="form-group col-md-12">
                                <label>Tên công ty:</label>
                                <textarea type="text" class="form-control" name="txtTenCongTy" placeholder="Nhập tên công ty" >{{ $data->tencongty }}</textarea>
                            </div>
                           <!--  <input type="hidden" id="radioValueForCheck" value="{{ $data->customer_type }}">
                            <div class="radio">
		 						<label><input id="khachCN" type="radio" value="0" name="customertype">Khách cá nhân</label>
								</div>
								<div class="radio">
		  						<label><input id="khachCT" type="radio" value="1" name="customertype">Khách công ty</label>
							</div> -->
                            <button type="submit" class="btn btn-success">Profile Update</button>
                                <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection