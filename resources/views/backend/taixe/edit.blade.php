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
                        <form action="{{ url('suataixe', $tai->taixe_id) }}" method="POST"  enctype="multipart/form-data">
                            {!! csrf_field() !!}
                           	<div class="row">
                              @if ($errors->has('tentaixe'))
                                  <span class="error">{{ $errors->first('tentaixe') }}</span>
                                @endif
                           	
                              <div class="form-group">
                                <label for="sel1">Tên lái xe</label>
                                <input type="text" class="form-control" name="tentaixe" value="{{ $tai->tentaixe }}" placeholder="Nhập hãng xe">
                              </div>  
                           	</div>
                            <div class="row">
                              @if ($errors->has('banglaixe'))
                                  <span class="error">{{ $errors->first('banglaixe') }}</span>
                                @endif
                              <div class="col-md-2">Bằng lái xe</div>
                              <div class="form-group col-md-8">
                                <input type="text" class="form-control" name="banglaixe" value="{{ $tai->banglaixe }}" placeholder="Nhập tên xe">
                              </div>
                            </div>
                           	<div class="row">
                               @if ($errors->has('sothich'))
                                  <span class="error">{{ $errors->first('sothich') }}</span>
                                @endif
                           		<div class="col-md-2">Sở thích</div>
                           		<div class="form-group col-md-8">
                           			<input type="text" class="form-control" name="sothich" value="{{ $tai->sothich }}" placeholder="Nhập giá xe">
                           		</div>
                           	</div>
                            
                           
                           
                           
            
                           	<div class="row">
                            @if ($errors->has('ngaysinh'))
                                  <span class="error">{{ $errors->first('ngaysinh') }}</span>
                                @endif
                           		<div class="col-md-2">Ngày sinh</div>
                           		<div class="form-group col-md-8">
                           			<input name="ngaysinh" value="{{ $tai->ngaysinh }}" class="form-control" data-provide="datepicker" placeholder="Nhập ngày sản xuất">
                           		</div>
                           	</div>
                            
                            <button type="submit" class="btn btn-default">Sửa</button>
                            
                        <form>
                    </div>
                </div>
@endsection