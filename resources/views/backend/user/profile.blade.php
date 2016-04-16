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
                                <label>Tên đầy đủ</label>
                                <input type="text" class="form-control" name="txtName" value="{{ $data->fullname }}" placeholder="Nhập họ tên" />
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" name="txtAddress" value="{{ $data->address_id }}" placeholder="Nhập địa chỉ" />
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input type="text" class="form-control" name="txtSoDienThoai" value="{{ $data->soDienThoai }}" placeholder="Nhập số điện thoại" />
                            </div>
                            <div class="form-group">
                                <label>Tên công ty:</label>
                                <input type="text" class="form-control" name="txtTenCongTy" value="{{ $data->tenCongTy }}" placeholder="Nhập tên công ty" />
                            </div>
                            <div class="form-group">
                                <label>Mã số thuế</label>
                                <input type="text" class="form-control" name="txtMaSoThue" value="{{ $data->maSoThue }}" placeholder="Nhập mã số thuế" />
                            </div>
                            <div class="radio">
		 						<label><input type="radio" value="0" name="customertype">Khách cá nhân</label>
								</div>
								<div class="radio">
		  						<label><input type="radio" value="1" name="customertype">Khách công ty</label>
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