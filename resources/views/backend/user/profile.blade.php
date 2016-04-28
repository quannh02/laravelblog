@extends('backend.master')
@section('content')
<h1 class="page-header">User
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{!! $error !!}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(Session::has('flash_message'))
                            <div class="alert alert-{{ Session::get('flash_level')}}">{{ Session::get('flash_message') }}</div>
                        @endif
                        <form action="{{ url('profile', $data->id) }}" method="POST">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <div class="col-xs-5">
                                    <label>Tên đầy đủ</label>
                                    <input type="text" class="form-control" name="txtName" value="{{ $data->fullname }}" placeholder="Nhập họ tên" />
                                </div>
                                <div class="col-xs-3">
                                    <label>Số điện thoại</label>
                                    <input type="text" class="form-control" name="txtSoDienThoai" value="{{ $data->soDienThoai }}" placeholder="Nhập số điện thoại" />
                                </div>
                                <div class="col-xs-4">
                                    <label>Mã số thuế công ty</label>
                                    <input type="text" class="form-control" name="txtMaSoThue" value="{{ $data->maSoThue }}" placeholder="Nhập mã số thuế" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" name="txtAddress" value="{{ $data->address }}" placeholder="Nhập địa chỉ" />
                            </div>
                            <div class="form-group">
                                <label>Tên công ty:</label>
                                <input type="text" class="form-control" name="txtTenCongTy" value="{{ $data->tenCongTy }}" placeholder="Nhập tên công ty" />
                            </div>
                            <input type="hidden" id="radioValueForCheck" value="{{ $data->customer_type }}">
                            <div class="radio">
		 						<label><input id="khachCN" type="radio" value="0" name="customertype">Khách cá nhân</label>
								</div>
								<div class="radio">
		  						<label><input id="khachCT" type="radio" value="1" name="customertype">Khách công ty</label>
							</div>
                            <button type="submit" class="btn btn-default">Profile Update</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection