@extends('backend.master')
@section('content')
<script type="text/javascript">
            $(function () {
                $('#ngaysanxuat2').datetimepicker();
            });
            $(function(){
                $('#ngaydangkiem2').datetimepicker();
            });
        </script>
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
                                <div class="col-md-2" for="sel1">Hãng xe:</div>
                                <div class="form-group col-md-5">
                                  <input type="hidden" name="hang_name" value="{{ $data->hang_id }}">
                                   <input type="text" name="lname" class="form-control" value="{{ App\Models\Brand::find($data->hang_id)->hang_name }}" disabled>
                                  <!-- <select class="form-control" name="hang_name">
                                    @foreach($brands as $brand)
                                  <option value="{{ $brand->hang_id }}">{{ $brand->hang_name }}</option>
                                    @endforeach
                                 </select> -->
                                </div>
                                </div>  
                           	</div>
                            <div class="row">
                              @if ($errors->has('ten_xe'))
                                  <span class="error">{{ $errors->first('ten_xe') }}</span>
                                @endif
                              <div class="col-md-2">Tên xe</div>
                              <div class="form-group col-md-4">
                                <input type="text" class="form-control" name="ten_xe" value="{{ $data->ten_xe }}" placeholder="Nhập tên xe">
                              </div>
                            </div>
                           	<div class="row">
                               @if ($errors->has('giamuaxe'))
                                  <span class="error">{{ $errors->first('giamuaxe') }}</span>
                                @endif
                           		<div class="col-md-2">Giá mua xe</div>
                           		<div class="form-group col-md-4">
                           			<input type="number" class="form-control" name="giamuaxe" value="{{ $data->giamuaxe }}" placeholder="Nhập giá xe">
                           		</div>
                           	</div>
                            <div class="row imagesize">
                              <div class="col-md-2">Hình xe cũ</div>
                              <div  class="form-group col-md-8">

                                  <img class="img img-responsive" style="width:300px; height:200px;"src="{!! url('public/user/images', $data->url_hinhxe)!!}" alt="">
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
                           		<div class="form-group col-md-5">
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
                           		<div class="form-group col-md-3">
                           			<input type="number" class="form-control" name="socho_xe" value="{{ $data->socho_xe }}" placeholder="Nhập số chỗ xe">
                           		</div>
                           	</div>
                           	<div class="row">
                            @if ($errors->has('taixe_xe'))
                                  <span class="error">{{ $errors->first('taixe_xe') }}</span>
                                @endif
                           		<div class="col-md-2">Tài xế</div>
                           		<div class="form-group col-md-6">
                           		   <select class="form-control" name="taixe_xe">
                                 @if(isset($taixehientai))
                                  <option value="{{ $taixehientai->taixe_id}}">{{ $taixehientai->tentaixe }}</option>
                                  @endif
                                  @if(isset($taixe))
                                  @foreach($taixe as $tai)
                                  <option value="{{ $tai->taixe_id }}">{{ $tai->tentaixe }}</option>
                                  @endforeach
                                  @endif
                                 </select>
                           		</div>
                           	</div>
                           	<div class="row">
                            @if ($errors->has('ngaysanxuat'))
                                  <span class="error">{{ $errors->first('ngaysanxuat') }}</span>
                                @endif
                                <p>Ngày sản xuất cũ: {{ date('d/m/Y', strtotime($data->ngaysanxuat)) }}</p>
                              <div class="col-md-2">Ngày sản xuất</div>
                             <div class='input-group form-group date col-md-6' id='ngaysanxuat2'>
                                      <input name="ngaysanxuat" value="{{ $data->ngaysanxuat }}" type='text' class="form-control" />
                                      <span class="input-group-addon">
                                          <span class="glyphicon glyphicon-calendar"></span>
                                      </span>
                              </div>
                            </div>
                            <div class="row">
                            @if ($errors->has('ngaydangkiem'))
                                  <span class="error">{{ $errors->first('ngaydangkiem') }}</span>
                                @endif
                                <p>Ngày đăng kiểm cũ: {{ date('d/m/Y', strtotime($data->ngaydangkiem)) }}</p>
                            <div class="col-md-2">Ngày đăng kiểm</div>
                           <div class='input-group form-group date col-md-6' id='ngaydangkiem2'>
                                      <input name="ngaydangkiem" value="" type='text' class="form-control" />
                                      <span class="input-group-addon">
                                          <span class="glyphicon glyphicon-calendar"></span>
                                      </span>
                            </div>
                            </div>
                            <div class="row">
                              <h1><strong>Giá tham khảo</strong></h1>
                            
                            <div class="col-md-2">Nội thành (100km/8h):</div>
                            <div class="form-group col-md-4">
                              <input type="number" name="gianoithanh" value="{{ $data->gianoithanh }}" class="form-control">
                            </div>
                            <div class="col-md-2">Đường dài (200km):</div>
                            <div class="form-group col-md-4">
                              <input type="number" name="giaduongdai" value="{{ $data->giaduongdai }}" class="form-control">
                            </div>
                            <div class="col-md-2">Sân bay (80km/3h):</div>
                            <div class="form-group col-md-4">
                              <input type="number" name="giasanbay" value="{{ $data->giasanbay }}" class="form-control">
                            </div>
                            <div class="col-md-2">Thuê tháng 2600km:</div>
                            <div class="form-group col-md-4">
                              <input type="number" name="giathuethang" value="{{ $data->giathuethang }}" class="form-control">
                            </div>
                            <div class="col-md-2">Ngoài giờ:</div>
                            <div class="form-group col-md-4">
                              <input type="number" name="giangoaigio" value="{{ $data->giangoaigio }}" class="form-control">
                            </div>
                            </div>
                            <button type="submit" class="btn btn-default">Sửa</button>
      
                        <form>
                    </div>
                </div>
@endsection