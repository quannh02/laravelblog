@extends('backend.master')
@section('content')
<h1 class="page-header">
                            <small>Thêm xe</small>
                          </h1>
                          </div>
                          <!-- /.col-lg-12 -->
                          <div class="col-sm-8 col-md-8 col-xs-12" style="padding-bottom:120px">
                          @if(Session::has('flash_message'))
                              <div class="alert alert-{{ Session::get('flash_level')}}">{{ Session::get('flash_message') }}</div>
                          @endif
                        <form action="{{ url('cars/update', $data->xe_id) }}" method="POST"  enctype="multipart/form-data">
                            {!! csrf_field() !!}
                           	<div class="row">
                              @if ($errors->has('hang_xe'))
                                  <span class="error">{{ $errors->first('hang_xe') }}</span>
                                @endif
                           	
                              <div class="form-group">
                                <label for="sel1">Hãng xe:</label>
                                <input type="text" class="form-control" name="hang_xe" value="{{ $data->hang_xe }}" placeholder="Nhập hãng xe">
                              </div>  
                           	</div>
                            <div class="row">
                              @if ($errors->has('ten_xe'))
                                  <span class="error">{{ $errors->first('ten_xe') }}</span>
                                @endif
                              <div class="col-md-2">Tên xe</div>
                              <div class="form-group col-md-8">
                                <input type="text" class="form-control" name="ten_xe" value="{{ $data->ten_xe }}" placeholder="Nhập tên xe">
                              </div>
                            </div>
                           	<div class="row">
                               @if ($errors->has('giamuaxe'))
                                  <span class="error">{{ $errors->first('giamuaxe') }}</span>
                                @endif
                           		<div class="col-md-2">Giá mua xe</div>
                           		<div class="form-group col-md-8">
                           			<input type="text" class="form-control" name="giamuaxe" value="{{ $data->giamuaxe }}" placeholder="Nhập giá xe">
                           		</div>
                           	</div>
                            <div class="row imagesize">
                              <div class="col-md-2">Hình xe cũ</div>
                              <div  class="form-group col-md-8">

                                  <img src="{!! url('public/user/images', $data->url_hinhxe)!!}" alt="">
                              </div>  
                            </div>
                           	<div class="row">
                              @if ($errors->has('url_hinhxe'))
                                  <span class="error">{{ $errors->first('url_hinhxe') }}</span>
                                @endif
                           		<div class="col-md-2">Hình xe</div>
                           		<div class="form-group col-md-8">
                           			<input type="file" name="url_hinhxe" id="url_hinhxe">
                           		</div>
                           	</div>
                           	<div class="row">
                            @if ($errors->has('sodangky_xe'))
                                  <span class="error">{{ $errors->first('sodangky_xe') }}</span>
                                @endif
                           		<div class="col-md-2">Số đăng ký xe</div>
                           		<div class="form-group col-md-8">
                           			<input type="text" class="form-control" value="{{ $data->sodangky_xe }}" name="sodangky_xe" placeholder="Nhập số đăng ký">
                           		</div>
                           	</div>
                           	<div class="row">
                            @if ($errors->has('color'))
                                  <span class="error">{{ $errors->first('color') }}</span>
                                @endif
                           		<div class="col-md-2">Màu xe</div>
                           		<div class="form-group col-md-8">
                           			<input type="text" class="form-control" name="color" value="{{ $data->color }}" placeholder="Nhập màu xe">
                           		</div>
                           	</div>
                           	<div class="row">
                            @if ($errors->has('socho_xe'))
                                  <span class="error">{{ $errors->first('socho_xe') }}</span>
                                @endif
                           		<div class="col-md-2">Số chỗ xe</div>
                           		<div class="form-group col-md-8">
                           			<input type="number" class="form-control" name="socho_xe" value="{{ $data->socho_xe }}" placeholder="Nhập số chỗ xe">
                           		</div>
                           	</div>
                           	<div class="row">
                            @if ($errors->has('taixe_xe'))
                                  <span class="error">{{ $errors->first('taixe_xe') }}</span>
                                @endif
                           		<div class="col-md-2">Tài xế</div>
                           		<div class="form-group col-md-8">
                           		   <select class="form-control" name="taixe_xe">
                                  @if(isset($taixehientai))
                                  <option value="{{ $taixehientai->taixe_id }}">{{ $taixehientai->tentaixe }}</option>
                                  @endif
                                 </select>
                           		</div>
                           	</div>
                           	<div class="row">
                            @if ($errors->has('ngaysanxuat'))
                                  <span class="error">{{ $errors->first('ngaysanxuat') }}</span>
                                @endif
                           		<div class="col-md-2">Ngày sản xuất</div>
                           		<div class="form-group col-md-8">
                           			<input name="ngaysanxuat" value="{{ $data->ngaysanxuat }}" class="form-control" data-provide="datepicker" placeholder="Nhập ngày sản xuất">
                           		</div>
                           	</div>
                            <div class="row">
                            @if ($errors->has('ngaydangkiem'))
                                  <span class="error">{{ $errors->first('ngaydangkiem') }}</span>
                                @endif
                            <div class="col-md-2">Ngày sản xuất</div>
                            <div class="form-group col-md-8">
                                <input name="ngaydangkiem" value="{{ $data->ngaydangkiem }}" class="form-control" data-provide="datepicker" placeholder="Nhập ngày đăng kiểm">
                              </div>
                            </div>
                            <button type="submit" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-reset btn-default">Reset</button>
                        <form>
                    </div>
                </div>
@endsection