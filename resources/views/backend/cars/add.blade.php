@extends('backend.master')
@section('content')
<h1 class="page-header">
        <script type="text/javascript">
            $(function () {
                $('#ngaysanxuat').datetimepicker();
            });
            $(function(){
                $('#ngaydangkiem').datetimepicker();
            });
        </script>
                            <small>Thêm xe</small>
                          </h1>
                          </div>
                          <!-- /.col-lg-12 -->
                          <div class="col-sm-8 col-md-8 col-xs-12" style="padding-bottom:120px">
                          @if(Session::has('flash_message'))
                              <div class="alert alert-{{ Session::get('flash_level')}}">{{ Session::get('flash_message') }}</div>
                          @endif
                        <form action="{{ url('cars/new') }}" method="POST"  enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <div class="row">
                              @if ($errors->has('hang_xe'))
                                  <span class="error">{{ $errors->first('hang_xe') }}</span>
                                @endif
                             <div class="col-md-2">Danh mục:</div>
                               
                               <div class="form-group col-md-5">
                                

                                <select class="form-control" id="sel1" name="hang_name">
                                  @foreach($brands as $brand)
                                  <option value="{{ $brand->hang_id }}">{{ $brand->hang_name }}</option>
                                  @endforeach
                                </select>
                              </div>  
                            </div>
                            <div class="row">
                             
                              <div class="col-md-2"> 
                                
                                Tên xe
                              </div>
                              <div class="form-group col-md-8">
                              @if ($errors->has('ten_xe'))
                                  <span class="col-md-12 error">{{ $errors->first('ten_xe') }}</span>
                              @endif
                                <input type="text" class="form-control" name="ten_xe" value="" placeholder="Nhập tên xe">
                              </div>
                            </div>
                            <div class="row">
                               
                              <div class="col-md-2">Giá mua xe</div>
                              <div class="form-group col-md-8">
                              @if ($errors->has('giamuaxe'))
                                  <span class="error">{{ $errors->first('giamuaxe') }}</span>
                                @endif
                                <input type="text" id="giamuaxe" class="form-control" name="giamuaxe" value="" placeholder="Nhập giá xe">
                              </div>
                            </div>
                            <div class="row">
                              
                              <div class="col-md-2">Hình xe</div>
                              <div class="form-group col-md-8">
                              @if ($errors->has('url_hinhxe'))
                                  <span class="error">{{ $errors->first('url_hinhxe') }}</span>
                                @endif
                                <input type="file" name="url_hinhxe" id="url_hinhxe">
                              </div>
                            </div>
                            <div class="row">
                            
                              <div class="col-md-2">Số đăng ký xe</div>
                              <div class="form-group col-md-8">
                              @if ($errors->has('sodangky_xe'))
                                  <span class="error">{{ $errors->first('sodangky_xe') }}</span>
                                @endif
                                <input type="text" class="form-control" value="" name="sodangky_xe" placeholder="Nhập số đăng ký">
                              </div>
                            </div>
                            <div class="row">
                            
                              <div class="col-md-2">Màu xe</div>
                              <div class="form-group col-md-8">
                              @if ($errors->has('color'))
                                  <span class="error">{{ $errors->first('color') }}</span>
                                @endif
                                <input type="text" class="form-control" name="color" value="" placeholder="Nhập màu xe">
                              </div>
                            </div>
                            <div class="row">
                            
                              <div class="col-md-2">Số chỗ xe</div>
                              <div class="form-group col-md-8">
                              @if ($errors->has('socho_xe'))
                                  <span class="error">{{ $errors->first('socho_xe') }}</span>
                                @endif
                                <input type="number" class="form-control" name="socho_xe" value="" placeholder="Nhập số chỗ xe">
                              </div>
                            </div>
                            <div class="row">
                            
                              <div class="col-md-2">Tài xế</div>
                              <div class="form-group col-md-8">
                              @if ($errors->has('taixe_xe'))
                                  <span class="error">{{ $errors->first('taixe_xe') }}</span>
                                @endif
                                 <select class="form-control" name="taixe_xe">
                                  
                              
                                  @foreach($taixe as $tai)
                                  <option value="{{ $tai->taixe_id }}">{{ $tai->tentaixe }}</option>
                                  @endforeach
                                 </select>
                              </div>
                            </div>
                            <div class="row">
                            
                              <div class="col-md-2">Ngày sản xuất</div>
                             <div class='input-group form-group date col-md-6' id='ngaysanxuat'>
                             @if ($errors->has('ngaysanxuat'))
                                  <span class="error">{{ $errors->first('ngaysanxuat') }}</span>
                                @endif
                                      <input name="ngaysanxuat" value="{{ old('ngaysanxuat')}}" type='text' class="form-control" />
                                      <span class="input-group-addon">
                                          <span class="glyphicon glyphicon-calendar"></span>
                                      </span>
                              </div>
                            </div>
                            <div class="row">
                            
                            <div class="col-md-2">Ngày đăng kiểm</div>
                           <div class='input-group form-group date col-md-6' id='ngaydangkiem'>
                           @if ($errors->has('ngaydangkiem'))
                                  <span class="error">{{ $errors->first('ngaydangkiem') }}</span>
                                @endif
                                      <input name="ngaydangkiem" value="{{ old('ngaydangkiem')}}" type='text' class="form-control" />
                                      <span class="input-group-addon">
                                          <span class="glyphicon glyphicon-calendar"></span>
                                      </span>
                            </div>
                            </div>
                            <button type="submit" class="btn btn-default">Thêm</button>
          
                        <form>
                    </div>
                </div>
@endsection