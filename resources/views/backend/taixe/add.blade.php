@extends('backend.master')
@section('content')
<h1 class="page-header">
                            <small>Thêm xe</small>
                          </h1>
                          </div>
                          <!-- /.col-lg-12 -->
                          <div class="col-sm-8 col-md-8 col-xs-12" style="padding-bottom:120px">
                        <form action="{{ url('themtaixe') }}" method="POST" >
                            {!! csrf_field() !!}
                           	<div class="row">
                           		<div class="col-md-2">Tên tài xế</div>
                           		<div class="form-group col-md-8">
                               @if ($errors->has('tentaixe'))
                                  <span class="col-md-12 error">{{ $errors->first('tentaixe') }}</span>
                              @endif
                           			<input type="text" class="form-control" name="tentaixe" value="{{ old('tentaixe') }}" placeholder="Nhập tên lái xe">
                           		</div>
                           	</div>
                            <div class="row">
                              <div class="col-md-2">Bằng lái xe</div>
                              <div class="form-group col-md-4">
                               @if ($errors->has('banglaixe'))
                                  <span class="col-md-12 error">{{ $errors->first('banglaixe') }}</span>
                              @endif
                                <input type="text" class="form-control" name="banglaixe" value="{{ old('banglaixe') }}" placeholder="Nhập bằng lái xe">
                              </div>
                            </div>
                           	<div class="row">
                           		<div class="col-md-2">Sở thích</div>
                           		<div class="form-group col-md-8">
                               @if ($errors->has('sothich'))
                                  <span class="col-md-12 error">{{ $errors->first('sothich') }}</span>
                              @endif
                           			<textarea class="form-control" name="sothich" placeholder="Nhập sở thích">{{ old('sothich') }}</textarea>
                           		</div>
                           	</div>

                            <div class="row">
                              <div class="col-md-2">Số điện thoại</div>
                              <div class="form-group col-md-8">
                               @if ($errors->has('sodienthoai'))
                                  <span class="col-md-12 error">{{ $errors->first('sodienthoai') }}</span>
                              @endif
                                <input class="form-control" name="sodienthoai" placeholder="Nhập số điện thoại">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-2">Ngày sinh</div>
                              <div class="form-group col-md-8">
                               @if ($errors->has('ngaysinh'))
                                  <span class="col-md-12 error">{{ $errors->first('ngaysinh') }}</span>
                              @endif
                                <input name="ngaysinh" value="{{ old('ngaysinh') }}" class="form-control" data-provide="datepicker" placeholder="Nhập ngày sinh">
                              </div>
                            </div>
                            <button type="submit" class="btn btn-default">Thêm</button>
  
                        <form>
                    </div>
                </div>
@endsection