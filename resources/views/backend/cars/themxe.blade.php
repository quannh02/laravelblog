@extends('backend.master')
@section('content')
<h1 class="page-header">
                            <small>Thêm xe</small>
                          </h1>
                          </div>
                          <!-- /.col-lg-12 -->
                          <div class="col-sm-8 col-md-8 col-xs-12" style="padding-bottom:120px">
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
                        <form action="{{ url('list/car') }}" method="POST">
                            {!! csrf_field() !!}
                           	<div class="row">
                           		<div class="col-md-2">Hãng xe</div>
                           		<div class="form-group col-md-8">
                           			<input type="text" class="form-control" name="hang_xe" placeholder="Nhập hãng xe">
                           		</div>
                           	</div>
                           	<div class="row">
                           		<div class="col-md-2">Giá mua xe</div>
                           		<div class="form-group col-md-8">
                           			<input type="text" class="form-control" name="giamuaxe" placeholder="Nhập giá xe">
                           		</div>
                           	</div>
                           	<div class="row">
                           		<div class="col-md-2">Hình xe</div>
                           		<div class="form-group col-md-8">
                           			<input type="file" name="url_hinhxe" id="fileToUpload">
                           		</div>
                           	</div>
                           	<div class="row">
                           		<div class="col-md-2">Số đăng ký xe</div>
                           		<div class="form-group col-md-8">
                           			<input type="text" class="form-control" name="sodangky_xe" placeholder="Nhập số đăng ký">
                           		</div>
                           	</div>
                           	<div class="row">
                           		<div class="col-md-2">Màu xe</div>
                           		<div class="form-group col-md-8">
                           			<input type="text" class="form-control" name="color" placeholder="Nhập màu xe">
                           		</div>
                           	</div>
                           	<div class="row">
                           		<div class="col-md-2">Số chỗ xe</div>
                           		<div class="form-group col-md-8">
                           			<input type="number" class="form-control" name="socho_xe" placeholder="Nhập số chỗ xe">
                           		</div>
                           	</div>
                           	<div class="row">
                           		<div class="col-md-2">Tài xế</div>
                           		<div class="form-group col-md-8">
                           			<input type="text" class="form-control" name="taixe_xe" placeholder="Nhập tên tài xế">
                           		</div>
                           	</div>
                           	<div class="row">
                           		<div class="col-md-2">Ngày sản xuất</div>
                           		<div class="form-group col-md-8">
                           			<input name="ngaysanxuat" class="form-control" data-provide="datepicker" placeholder="Nhập ngày sản xuất">
                           		</div>
                           	</div>
                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
@endsection